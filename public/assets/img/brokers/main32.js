
window.jQuery(function ($) {
 

  
    /** Multiple range input **/
    $('.slider-range').each(function () {
        var
            $from = $(this).parent().find('input:first'),
            $to = $(this).parent().find('input:last'),
            $labelFrom = $('label[for=' + $from.attr('id') + ']'),
            $labelTo = $('label[for=' + $to.attr('id') + ']'),
            template = $labelFrom.data('template');
        $(this).slider({
            range: true,
            min: parseInt($from.attr('min'), 10),
            step: parseInt($from.attr('step'), 10),
            max: parseInt($to.attr('max'), 10),
            values: [parseInt($from.val(), 10), parseInt($to.val(), 10)],
            change: function (event, ui) {
                var
                    oldFromVal = $from.val(),
                    oldToVal = $to.val(),
                    newFromVal = ui.values[0],
                    newToVal = ui.values[1];
                $from.val(newFromVal);
                if (newFromVal != oldFromVal) {
                    $to.trigger('change');
                }
                $to.val(newToVal);
                if (newToVal != oldToVal) {
                    $to.trigger('change');
                }
            },
            slide: function (event, ui) {
                var
                    newFromVal = ui.values[0],
                    newToVal = ui.values[1];
                $labelFrom.text(template.replace('{VALUE}', newFromVal));
                $labelTo.text(template.replace('{VALUE}', newToVal));
            }
        });
    });

    /** Review "show more" button controller **/
    $(window)
        .resize(function () {
            reviewsShowMoreButtonController();
        })
        .trigger('resize');

    /** "Show / hide more" button click **/
    $('.more-block').on('click', function () {
        $(this).parent().toggleClass('collapsed');
    });

   

 
  
  
    

    /** Filter & infinity scroll **/
    (function () {
        var
            filterSet = false,
            slowdown = 1,
            $loader = $('.infinity-scrolling'),
            $form = $('.filter > form'),
            $window = $(window),
            $endListPlaceholder = $('.end-list-placeholder'),
            $h1 = $('body > section > h1'),
            $content = $('body > section > div.simple[itemprop=description]:not(.js-after)'),
            $contentAfter = $('body > section > div.simple.js-after[itemprop=description]'),
            $canonical = $('head > [rel="canonical"]'),
            $title = $('title'),
            $headerSearchInput = $('header .search input'),
            $filterSearchInput = $form.find('[name=name]'),
            $searchQueryController = $('.category-search-query'),
            delta = 100, // расстояние до лодера для загрузки
            $button = $('.scroll-to-bottom'),
            $roots = $('html, body'),
            $brokerList = $('.brokers.list'),
            $filter = $('.filter>form'),
            ButtonOnWindowScroll = function () {
                if (!$brokerList.length) {
                    return;
                }
                $button.toggleClass('active',
                    $brokerList.offset().top - $window.scrollTop() > 50 &&
                    !$filter.hasClass('collapsed') &&
                    filterSet
                );
            },
            ButtonScrollToBottom = function () {
                $roots.animate({
                    scrollTop: $brokerList.offset().top
                }, 300);
                $button.removeClass('active');
            },
            insertRows = function ($rows, limit) {
                if (!$rows.length) {
                    return;
                }
                $rows
                    .addClass('no-transition')
                    .insertBefore($endListPlaceholder)
                    .each(function () {
                        $(this).css({
                            height: $(this).height() + 'px'
                        });
                    });
                $rows.addClass('hidden');
                setTimeout(function () {
                    $rows.removeClass('no-transition hidden');
                }, 10);
                setTimeout(function () {
                    $rows.css({height: 'auto'});
                    updateLoader(limit >= $rows.length);
                    onWindowScroll();
                }, 300 * slowdown);
            },
            removingRowsOnProgress = false,
            afterRowsRemoveCallback = null,
            removeRows = function () {
                var
                    $oldRows = $endListPlaceholder.prevAll();
                $oldRows
                    .each(function () {
                        $(this).css({
                            height: $(this).height() + 'px'
                        });
                    });
                setTimeout(function () {
                    $oldRows
                        .addClass('hidden');
                }, 10);
                if ($oldRows.length) {
                    removingRowsOnProgress = true;
                    setTimeout(function () {
                        $oldRows
                            .remove();
                        removingRowsOnProgress = false;
                        if (afterRowsRemoveCallback) {
                            afterRowsRemoveCallback();
                            afterRowsRemoveCallback = null;
                        }
                    }, 300 * slowdown);
                }
            },
            updateRows = function ($rows, limit) {
                removeRows(function () {
                    insertRows($rows, limit);
                });
            },
            updateH1 = function (text) {
                $h1.text(text);
                $title.text(text)
            },
            updateContent = function (text) {
                $content.html(text);
            },
            updateContentAfter = function (text) {
                $contentAfter.html(text);
            },
            updateCanonical = function (text) {
                $canonical.attr('href', text);
            },
            updateLoader = function (enable) {
                $loader.data('enable', enable);
                if (enable) {
                    $loader.fadeIn(300 * slowdown);
                } else {
                    $loader.fadeOut(300 * slowdown);
                }
            },
            updateHistory = function (data, text, url) {
                history.replaceState(data, text, url);
            },
            scrollAjaxCallback = function (response) {
                var $rows = $(response.rows).filter('.item');
                if ($rows.length) {
                    updateLoader(true);
                    insertRows($rows, response.limit);
                } else {
                    updateLoader(false);
                }
            },
            filterAjaxCallback = function (response, data, url) {
                filterSet = true;
                ButtonOnWindowScroll();
                var $rows = $(response.rows).filter('.item');
                if (removingRowsOnProgress) {
                    afterRowsRemoveCallback = function () {
                        insertRows($rows, response.limit);
                    }
                } else {
                    insertRows($rows, response.limit);
                }
                updateH1(response.h1);
                updateContent(response.content);
                updateContentAfter(response.content_after);
                updateCanonical(response.canonical);
                updateHistory(response.h1, data, response.canonical);
            },
            getLimitFrom = function () {
                return $('.end-list-placeholder').index();
            },
            onError = function () {
                // #TODO;
                // alert('A connection error has occurred.');
            },
            loadData = function (limitFrom, callback) {
                $loader.data('enable', false);
                if (limitFrom === false) {
                    $loader.fadeOut(300 * slowdown);
                }
                var
                    action = location.pathname,
                    method = $form.attr('method'),
                    data = $form.serialize() + (limitFrom ? '&rowsFrom=' + limitFrom : '');
                $endListPlaceholder.addClass('pending');
                $.ajax({
                    url: action,
                    method: method,
                    data: 'ajax&' + data,
                    dataType: 'json',
                    success: function (response) {
                        $endListPlaceholder.removeClass('pending');
                        callback(response, data, action + '?' + data);
                    },
                    error: function (response, error) {
                        $endListPlaceholder.removeClass('pending');
                        updateLoader(false);
                        if (response.status !== 404) {
                            onError.call(arguments);
                        } else {
                            callback(response.responseJSON, data, action + '?' + data);
                        }
                    }
                })
            },
            onWindowScroll = function () {
                if ($loader.data('enable') === false || $loader.length === 0) {
                    return;
                }
                if ($loader.offset().top - $window.scrollTop() - window.innerHeight < delta) {
                    loadData(getLimitFrom(), scrollAjaxCallback);
                }
            },
            onObserve = function () {
                if ($loader.data('enable') === false || $loader.length === 0) {
                    return;
                }
                loadData(getLimitFrom(), scrollAjaxCallback);
            },
            resetSearchQuery = function () {
                $headerSearchInput
                    .val('');
                $filterSearchInput
                    .val('');
                $searchQueryController
                    .remove();
            };
        $form
            .on('change', 'input', function () {
                resetSearchQuery();
                removeRows();
                loadData(false, filterAjaxCallback);
            });
        $searchQueryController
            .find('.field-button')
            .on('click', function () {
                resetSearchQuery();
                removeRows();
                loadData(false, filterAjaxCallback);
            });

        var isIE = /MSIE|Trident/.test(window.navigator.userAgent);

        var setOldAutoLoad = function () {
            $window
                .on('scroll resize', function (e) {
                    onWindowScroll();
                });
            setTimeout(function () {
                onWindowScroll();
            }, 300);
        }

        if (isIE) {
            setOldAutoLoad()
        } else {
            try {
                var observer = new IntersectionObserver(onObserve)
                observer.observe($endListPlaceholder.get(0))
            } catch (e) {
                console.log(e)
                setOldAutoLoad()
            }
        }

        $window
            .on('scroll', function (e) {
                ButtonOnWindowScroll(e);
            })
            .trigger('scroll');
        $button
            .click(function (e) {
                e.preventDefault();
                ButtonScrollToBottom();
            });
    })();

    
    (function ($forms) {
        var
            showResponce = function (messages, success) {
                $(this)
                    .children('.notice')
                    .removeClass(success ? 'error' : 'success')
                    .addClass(!success ? 'error' : 'success')
                    .html(messages.join('<br>'));
                if (success) {
                    $(this).children(':not(.notice)').remove();
                }

            },
            sendRequest = function (event) {
                var
                    form = this,
                    $form = $(form);
                $.ajax({
                    url: $form.attr('url'),
                    type: $form.attr('method'),
                    data: $form.serialize(),
                    dataType: 'json',
                    success: function (data) {
                        if (data.success) {
                            showResponce.apply(form, [[data.message], true]);
                        } else {
                            showResponce.apply(form, [data.errors, false]);
                        }
                    },
                    error: function () {
                        showResponce.apply(form, [['Service is temporarily unavailable'], false]);
                    }
                })
            };
        $forms.on('submit', function (event) {
            event.preventDefault();
            sendRequest.apply(this, [event]);
        })
    })($('form.user-input'))
});

var reviewsShowMoreButtonController = function () {
    $('.reviews .list .item .right-side').each(function () {
        var collapsed = $(this).hasClass('collapsed'),
            paragraph = $(this).children('.right-description'),
            moreBlock = $(this).children('.more-block'),
            height,
            maxHeight;

        $(this).addClass('collapsed');
        maxHeight = parseInt(paragraph.css('max-height'), 10);
        $(this).removeClass('collapsed');
        height = paragraph.height();
        moreBlock.toggle((height - maxHeight) / 16 >= 1);
        if (collapsed) {
            $(this).addClass('collapsed');
        }
    });
};


(function (factory) {
    
}(function ($) {

}
));

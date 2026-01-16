@include('template.footer')
<!--==================================================================================================================================================================================================================-->

<a href="#" class="chat-support"><span><i class="bi-chat-dots-fill"></i></span><label for="">Support</label></a>

<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<!--<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
<script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('assets/js/cookie_consent.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
<script src="{{ asset('assets/js/alert.js') }}"></script>
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->


<script>
    $('.tabs').on('click', function() {
        $('.tabs').removeClass('active');
        $(this).addClass('active');
    });
</script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
<script type="text/javascript">
    $('[data-trigger]').click(function() {
        const divId = $(this).attr('data-trigger');
        $("#" + divId).addClass("show");
        $(".screen-darken").addClass("active");
        $("body").addClass("offcanvas-active");
    });

    $('.btn-close').click(function() {
        $(".mobile-offcanvas").removeClass("show");
        $(".screen-darken").removeClass("active");
        $("body").removeClass("offcanvas-active");
    });




    // 	function darken_screen(yesno){
    // 		if( yesno == true ){
    // 			document.querySelector('.screen-darken').classList.add('active');
    // 		}
    // 		else if(yesno == false){
    // 			document.querySelector('.screen-darken').classList.remove('active');
    // 		}
    // 	}

    // 	function close_offcanvas(){
    // 		darken_screen(false);
    // 		document.querySelector('.mobile-offcanvas.show').classList.remove('show');
    // 		document.body.classList.remove('offcanvas-active');
    // 	}

    // 	function close_offcanvas(){
    // 		darken_screen(false);
    // 		document.querySelector('.mobile-offcanvas.show').classList.remove('show');
    // 		document.body.classList.remove('offcanvas-active');
    // 	}
    // 	function show_offcanvas(offcanvas_id){
    // 	   // alert();
    // 		darken_screen(true);
    // 		document.getElementById(offcanvas_id).classList.add('show');
    // 		document.body.classList.add('offcanvas-active');
    // 	}

    // 	document.addEventListener("DOMContentLoaded", function(){
    // 		document.querySelectorAll('[data-trigger]').forEach(function(everyelement){

    // 			let offcanvas_id = everyelement.getAttribute('data-trigger');

    // 			everyelement.addEventListener('click', function (e) {
    // 				e.preventDefault();
    // 	        	show_offcanvas(offcanvas_id);

    // 			});
    // 		});

    // 		document.querySelectorAll('.btn-close').forEach(function(everybutton){

    // 			everybutton.addEventListener('click', function (e) {
    // 				e.preventDefault();
    // 	        	close_offcanvas();
    // 	  		});
    // 		});

    // 		document.querySelector('.screen-darken').addEventListener('click', function(event){
    // 			close_offcanvas();
    // 		});

    //     });
    //	DOMContentLoaded  end
</script>
<script>
    $(window).on('load', function() {
        $('#imp_message_Modal').modal('show');
    });

    $(document).ready(function() {
        $('#set_country').click(function() {
            var country_code = $('#country_code').val();
            $.ajax({
                type: "GET",
                url: '{{ url(app()->getLocale() . '/set_country') }}',
                data: {
                    'country': country_code
                },
                success: function(data) {
                    setTimeout(function() {
                        window.location.href = '{{ url()->current() }}';
                    });
                }
            });
        });


    });
</script>
<script>
    function showhideBal(id) {
        let divid = id;
        if (divid === "showbalence") {
            $("#hidebalence").show();
            $("#showbalence").hide();
            $('.asset-balence').html("*******");
            $('.asset-profit').html("******");
            $('.asset-sbbalence').html("******");
            $('.asset-sbprofit').html("*******");
        }
        if (divid === "hidebalence") {
            $("#showbalence").show();
            $("#hidebalence").hide();
            $('.asset-balence').html("demo");
            $('.asset-profit').html("demo");
            $('.asset-sbbalence').html("demo");
            $('.asset-sbprofit').html("demo");

        }

    }

    $(".wm-custom-modal-close").click(function() {
        // alert();
        $(this).parent().parent().parent().parent().addClass("hide").removeClass("custom-modal-bck-bg")

        //$(this).closest('.wm-custom-modal-body').addClass('demo');
    });

    $(".m-close").click(function() {
        // alert();
        $(this).parent().parent().parent().parent().addClass("hide").removeClass("custom-modal-bck-bg")

        //$(this).closest('.wm-custom-modal-body').addClass('demo');
    });


    // function changeSrc2(id){
    //         const li = id;
    //         // alert(li);
    //             $("#"+li).parent().parent().siblings().children().children('.wm-dropdown-optn-item-img').attr('src', $("#"+li+' '+ ".wm-dropdown-optn-item-img").attr('src')) ;
    //             $("#"+li).parent().parent().siblings().children().children('.wm-dropdown-optn-item-img2').attr('src', $("#"+li+' '+ ".wm-dropdown-optn-item-img-2").attr('src')) ;
    //             $("#"+li).parent().parent().siblings().children().children('.wm-dropdown-optn-item-txt').html($("#"+li+' '+ ".wm-dropdown-optn-item-txt").html()) ;
    //             $("#"+li).children('.wm-dropdown-optn-item-inner').addClass('selected');
    //             $("#"+li).siblings('.wm-dropdown-optn-item ').children('.wm-dropdown-optn-item-inner').removeClass('selected');
    //             $(".wm-dropdown-div").hide();
    // };

    //------------------------------------------- change src function ---------------------------------------------
    $('.wm-dropdown-list .wm-dropdown-optn-item').click(function() {
        var inrtxt = $(this).children().children().children('.wm-dropdown-optn-item-txt').html();
        var inrImg1 = $(this).children().children().children('.wm-dropdown-optn-item-img').attr("src");
        var inrImg2 = $(this).children().children().children('.wm-dropdown-optn-item-img-2').attr("src");
        var inrSymbol = $(this).children().children().children('.wm-dropdown-optn-item-symbol').html();
        $(this).parent().parent().siblings().children().children('.wm-dropdown-optn-item-txt').html(inrtxt);
        $(this).parent().parent().siblings().children().children('.wm-dropdown-optn-item-symbol').html(
            inrSymbol);
        $(this).parent().parent().siblings().children().children('.wm-dropdown-optn-item-img').attr('src',
            inrImg1);
        $(this).parent().parent().siblings().children().children('.wm-dropdown-optn-item-img-2').attr('src',
            inrImg2);
        $(this).children('.wm-dropdown-optn-item-inner').addClass('selected');
        $(this).siblings('.wm-dropdown-optn-item ').children('.wm-dropdown-optn-item-inner').removeClass(
            'selected');
        $(this).parent().parent(".wm-dropdown-div").hide();
    })

    function changeSrc2(id) {

    }


    $(document).ready(function() {
        var firstValue = $('.curreny-1 .wm-dropdown-optn-item-txt').text();
        $('.curreny-2').children('.wm-dropdown-optn-item').each(function() {
            var secondValue = $(this).children('.wm-dropdown-optn-item-inner').children(
                '.wm-dropdown-optn-item-div').children('.wm-dropdown-optn-item-txt');
            secondValue.text();
            if (firstValue === secondValue.text()) {
                // alert(firstValue + ":" + secondValue.text())
                secondValue.parent().parent().addClass('selected');
            }
        });


    });


    //------------------------------------------- change src function ---------------------------------------------

    $(function() {
        $(".wm-dropdown-search-input").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(this).parent('.wm-dropdown-srch-div').parent().siblings('.wm-dropdown-list').children(
                '.wm-dropdown-optn-item').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    $('.wm-dropdown-search-cross-icn').on('click', function(e) {
        $('.wm-dropdown-search-input').val('');
        $('.wm-dropdown-div ul li').show();
        return false;
    });
</script>
<script>
    $(document).click(function() {
        // alert();
        $(".wm-dropdown-div").hide();
    });
    $(".wm-dropdown-div").click(function(e) {
        e.stopPropagation();
    });


    $(function() {


        $('.coin-swap-from').click(function(e) {
            //   alert();
            $(this).siblings('.wm-dropdown-div').slideToggle(400);
            $('.lf-select_coin-to .wm-dropdown-div').not($(this).siblings('.wm-dropdown-div')).hide();
            e.preventDefault();
            e.stopPropagation();
        });
    });

    $('.modal-currency').click(function() {
        var txt = $(this).attr('id');
        //alert(txt);
        if (txt === "select-lang-modal") {
            $("#currLangModal #pills-langNreg-tab").addClass('active');
            $("#currLangModal #pills-langNreg").addClass('show active');
            $("#currLangModal #pills-currency-tab").removeClass('active');
            $("#currLangModal #pills-currency").removeClass('show active');
        }
        if (txt === "select-currency-modal") {
            $("#currLangModal #pills-currency-tab").addClass('active');
            $("#currLangModal #pills-currency").addClass('show active');
            $("#currLangModal #pills-langNreg-tab").removeClass('active');
            $("#currLangModal #pills-langNreg").removeClass('show active');
        }
    })

    $('.tabs li').click(function() {

        var position = $(this).position();
        var corresponding = $(this).data("id");

        // scroll to clicked tab with a little gap left to show previous tabs
        scroll = $('.tabs').scrollLeft();
        $('.tabs').animate({
            'scrollLeft': scroll + position.left - 30
        }, 200);



        // show content of corresponding tab
        $('div.' + corresponding).toggle();

    });


    /* Converts the .cloned table to DIVs */
    //  $('.tbl-to-div').clone().appendTo('#tbl-append-here').addClass('cloned');

    // $('.tbl-to-div.cloned').replaceWith(

    //   $('table').html()
    //   .replace(/<thead/gi, '<div class="d-none"')
    //   .replace(/<\/thead/gi, '<\/div')
    //   .replace(/<tbody/gi, '<div class="table"')
    //   .replace(/<tr/gi, '<div class="row append-div-row"')
    //   .replace(/<\/tr>/gi, '</div>')
    //   .replace(/<td/gi, '<div class="col-lg-3 col-md-4 col-sm-6"')
    //   .replace(/<\/td>/gi, '</div>')
    //   .replace(/<\/tbody/gi, '<\/div')
    // );



    $(".expand-row").click(function() {
        $(this).closest('.append-div-row').siblings().removeClass('open-row');
        $(this).closest('.append-div-row').toggleClass('open-row', 1000, "easeOutSine");

    });
</script>
<script>
    function webnotificationactivity(id) {
        //alert(id);
        var notificationactivity = id;
        $.ajax({
            type: 'POST',
            url: '{{ route('getNotificationActivity') }}',
            data: {
                '_token': "{{ csrf_token() }}",
                'notificationactivity': notificationactivity,
            },
            success: function(data) {

                var container = $('#count_allnotification');
                container.empty();
                var container1 = $('.notification_count');
                var html = '0';
                container.html(html);
                container1.html(html);
                var container2 = $('.latestNotification');
                container2.empty();
                var new_container = $('.no_new_notification');
                var html1 = '<div class="no-notification mb-3 py-3 text-center">';
                html1 += '<span class="fs-14 d-block mb-2 text-muted fs-normal">';
                html1 += '<i class="bi bi-bell-fill"></i>';
                html1 += '</span>';
                html1 += '<span class="d-block text-muted fs-14">No new notification</span>';
                html1 += '</div>';

                new_container.html(html1);

            },
            error: function(xhr, status, error) {
                var erroJson = JSON.parse(xhr.responseText);
                triggerAlert(erroJson.success, 'error');
            }
        });
    }

    $('[data-target-modal]').click(function() {
        const divId = $(this).attr('data-target-modal');
        $("#" + divId).children().addClass('custom-modal-bck-bg').removeClass('hide');

    });
</script>
@auth
    <script>
        // function to get latest notifications
        function getLatestNotifications() {
            var userId = "{{ Auth::user()->id }}";
            $.ajax({
                type: 'POST',
                url: '{{ route('getLatestNotifiation') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'userId': userId,
                },
                success: function(data) {
                    if (data.notificationCount > 0) {
                        var web_container = $('#latestNotification_web');
                        var mob_container = $('#latestNotification_mob');
                        web_container.empty();
                        mob_container.empty();
                        $.each(data.nofification, function(key, val) {
                            web_container.empty();
                            mob_container.empty();
                            //console.log(val.data);
                            var notificationData = JSON.parse(val.data);
                            var html = '<a class="dropdown-item no-hover" href="javascript:void(0)">';
                            html += '<div class="d-flex align-items-center" >';
                            html +=
                                '<img src="{{ asset('img/msg-box.png') }}" class="header-icons" alt="Responsible Trading" />';
                            html += '<div class="d-block">';
                            html += '<span class="' + (val.read_at ? 'notification-read-inner' : '') +
                                '"> ' + notificationData.order_title + '</span>';
                            html += '<p class="mb-0 ' + (val.read_at ? 'notification-read-inner' : '') +
                                '"> ' + notificationData.created_at.substr(0, 10) + '</p>';
                            html += '</div>';
                            html += '</div>';
                            html += '</a>';
                            web_container.append(html);
                            mob_container.append(html);
                        });
                        $('#count_allnotification').html(data.notificationCount);
                        $('#countNotification').html(data.notificationCount);
                        $('#notificaion_count_all').html(data.notificationCount);
                    }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);
                    // triggerAlert(erroJson.error, 'error');
                }
            });
        }

        // function to get notifications count
        function getNotificationCount() {

            $.get('{{ route('count-notification') }}', function(response) {
                if (response.CountNotification > 0) {

                    if (response.CountNotification < 100) {
                        $('.notification_count').text(response.CountNotification);
                    } else {
                        $('.notification_count').text('99+');
                    }


                }
            });
        }
        setInterval(getNotificationCount, 5000);
    </script>

@endauth

<script>
    $('#getLatestNotificationsBtn').hover(function() {
        getLatestNotifications();
    });



    $('.menu-item .mob-accordian-footer').click(function() {
        $(this).parent().addClass('open');
        $(this).siblings('.submenu').slideToggle("fast");
        $(this).parent().siblings().removeClass('open');
        $(this).parent().siblings().children('.submenu').hide();
    });



    $('.sidebar-aopen-arrow').click(function() {
        $("#sidebar").toggleClass('animate-top');

    });
</script>
<script>
    var remainingTime = 1 * 900;

    function update(percent) {
        var deg;
        if (percent < (remainingTime / 2)) {
            deg = 90 + (360 * percent / remainingTime);

        } else if (percent >= (remainingTime / 2)) {
            deg = -90 + (360 * percent / remainingTime);

        }
    }

    $(document).ready(function() {

        var orderId = '<?php echo Session::get('orderid'); ?>';

        offtimer = setInterval(function() {
            //console.log(orderId);
            var count = parseInt(localStorage.getItem('timerValue'));
            if (count > 0) {

                count--;
                var minutes = Math.floor(count / 60);
                var seconds = count % 60;
                if (count >= 0) {

                    update(count);
                }
                localStorage.setItem('timerValue', count);

                var getcount = parseInt(localStorage.getItem('timerValue'));
                if (getcount === 0) {
                    localStorage.setItem('timerValue', 0);
                    clearInterval(offtimer);
                    $('.timer-div-section').html('');
                    $.get('{{ route('cancel-order', ['id' => ':id']) }}'.replace(':id', orderId),
                        function(response) {
                            if (response.success) {
                                triggerAlert('Order cancelled successfully!', 'error');
                                $("#expressOrderNotifyPopup-btn-close").click();
                            }
                        });

                }
            } else {
                localStorage.setItem('timerValue', 0);
                clearInterval(offtimer);

            }
        }, 1000);


    });
</script>

<script>
    $('#expressOrderNotifyPopup #view_order').click(function() {
        // alert();
        var orderId = $('#expressOrderNotifyPopup #view_order').attr('orderSerialID');
        // alert();
        //console.log(orderId);
        if ($.isNumeric(orderId)) {
            //alert();
            $.ajax({
                type: 'POST',
                url: '{{ url('/expressOrderConfirmation') }}',
                data: {
                    '_token': "{{ csrf_token() }}",

                    'orderId': orderId
                },
                success: function(data) {

                    console.log(data);
                    location.href =
                        '{{ url(app()->getLocale() . '/user/express-confirmed-order-seller-info') }}';


                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);
                    //console.log(erroJson);
                    // triggerAlert('something went wrong!', 'error');
                }

            });
        }
    });
</script>
<script>
    function limitedsell(id) {
        triggerAlert("User is offline, so you can't Sell", "error");
    }

    function limited(id) {
        triggerAlert("User is offline, so you can't buy", "error");
    }
</script>

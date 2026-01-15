

 @include('template.footer')
 <!--==================================================================================================================================================================================================================-->
<div class="main-sidebar" style="display:none">
   <div class="opensidebar">
      <div class="sidebar-header">
         <div class="col"><a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{ asset('assets/img/wealthmark-logo.svg') }}" alt="" class="wealthmark-logo">
            </a>
         </div>
         <div class="col text-right"> <i class="close-sidebar bi bi-x"></i></div>
      </div>
      <div class="sidebar-body">


      </div>
       <div class="sidebar-footer">
         <ul class="social-midia-icon">
            <li>
               <a href="javascript:void(0)"> <i class="bi bi-facebook"></i> </a>
               <a href="javascript:void(0)"> <i class="bi bi-facebook"></i> </a>
            </li>
            <li>
               <a href="javascript:void(0)"> <i class="bi bi-twitter"></i> </a>
               <a href="javascript:void(0)"> <i class="bi bi-twitter"></i> </a>
            </li>
            <li>
               <a href="javascript:void(0)"> <i class="bi bi-youtube"></i> </a>
               <a href="javascript:void(0)"> <i class="bi bi-youtube"></i> </a>
            </li>
         </ul>
      </div>
   </div>
</div>
<a href="#" class="chat-support"><span><i class="bi-chat-dots-fill"></i></span><label for="">Support</label></a>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="{{ asset('assets/js/cookie_consent.js') }}"></script>


<script>
      $('.tabs').on('click', function(){
      $('.tabs').removeClass('active');
      $(this).addClass('active');
    });
  </script>
<script>
    // $(document).ready(function(){
    //     $("#customizeProfile").modal('show');
    //     $("#securityVerification").modal('show');
    // });
</script>
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
<script type="text/javascript">

	function darken_screen(yesno){
		if( yesno == true ){
			document.querySelector('.screen-darken').classList.add('active');
		}
		else if(yesno == false){
			document.querySelector('.screen-darken').classList.remove('active');
		}
	}

	function close_offcanvas(){
		darken_screen(false);
		document.querySelector('.mobile-offcanvas.show').classList.remove('show');
		document.body.classList.remove('offcanvas-active');
	}

	function show_offcanvas(offcanvas_id){
		darken_screen(true);
		document.getElementById(offcanvas_id).classList.add('show');
		document.body.classList.add('offcanvas-active');
	}

	document.addEventListener("DOMContentLoaded", function(){
		document.querySelectorAll('[data-trigger]').forEach(function(everyelement){

			let offcanvas_id = everyelement.getAttribute('data-trigger');

			everyelement.addEventListener('click', function (e) {
				e.preventDefault();
	        	show_offcanvas(offcanvas_id);

			});
		});

		document.querySelectorAll('.btn-close').forEach(function(everybutton){

			everybutton.addEventListener('click', function (e) {
				e.preventDefault();
	        	close_offcanvas();
	  		});
		});

		document.querySelector('.screen-darken').addEventListener('click', function(event){
			close_offcanvas();
		});

    });
	// DOMContentLoaded  end
</script>
<script>
        $(window).on('load', function () {
            $('#imp_message_Modal').modal('show');
        });

        $(document).ready(function () {
            $('#set_country').click(function () {
                    var country_code = $('#country_code').val();
                    $.ajax({
                    type: "GET",
                    url: '{{ url(app()->getLocale()."/set_country") }}',
                    data: {'country': country_code},
                    success: function(data) {
                        setTimeout(function(){
                            window.location.href = '{{ url()->current() }}';
                        });
                    }
                });
            });
        });
    </script>


 <script>


        $(".close-sidebar").click(function(){
                $(".main-sidebar").hide();
        });


        $(".sidebar-open-onclick").click(function(){
                 $(".main-sidebar").css("display" , "flex");
        });


           function showhideBal(id){
                                            let divid = id;
                                              if(divid ==="showbalence"){
                                            $("#hidebalence").show() ;
                                            $("#showbalence").hide();
                                            $('.asset-balence').html("*******");
                                            $('.asset-profit').html("******");
                                            $('.asset-sbbalence').html("******");
                                            $('.asset-sbprofit').html("*******");

                                            }
                                            if(divid ==="hidebalence"){
                                                $("#showbalence").show();
                                                $("#hidebalence").hide();
                                                $('.asset-balence').html("demo");
                                                $('.asset-profit').html("demo");
                                                $('.asset-sbbalence').html("demo");
                                                $('.asset-sbprofit').html("demo");

                                            }

                                        }

        $(".wm-custom-modal-close").click(function(){
            $(this).parent().parent().parent().parent().addClass("hide").removeClass("custom-modal-bck-bg")

        })

        $('.coin-swap-from').click(function(){
          $(this).siblings(".wm-dropdown-div").toggle();
        });
        function changeSrc2(id){
                const li = id;
                alert(li);
                    $("#"+li).parent().parent().siblings().children().children('.wm-dropdown-optn-item-img').attr('src', $("#"+li+' '+ ".wm-dropdown-optn-item-img").attr('src')) ;
                    $("#"+li).parent().parent().siblings().children().children('.wm-dropdown-optn-item-img2').attr('src', $("#"+li+' '+ ".wm-dropdown-optn-item-img-2").attr('src')) ;
                    $("#"+li).parent().parent().siblings().children().children('.wm-dropdown-optn-item-txt').html($("#"+li+' '+ ".wm-dropdown-optn-item-txt").html()) ;
                    $("#"+li).children('.wm-dropdown-optn-item-inner').addClass('selected');
                    $("#"+li).siblings('.wm-dropdown-optn-item ').children('.wm-dropdown-optn-item-inner').removeClass('selected');
                    $(".wm-dropdown-div").hide();
        };

        $(function() {
                $(".wm-dropdown-search-input").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    alert(value);
                        // $(this).parent('.wm-dropdown-srch-div').parent().siblings('.wm-dropdown-div').children('.wm-dropdown-optn-item').filter(function(){$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        $(this).parent('.wm-dropdown-srch-div').parent().siblings('.wm-dropdown-list').addClass('demo');
                    // });
                });
            });

        $('.wm-dropdown-search-cross-icn').on('click', function(e) {
                $('.wm-dropdown-search-input').val('');
                $('.wm-dropdown-div ul li').show();
                return false;
        });

           $(document).ready(function(){
     $('#sidebar-nav li a.active').parent().addClass('open');
 });

   </script>

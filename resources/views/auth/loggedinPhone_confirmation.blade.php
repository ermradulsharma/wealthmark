<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wealthmark</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://wealthmark.io/assets/css/style_main.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://wealthmark.io/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://wealthmark.io/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://wealthmark.io/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="https://wealthmark.io/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="https://wealthmark.io/assets/css/helper.css" rel="stylesheet">
  <link rel="stylesheet" href="https://wealthmark.io/assets/wealthmark_new/css/style_index.css">
  <link rel="stylesheet" href="https://wealthmark.io/assets/css/dark-mode.css">
</head>
<body>


  <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">-->
  <!--  Open modal-->
  <!--</button>-->


<!-- The Modal -->
<!--<div class="modal_old" id="myModal">-->
<!--  <div class="modal-dialog modal-dialog-centered">-->
<!--    <div class="modal-content">-->

      <!-- Modal Header -->
<!--      <div class="modal-header">-->
<!--        <h4 class="modal-title"> Loggedin on another device! </h4>-->
<!--        <button type="button" class="btn-close" onclick='close_confirmation_box()'></button>-->
<!--      </div>-->

      <!-- Modal body -->
<!--      <div class="modal-body">-->
<!--      You are already loggedin on another device ! Are you sure to login here? -->
<!--      </div>-->

      <!-- Modal footer -->
<!--      <div class="modal-footer">-->
<!--        <a type="button"  href="{{ url( app()->getLocale(), 'login') }}"  class="btn-blue shadow logincacel">Cancel</a>-->

<!--		<a type="button" href="{{ url('LoggedinWithphone-confirm-redirection') }}" class="btn-yellow shadow loginconfirm" >Confirm</a>-->


<!--      </div>-->

<!--    </div>-->
<!--  </div>-->
<!--</div>-->




 <div class="myModal">
        <div class="custom-modal-bck-bg">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">

                           <h3>Loggedin on another device! </h3>
                            <!--<svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">-->
                            <!--  <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>-->
                            <!--</svg>-->
                    </div>


                    <div class="container-fluid p-0 m-0">
                            <div class="row">

                                <div class="col-md-12">
                                     <!--<div class="modal-heading text-center mb-2 fs-16  text-dark p-2 rounded fw-bolder">Are you sure you want to change Wealthmark/email Authenticator?</div>-->
                                       <div class="pt-4 pb-4 mb-2 bg-light-blue rounded">
                                            <span class=" text-center mb-2 fs-16  text-dark p-2 rounded fw-bolder d-block"> You are already loggedin on another device ! Are you sure to login here? </span>
                                        </div>
                                </div>

                                <div class="d-block col-12 mt-3 w-100 text-center mb-3">
                                    <a href="{{ url( app()->getLocale(), 'login') }}" class="btn-default me-3 d-inline-block border-0 close_custom_modal_btn logincacel" >Cancel</a>

                                    <a href="{{ url('LoggedinWithphone-confirm-redirection') }}" class="btn-yellow border-0 d-inline-block oginconfirm">
                                        Confirm
                                    </a>
                                </div>

                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
















<script>

function close_confirmation_box(){
     window.location.href = '<?php echo url( app()->getLocale(), 'login');  ?>';
    };
</script>

</body>
</html>

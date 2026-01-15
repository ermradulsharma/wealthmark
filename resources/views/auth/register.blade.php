<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <title>Wealth Mark | Register</title>
      @include('template.web_css')
   </head>
   <body class="bg-white">
     @include('template.custom_header')
      <main id="main" >
         <section class="inner-page register">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-10">
                         <h4 class="mb-5">Welcome to WealthMark!</h4>
                    </div>
                </div>
               <div class="row">

                   <div class="col-lg-4 col-md-6 offset-lg-1 order-md-2">
                     <div class="login_scan">
                        <div class="qr_code">
                           <img src="{{ asset('assets/img/qr-code.png') }}" class="img-responsive" />
                        </div>
                        <div class="mob_login mb-3">
                           <h2>Buy Crypto in Minutes</h2>
                           <p>Enjoy the world’s largest cryptocurrency exchange at your fingertips.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6  offset-lg-1 order-md-1">

                     <div class="form-button mb-3">
                        <a href="{{ url( app()->getLocale(), 'register-person') }}" class="btn-yellow d-block text-center">
                        <i class="bi-person-fill" aria-hidden="true"></i> &nbsp; Sign up with phone or email
                        </a>
                     </div>
                     <div class="alt-text">
                        <div class="half-line"></div>
                        <div class="alt-text-main">or continue with</div>
                        <div class="half-line"></div>
                     </div>
                     <div class="other-login-option-register">
                        <div class="google-login">
                            <a href="{{ url('auth/google') }}" class="text-black">
                                <div class="google">
                                  <div class="google-div">
                                     <img src="{{ asset('assets/img/google-icon.png') }}" class="other-login-img">

                                  </div>
                                  <div class="text m-0 p-0">   <strong>Google </strong>  </div>
                                </div>
                            </a>
                        </div>
                        <div class="apple-login">
                            <div class="apple">
                              <div class="apple-div">
                                 <img src="{{ asset('assets/img/apple-icon.png') }}" class="other-login-img">
                              </div>
                              <div class="text m-0 p-0">Apple</div>
                           </div>
                        </div>
                     </div>
                     <div class="pt-3 pb-3">
                        <p class="mb-2"> Already registered?  <a href="{{ url( app()->getLocale(), 'login') }}" class="yellow-text"> Log In</a></p>

                        <p> <span class="text-muted"><a href="{{ url( app()->getLocale(), 'register-business') }}" class="yellow-text"> Sign up for an entity account</a></span></p>
                     </div>
                  </div>

               </div>
            </div>
         </section>
      </main>
      @include('template.copy_right_footer')
      <script src="{{ asset('assets/js/dark-mode-switch.js') }}"></script>
   </body>
</html>

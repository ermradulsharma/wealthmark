
// =======================input type corss button clear value==================================


//     jQuery(function($) {
 
//   function tog (v) {
//     return v ? 'addClass' : 'removeClass';
//   } 
  
//   $(document).on('input', '.clearable',
//     function(){
//       $(this)[tog(this.value)]('x');
//     }).on('mousemove', '.x', function( e ){
    
//     $(this)[tog(
//       this.offsetWidth-36 < e.clientX -this.getBoundingClientRect().left)]('onX');   
//     }).on('click', '.onX', function() {
//       $(this).removeClass('x onX').val('');
//   });
  
// });

//   #*#*#*#*#*#*#*#*#*#*#*#------------------------------ tooltip script-----------------------------
    
    $('.tooltips').append("<span></span>");
$('.tooltips:not([tooltip-position])').attr('tooltip-position','bottom');


$(".tooltips").mouseenter(function(){
 $(this).find('span').empty().append($(this).attr('tooltip'));
});







//   #*#*#*#*#*#*#*#*#*#*#*#------------------------------ input type corss button clear value-----------------------------



  Array.prototype.forEach.call(document.querySelectorAll('.clearable-input'), function(el) {
                    var input = el.querySelector('input');
                    conditionallyHideClearIcon();
                    input.addEventListener('input', conditionallyHideClearIcon);
                    el.querySelector('[data-clear-input]').addEventListener('click', function(e) {
                    input.value = '';
                    conditionallyHideClearIcon();
                });

                function conditionallyHideClearIcon(e) {
                    var target = (e && e.target) || input;
                    target.nextElementSibling.style.display = target.value ? 'block' : 'none';
                }
        });
        
        
 //   #*#*#*#*#*#*#*#*#*#*#*#------------------------------ password stenght-----------------------------

       
        
          $(document).ready(function () {   
        $(".pass-validation").on("focus keyup", function () {
                });
 
                $(".pass-validation").blur(function () {
                     
                });
                $(".pass-validation").on("focus keyup", function () {
                        var score = 0;
                        var a = $(this).val();
                        var desc = new Array();
                 
                        // strength desc
                        desc[0] = "Too short";
                    desc[1] = "Weak";
                    desc[2] = "Good";
                    desc[3] = "Strong";
                    desc[4] = "Best";
         
                });
                 
                $(".pass-validation").blur(function () {
                 
                });
                $(".pass-validation").on("focus keyup", function () {
                        var score = 0;
                        var a = $(this).val();
                        var desc = new Array();
                 
                        // strength desc
                        desc[0] = "Too short";
                        desc[1] = "Weak";
                        desc[2] = "Good";
                        desc[3] = "Strong";
                        desc[4] = "Best";
                         
                        // password length
                        if (a.length >= 6) {
                            $(".length").removeClass("invalid").addClass("valid");
                            score++;
                        } else {
                            $(".length").removeClass("valid").addClass("invalid");
                        }
                 
                        // at least 1 digit in password
                        if (a.match(/\d/)) {
                            $(".pnum").removeClass("invalid").addClass("valid");
                            score++;
                        } else {
                            $(".pnum").removeClass("valid").addClass("invalid");
                        }
                 
                        // at least 1 capital & lower letter in password
                        if (a.match(/[A-Z]/) && a.match(/[a-z]/)) {
                            $(".capital").removeClass("invalid").addClass("valid");
                            score++;
                        } else {
                            $(".capital").removeClass("valid").addClass("invalid");
                        }
                 
                        // at least 1 special character in password {
                        if ( a.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) {
                                $(".spchar").removeClass("invalid").addClass("valid");
                                score++;
                        } else {
                                $(".spchar").removeClass("valid").addClass("invalid");
                        }
                 
                 
                        if(a.length > 0) {
                                //show strength text
                                $(".passwordDescription").text(desc[score]);
                                // show indicator
                                $("#passwordStrength").removeClass().addClass("strength"+score);
                        } else {
                                $(".passwordDescription").text("Password not entered");
                                $("#passwordStrength").removeClass().addClass("strength"+score);
                        }
                        if(a.length > 0) {
                                //show strength text
                                $(".passwordDescription").text(desc[score]);
                                // show indicator
                                $("#passwordStrength2").removeClass().addClass("strength"+score);
                        } else {
                                $(".passwordDescription").text("Password not entered");
                                $("#passwordStrength2").removeClass().addClass("strength"+score);
                        }
                });
                                 
                $(".pass-validation").blur(function () {
                 
                });
                $(".pass-validation").on("focus keyup", function () {
                        var score = 0;
                        var a = $(this).val();
                        var desc = new Array();
                 
                        // strength desc
                        desc[0] = "Too short";
                        desc[1] = "Weak";
                        desc[2] = "Good";
                        desc[3] = "Strong";
                        desc[4] = "Best";
                 
                        $(".pwd_strength_wrap").fadeIn(400);
                         
                        // password length
                        if (a.length >= 6) {
                            $(".length").removeClass("invalid").addClass("valid");
                            score++;
                        } else {
                            $(".length").removeClass("valid").addClass("invalid");
                        }
                 
                        // at least 1 digit in password
                        if (a.match(/\d/)) {
                            $(".pnum").removeClass("invalid").addClass("valid");
                            score++;
                        } else {
                            $(".pnum").removeClass("valid").addClass("invalid");
                        }
                 
                        // at least 1 capital & lower letter in password
                        if (a.match(/[A-Z]/) && a.match(/[a-z]/)) {
                            $(".capital").removeClass("invalid").addClass("valid");
                            score++;
                        } else {
                            $(".capital").removeClass("valid").addClass("invalid");
                        }
                 
                        // at least 1 special character in password {
                        if ( a.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) {
                                $(".spchar").removeClass("invalid").addClass("valid");
                                score++;
                        } else {
                                $(".spchar").removeClass("valid").addClass("invalid");
                        }
                 
                 
                        if(a.length > 0) {
                                //show strength text
                                $(".passwordDescription").text(desc[score]);
                                // show indicator
                                $("#passwordStrength").removeClass().addClass("strength"+score);
                        } else {
                                $(".passwordDescription").text("Password not entered");
                                $("#passwordStrength2").removeClass().addClass("strength"+score);
                        }
                         if(a.length > 0) {
                                //show strength text
                                $(".passwordDescription").text(desc[score]);
                                // show indicator
                                $("#passwordStrength").removeClass().addClass("strength"+score);
                        } else {
                                $(".passwordDescription").text("Password not entered");
                                $("#passwordStrength2").removeClass().addClass("strength"+score);
                        }
                });
                 
                $(".pass-validation").blur(function () {
                        $(".pwd_strength_wrap").fadeOut(400);
                });
                
          });
          
        //   ============show hide password=========================
          
            function password_show_hide() {
           var x = document.getElementById("password");
           var show_eye = document.getElementById("show_eye");
           var hide_eye = document.getElementById("hide_eye");
           hide_eye.classList.remove("d-none");
           if (x.type === "password") {
             x.type = "text";
             show_eye.style.display = "none";
             hide_eye.style.display = "inline-block";
           } else {
             x.type = "password";
             show_eye.style.display = "inline-block";
             hide_eye.style.display = "none";
           }
         }
         
         function password_show_hide1() {
           var x = document.getElementById("password1");
           var show_eye1 = document.getElementById("show_eye1");
           var hide_eye1 = document.getElementById("hide_eye1");
           hide_eye1.classList.remove("d-none");
           if (x.type === "password") {
             x.type = "text";
             show_eye1.style.display = "none";
             hide_eye1.style.display = "inline-block";
           } else {
             x.type = "password";
             show_eye1.style.display = "inline-block";
             hide_eye1.style.display = "none";
           }
         }
         
          function password_show_hide2() {
           var x = document.getElementById("OldPassword");
           var show_eye1 = document.getElementById("show_eye2");
           var hide_eye1 = document.getElementById("hide_eye2");
           hide_eye1.classList.remove("d-none");
           if (x.type === "password") {
             x.type = "text";
             show_eye1.style.display = "none";
             hide_eye1.style.display = "inline-block";
           } else {
             x.type = "password";
             show_eye1.style.display = "inline-block";
             hide_eye1.style.display = "none";
           }
         }
         
//   ============Referral ID Option  show hide =========================
         $(document).ready(function(){
             $(".r_code").click(function(){
                 $(".r-box").toggle();
                 $(".down-arrow").toggle();
                 $(".up-arrow").toggle();
             });
             $('#password').focus(function() {
               $(".pass-valid").show() 
             });  
         });
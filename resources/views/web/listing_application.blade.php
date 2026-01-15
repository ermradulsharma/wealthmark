<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
    <meta name="keywords" content="Wealthmark, Crypto, coins">
    <meta name="author" content="Wealthmark">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link rel='stylesheet' href="{{('../assets/css/deepak_custom.css') }}">
    <style>
    #second-wizard-step{
          pointer-events: none;
    }
    .next-btn-second-wizard {
        background-color: #fdc116;
        pointer-events: all!important;
    }

    body {
        background-color: #ffffff;
        color: #444444;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-weight: 300;
        margin: 0;
        padding: 0;
    }

    .wizard-content-left h1 {
        color: #ffffff;
        font-size: 38px;
        font-weight: 600;
        padding: 12px 20px;
        text-align: center;
    }

    .form-wizard {
        color: #212529;
        padding: 30px;
    }

    .form-wizard .wizard-form-radio {
        display: inline-block;
        margin-left: 5px;
        position: relative;
    }

    .form-wizard .wizard-form-radio input[type="radio"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        background-color: #dddddd;
        height: 25px;
        width: 25px;
        display: inline-block;
        vertical-align: middle;
        border-radius: 50%;
        position: relative;
        cursor: pointer;
    }

    .form-wizard .wizard-form-radio input[type="radio"]:focus {
        outline: 0;
    }

    .form-wizard .wizard-form-radio input[type="radio"]:checked {
        background-color: #d5a00b;
    }

    .form-wizard .wizard-form-radio input[type="radio"]:checked::before {
        content: "";
        position: absolute;
        width: 10px;
        height: 10px;
        display: inline-block;
        background-color: #ffffff;
        border-radius: 50%;
        left: 1px;
        right: 0;
        margin: 0 auto;
        top: 8px;
    }

    .form-wizard .wizard-form-radio input[type="radio"]:checked::after {
        content: "";
        display: inline-block;
        webkit-animation: click-radio-wave 0.65s;
        -moz-animation: click-radio-wave 0.65s;
        animation: click-radio-wave 0.65s;
        background: #000000;
        content: '';
        display: block;
        position: relative;
        z-index: 100;
        border-radius: 50%;
    }

    .form-wizard .wizard-form-radio input[type="radio"]~label {
        padding-left: 10px;
        cursor: pointer;
    }

    .form-wizard .form-wizard-header {
        text-align: center;
    }




    .form-wizard .wizard-fieldset {
        display: none;
    }

    .form-wizard .wizard-fieldset.show {
        display: block;
    }

    .form-wizard .wizard-form-error {
        display: none;
        background-color: #d5a00b;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 1px;
        width: 100%;
    }

    .form-wizard .form-wizard-previous-btn {
        background-color: #263674 !important;
        margin: 2%;
        padding: 13px 30px;
        height: 37px;
        max-height: 37px;
        line-height: 9px;
    }

    .form-wizard .form-wizard-previous-btn:hover {
        background-color: #263674 !important;
        margin: 2%;
        padding: 13px 30px;
    }

    .form-wizard .form-wizard-next-btn {
        margin: 2%;
        padding: 13px 30px;
    }

    .form-wizard .form-wizard-submit {
        margin: 2%;

    }

    .form-wizard .form-control {
        font-weight: 300;
        height: auto !important;
        padding: 11px;
        color: #212529;
        border: none;
        border: 1px solid #ced4da;
        background-color: #fff;
    }

    .form-wizard .form-control:focus {
        box-shadow: none;
    }

    .form-wizard .form-group {
        position: relative;
        margin: 25px 0;
    }

    .form-wizard .wizard-form-text-label {
        position: absolute;
        left: 5px;
        top: 16px;
        transition: 0.2s linear all;
    }

    .form-wizard .focus-input .wizard-form-text-label {
        color: #fec00f;
        top: -18px;
        transition: 0.2s linear all;
        font-size: 12px;
    }

    .form-wizard .form-wizard-steps {
        margin: 30px 0;
        display: flex;
        justify-content: center;
    }

    .form-wizard .form-wizard-steps li {
        width: 25%;
        float: left;
        position: relative;
    }

    .form-wizard .form-wizard-steps li::after {
        background-color: #f3f3f3;
        content: "";
        height: 5px;
        left: 0;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        border-bottom: 1px solid #dddddd;
        border-top: 1px solid #dddddd;
    }

    .form-wizard .form-wizard-steps li span {
        background-color: #dddddd;
        border-radius: 50%;
        display: inline-block;
        height: 40px;
        line-height: 40px;
        position: relative;
        text-align: center;
        width: 40px;
        z-index: 1;
    }

    .form-wizard .form-wizard-steps li:last-child::after {
        width: 50%;
    }

    .form-wizard .form-wizard-steps li.active span,
    .form-wizard .form-wizard-steps li.activated span {
        background: linear-gradient(180deg, rgba(254, 192, 15, 1) 0%, rgba(248, 165, 50, 1) 100%);
        color: #ffffff;
    }

    .form-wizard .form-wizard-steps li.active span,
    .form-wizard .form-wizard-steps li.activated span:before {
        content: '\2713';
    }

    .form-wizard .form-wizard-steps li.active::after,
    .form-wizard .form-wizard-steps li.activated::after {
        background: linear-gradient(180deg, rgba(254, 192, 15, 1) 0%, rgba(248, 165, 50, 1) 100%);
        left: 50%;
        width: 50%;
        border-color: #fec00f;
    }

    .form-wizard .form-wizard-steps li.activated::after {
        width: 100%;
        border-color: #fec00f;
    }

    .form-wizard .form-wizard-steps li:last-child::after {
        left: 0;
    }

    .form-wizard .wizard-password-eye {
        position: absolute;
        right: 32px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    @keyframes click-radio-wave {
        0% {
            width: 25px;
            height: 25px;
            opacity: 0.35;
            position: relative;
        }

        100% {
            width: 60px;
            height: 60px;
            margin-left: -15px;
            margin-top: -15px;
            opacity: 0.0;
        }
    }

    @media screen and (max-width: 767px) {
        .wizard-content-left {
            height: auto;
        }
    }

    @media(min-width:992px) {
        .form-wizard .wizard-fieldset.show {
            display: block;
            width: 500px;
            margin: auto;
        }
    }

    @media(min-width:401px) and (max-width:992px) {
        .form-wizard-header .justify-content-sm-between {
            width: 100% !important;
        }
    }

    @media(max-width:400px) {
        .form-wizard-header .justify-content-sm-between {
            width: 100% !important;
            overflow-x: scroll;
        }

        #wizard li {
            color: #263674;
            min-width: 120px;
            font-size: 10px;
        }
    }


    .fieldset.wizard-fieldset {
        width: 500px !important;
        display: block;
        margin: auto;
    }

    .activated b.wizard-no {
        display: none;
    }

    .form-wizard .form-wizard-steps li.active span {
        background: linear-gradient(180deg, rgba(254, 192, 15, 1) 0%, rgba(248, 165, 50, 1) 100%);
        color: #ffffff;
        border: 2px solid orange;
        border-radius: 25px;
        line-height: 35px;
    }

    .form-wizard .form-wizard-submit {
        margin: 2%;
        height: 37px;
        max-height: 37px;
        line-height: 18px;
    }

    .form-wizard-header .justify-content-sm-between {
        justify-content: space-between !important;
        width: 62%;
        align-items: center;
        margin: auto;
    }

    .form-wizard-header ul li {
        color: #263674;
    }

    .form-wizard-header .justify-content-sm-between {
        justify-content: space-between !important;
        width: 62%;
        align-items: center;
        margin: auto;
        /* border-bottom: 2px solid #263674; */
        padding-bottom: 10px;
    }

    .listing-detail-box h4 {
        font-size: 1.4rem;
    }

    .wizard_label {
        color: rgb(30, 35, 41);
        white-space: nowrap;
        font-size: 14px;
    }

    .form-floating>.form-control {
        padding: 1rem 0.75rem;
    }

    .form-floating>.form-control,
    .form-floating>.form-select {
        height: calc(3.5rem + 2px) !important;
        line-height: 1.25;
    }

    .form-floating>.form-control:focus,
    .form-floating>.form-control:not(:placeholder-shown) {
        padding-top: 1.625rem;
        padding-bottom: 0.625rem;
    }

    .form-wizard .form-wizard-next-btn {
        /* padding: 8px 20px; */
        color: #222222;
        font-size: 14px;
        background: linear-gradient(180deg, rgba(254, 192, 15, 1) 0%, rgba(248, 165, 50, 1) 100%);
        font-weight: 600;
        border-radius: 5px;
        white-space: nowrap;
        /* box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important; */
    }

    .form-wizard .form-wizard-next-btn:hover {
        background: #263674;
        color: white !important;
    }

    .form-wizard .form-wizard-next-btn {
        display: block;
        text-align: center;
        height: 37px;
        max-height: 37px;
        line-height: 9px;
    }

    .form-floating>label {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        padding: 1rem 0.75rem;
        pointer-events: none;
        border: 1px solid transparent;
        transform-origin: 0 0;
        transition: opacity .1s ease-in-out, transform .1s ease-in-out;
        color: #444444;
    }

    #wizard-second-step .form-wizard-next-btn {
        /* padding: 8px 20px; */
        color: #222222;
        font-size: 14px;
        background: #e7e7e7;
        font-weight: 600;
        border-radius: 5px;
        white-space: nowrap;

    }

    #wizard-second-step .next-btn-second-wizard {
        color: #222222;
        font-size: 14px;
        background: linear-gradient(180deg, rgba(254, 192, 15, 1) 0%, rgba(248, 165, 50, 1) 100%);
        font-weight: 600;
        border-radius: 5px;
        white-space: nowrap;
    }
    </style>
</head>

<body>
    @include('template.web_menu')

    <section class="wizard-section">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12 col-md-12">
                    <div class="form-wizard">
                        <form action="" method="post" role="form">
                            <div class="form-wizard-header">
                                <h1 class="listing-app-heading fs-2">Fill the Information & Submit Details </h1>
                                <ul class="list-unstyled form-wizard-steps clearfix">
                                    <li class="active"><span><b class="wizard-no">1</b></span></li>
                                    <li><span><b class="wizard-no">2</b></span></li>
                                    <li><span><b class="wizard-no">3</b></span></li>
                                </ul>
                                <ul class="d-flex justify-content-sm-between" id="wizard">
                                    <li class="active">Fill Out Your Basic<br /> Information</li>
                                    <li>Complete Detailed <br />Information</li>
                                    <li>Application Submitted <br />Successfully</li>
                                </ul>
                            </div>

                            <fieldset class="wizard-fieldset show mt-5">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="name@example.com" required>
                                    <label for="email">Project Name*</label>
                                    <span class="error" id="email_err"> </span>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="name@example.com" required>
                                    <label for="email">Token/Coin Full Name*</label>
                                    <span class="error" id="email_err"> </span>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="name@example.com" required>
                                    <label for="email">Token/Coin Symbol*</label>
                                    <span class="error" id="email_err"> </span>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="name@example.com" required>
                                    <label for="email">Email*</label>
                                    <span class="error" id="email_err"> </span>
                                </div>


                                <div class="form-group clearfix d-block justify-content-center align-item-center">
                                    <a href="javascript:;" class="form-wizard-next-btn float-right m-0">Next</a>

                                </div>
                            </fieldset>

                            <fieldset class="wizard-fieldset">
                                <div class="form-group">
                                    <div class="form-group mb-4">
                                        <p class="alert alert-warning">Please make sure to click the below links and
                                            upload
                                            the
                                            additional information required through the Wealth Mark listing form and
                                            Wealth
                                            Mark
                                            info
                                            webpage. </p>
                                    </div>
                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="col-md-4">
                                            <div class="listing-detail-box-img">
                                                <img src="{{ asset('assets/img/listing-icon.png') }}"
                                                    class="img-fluid" alt="Listing Application" title="Listing Application">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="listing-detail-box">
                                                <h6 class="m-0">Wealth Mark Listing Application </h6>
                                                <a href="#" class="text-warning fs-6">http://docs.google.com/forms/...
                                                </a><br/>
                                                <input type="checkbox" class="mb-1 mt-2" id="onclickbtnactive" /> &nbsp;I
                                                have completed requried
                                                Google
                                                form.
                                                <div class="text mt-4">Confirm by ticking the above once you have finish
                                                    uploading all
                                                    information,
                                                    then click the Apply button to complete yor application. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix d-flex justify-content-center align-item-center"
                                    id="wizard-second-step">
                                    <a href="javascript:;"
                                        class="form-wizard-previous-btn btn-blue shadow float-left">Previous</a>
                                    <a href="javascript:;" class="form-wizard-next-btn" id="second-wizard-step">Next</a>
                                </div>
                            </fieldset>

                            <fieldset class="wizard-fieldset">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 text-center">
                                        <div class="listing-check-icon mt-5 mb-4">
                                            <svg width="16" height="16" fill="currentColor" class="bi bi-check"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg>
                                        </div>
                                        <h3>Application Submitted Successfully </h3>
                                        <div class="text-center text">Your application is pending review. Application
                                            that pass
                                            the
                                            initial review
                                            will be contracted at ta later date, as outlined during the submission
                                            process. </div>
                                    </div>
                                </div>

                                <div class="form-group clearfix d-flex justify-content-center align-item-center">
                                    <a href="javascript:;"
                                        class="form-wizard-previous-btn btn btn-blue shadow float-left">Previous</a>
                                    <a href="#" class="form-wizard-submit float-right btn btn-yellow shadow">Submit</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".Next_button").click(function() {
            $("#wizard-serial-step-1-row").addClass("active-wizard");
            $(".wizard-serial-step-2").addClass("active-wizard");
            $(".Next_button").addClass("third-wizard-line");
        });
        $(".third-wizard-line").click(function() {
            $("#wizard-serial-step-2-row").addClass("active-wizard-2");
            $(".wizard-serial-step-3").addClass("active-wizard-2");
        });
    });
    </script>

    @include('template.country_language')
    @include('template.web_footer')
    <script>
    jQuery(document).ready(function() {
        // click on next button
        jQuery('.form-wizard-next-btn').click(function() {
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find(
                '.form-wizard-steps .active');
            var next = jQuery(this);
            var nextWizardStep = true;
            parentFieldset.find('.wizard-required').each(function() {
                var thisValue = jQuery(this).val();

                if (thisValue == "") {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                    nextWizardStep = false;
                } else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
            if (nextWizardStep) {
                next.parents('.wizard-fieldset').removeClass("show", "400");
                currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',
                    "400");
                next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show", "400");
                jQuery(document).find('.wizard-fieldset').each(function() {
                    if (jQuery(this).hasClass('show')) {
                        var formAtrr = jQuery(this).attr('data-tab-content');
                        jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(
                            function() {
                                if (jQuery(this).attr('data-attr') == formAtrr) {
                                    jQuery(this).addClass('active');
                                    var innerWidth = jQuery(this).innerWidth();
                                    var position = jQuery(this).position();
                                    jQuery(document).find('.form-wizard-step-move').css({
                                        "left": position.left,
                                        "width": innerWidth
                                    });
                                } else {
                                    jQuery(this).removeClass('active');
                                }
                            });
                    }
                });
            }
        });
        //click on previous button
        jQuery('.form-wizard-previous-btn').click(function() {
            var counter = parseInt(jQuery(".wizard-counter").text());;
            var prev = jQuery(this);
            var currentActiveStep = jQuery(this).parents('.form-wizard').find(
                '.form-wizard-steps .active');
            prev.parents('.wizard-fieldset').removeClass("show", "400");
            prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show", "400");
            currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',
                "400");
            jQuery(document).find('.wizard-fieldset').each(function() {
                if (jQuery(this).hasClass('show')) {
                    var formAtrr = jQuery(this).attr('data-tab-content');
                    jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(
                        function() {
                            if (jQuery(this).attr('data-attr') == formAtrr) {
                                jQuery(this).addClass('active');
                                var innerWidth = jQuery(this).innerWidth();
                                var position = jQuery(this).position();
                                jQuery(document).find('.form-wizard-step-move').css({
                                    "left": position.left,
                                    "width": innerWidth
                                });
                            } else {
                                jQuery(this).removeClass('active');
                            }
                        });
                }
            });
        });
        //click on form submit button
        jQuery(document).on("click", ".form-wizard .form-wizard-submit", function() {
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find(
                '.form-wizard-steps .active');
            parentFieldset.find('.wizard-required').each(function() {
                var thisValue = jQuery(this).val();
                if (thisValue == "") {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                } else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
        });
        // focus on input field check empty or not
        jQuery(".form-control").on('focus', function() {
            var tmpThis = jQuery(this).val();
            if (tmpThis == '') {
                jQuery(this).parent().addClass("focus-input");
            } else if (tmpThis != '') {
                jQuery(this).parent().addClass("focus-input");
            }
        }).on('blur', function() {
            var tmpThis = jQuery(this).val();
            if (tmpThis == '') {
                jQuery(this).parent().removeClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideDown("3000");
            } else if (tmpThis != '') {
                jQuery(this).parent().addClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideUp("3000");
            }
        });
    });
    </script>
    <script>
    $("#onclickbtnactive").click(function() {
        if ($(this).is(":checked")) {
            alert(" Are you Sure? Completed requried Google form?");
            $("#second-wizard-step").addClass("next-btn-second-wizard");
            $(".open_modal").addClass("shadow");

        } else {
            $("#second-wizard-step").removeClass("next-btn-second-wizard");
            $(".open_modal").removeClass("shadow");

        }
    });
    </script>


    <script>
    $(document).ready(function() {
        $("#staticBackdrop").modal('show');
    });

    $('#liquidity-farming-agree').change(function() {
        if ($(this).is(":checked")) {
            $('#liquidity-farming-btn').removeClass('inactive');
        } else {
            $('#liquidity-farming-btn').addClass('inactive');
        }
    });
    </script>

    <script>
    $(document).ready(function() {
        $("#liquidity-farming-agree").click(function() {
            $("#liquidity-farming-btn").attr("data-bs-dismiss", "modal");
        });
    });
    </script>
</body>

</html>

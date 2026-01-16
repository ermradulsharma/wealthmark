<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Buy, trade, and hold 100+ cryptocurrencies on Wealthmark</title>

    @include('template.web_css')
        <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <style>

     @media(max-width:576px){
         #all-api-block .wm-custom-modal-body {
            max-height: 600px;
            overflow-y: clip;
        }
       .btn-api-group {
            display: flex!important;
            justify-content: flex-start!important;
            margin-top:20px;
        }
     }

    @media(min-width:577px) and (max-width:767px){
        .api-sectoin-block h2 {
            font-size: 18px!important;
        }
    }
    #all-api-block .wm-custom-modal-header{
            height: 0px!important;
    }
code start 24-feb-2023
.wealth-icon-lg {
    box-sizing: border-box;
    margin: 0px;
    color: rgb(146, 154, 165);
    font-size: 24px;
    fill: rgb(146, 154, 165);
    align-self: flex-start;
    min-width: 24px;
    width: 4em;
    height: 4em;
}
	.wm-custom-modal-diolog {
		width: 800px!important;
		height: 700px!important;
	}
	.btn-api-group{
		display: flex!important;
		justify-content: flex-end;
	}
	@media(max-width:992px){
		.dashboard-main .sidebar{
			overflow-y: hidden;
		}

		.btn-api-group .btn{
			margin-top:0px;
		}
	}
	@media(max-width:500px){
		.btn-api-group{
			margin-top:10px;
			display: block!important;
		}
		.btn-api-group .btn{
			margin-top:10px;
		}
	}
	@media(min-width:992px){
		.inner-empty-block {
			padding: 90px 0px;
		}
	}

	.wm-custom-modal-diolog {
		padding: 20px !important;
	}


	.generated-api-key-block {
		box-sizing: border-box;
		margin: 0px 0px 16px;
		min-width: 0px;
		display: flex;
		cursor: pointer;
		border: 1px solid rgb(240, 185, 11);
		position: relative;
		background-color: rgb(245, 245, 245);
		padding: 16px;
	}

	.left-api-icon-box {
		box-sizing: border-box;
		margin: 0px 16px 0px 0px;
		min-width: 0px;
		flex: 0 0 auto;
	}
	.generated-api-icon {
		box-sizing: border-box;
		margin: 0px;
		min-width: 0px;
		color: currentcolor;
		font-size: 60px;
		fill: currentcolor;
		width: 1em;
		height: 1em;
	}

	.api-generated-content-box {
		box-sizing: border-box;
		margin: 0px;
		min-width: 0px;
	}

	.api-generated-content-box {
		box-sizing: border-box;
		margin: 0px;
		min-width: 0px;
	}

	.api-generated-para {
	    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(104 104 104);
    font-size: 12px;
    line-height: 16px;
	}

	.api-generated-heading{
		box-sizing: border-box;
		margin: 0px 0px 8px;
		min-width: 0px;
		color: rgb(30, 35, 41);
		font-weight: 500;
		line-height: 18px;
	}




#btn-api-management-box input[type="button"] {
    border: 1px solid transparent;
    border-color: #263674;
}

#btn-api-management-box input[type="button"] {
    border: 1px solid transparent;
    border-color: #263674;
}

#btn-api-management-box input[type="button"]:hover {
    border: 1px solid transparent;
    border-color: #fdc116;
}
div#delete-api-complete {
    position: absolute;
	width:100%;
	height: 100vh;
     top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
	box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    position: fixed;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    z-index: 9999;
    flex-direction: unset;
    inset: 0px;
    background-color: rgba(0, 0, 0, 0.5);
}
#delete-api-inner-alert-box{
	display: none;
	z-index: 99999;
	position: absolute;
	top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.delete-all-api-content .btn{
	margin-top: 10px;
}
@media(max-width:576px){
	#all-api-block .wm-custom-modal-diolog {
		width: 362px !important;
		height: auto !important;
	}
	#modal_open_id .wm-custom-modal-diolog {
		width: 484px !important;
		height: auto !important;
	}
}
code end  24 feb-2023

    @media(min-width:992px){
        .btn-api-group {
            float: right;
        }
    }
    #all-api-block .wm-custom-modal-diolog {
        width: 362px !important;
        height: auto !important;
    }

    .btn-default {
        margin: 0px;
        appearance: none;
        user-select: none;
        cursor: pointer;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        box-sizing: border-box;
        font-size: 14px;
        font-family: inherit;
        font-weight: 500;
        text-align: center;
        text-decoration: none;
        outline: none;
        padding: 10px 16px;
        line-height: 20px;
        min-width: 60px;
        word-break: keep-all;
        color: rgb(30, 35, 41);
        border-radius: 4px;
        min-height: 24px;
        border: none;
        background-color: rgb(234, 236, 239);
        background-image: none;
        width: 100%;
    }

    #create-api-modal-main .wm-custom-modal-diolog {
        width: 484px !important;
        height: 330px !important;
    }

    #modal_open_id .wm-custom-modal-diolog {
        width: 484px !important;
        height: auto !important;
    }

    @media(max-width:768px) {
        #create-api-modal-main .wm-custom-modal-diolog {
            width: 484px !important;
            height: auto !important;
        }

        #btn-api-management-box a.btn.btn-yellow.shadow.w-100 {
            margin-bottom: 15px;
        }
    }


    @media(max-width:576px) {
        .product-container-block .product-card {
            height: auto;
        }
    }

    .wm-custom-modal-header {
        margin-left: 0px;
    }

    .product-card {
        flex-direction: row !important;
        display: flex;
        height: auto;
    }

    .sidebar-nav {
        display: block;
    }

    #preloader {
        display: none !important;
    }

    @media (max-width: 450px) {

        .balance-details .dashboard-card-header {
            display: block;

        }

        .dashboard-card-heading {
            margin-bottom: 10px;
            display: block;
        }

        .balance-details .dashboard-card-header .btn-theme-sm {
            margin-left: 0px;
        }

        #progressbar li {
            width: 33% !important;
        }

    }






    /*----------------------------------------------------------- for side bar css only-----------------------------------------------------------*/


    /*@media (max-width: 992px) {*/
    /*    .hide_on_max_dashboard_992 {*/
    /*        display: none !important;*/
    /*    }*/
    /*}*/

    /*.dashboard-main {*/
    /*    margin-top: 0px !important;*/
    /*}*/

    /*.hide_on_dashboard {*/
    /*    display: none !important;*/
    /*}*/

    /*header {*/
    /*    box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;*/
    /*    background: white;*/
    /*    z-index: 9999999999 !important;*/

    /*}*/

    /*.sidebar-btn-open {*/
    /*    font-size: 30px;*/
    /*    color: #242424;*/
    /*}*/

    /*@media (max-width: 992px) {*/
    /*    .sidebar.active {*/
    /*        display: block;*/
    /*        top: 0px !important;*/
    /*        position: fixed !important;*/
    /*        right: 0 !important;*/
    /*        left: auto !important;*/
    /*    }*/

    /*    .dashboard-sidebar {*/
    /*        box-sizing: border-box;*/
    /*        margin: 0px;*/
    /*        min-width: 0px;*/
    /*        position: fixed;*/
    /*        inset: 0px;*/
    /*        z-index: 9999;*/
    /*        flex-direction: row-reverse;*/
    /*        background-color: rgba(0, 0, 0, 0.1);*/
    /*        display: none;*/
    /*        transition: all 0.5s ease;*/
    /*    }*/

    /*    .dashboard-sidebar-flex {*/
    /*        display: flex !important;*/
    /*    }*/
    /*}*/

    /*----------------------------------------------------------- for side bar css only-----------------------------------------------------------*/
    </style>
</head>

<body>
    @include('template.dashboard_mobile_menu')
    @include('template.web_menu')
    <div class="dashboard-main">
        @include('template.sidebar')
        <div class="container-fluid p-0">
            <section class="dashboard-breadcrumb mb-3 api-sectoin-block">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h2 class="fw-bold mb-0">API Management</h2>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="btn-api-group">
                                <a href="javascript:void(0);" class="btn btn-yellow shadow me-2 open_modal">Creat API
                                </a>
                                <a href="javascript:void(0);" class="btn btn-blue shadow" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom"
                                    data-bs-original-title="Each user can only create one Tax Reprot API, and only supports read restriction.">Create
                                    Tax Report API</a>
                                <a href="javascript:void(0);" class="btn btn-yellow shadow"
                                    id="delete-all-api-btn">Delete All API</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container-fluid">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="text">
                                1. Each account can create up to 30 API Keys.<br />
                                2. Do not disclose your API Key, Secret Key (HMAC) or Private Key (RSA) to anyone to
                                avoid asset losses. You should treat your API Key and your Secret Key (HMAC) or Private
                                Key (RSA) like your passwords.<br />
                                3. It is recommended to restrict access to trusted IPs only to increase your account
                                security.<br />
                                4. You will not be able to create an API Key if KYC is not completed.<br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="warnMsg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="warnMsgLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="col-12  mt-3 mb-2rem">
                            <img src="{{ asset('img/dashboard-icons/warning-info.svg') }}"
                                class="no-record-icon" alt="">
                        </div>
                        <h4>Verification Required </h4>
                        <p class="small text-muted">All new and existing users are required to complete Identity
                            Verification to access the full range of Binance products and services.<a href="#"
                                class="text-warning">Learn more</a></p>
                        <button type="button" class="btn-theme mt-3 w-100 border-0" data-bs-dismiss="modal"
                            aria-label="Close">I Understand</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="modal_open_id">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body">
                    <div class="wm-custom-modal-header">
                        <h5>Choose API key type</h5>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                            <path
                                d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <div class="product-container-block">
                        <div class="generated-api-key-block product-card selected">
                            <div class="left-api-icon-box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
                                    fill="none" class="generated-api-icon">
                                    <g clip-path="url(#key-m64-1_svg__clip0)">
                                        <path
                                            d="M40 33.8c3.11-6.55.33-14.38-6.22-17.5-6.55-3.12-14.38-.33-17.5 6.22-3.12 6.55-.33 14.38 6.22 17.5a13.098 13.098 0 0011.27-.01l2.81 2.8h3.1v3.13l2.3 2.3h3.1l3.1 3.09v3.1l2.33 2.33h6.2v-6.2L40 33.8zm-11.68-.33l-5.41-5.4 5.41-5.4 5.4 5.4-5.4 5.4z"
                                            fill="url(#key-m64-1_svg__paint0_linear)"></path>
                                        <path
                                            d="M30.77 11.68l-1.88 1.64-1.65-1.91 1.89-1.63 1.64 1.9zM26.35 7.71L25.33 10l-2.31-1.04 1.04-2.28 2.29 1.03zM20.7 5.99l.03 2.5-2.52.03-.03-2.51 2.52-.02zM12.57 7.9l1.09 2.24 2.27-1.09-1.08-2.25-2.28 1.1zM9.88 10.02l1.94 1.58-1.59 1.93-1.94-1.57 1.59-1.94zM6.744 15.023l-.627 2.44 2.431.625.627-2.44-2.43-.625zM6 20.86l2.46-.43.46 2.45-2.47.48-.45-2.5zM9.83 25.05l1.47 2.05-2.03 1.46-1.47-2.05 2.03-1.46zM13.05 28.68l2.19 1.25-1.23 2.16-2.21-1.24 1.25-2.17zM17.48 30.6l2.51.21-.19 2.48-2.51-.18.19-2.51zM22.24 30.45l.99 2.29 2.33-.98-.99-2.32-2.33 1.01zM26.55 28.07l1.76 1.77 1.78-1.77-1.77-1.77-1.77 1.77z"
                                            fill="#212833"></path>
                                    </g>
                                    <defs>
                                        <linearGradient id="key-m64-1_svg__paint0_linear" x1="28.505" y1="47.096"
                                            x2="47.078" y2="28.521" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F0B90B"></stop>
                                            <stop offset="0.28" stop-color="#F1BC0F"></stop>
                                            <stop offset="0.569" stop-color="#F4C41C"></stop>
                                            <stop offset="0.862" stop-color="#F8D230"></stop>
                                            <stop offset="0.993" stop-color="#FBDA3C"></stop>
                                        </linearGradient>
                                        <clipPath id="key-m64-1_svg__clip0">
                                            <path fill="#fff" d="M0 0h64v64H0z"></path>
                                        </clipPath>
                                    </defs>
                                </svg></div>
                            <div data-bn-type="text" class="api-generated-content-box">
                                <div data-bn-type="text" class="api-generated-heading">System generated API key</div>
                                <div data-bn-type="text" class="api-generated-para">Wealthmark's system generated API
                                    Key works
                                    in a HMAC symmetric encryption method. A pair of API Key and Secret Keys will be
                                    provided to you. Please keep this pair of Keys secure and treat it like your
                                    password. Do not share the Keys with any third parties.</div>
                            </div>
                        </div>
                        <div class="generated-api-key-block product-card">
                            <div class="left-api-icon-box">
                                <svg viewBox="0 0 64 64" fill="none" class="generated-api-icon">
                                    <mask id="keys-m64_svg__a" maskUnits="userSpaceOnUse" x="2" y="2" width="60"
                                        height="60">
                                        <path fill="#C4C4C4" d="M2 2h60v60H2z"></path>
                                    </mask>
                                    <g mask="url(#keys-m64_svg__a)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.59 5.644l.11.29c-.032-.101-.074-.195-.11-.29zM11.575 3.912a10.757 10.757 0 01-.308-1.974c.035.666.139 1.328.309 1.974z"
                                            fill="#212833"></path>
                                        <path
                                            d="M45.865 28.312c3.85-5.207 2.754-12.547-2.456-16.405-5.21-3.858-12.555-2.755-16.415 2.45-3.859 5.205-2.754 12.547 2.456 16.404a11.713 11.713 0 009.886 1.925l1.985 2.936 2.719.532-.537 2.743 1.623 2.41 2.72.532 2.189 3.24-.532 2.717 1.644 2.441 5.438 1.064 1.063-5.434-11.783-17.555zm-10.188-2.293l-3.819-5.66 5.67-3.805 3.811 5.659-5.662 3.806z"
                                            fill="url(#keys-m64_svg__paint0_linear)"></path>
                                        <path
                                            d="M34.626 23.524c1.512-1.656 2.218-3.36 2.617-5.604 0 0-.407 1.804-.895 2.872-.603 1.319-1.722 2.732-1.722 2.732z"
                                            stroke="currentColor"></path>
                                        <circle cx="22.814" cy="27.601" r="10.603"
                                            transform="rotate(-10.913 22.814 27.6)" fill="#fff"></circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.557 18.802c-.025-.127-.083-.242-.12-.373.044.136.08.26.12.373zM14.903 35.671c-.349-.332-.678-.686-.984-1.058l1.14-.934c.267.326.553.635.857.927l-1.013 1.065zM12.924 33.185c-.253-.413-.48-.842-.68-1.285l1.358-.585a9.8 9.8 0 00.57 1.125l-1.248.745z"
                                            fill="#212833"></path>
                                        <path fill="#212833"
                                            d="M13.233 52.692l.29-1.414 1.443.296-.29 1.414zM13.87 49.582l.29-1.414 1.444.296-.29 1.414zM14.505 46.47l.29-1.413 1.443.295-.29 1.414zM15.147 43.364l.29-1.414 1.443.296-.29 1.414zM15.782 40.254l.29-1.414 1.443.296-.29 1.414zM16.423 37.149l.29-1.414 1.443.296-.29 1.414z">
                                        </path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M37.462 15.46l.006.31c-.009-.105-.004-.208-.006-.31z" fill="#212833">
                                        </path>
                                        <path
                                            d="M16.006 11.18a10.48 10.48 0 0118.277-1.388l1.542-.117c-2.51-4.2-7.458-6.577-12.523-5.6-6.38 1.23-10.608 7.331-9.52 13.737.117.604.277 1.199.481 1.78a11.54 11.54 0 00-2.76 9.896l.15.775 1.427-.377-.13-.677c-.554-2.86.16-5.819 1.958-8.11a11.976 11.976 0 003.891 4.348l.209.116-1.924 2.843 6.735 4.562 4.562-6.74-6.126-4.14-.467.69-.37.539.194.13 4.712 3.19-2.91 4.297-.875-.592-3.421-2.34 1.097-1.622 1.29.873 1.55 1.07.827-1.222-2.506-1.7-1.733-1.178a10.48 10.48 0 01-3.637-13.043z"
                                            fill="#212833"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.418 19.93l1.37.54.127-.296c.147-.341.303-.706.478-1.045l-1.325-.65c-.239.471-.457.957-.65 1.45zm.448 3.632l-1.442-.291c.104-.518.233-1.035.375-1.542l1.417.41c-.158.487-.256.944-.35 1.423zm-1.828 3.179l1.469.028c.014-.488.045-.98.09-1.463l-1.463-.15c-.056.52-.085 1.054-.096 1.585zm1.682 3.25l-1.456.227c-.1-.514-.143-1.052-.178-1.579l1.466-.109c.041.49.093.978.168 1.462zm-1.072 2.091c.135.514.287 1.024.462 1.525l1.388-.484c-.16-.455-.3-.932-.421-1.406l-1.43.365zm1.161 3.291c.224.48.467.96.717 1.416l1.29-.717a18.56 18.56 0 01-.667-1.31l-1.34.611z"
                                            fill="#212833"></path>
                                        <path fill="#212833"
                                            d="M6.542 38.41l1.21-.841.84 1.21-1.21.84zM5.994 16.81l.778-1.251 1.25.778-.778 1.25z">
                                        </path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.903 14.219a10.76 10.76 0 00-.447-1.947c.215.632.365 1.284.447 1.947zM23.445 38.841a11.08 11.08 0 001.538-.176l-.621 3-1.778 1.17 1.175 1.8-.64 3.22-2.128 1.406-.631 2.947 1.406 2.129-.699 3.41-5.13 3.389-1.796-2.726-.406-.611-.977-1.456-.019-.098-.17-.255.333-1.606 1.448.32-.233.97.847 1.282.432.624.985 1.496 3.395-2.238.45-2.21-1.406-2.129.801-4.12 2.129-1.406.417-2.036-1.605-2.504 2.479-1.678.404-1.914z"
                                            fill="#212833"></path>
                                        <path
                                            d="M29.04 37.085c.076-.039.145-.088.22-.133l1.562-1.296a11.557 11.557 0 00-13.828-18.331c.1.504.247.998.44 1.475a9.968 9.968 0 013.53-1.413 10.09 10.09 0 017.513 18.24 10.402 10.402 0 01-4.224 1.613l-.51.098-.702 3.417-2.478 1.678 1.604 2.504-.417 2.036-2.129 1.406-.801 4.12 1.406 2.129-.45 2.21-3.395 2.239-.985-1.496-.432-.625-.847-1.282.233-.97-1.448-.32-.332 1.606.17.255.018.099.977 1.455.406.612 1.797 2.725 5.13-3.39.698-3.41-1.406-2.128.631-2.947 2.129-1.406.639-3.219-1.131-1.822 1.778-1.17.621-3a11.78 11.78 0 004.013-1.56z"
                                            fill="#212833"></path>
                                    </g>
                                    <defs>
                                        <linearGradient id="keys-m64_svg__paint0_linear" x1="33.504" y1="37.993"
                                            x2="52.968" y2="24.886" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#F0B90B"></stop>
                                            <stop offset="0.28" stop-color="#F1BC0F"></stop>
                                            <stop offset="0.569" stop-color="#F4C41C"></stop>
                                            <stop offset="0.862" stop-color="#F8D230"></stop>
                                            <stop offset="0.993" stop-color="#FBDA3C"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div data-bn-type="text" class="api-generated-content-box">
                                <div data-bn-type="text" class="api-generated-heading">Self-generated API key</div>
                                <div data-bn-type="text" class="api-generated-para">Self-generated API Key works in a
                                    RSA
                                    asymmetric encryption method. You will have to create your own Public and Private
                                    Keys via software, then you will only have to provide the Public Key to Wealthmark.
                                    Wealthmark will have zero knowledge of the Private Key.</div>
                            </div>
                        </div>
                        <a class="btn btn-yellow shadow d-block" id="create-api-modal-popup">Next</a>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="create-api-modal-main">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body">
                    <div class="wm-custom-modal-header">
                        <span>Select Currency </span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                            <path
                                d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z"
                                fill="currentColor"></path>
                        </svg>
                    </div>

                    <span class="small text-muted">Tips: When you sell your cryptocurrency, the added payment
                        method will be shown to the buyer during the transaction. To accept cash transfer,
                        please make sure the information is correct.</span>
                    <div class="form-floating my-4">
                        <input type="text" class="form-control" id="txtPassportNumber" onkeyup="EnableDisable(this)"
                            placeholder="Label API key to proceed" />
                        <label for="apiKey">Label API key to proceed</label>
                    </div>

                    <div class="row" id="btn-api-management-box">
                        <div class="col-md-6">
                            <a type="submit" class="btn btn-yellow shadow w-100">Cancel</a>
                        </div>
                        <div class="col-md-6">
                            <input class="btn btn-blue shadow w-100" id="btnSubmit" type="button" value="Submit"
                                disabled="disabled" data-bs-target="#warnMsg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="all-api-block">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body">
                    <div class="wm-custom-modal-header">
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                            <path
                                d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <div class="delete-all-api-content text-center">
                        <svg viewBox="0 0 96 96" fill="none" class="wealth-icon-lg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M88 48c0 22.091-17.909 40-40 40S8 70.091 8 48 25.909 8 48 8s40 17.909 40 40z"
                                fill="url(#general-warning_svg__paint0_linear_22059_28207)"></path>
                            <path d="M48 19c16.016 0 29 12.984 29 29S64.016 77 48 77 19 64.016 19 48s12.984-29 29-29z"
                                fill="url(#general-warning_svg__paint1_linear_22059_28207)"></path>
                            <path d="M45 66h6v-6h-6v6zM51 54V30h-6v24h6z" fill="#14151A"></path>
                            <defs>
                                <linearGradient id="general-warning_svg__paint0_linear_22059_28207" x1="8" y1="48"
                                    x2="102.5" y2="48" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B" stop-opacity="0"></stop>
                                    <stop offset="1" stop-color="#F0B90B"></stop>
                                </linearGradient>
                                <linearGradient id="general-warning_svg__paint1_linear_22059_28207" x1="77" y1="48"
                                    x2="19" y2="48" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F0B90B"></stop>
                                    <stop offset="1" stop-color="#F8D33A"></stop>
                                </linearGradient>
                            </defs>
                        </svg>
                        <h5 class="text-center">Are you sure you want to delete all API keys? </h5>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="javascript:void(0);" class="btn btn-default w-100"
                                    id="cancel-delete-api">Cancel </a>
                            </div>
                            <div class="col-md-6">
                                <a href="javascript:void(0);" class="btn btn-yellow shadow w-100"
                                    id="delete-api-confirm">Confirm </a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <div id="delete-api-complete"> </div>

    <div class="alert alert-warning alert-dismissible" id="delete-api-inner-alert-box">
        <button type="button" class="btn-close btn-close-api-delete" data-bs-dismiss="alert"></button>
        <strong>Completed!</strong> All API keys Delete process.
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 @include('template.web_footer')
    <script>
    $("#delete-all-api-btn").click(function() {
        $('#all-api-block').children(".hide").addClass("custom-modal-bck-bg").removeClass("hide");
    });
    </script>
    <script>
    $("#create-api-modal-popup").click(function() {
        $('#create-api-modal-main').children(".hide").addClass("custom-modal-bck-bg").removeClass("hide");
    });
    </script>







    <script>
    $(".open_modal").click(function() {
        $('#modal_open_id').children(".hide").addClass("custom-modal-bck-bg").removeClass("hide");
    });
    </script>
    <script>
    $('.product-card').click(function() {
        $(this).addClass('selected').siblings().removeClass('selected');
    });
    </script>

    <script>
    $(document).ready(function() {
        $("#create-api-modal-popup").click(function() {
            $('#modal_open_id').children(".custom-modal-bck-bg").addClass("hide").removeClass(
                "custom-modal-bck-bg");
        });

        $("#btnSubmit").click(function() {
            $('#create-api-modal-main').children(".custom-modal-bck-bg").addClass("hide").removeClass(
                "custom-modal-bck-bg");
        });
        $("#cancel-delete-api").click(function() {
            $('#all-api-block').children(".custom-modal-bck-bg").addClass("hide").removeClass(
                "custom-modal-bck-bg");
        });
        $("#delete-api-confirm").click(function() {
            $('#all-api-block').children(".custom-modal-bck-bg").addClass("hide").removeClass(
                "custom-modal-bck-bg");
            $('#delete-api-complete').show();
            $('#delete-api-inner-alert-box').show();
             $('#delete-api-complete').delay(3000).fadeOut('slow');
             $('#delete-api-inner-alert-box').delay(3000).fadeOut('slow');

                $('.btn-close-api-delete').click(function(){
                    $('.alert-dismissible').addClass('hide');
                    $('#delete-api-complete').hide();
                    $('#delete-api-inner-alert-box').hide();
                })
        });



        function showDiv(divId, element) {
            document.getElementById(divId).style.display = element.value == 1 ? 'block' : 'none';
        }
    });
    </script>

    <script type="text/javascript">
    function EnableDisable(txtPassportNumber) {
        //Reference the Button.
        var btnSubmit = document.getElementById("btnSubmit");

        //Verify the TextBox value.
        if (txtPassportNumber.value.trim() != "") {
            //Enable the TextBox when TextBox has value.
            btnSubmit.disabled = false;
        } else {
            //Disable the TextBox when TextBox is empty.
            btnSubmit.disabled = true;
        }
    };
    </script>


</body>

</html>

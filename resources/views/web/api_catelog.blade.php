<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <!-- <link rel='stylesheet' href="{{('../assets/css/deepak_custom.css') }}"> -->
    <link rel='stylesheet' href="{{('../assets/css/style_main.css') }}">
    <style>
#footer .footer_section{
    position:relative;
}
.left-peek-character {
display:none;
}


    @media(device-width:1024px) and (device-height:1366px) {
    #api-changelog-left-sidebar {
        height: 850px;
        max-height: 705px;
        overflow: scroll;
    }
    #announcements-listing-section .flip-box-front {
        background-color: #FAFAFA;
        color: black;
        padding: 20px;
        text-align: left;
        min-width: 100%;
        min-height: 350px!important;
        border-radius: 10px;
        border: 1px solid #fdc116;
    }
}
@media (min-width:577px) and (max-width:767px){

    #api-catalog-document .col-lg-5{
        width:50%!important;
    }
    #api-catelog-sidebar {
    display: block!important;
    width: 145px;
    height: 42px;
    }
    body{
        overflow:hidden;
    }
}
@media(max-width:576px){
    #api-catalog-document .col-lg-5{
        width:100%!important;
    }
    #api-catelog-sidebar {
    display: block!important;
    width: 145px;
    height: 42px;
    }
    #api-catalog-document .scrollspy-example {
    height: 350px;
    overflow-y: scroll;
    border: 1px solid #dbd3d3;
    padding: 10px;
}
}
@media(device-width:768px) and (device-height:1024px){
    #api-changelog-left-sidebar {
        height: 850px;
        max-height: 705px;
        overflow: scroll;
    }
}
#api-catelog-sidebar{
    display:none;
}
    </style>
</head>

<body>

    <section class="api-documentation-catalog" id="api-catalog-document">
        <div class="container-fluid">
            <div class="sec-title text-left">
                <a href="https://wealthmark.io/en/api-documentation" class="title" id="api-left-back-arrow">
                    <svg width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    Back to Main Page
                </a>
                <span class="title">Know About</span>
                <h2 class="heading-h2">Wealth Mark <span class="yellow-text">API Change log</span></h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12">
                <a class="btn btn-warning float-start my-2" id="api-catelog-sidebar"><i class="bi bi-list"></i> Show sidebar </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2 col-lg-2" id="api-changelog-left-sidebar">
                    <div id="lex" class="list-group sticky-top">
                        <a class="list-group-item list-group-item-action" href="#sec1" id="sec1_tab">Change Log</a>
                        <a class="list-group-item list-group-item-action" href="#sec2" id="sec2_tab">General Info</a>
                        <a class="list-group-item list-group-item-action" href="#sec3" id="sec3_tab">Market Data
                            Endpoints</a>
                        <a class="list-group-item list-group-item-action" href="#sec4" id="sec4_tab">Account/Trade
                            Endpoints</a>
                        <a class="list-group-item list-group-item-action" href="#sec5" id="sec5_tab">Websocket Market
                            Streams</a>
                        <a class="list-group-item list-group-item-action" href="#sec6" id="sec6_tab">User Data
                            Streams</a>
                        <a class="list-group-item list-group-item-action" href="#sec7" id="sec7_tab">Market Maker
                            Endpoints</a>
                        <a class="list-group-item list-group-item-action" href="#sec8" id="sec8_tab">Error Codes</a>
                        <a class="list-group-item list-group-item-action" href="#sec9" id="sec9_tab">Error Codes-1000
                            Unknown</a>
                        <a class="list-group-item list-group-item-action" href="#sec10" id="sec10_tab">Error Codes-1001
                            Unknown</a>
                        <a class="list-group-item list-group-item-action" href="#sec11" id="sec11_tab">Error Codes-1002
                            Unknown</a>
                        <a class="list-group-item list-group-item-action" href="#sec13" id="sec12_tab">Error Codes-1014
                            Unknown</a>
                        <a class="list-group-item list-group-item-action" href="#sec14" id="sec13_tab">Error Codes-1015
                            Unknown</a>
                        <a class="list-group-item list-group-item-action" href="#sec15" id="sec14_tab">Error Codes-1016
                            Unknown</a>
                        <a class="list-group-item list-group-item-action" href="#sec16" id="sec15_tab">Error Codes-1020
                            Unknown</a>
                        <a class="list-group-item list-group-item-action" href="#sec17" id="sec16_tab">Error Codes-1021
                            Unknown</a>
                        <a class="list-group-item list-group-item-action" href="#sec18" id="sec17_tab">Wealth Mark
                            Future</a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 ">
                    <div class="scrollspy-example" data-bs-spy="scroll" data-bs-target="#lex" id="work"
                        data-offset="20">
                        <div class="scroll-spy-inner-box" id="sec1">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Change Log</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec2">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">General Info</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec3">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Market Data Endpoints</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec4">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Account/Trade Endpoints</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec5">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Websocket Market Streams</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec6">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">User Data Stream</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec7">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">User Data Stream</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec8">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Error Codes</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec9">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Error Codes 1000 Unknown</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec10">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Error Codes 1001 Unknown</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec11">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Error Codes 1002 Unknown </h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec12">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Error Code 1008 Unknown</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec13">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Error Codes 1014 Unknown</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec14">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Error Codes 1015 Unknown</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec15">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Error Code 1016 Unknown</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec16">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Error Code -1018 Unknown</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec17">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Error Code -1019 Unknown</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                        <div class="scroll-spy-inner-box" id="sec18">
                            <div class="sec-title text-left">
                                <span class="title">Know About</span>
                                <h2 class="heading-h2">Error Code - 1020 Unknown</h2>
                            </div>
                            <ol class="docx-ul">
                                <li> Trading on the Online Platform is subject to payment of a fee on each transaction
                                    executed (“Transaction Fee”). The Transaction Fee chargeable on each trade shall be
                                    as provided in the Fee Schedule.
                                </li>
                                <li> Deposit of Digital Assets in the Coin Wallet is currently free of charge. Deposit
                                    of fiat currency in the Fiat Wallet through any of the payment modes available;
                                    deposit and/or withdrawal of Digital Assets or fiat currency will be subject to fee
                                    or charges as stated in the Fee Schedule as available here.
                                </li>
                                <li> At present, you can solely make deposits into the Fiat Wallet by legally authorized
                                    and regulated IMPS/NEFT/RTGS etc. based bank transfers. There are no charges on
                                    withdrawals of fiat currency deposited in the Fiat Wallet. You understand and
                                    acknowledge that we may offer additional payment transfer methods in the future, and
                                    it shall be made available to you via the Online Platforms, as and when operational.
                                </li>
                                <li> You understand and acknowledge that we may offer additional payment transfer
                                    methods in the future, and it shall be made available to you via the Online
                                    Platforms, as and when operational.
                                </li>
                                <li> For processing of payment orders with the Company, you will be subject to the terms
                                    and conditions of services of the remitter banks or payment service providers. You
                                    shall address any issues relating to funds transfer to your respective remitter
                                    banks or payment service providers only.
                                </li>
                                <li> As owners of the Digital Assets held by you in the Coin Wallet, you are responsible
                                    to submit any/all taxes applicable to your Digital Assets in connection with the use
                                    of the Online Platforms and/or the Services to the appropriate tax authority under
                                    applicable laws. In the event we are required to make any tax deductions we will
                                    carry out the same as per applicable law.
                                </li>
                            </ol>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                  <div class="api-right-code-block">
                  <div class="change-log-code-1">
                        <blockquote>
                            <p>change-log-code-1</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        <blockquote>
                        <p><strong>/exchangeInfo format:</strong></p>
                        </blockquote>
                        </pre>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="p">{</span>
                                <span class="s2">"rateLimitType"</span><span class="p">:</span> <span class="s2">"REQUEST_WEIGHT"</span><span class="p">,</span>
                                <span class="s2">"interval"</span><span class="p">:</span> <span class="s2">"MINUTE"</span><span class="p">,</span>
                                <span class="s2">"intervalNum"</span><span class="p">:</span> <span class="mi">1</span><span class="p">,</span>
                                <span class="s2">"limit"</span><span class="p">:</span> <span class="mi">6000</span>
                            <span class="p">}</span>
                            </code>
                    </pre>
                        <blockquote>
                            <p><strong>/exchangeInfo format:</strong></p>
                        </blockquote>
                    </div>
                    <div class="change-log-code-2">
                        <blockquote>
                            <p>change-log-code-2:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                    <div class="change-log-code-3">
                        <blockquote>
                            <p>change-log-code-3:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                    <div class="change-log-code-4">
                        <blockquote>
                            <p>change-log-code-4:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                        <pre class="highlight javascript tab-javascript"><code>
                        <span class="p">{</span>
                        <span class="s2">"avgPrice"</span><span class="p">:</span> <span class="s2">"0.0"</span><span class="p">,</span>
                        <span class="s2">"clientOrderId"</span><span class="p">:</span> <span class="s2">"abc"</span><span class="p">,</span>
                        <span class="s2">"cumBase"</span><span class="p">:</span> <span class="s2">"0"</span><span class="p">,</span>
                        <span class="s2">"executedQty"</span><span class="p">:</span> <span class="s2">"0"</span><span class="p">,</span>
                        <span class="s2">"orderId"</span><span class="p">:</span> <span class="mi">1917641</span><span class="p">,</span>
                        <span class="s2">"origQty"</span><span class="p">:</span> <span class="s2">"0.40"</span><span class="p">,</span>
                        <span class="s2">"origType"</span><span class="p">:</span> <span class="s2">"TRAILING_STOP_MARKET"</span><span class="p">,</span>
                        <span class="s2">"price"</span><span class="p">:</span> <span class="s2">"0"</span><span class="p">,</span>
                        <span class="s2">"reduceOnly"</span><span class="p">:</span> <span class="kc">false</span><span class="p">,</span>
                        <span class="s2">"side"</span><span class="p">:</span> <span class="s2">"BUY"</span><span class="p">,</span>
                        <span class="s2">"positionSide"</span><span class="p">:</span> <span class="s2">"SHORT"</span><span class="p">,</span>
                        <span class="s2">"status"</span><span class="p">:</span> <span class="s2">"NEW"</span><span class="p">,</span>
                        <span class="s2">"stopPrice"</span><span class="p">:</span> <span class="s2">"9300"</span><span class="p">,</span>                <span class="c1">// please ignore when order type is TRAILING_STOP_MARKET</span>
                        <span class="s2">"closePosition"</span><span class="p">:</span> <span class="kc">false</span><span class="p">,</span>             <span class="c1">// if Close-All</span>
                        <span class="s2">"symbol"</span><span class="p">:</span> <span class="s2">"BTCUSD_200925"</span><span class="p">,</span>
                        <span class="s2">"pair"</span><span class="p">:</span> <span class="s2">"BTCUSD"</span>
                        <span class="s2">"time"</span><span class="p">:</span> <span class="mi">1579276756075</span><span class="p">,</span>              <span class="c1">// order time</span>
                        <span class="s2">"timeInForce"</span><span class="p">:</span> <span class="s2">"GTC"</span><span class="p">,</span>
                        <span class="s2">"type"</span><span class="p">:</span> <span class="s2">"TRAILING_STOP_MARKET"</span><span class="p">,</span>
                        <span class="s2">"activatePrice"</span><span class="p">:</span> <span class="s2">"9020"</span><span class="p">,</span>            <span class="c1">// activation price, only return with TRAILING_STOP_MARKET order</span>
                        <span class="s2">"priceRate"</span><span class="p">:</span> <span class="s2">"0.3"</span><span class="p">,</span>                 <span class="c1">// callback rate, only return with TRAILING_STOP_MARKET order                       </span>
                        <span class="s2">"updateTime"</span><span class="p">:</span> <span class="mi">1579276756075</span><span class="p">,</span>
                        <span class="s2">"workingType"</span><span class="p">:</span> <span class="s2">"CONTRACT_PRICE"</span><span class="p">,</span>
                        <span class="s2">"priceProtect"</span><span class="p">:</span> <span class="kc">false</span>               <span class="c1">// if conditional order trigger is protected        </span>
                    <span class="p">}</span>
                    </code></pre>
                    </div>
                    <div class="change-log-code-5">
                        <blockquote>
                            <p>change-log-code-5:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                    <div class="change-log-code-6">
                        <blockquote>
                            <p>change-log-code-6:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                    <div class="change-log-code-7">
                        <blockquote>
                            <p>change-log-code-7:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                    <div class="change-log-code-8">
                        <blockquote>
                            <p>change-log-code-8:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                    <div class="change-log-code-9">
                        <blockquote>
                            <p>change-log-code-9:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                    <div class="change-log-code-10">
                        <blockquote>
                            <p>change-log-code-10:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                    <div class="change-log-code-11">
                        <blockquote>
                            <p>change-log-code-11:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                        <pre class="highlight javascript tab-javascript"><code>
                            <span class="p">{</span>
                            <span class="s2">"avgPrice"</span><span class="p">:</span> <span class="s2">"0.0"</span><span class="p">,</span>
                            <span class="s2">"clientOrderId"</span><span class="p">:</span> <span class="s2">"abc"</span><span class="p">,</span>
                            <span class="s2">"cumBase"</span><span class="p">:</span> <span class="s2">"0"</span><span class="p">,</span>
                            <span class="s2">"executedQty"</span><span class="p">:</span> <span class="s2">"0"</span><span class="p">,</span>
                            <span class="s2">"orderId"</span><span class="p">:</span> <span class="mi">1917641</span><span class="p">,</span>
                            <span class="s2">"origQty"</span><span class="p">:</span> <span class="s2">"0.40"</span><span class="p">,</span>
                            <span class="s2">"origType"</span><span class="p">:</span> <span class="s2">"TRAILING_STOP_MARKET"</span><span class="p">,</span>
                            <span class="s2">"price"</span><span class="p">:</span> <span class="s2">"0"</span><span class="p">,</span>
                            <span class="s2">"reduceOnly"</span><span class="p">:</span> <span class="kc">false</span><span class="p">,</span>
                            <span class="s2">"side"</span><span class="p">:</span> <span class="s2">"BUY"</span><span class="p">,</span>
                            <span class="s2">"positionSide"</span><span class="p">:</span> <span class="s2">"SHORT"</span><span class="p">,</span>
                            <span class="s2">"status"</span><span class="p">:</span> <span class="s2">"NEW"</span><span class="p">,</span>
                            <span class="s2">"stopPrice"</span><span class="p">:</span> <span class="s2">"9300"</span><span class="p">,</span>                <span class="c1">// please ignore when order type is TRAILING_STOP_MARKET</span>
                            <span class="s2">"closePosition"</span><span class="p">:</span> <span class="kc">false</span><span class="p">,</span>             <span class="c1">// if Close-All</span>
                            <span class="s2">"symbol"</span><span class="p">:</span> <span class="s2">"BTCUSD_200925"</span><span class="p">,</span>
                            <span class="s2">"pair"</span><span class="p">:</span> <span class="s2">"BTCUSD"</span>
                            <span class="s2">"time"</span><span class="p">:</span> <span class="mi">1579276756075</span><span class="p">,</span>              <span class="c1">// order time</span>
                            <span class="s2">"timeInForce"</span><span class="p">:</span> <span class="s2">"GTC"</span><span class="p">,</span>
                            <span class="s2">"type"</span><span class="p">:</span> <span class="s2">"TRAILING_STOP_MARKET"</span><span class="p">,</span>
                            <span class="s2">"activatePrice"</span><span class="p">:</span> <span class="s2">"9020"</span><span class="p">,</span>            <span class="c1">// activation price, only return with TRAILING_STOP_MARKET order</span>
                            <span class="s2">"priceRate"</span><span class="p">:</span> <span class="s2">"0.3"</span><span class="p">,</span>                 <span class="c1">// callback rate, only return with TRAILING_STOP_MARKET order                       </span>
                            <span class="s2">"updateTime"</span><span class="p">:</span> <span class="mi">1579276756075</span><span class="p">,</span>
                            <span class="s2">"workingType"</span><span class="p">:</span> <span class="s2">"CONTRACT_PRICE"</span><span class="p">,</span>
                            <span class="s2">"priceProtect"</span><span class="p">:</span> <span class="kc">false</span>               <span class="c1">// if conditional order trigger is protected        </span>
                            <span class="p">}</span>
                            </code></pre>
                    </div>
                    <div class="change-log-code-12">
                        <blockquote>
                            <p>change-log-code-12:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                    <div class="change-log-code-13">
                        <blockquote>
                            <p>change-log-code-13:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>
                        <span class="p">{</span>
                            <span class="s2">"avgPrice"</span><span class="p">:</span> <span class="s2">"0.0"</span><span class="p">,</span>
                            <span class="s2">"clientOrderId"</span><span class="p">:</span> <span class="s2">"abc"</span><span class="p">,</span>
                            <span class="s2">"cumBase"</span><span class="p">:</span> <span class="s2">"0"</span><span class="p">,</span>
                            <span class="s2">"executedQty"</span><span class="p">:</span> <span class="s2">"0"</span><span class="p">,</span>
                            <span class="s2">"orderId"</span><span class="p">:</span> <span class="mi">1917641</span><span class="p">,</span>
                            <span class="s2">"origQty"</span><span class="p">:</span> <span class="s2">"0.40"</span><span class="p">,</span>
                            <span class="s2">"origType"</span><span class="p">:</span> <span class="s2">"TRAILING_STOP_MARKET"</span><span class="p">,</span>
                            <span class="s2">"price"</span><span class="p">:</span> <span class="s2">"0"</span><span class="p">,</span>
                            <span class="s2">"reduceOnly"</span><span class="p">:</span> <span class="kc">false</span><span class="p">,</span>
                            <span class="s2">"side"</span><span class="p">:</span> <span class="s2">"BUY"</span><span class="p">,</span>
                            <span class="s2">"positionSide"</span><span class="p">:</span> <span class="s2">"SHORT"</span><span class="p">,</span>
                            <span class="s2">"status"</span><span class="p">:</span> <span class="s2">"NEW"</span><span class="p">,</span>
                            <span class="s2">"stopPrice"</span><span class="p">:</span> <span class="s2">"9300"</span><span class="p">,</span>                <span class="c1">// please ignore when order type is TRAILING_STOP_MARKET</span>
                            <span class="s2">"closePosition"</span><span class="p">:</span> <span class="kc">false</span><span class="p">,</span>             <span class="c1">// if Close-All</span>
                            <span class="s2">"symbol"</span><span class="p">:</span> <span class="s2">"BTCUSD_200925"</span><span class="p">,</span>
                            <span class="s2">"pair"</span><span class="p">:</span> <span class="s2">"BTCUSD"</span>
                            <span class="s2">"time"</span><span class="p">:</span> <span class="mi">1579276756075</span><span class="p">,</span>              <span class="c1">// order time</span>
                            <span class="s2">"timeInForce"</span><span class="p">:</span> <span class="s2">"GTC"</span><span class="p">,</span>
                            <span class="s2">"type"</span><span class="p">:</span> <span class="s2">"TRAILING_STOP_MARKET"</span><span class="p">,</span>
                            <span class="s2">"activatePrice"</span><span class="p">:</span> <span class="s2">"9020"</span><span class="p">,</span>            <span class="c1">// activation price, only return with TRAILING_STOP_MARKET order</span>
                            <span class="s2">"priceRate"</span><span class="p">:</span> <span class="s2">"0.3"</span><span class="p">,</span>                 <span class="c1">// callback rate, only return with TRAILING_STOP_MARKET order                       </span>
                            <span class="s2">"updateTime"</span><span class="p">:</span> <span class="mi">1579276756075</span><span class="p">,</span>
                            <span class="s2">"workingType"</span><span class="p">:</span> <span class="s2">"CONTRACT_PRICE"</span><span class="p">,</span>
                            <span class="s2">"priceProtect"</span><span class="p">:</span> <span class="kc">false</span>               <span class="c1">// if conditional order trigger is protected        </span>
                        <span class="p">}</span>
                        </code></pre>
                    </div>
                    <div class="change-log-code-14">
                        <blockquote>
                            <p>change-log-code-14:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                    <div class="change-log-code-15">
                        <blockquote>
                            <p>change-log-code-15:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                    <div class="change-log-code-16">
                        <blockquote>
                            <p>change-log-code-16:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                    <div class="change-log-code-17">
                        <blockquote>
                            <p>change-log-code-17:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>
                        <span class="p">{</span>
                        <span class="s2">"avgPrice"</span><span class="p">:</span> <span class="s2">"0.0"</span><span class="p">,</span>
                        <span class="s2">"clientOrderId"</span><span class="p">:</span> <span class="s2">"abc"</span><span class="p">,</span>
                        <span class="s2">"cumBase"</span><span class="p">:</span> <span class="s2">"0"</span><span class="p">,</span>
                        <span class="s2">"executedQty"</span><span class="p">:</span> <span class="s2">"0"</span><span class="p">,</span>
                        <span class="s2">"orderId"</span><span class="p">:</span> <span class="mi">1917641</span><span class="p">,</span>
                        <span class="s2">"origQty"</span><span class="p">:</span> <span class="s2">"0.40"</span><span class="p">,</span>
                        <span class="s2">"origType"</span><span class="p">:</span> <span class="s2">"TRAILING_STOP_MARKET"</span><span class="p">,</span>
                        <span class="s2">"price"</span><span class="p">:</span> <span class="s2">"0"</span><span class="p">,</span>
                        <span class="s2">"reduceOnly"</span><span class="p">:</span> <span class="kc">false</span><span class="p">,</span>
                        <span class="s2">"side"</span><span class="p">:</span> <span class="s2">"BUY"</span><span class="p">,</span>
                        <span class="s2">"positionSide"</span><span class="p">:</span> <span class="s2">"SHORT"</span><span class="p">,</span>
                        <span class="s2">"status"</span><span class="p">:</span> <span class="s2">"NEW"</span><span class="p">,</span>
                        <span class="s2">"stopPrice"</span><span class="p">:</span> <span class="s2">"9300"</span><span class="p">,</span>                <span class="c1">// please ignore when order type is TRAILING_STOP_MARKET</span>
                        <span class="s2">"closePosition"</span><span class="p">:</span> <span class="kc">false</span><span class="p">,</span>             <span class="c1">// if Close-All</span>
                        <span class="s2">"symbol"</span><span class="p">:</span> <span class="s2">"BTCUSD_200925"</span><span class="p">,</span>
                        <span class="s2">"pair"</span><span class="p">:</span> <span class="s2">"BTCUSD"</span>
                        <span class="s2">"time"</span><span class="p">:</span> <span class="mi">1579276756075</span><span class="p">,</span>              <span class="c1">// order time</span>
                        <span class="s2">"timeInForce"</span><span class="p">:</span> <span class="s2">"GTC"</span><span class="p">,</span>
                        <span class="s2">"type"</span><span class="p">:</span> <span class="s2">"TRAILING_STOP_MARKET"</span><span class="p">,</span>
                        <span class="s2">"activatePrice"</span><span class="p">:</span> <span class="s2">"9020"</span><span class="p">,</span>            <span class="c1">// activation price, only return with TRAILING_STOP_MARKET order</span>
                        <span class="s2">"priceRate"</span><span class="p">:</span> <span class="s2">"0.3"</span><span class="p">,</span>                 <span class="c1">// callback rate, only return with TRAILING_STOP_MARKET order                       </span>
                        <span class="s2">"updateTime"</span><span class="p">:</span> <span class="mi">1579276756075</span><span class="p">,</span>
                        <span class="s2">"workingType"</span><span class="p">:</span> <span class="s2">"CONTRACT_PRICE"</span><span class="p">,</span>
                        <span class="s2">"priceProtect"</span><span class="p">:</span> <span class="kc">false</span>               <span class="c1">// if conditional order trigger is protected        </span>
                        <span class="p">}</span>
                        </code></pre>
                    </div>
                    <div class="change-log-code-18">
                        <blockquote>
                            <p>change-log-code-18:</p>
                        </blockquote>
                        <pre class="highlight javascript tab-javascript"><code>  <span class="k">if</span> <span class="p">(</span><span class="nx">timestamp</span> <span class="o">&lt;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">+</span> <span class="mi">1000</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">serverTime</span> <span class="o">-</span> <span class="nx">timestamp</span><span class="p">)</span> <span class="o">&lt;=</span> <span class="nx">recvWindow</span><span class="p">){</span>
                        <span class="c1">// process request</span>
                        <span class="p">}</span>
                        <span class="k">else</span> <span class="p">{</span>
                        <span class="c1">// reject request</span>
                        <span class="p">}</span>
                        </code>
                        </pre>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#sec1_tab").click(function() {
            $("#sec1").show();
            $(".change-log-code-1").show();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec2_tab").click(function() {
            $("#sec2").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").show();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec3_tab").click(function() {
            $("#sec3").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").show();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec4_tab").click(function() {
            $("#sec4").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").show();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec5_tab").click(function() {
            $("#sec5").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").show();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec6_tab").click(function() {
            $("#sec6").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").show();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec7_tab").click(function() {
            $("#sec7").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").show();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec8_tab").click(function() {
            $("#sec8").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").show();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec9_tab").click(function() {
            $("#sec9").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").show();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec10_tab").click(function() {
            $("#sec10").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").show();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec11_tab").click(function() {
            $("#sec11").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").show();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec12_tab").click(function() {
            $("#sec12").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").show();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec13_tab").click(function() {
            $("#sec13").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").show();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec14_tab").click(function() {
            $("#sec14").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").show();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec15_tab").click(function() {
            $("#sec15").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").show();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec16_tab").click(function() {
            $("#sec16").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").show();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").hide();
        });
        $("#sec17_tab").click(function() {
            $("#sec17").show();
            $(".change-log-code-1").hide();
            $(".change-log-code-2").hide();
            $(".change-log-code-3").hide();
            $(".change-log-code-4").hide();
            $(".change-log-code-5").hide();
            $(".change-log-code-6").hide();
            $(".change-log-code-7").hide();
            $(".change-log-code-8").hide();
            $(".change-log-code-9").hide();
            $(".change-log-code-10").hide();
            $(".change-log-code-11").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-13").hide();
            $(".change-log-code-12").hide();
            $(".change-log-code-14").hide();
            $(".change-log-code-15").hide();
            $(".change-log-code-16").hide();
            $(".change-log-code-17").show();
        });
    });
    </script>
    <script>
    $('.collapse').collapse()
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#api-catelog-sidebar").click(function(){
    $("#api-changelog-left-sidebar").toggle();
  });
});
</script>

    @include('template.country_language')
    @include('template.web_footer')
</body>

</html>

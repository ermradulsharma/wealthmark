<?php
function hideEmailAddress($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        [$first, $last] = explode('@', $email);
        $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first) - 3), $first);
        $last = explode('.', $last);
        $last_domain = str_replace(substr($last['0'], '10'), str_repeat('*', strlen($last['0']) - 1), $last['0']);
        $hideEmailAddress = $first . '@' . $last_domain . '.' . $last['1'];
        return $hideEmailAddress;
    }
}
?>

<span class="screen-darken">
</span>
<header class="mobile-header d-lg-none  bg-white shadow-sm">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-2">
                <a href="{{ url('') }}" class="navbar-brand">
                    <img src="{{ asset('img/wealthmark-logo.svg') }}" alt=""
                        class="wealthmark-logo mt-2">
                </a>
            </div>
            <div class="col-8 d-flex justify-content-end align-items-center mob-nav">
                <!--<span class="bi bi-grid-3x3-gap btn-mobile-nav-left" data-trigger="right_nav"></span>-->

                @auth

                <div class="show_if_login navbar flex-nowrap">
                    <div class="nav-item dropdown no-dropdown-arrow left-header-custom-nav wallet">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <span class="nav-img" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                data-bs-original-title="Wallet">
                                <img src="{{ asset('img/header-icons/mobile-bar-icons/empty-wallet.svg') }}"
                                    class="img-responsive"> </span>
                            <!--<span class="nav-img d-lg-none"><img src="{{ asset('img/header-icons/mobile-bar-icons/empty-wallet.svg') }}" class="img-responsive mr-0"> </span>-->
                            <!--<span class="hide-575">   Wallet</span>-->
                        </a>
                        <ul class="dropdown-menu fade-down dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/overview">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/wealthmark-futures-overview.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> Overview</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/fiat-and-spot">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/responsible-trading.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> Fiat and Spot</span>
                                            <!--   <p class="mb-0">Deposit & Widtdraw</p> -->
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/funding">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/coin-m-futures.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> Funding</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/futures">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/vanilla-option.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> Futures </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/earn">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/leveraged-tokens.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> Earn</span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="nav-item dropdown no-dropdown-arrow left-header-custom-nav order">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <span class="nav-img d-lg-none" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="" data-bs-original-title="order">
                                <img src="{{ asset('img/header-icons/mobile-bar-icons/order.svg') }}"
                                    class="img-responsive"> </span>
                            <!--<span class="nav-img d-lg-none"><img src="{{ asset('img/header-icons/mobile-bar-icons/order.svg') }}" class="img-responsive mr-0"> </span>-->
                            <!--<span class="hide-575">   Order</span>-->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end  fade-down">
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/spot-order">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/wealthmark-futures-overview.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> Spot Order</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/margin-order">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/responsible-trading.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> Margin Order</span>
                                            <!--<p class="mb-0">Deposit & Widtdraw</p> -->
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/p2p-order">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/coin-m-futures.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> Orders</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/earn-history">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/vanilla-option.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> Earn History </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="{{ url(app()->getLocale()) }}/user/buy-crypto-history">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/leveraged-tokens.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> Buy Crypto History</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/coin-staking">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/leveraged-tokens.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> Staking</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-item dropdown no-dropdown-arrow left-header-custom-nav max-width-300 user">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <span class="nav-img menu_avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="" data-bs-original-title="User Profile">
                                @if (Auth::user()->avatar != null)
                                <img src="{{ asset('img/avatar') . '/' . Auth::user()->avatar }}"
                                    alt="">
                                @else
                                <!--<i class="bi bi-person-circle user-icon-desktop"></i>-->
                                <span class="nav-img d-lg-none"> <img
                                        src="{{ asset('img/header-icons/mobile-bar-icons/user.svg') }}"
                                        class="img-responsive mr-0"> </span>
                                @endif


                            </span>
                            <!--<span class="d-lg-none user-name-txt hide-575"> User</span>-->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end fade-down">
                            <li class="">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <div class="phone">
                                        <i class="bi bi-tablet-fill me-2"></i>
                                        @if (Auth::user()->is_phone_verified == 1)
                                        {{ substr(Auth::user()->phone, 0, 3) . '***' . substr(Auth::user()->phone, 6, 4) }}
                                        @else
                                        {{ hideEmailAddress(Auth::user()->email) }}
                                        @endif
                                    </div>
                                </a>
                            </li>
                            <li class="py-0-important">
                                <a class="dropdown-item no-hover py-0-important" href="javascript:void(0)">
                                    <div class="verify-box-dropdown">
                                        <span class="user-type">
                                            <i class="bi bi-wifi me-2"></i> Regular User
                                        </span>
                                        @if (Auth::user()->government_id_verified == 0)
                                        <span class="verify-status">
                                            <!--<i class="bi bi-wifi me-2"></i>-->
                                            Unverified
                                        </span>
                                        @endif
                                        @if (Auth::user()->government_id_verified == 1)
                                        <span class="verify-status"
                                            style="background-color:green;color:white;font-size:12px;">
                                            <!--<i class="bi bi-wifi me-2" style="font-size:12px;"></i>-->
                                            Verified
                                        </span>
                                        @endif
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/dashboard">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-grid header-icons"></i>
                                        <div class="d-block">
                                            <span> Dashboard</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/security">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-shield-check header-icons"></i>
                                        <div class="d-block">
                                            <span> Security</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/identification">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-fingerprint header-icons"></i>
                                        <div class="d-block">
                                            <span> Identification</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/payment">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-coin header-icons"></i>
                                        <div class="d-block">
                                            <span> Payment </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person-plus header-icons"></i>
                                        <div class="d-block">
                                            <span> Lending</span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/market">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-shop-window  header-icons"></i>
                                        <div class="d-block">
                                            <span> Market</span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/referral">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person-plus header-icons"></i>
                                        <div class="d-block">
                                            <span> Refferal</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/reward-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-cash-stack header-icons"></i>
                                        <div class="d-block">
                                            <span> Reward Center</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/task-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-cash-stack header-icons"></i>
                                        <div class="d-block">
                                            <span> Task Center</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @if (Auth::user()->account_type != 1)
                            <li>
                                <a class="dropdown-item"
                                    href="{{ url(app()->getLocale()) }}/user/api-management">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person header-icons"></i>
                                        <div class="d-block">
                                            <span> API Management</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endif
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/settings">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-sliders header-icons"></i>
                                        <div class="d-block">
                                            <span> Settings </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li style="border-top:2px solid whitesmoke;">
                                <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/logout">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-box-arrow-right header-icons"></i>
                                        <div class="d-block">
                                            <span> Log Out </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-item dropdown no-dropdown-arrow left-header-custom-nav notification">
                        <a class="nav-link dropdown-toggle position-relative"
                            href="{{ url(app()->getLocale() . '/notifications') }}">

                            @php
                            $ChatController = new \App\Http\Controllers\ChatController();
                            $webmenu = $ChatController->webmenu();

                            $notification = $webmenu['notification'];
                            $count_allnotification = $webmenu['count_allnotification'];
                            $all_latest_notification = $webmenu['all_latest_notification'];

                            // $notification = App\Models\Notification::where('read_at',null)->where('deleted_at',null)->where('notifiable_id',Auth::user()->id)->get();
                            // $count_allnotification = $notification->count();
                            // $all_latest_notification = App\Models\Notification::where('read_at',null)->where('notifiable_id',Auth::user()->id)->orderBy('id', 'DESC')->latest('created_at')->take(5)->get();

                            @endphp
                            <span class="nav-img d-lg-none" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="" data-bs-original-title="Notification">
                                <img src="{{ asset('img/header-icons/mobile-bar-icons/top-right-notification.svg') }}"
                                    class="img-responsive mr-0"> </span>

                            @auth
                            <span class="notification_count" id="countNotification">
                                <?php
                                if ($count_allnotification < 100) {
                                    echo $count_allnotification;
                                } else {
                                    echo '99+';
                                }
                                ?>
                            </span>
                            @endauth
                        </a>



                    </div>
                </div>
                @else
                <a class="btn-blue  shadow d-flex justify-content-center align-items-center "
                    href="{{ url(app()->getLocale(), 'login') }}">
                    <span class="me-1"> <i class="bx bx-log-in-circle"></i> </span>
                    <span class="text-only"> Login </span>
                </a>

                <a class="btn-yellow shadow  d-flex justify-content-center align-items-center"
                    href="{{ url(app()->getLocale(), 'register') }}">
                    <span class="me-1">
                        <i class="bx bx-log-out-circle"></i>
                    </span>
                    <span class="text-only"> Register </span>
                </a>



                @endauth
            </div>
            <div class="col-2 d-flex justify-content-end align-items-center">


                <span class="bi bi-list btn-mobile-nav " data-trigger="navbar_main"></span>

            </div>

        </div>
    </div>
    </div>
</header>

<header id="header" class="border_new header-bg-top">
    <div class="container-fluid  second_border_new">
        <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg py-0">
            <div class="offcanvas-header justify-content-between">
                <a href="{{ url('/') }}" class="navbar-brand" id="find-2">
                    <img src="{{ asset('img/wealthmark-logo.svg') }}" alt="ss"
                        class="wealthmark-logo">
                </a>
                <span class="btn-close m-0 p-0"></span>
            </div>
            <a href="{{ url('/') }}" class="navbar-brand d-none d-lg-block">
                <img src="{{ asset('img/wealthmark-logo.svg') }}" alt="dd"
                    class="wealthmark-logo">
            </a>
            <div>
                <ul class="navbar-nav h-100">
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle click-off-event icon-link" href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <i class='bi bi-grid-3x3-gap d-none d-lg-inline-block'></i>
                            <span class="nav-img d-lg-none">
                                <img src="{{ asset('img/mob-nav-icon/product.svg') }}"
                                    class="img-responsive"> </span> <span class="d-inline-block d-lg-none"> Products
                            </span>
                        </a>
                        <div class="dropdown-menu megamenu " role="menu">
                            <div class="row g-0">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{ url(app()->getLocale(), 'exchange') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/mega-option/exchange.svg') }}"
                                                            class="header-icons" alt="Exchange" />
                                                        <div class="d-block">
                                                            <span> Exchange</span>
                                                            <p class="mb-0">Blockchain and crypto asset exchange</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url(app()->getLocale(), 'academy') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/mega-option/academy.svg') }}"
                                                            class="header-icons" alt="Academy" />
                                                        <div class="d-block">
                                                            <span> Academy</span>
                                                            <p class="mb-0">Blockchain and crypto education</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url(app()->getLocale(), 'broker') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/mega-option/broker.svg') }}"
                                                            class="header-icons" alt="Broker" />
                                                        <div class="d-block">
                                                            <span> Broker</span>
                                                            <p class="mb-0">Crypto Broker Service</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="{{ url(app()->getLocale(), 'vip-institutional-services') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/mega-option/institutional-and-vip.svg') }}"
                                                            class="header-icons" alt="Institutional Services" />
                                                        <div class="d-block">
                                                            <span> Institutional Services</span>
                                                            <p class="mb-0">Enterprise exchange solution</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{ url(app()->getLocale(), 'charity') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/mega-option/charity.svg') }}"
                                                            class="header-icons" alt="Charity" />
                                                        <div class="d-block">
                                                            <span> Charity</span>
                                                            <p class="mb-0">Blockchain for Charity</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url(app()->getLocale(), 'cloud') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/mega-option/cloud.svg') }}"
                                                            class="header-icons" alt="Cloud" />
                                                        <div class="d-block">
                                                            <span> Cloud</span>
                                                            <p class="mb-0">Corporate Exchange Solutions</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url(app()->getLocale(), 'dex') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/mega-option/dex.svg') }}"
                                                            class="header-icons" alt="Dex" />
                                                        <div class="d-block">
                                                            <span> Dex</span>
                                                            <p class="mb-0">Decentralized Digital Asset Exchange</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url(app()->getLocale(), 'labs') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/mega-option/lab.svg') }}"
                                                            class="header-icons" alt="Labs" />
                                                        <div class="d-block">
                                                            <span> Labs</span>
                                                            <p class="mb-0">Top Blockchain Projects</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{ url(app()->getLocale(), 'launchpad') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/mega-option/launchpad.svg') }}"
                                                            class="header-icons" alt="Launchpad" />
                                                        <div class="d-block">
                                                            <span> Launchpad</span>
                                                            <p class="mb-0">Token Launch Platform</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url(app()->getLocale(), 'research') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/mega-option/research.svg') }}"
                                                            class="header-icons" alt="Research" />
                                                        <div class="d-block">
                                                            <span> Research</span>
                                                            <p class="mb-0">Analysis Research and Development</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url(app()->getLocale(), 'trust-wallet') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/mega-option/trust-wallet.svg') }}"
                                                            class="header-icons" alt="Trust Wallet" />
                                                        <div class="d-block">
                                                            <span> WM Wallet</span>
                                                            <p class="mb-0">Most Secure and Reliable Wallet</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url(app()->getLocale(), 'gift-card') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/mega-option/gift-card.svg') }}"
                                                            class="header-icons" alt="Gift Card" />
                                                        <div class="d-block">
                                                            <span> Gift Card</span>
                                                            <p class="mb-0">All in One crypto Gift Card</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- dropdown-mega-menu. -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <span class="nav-img d-lg-none"><img
                                    src="{{ asset('img/mob-nav-icon/buy-crypto.svg') }}"
                                    class="img-responsive"> </span>
                            <span class="d-inline-block "> Buy&nbsp;Crypto</span> </a>
                        <ul class="dropdown-menu dropdown-menu-end fade-down">
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale(), 'card-deposite') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/buy-crypto/card-deposit.svg') }}"
                                            class="header-icons" alt="Card Deposit" />
                                        <div class="d-block">
                                            <span> Card Deposit</span>
                                            <p class="mb-0">Buy Crypto via Cards</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale() . '/p2p-trading/buy') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/buy-crypto/p2p-trading.svg') }}"
                                            class="header-icons" alt="P2P Trading" />
                                        <div class="d-block">
                                            <span> P2P Trading</span>
                                            <p class="mb-0">Bank transfer and 10+ options</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale(), 'cash-balance') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/buy-crypto/cash-balance.svg') }}"
                                            class="header-icons" alt="Cash Balance" />
                                        <div class="d-block">
                                            <span> Cash Balance</span>
                                            <p class="mb-0">Some Description About the Title</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="{{ url(app()->getLocale(), 'third-party-payment') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/buy-crypto/third-party-payment.svg') }}"
                                            class="header-icons" alt="Third Party Payment" />
                                        <div class="d-block">
                                            <span> Third Party Payment</span>
                                            <p class="mb-0">Some Description About the Title</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url(app()->getLocale(), 'markets') }}">
                            <span class="nav-img d-lg-none"><img
                                    src="{{ asset('img/mob-nav-icon/market.svg') }}"
                                    class="img-responsive"> </span>
                            <span class="d-inline-block"> Market</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle click-off-event icon-link" href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <span class="nav-img d-lg-none">
                                <img src="{{ asset('img/mob-nav-icon/trade.svg') }}"
                                    class="img-responsive">
                            </span>
                            <span class="d-inline-block"> Trade
                            </span>
                        </a>
                        <div class="dropdown-menu megamenu " role="menu">
                            <div class="row g-0">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'convert') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/trade/convert.svg') }}"
                                                            class="header-icons" alt="Convert" />
                                                        <div class="d-block">
                                                            <span> Convert</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'classic') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/trade/classic.svg') }}"
                                                            class="header-icons" alt="Classic" />
                                                        <div class="d-block">
                                                            <span> Classic</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'advanced') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/trade/advanced.svg') }}"
                                                            class="header-icons" alt="Advanced" />
                                                        <div class="d-block">
                                                            <span> Advanced</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'margin') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/trade/margin.svg') }}"
                                                            class="header-icons" alt="Margin" />
                                                        <div class="d-block">
                                                            <span> Margin</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">

                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'p2p-trading') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/trade/p2p.svg') }}"
                                                            class="header-icons" alt="P2P" />
                                                        <div class="d-block">
                                                            <span> P2P</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'strategy-trading') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/trade/strategy-trading.svg') }}"
                                                            class="header-icons" alt="Strategy Trading" />
                                                        <div class="d-block">
                                                            <span> Strategy Trading</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'swap-farming') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/trade/swap-farming.svg') }}"
                                                            class="header-icons" alt="Swap Farming" />
                                                        <div class="d-block">
                                                            <span> Swap Farming</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'fan-token') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/trade/fan-token.svg') }}"
                                                            class="header-icons" alt="Fan Token" />
                                                        <div class="d-block">
                                                            <span> Fan Token</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                        <!-- dropdown-mega-menu. -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <span class="nav-img d-lg-none"><img
                                    src="{{ asset('img/mob-nav-icon/derivatives.svg') }}"
                                    class="img-responsive"> </span>
                            <span class="d-inline-block"> Derivatives</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end fade-down">
                            <li>
                                <a class="dropdown-item"
                                    href="{{ url(app()->getLocale(), 'wealthmark-futures-overview') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/wealthmark-futures-overview.svg') }}"
                                            class="header-icons" alt="WealthMark Futures Overview" />
                                        <div class="d-block">
                                            <span> WealthMark Futures Overview</span>
                                            <p class="mb-0">Some Description About the Title</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="{{ url(app()->getLocale(), 'responsible-trading') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/responsible-trading.svg') }}"
                                            class="header-icons" alt="Responsible Trading" />
                                        <div class="d-block">
                                            <span> Responsible Trading</span>
                                            <p class="mb-0">Some Description About the Title</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale(), 'coin-m-futures') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/coin-m-futures.svg') }}"
                                            class="header-icons" alt="Coin-M Futures" />
                                        <div class="d-block">
                                            <span> Coin-M Futures</span>
                                            <p class="mb-0">Some Description About the Title</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale(), 'vanilla-options') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/vanilla-option.svg') }}"
                                            class="header-icons" alt="Vanilla Options" />
                                        <div class="d-block">
                                            <span> Vanilla Options</span>
                                            <p class="mb-0">Some Description About the Title</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale(), 'leveraged-tokens') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/leveraged-tokens.svg') }}"
                                            class="header-icons" alt="Leveraged Tokens" />
                                        <div class="d-block">
                                            <span> Leveraged Tokens</span>
                                            <p class="mb-0">Some Description About the Title</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale(), 'battle') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/derivatives/battle.svg') }}"
                                            class="header-icons" alt="Battle" />
                                        <div class="d-block">
                                            <span> Battle</span>
                                            <p class="mb-0">Some Description About the Title</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle click-off-event icon-link" href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <!--<i class='bi bi-grid-3x3-gap d-none d-lg-inline-block' ></i>-->
                            <span class="nav-img d-lg-none">

                                <img src="{{ asset('img/mob-nav-icon/earn.svg') }}"
                                    class="img-responsive">
                            </span>
                            <span class="d-inline-block"> Earn
                            </span>
                        </a>
                        <div class="dropdown-menu megamenu " role="menu">
                            <div class="row g-0">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'wealthmark-earn') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/earn/wealthmark-earn.svg') }}"
                                                            class="header-icons" alt=" WealthMark Earn" />
                                                        <div class="d-block">
                                                            <span> WealthMark Earn</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'launchpad') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/earn/launchpad.svg') }}"
                                                            class="header-icons" alt="Launchpad" />
                                                        <div class="d-block">
                                                            <span> Launchpad</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'simple-earn') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/earn/simple-earn.svg') }}"
                                                            class="header-icons" alt=" WealthMark Earn" />
                                                        <div class="d-block">
                                                            <span> Simple Earn</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'savings') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/earn/saving.svg') }}"
                                                            class="header-icons" alt="Saving" />
                                                        <div class="d-block">
                                                            <span> Saving</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'staking') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/earn/staking.svg') }}"
                                                            class="header-icons" alt="Staking" />
                                                        <div class="d-block">
                                                            <span> Staking</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'bmk-vault') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/earn/bm-vault.svg') }}"
                                                            class="header-icons" alt="BMVault" />
                                                        <div class="d-block">
                                                            <span> BMK Vault</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'dual-investment') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/earn/dual-investment.svg') }}"
                                                            class="header-icons" alt="Dual Investment" />
                                                        <div class="d-block">
                                                            <span> Dual Investment</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'liquidity-farming') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/earn/liquidity-farming.svg') }}"
                                                            class="header-icons" alt="Liquidity Farming" />
                                                        <div class="d-block">
                                                            <span> Liquidity Farming</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="col-megamenu">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'auto-invest') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/earn/auto-invest.svg') }}"
                                                            class="header-icons" alt="Auto Invest" />
                                                        <div class="d-block">
                                                            <span> Auto Invest</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url(app()->getLocale(), 'wealthmark-pool') }}">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/earn/wealthmark-pool.svg') }}"
                                                            class="header-icons" alt="WealthMark Pool" />
                                                        <div class="d-block">
                                                            <span> WealthMark Pool</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/header-icons/earn/wealthmark-pool.svg') }}"
                                                            class="header-icons" alt="WealthMark Pool" />
                                                        <div class="d-block">
                                                            <span> Referral</span>
                                                            <p class="mb-0">Some Description About the Title</p>
                                                        </div>
                                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- dropdown-mega-menu. -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">
                            <span class="nav-img d-lg-none"><img
                                    src="{{ asset('img/mob-nav-icon/finance.svg') }}"
                                    class="img-responsive"> </span>
                            <span class="d-inline-block"> Finance</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end fade-down">
                            <li>
                                <a class="dropdown-item"
                                    href="{{ url(app()->getLocale(), 'wealthmark-visa-card') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/Finance/wealthmark-pool.svg') }}"
                                            class="header-icons" alt="WealthMark Visa Card" />
                                        <div class="d-block">
                                            <span> Wealthmark Card</span>
                                            <p class="mb-0">Convert and pay with crypto</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale(), 'crypto-loans') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/Finance/crypto-loan.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> Crypto Loans</span>
                                            <p class="mb-0">Get an instant loan secured by crypto assets</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url(app()->getLocale(), 'wealthmark-pay') }}">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/Finance/wm-pay.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> WealthMark Pay</span>
                                            <p class="mb-0">Send and spend crypto</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="Javascript:void(0)">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('img/header-icons/Finance/wm-pay.svg') }}"
                                            class="header-icons" />
                                        <div class="d-block">
                                            <span> WealthMark Gift Card</span>
                                            <p class="mb-0">Crypto Gift card</p>
                                        </div>
                                        <i class="bi bi-arrow-right dropdown-icon-effect ms-3"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a class="nav-link txtleft" href="{{ url(app()->getLocale(), 'nft') }}">
                            <span class="nav-img d-lg-none"><img
                                    src="{{ asset('img/mob-nav-icon/nft.svg') }}"
                                    class="img-responsive"> </span>
                            <span class="d-inline-block"> NFT</span></a>
                    </li>
                    <li class="nav-item"> <a class="nav-link txtleft"
                            href="{{ url(app()->getLocale()) }}/corporate">
                            <span class="nav-img d-lg-none"><img
                                    src="{{ asset('img/mob-nav-icon/corporate.svg') }}"
                                    class="img-responsive"> </span>
                            <span class="d-inline-block"> Corporate</span></a>
                    </li>
                    <li class="nav-item"> <a class="nav-link txtleft" href="{{ url(app()->getLocale()) }}/wm-gold">
                            <span class="nav-img d-lg-none"><img
                                    src="{{ asset('img/mob-nav-icon/wm-gold.svg') }}"
                                    class="img-responsive"> </span>
                            <span class="d-inline-block"> WM&nbsp;Gold</span></a>
                    </li>
                </ul>
            </div>
            <div class="ms-auto align-items-center d-flex @auth user-login @endauth">
                <ul class="navbar-nav align-items-center">
                    <!--<li class="nav-item right-sidebar">-->
                    <!--   <a href="javascript:void(0)" class="sidebar-open-onclick"> <span class="bi bi-list"> </span> </a>   -->
                    <!--</li>-->
                    @auth


                    <div class="show_if_login">
                        <li class="nav-item dropdown no-dropdown-arrow left-header-custom-nav wallet">
                            <a class="nav-link dropdown-toggle " href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <span class="nav-img" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="" data-bs-original-title="wallet">
                                    <img src="{{ asset('img/header-icons/mobile-bar-icons/empty-wallet.svg') }}"
                                        class="img-responsive"> </span>
                                <!--<span class="text-only">   Wallet</span>-->
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end fade-down">

                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/overview">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('img/header-icons/wallet/overview.svg') }}"
                                                class="header-icons" />
                                            <div class="d-block">
                                                <span> Overview</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ url(app()->getLocale()) }}/user/fiat-and-spot">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('img/header-icons/wallet/fiat-spot.svg') }}"
                                                class="header-icons" />
                                            <div class="d-block">
                                                <span> Fiat and Spot</span>
                                                <p class="mb-0">Deposit & Widtdraw</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/funding">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('img/header-icons/wallet/funding.svg') }}"
                                                class="header-icons" />
                                            <div class="d-block">
                                                <span> Funding</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/futures">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('img/header-icons/wallet/future.svg') }}"
                                                class="header-icons" />
                                            <div class="d-block">
                                                <span> Futures </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/earn">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('img/header-icons/wallet/earn.svg') }}"
                                                class="header-icons" />
                                            <div class="d-block">
                                                <span> Earn</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown no-dropdown-arrow left-header-custom-nav order">
                            <a class="nav-link dropdown-toggle " href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <span class="nav-img" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="" data-bs-original-title="Order">
                                    <img src="{{ asset('img/header-icons/mobile-bar-icons/order.svg') }}"
                                        class="img-responsive">
                                </span>
                                <!--<span class="text-only">   Order</span>-->
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end fade-down">
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/spot-order">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('img/header-icons/order/spot-order.svg') }}"
                                                class="header-icons" />
                                            <div class="d-block">
                                                <span> Spot Order</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/margin-order">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('img/header-icons/order/marging-order.svg') }}"
                                                class="header-icons" />
                                            <div class="d-block">
                                                <span> Margin Order</span>
                                                <!--<p class="mb-0">Deposit & Widtdraw</p> -->
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/p2p-order">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('img/header-icons/order/p2p-order.svg') }}"
                                                class="header-icons" />
                                            <div class="d-block">
                                                <span> Orders</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/earn-history">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('img/header-icons/order/earn-history.svg') }}"
                                                class="header-icons" />
                                            <div class="d-block">
                                                <span> Earn History </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ url(app()->getLocale()) }}/user/buy-crypto-history">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('img/header-icons/order/buycrypto-history.svg') }}"
                                                class="header-icons" />
                                            <div class="d-block">
                                                <span> Buy Crypto History</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/coin-staking">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('img/header-icons/derivatives/leveraged-tokens.svg') }}"
                                                class="header-icons" />
                                            <div class="d-block">
                                                <span> Staking</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown no-dropdown-arrow left-header-custom-nav max-width-300 user">
                            <a class="nav-link dropdown-toggle " href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <span class="nav-img menu_avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="" data-bs-original-title="User Profile">
                                    @if (Auth::user()->avatar != null)
                                    <img width="20px"
                                        src="{{ asset('img/avatar') . '/' . Auth::user()->avatar }}"
                                        alt="" class=" img-responsiveborder rounded-circle">
                                    @else
                                    <!--<i class="bi bi-person-circle user-icon-desktop"></i>-->
                                    <span class="nav-img"> <img
                                            src="{{ asset('img/header-icons/mobile-bar-icons/user.svg') }}"
                                            class="img-responsive"> </span>
                                    @endif


                                </span>
                                <!--<span class="text-only user-name-txt"> User</span>-->
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end fade-down scrollbar-style">
                                <li class="">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <div class="phone">
                                            <i class="bi bi-tablet-fill me-2"></i>
                                            @if (Auth::user()->is_phone_verified == 1)
                                            {{ substr(Auth::user()->phone, 0, 3) . '***' . substr(Auth::user()->phone, 6, 4) }}
                                            @else
                                            {{ hideEmailAddress(Auth::user()->email) }}
                                            @endif
                                        </div>
                                    </a>
                                </li>
                                <li class="py-0-important">
                                    <a class="dropdown-item no-hover py-0-important" href="javascript:void(0)">
                                        <div class="verify-box-dropdown">
                                            <span class="user-type">
                                                <i class="bi bi-wifi me-2"></i> Regular User
                                            </span>
                                            @if (Auth::user()->government_id_verified == 0)
                                            <span class="verify-status">
                                                <i class="bi bi-wifi me-2"></i> Unverified
                                            </span>
                                            @endif
                                            @if (Auth::user()->government_id_verified == 1)
                                            <span class="verify-status"
                                                style="background-color:green;color:white;font-size:12px;">
                                                <i class="bi bi-wifi me-2" style="font-size:12px;"></i> Verified
                                            </span>
                                            @endif
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/dashboard">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-grid header-icons"></i>
                                            <div class="d-block">
                                                <span> Dashboard</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/security">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-shield-check header-icons"></i>
                                            <div class="d-block">
                                                <span> Security</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ url(app()->getLocale()) }}/user/identification">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-fingerprint header-icons"></i>
                                            <div class="d-block">
                                                <span> Identification</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/payment">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-coin header-icons"></i>
                                            <div class="d-block">
                                                <span> Payment </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person-plus header-icons"></i>
                                            <div class="d-block">
                                                <span> Lending</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/market">
                                        <div class="d-flex align-items-center">
                                            <!--<i class="bi bi-person-plus"></i>-->
                                            <i class="bi bi-shop-window  header-icons"></i>
                                            <div class="d-block">
                                                <span> Market</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/referral">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person-plus header-icons"></i>
                                            <div class="d-block">
                                                <span> Refferal</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ url(app()->getLocale()) }}/user/reward-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-cash-stack header-icons"></i>
                                            <div class="d-block">
                                                <span> Reward Center</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/task-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-cash-stack header-icons"></i>
                                            <div class="d-block">
                                                <span> Task Center</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                @if (Auth::user()->account_type != 1)
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ url(app()->getLocale()) }}/user/api-management">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person header-icons"></i>
                                            <div class="d-block">
                                                <span> API Management</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endif

                                <li>
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/settings">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-sliders header-icons"></i>
                                            <div class="d-block">
                                                <span> Settings </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li style="border-top:2px solid whitesmoke;">
                                    <a class="dropdown-item" href="{{ url(app()->getLocale()) }}/user/logout">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-box-arrow-right header-icons"></i>
                                            <div class="d-block">
                                                <span> Log Out </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item dropdown no-dropdown-arrow left-header-custom-nav notification no-dropdown-arrow">
                            <a class="nav-link dropdown-toggle position-relative" href="javascript:void(0);"
                                data-bs-toggle="dropdown">

                                <!--<span class="">   <i class="bi bi-bell-fill user-icon-desktop"></i></span>-->

                                <span class="nav-img" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="" data-bs-original-title="Notification"
                                    id="getLatestNotificationsBtn">
                                    <img src="{{ asset('img/header-icons/mobile-bar-icons/top-right-notification.svg') }}"
                                        class="img-responsive">
                                    <!--@auth {{ $count_allnotification }}@endauth-->
                                </span>
                                @auth
                                <span class="notification_count" id="countNotification">
                                    <?php
                                    if ($count_allnotification < 100) {
                                        echo $count_allnotification;
                                    } else {
                                        echo '99+';
                                    }
                                    ?>

                                </span>
                                @endauth
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end fade-down scrollbar-style">
                                <div class="bg-white p-2">
                                    <div class="notification-header">
                                        <div id="noticount">
                                            <span class="noti-num-count"
                                                id="count_allnotification">{{ $count_allnotification }}</span>
                                            <span>pending notifications</span>
                                            <a href="javascript:void(0);" id="clear_all_web_notifications"
                                                onClick="webnotificationactivity(this.id)"
                                                class="noti-clear d-inline-block"> Clear&nbsp;All </a>
                                        </div>
                                        <div class="noti-view-all">
                                            <a href="{{ url(app()->getLocale() . '/notifications') }}"
                                                class="view-all">
                                                <span> View All </span>
                                                <i class="bi bi-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    </div>


                                    <div class="no_new_notification"> </div>
                                </div>

                                @if ($count_allnotification > 0)
                                @foreach ($all_latest_notification as $latest_notification)
                                <!--<li id="latestNotification_web" class="latestNotification {{ $latest_notification->read_at ? 'notification-read' : 'notification-unread' }}">-->
                                <li id="latestNotification_web"
                                    class="latestNotification {{ $latest_notification->read_at ? 'notification-read' : 'notification-unread' }}">
                                    <a class="dropdown-item no-hover " href="javascript:void(0)">
                                        <div class="d-flex align-items-center ">
                                            <img src="{{ asset('img/msg-box.png') }}"
                                                class="header-icons" alt="Responsible Trading" />
                                            <div class="d-block">
                                                @php

                                                $notification = json_decode(
                                                $latest_notification->data,
                                                );

                                                @endphp
                                                <!--<span class="{{ $latest_notification->read_at ? 'notification-read-inner' : '' }}"> -->
                                                <span
                                                    class="{{ $latest_notification->read_at ? 'notification-read-inner' : '' }}">
                                                    {{ $notification->order_title }}
                                                </span>

                                                <p
                                                    class="mb-0 {{ $latest_notification->read_at ? 'notification-read-inner' : '' }}">
                                                    {{ 'Order Date: ' . \Carbon\Carbon::parse($notification->created_at)->toDateString() }}
                                                </p>



                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                                @else
                                <div class="no-notification mb-3 py-3 text-center">
                                    <span class="fs-14 d-block mb-2 text-muted fs-normal">
                                        <i class="bi bi-bell-fill"></i>
                                    </span>
                                    <span class="d-block text-muted fs-14">No new notification</span>

                                </div>
                                @endif
                            </ul>

                        </li>
                    </div>
                    @else
                    <div class="d-flex hide_if_login align-items-center justify-content-around hide-on-992">

                        <a class="btn-blue  shadow d-flex justify-content-center align-items-center show-min-1365"
                            href="{{ url(app()->getLocale(), 'login') }}">
                            <span class="me-1"> <i class="bx bx-log-in-circle"></i> </span>
                            <span class="text-only"> Login </span>
                        </a>


                        <a class="btn-yellow shadow  d-flex justify-content-center align-items-center show-min-1365"
                            href="{{ url(app()->getLocale(), 'register') }}">
                            <span class="me-1">
                                <i class="bx bx-log-out-circle"></i>
                            </span>
                            <span class="text-only"> Register </span>
                        </a>
                        <a href="{{ url(app()->getLocale(), 'login') }}" class="show-max-1365"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Login">
                            <img src="{{ asset('img/header-icons/login1.png') }}" class="auth-img">
                        </a>
                        <a href="{{ url(app()->getLocale(), 'register') }}" class="show-max-1365">
                            <img src="{{ asset('img/header-icons/signup2.png') }}" class="auth-img"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Register">
                        </a>
                    </div>
                    @endauth
                    <!--<div class="show-min-1300">-->
                    <li class="nav-item no-dropdown-arrow" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="" data-bs-original-title="Select Language">
                        <a class="nav-link modal-currency demo" id="select-lang-modal" href="javascript:void(0);"
                            data-bs-toggle="modal" data-bs-target="#currLangModal">
                            <span class="nav-img">
                                <img src="{{ asset('img/mob-nav-icon/english.svg') }}"
                                    class="img-responsive">
                            </span>
                            <span class="d-lg-none">English&nbsp;@if (Cookie::get('country_name') != '')
                                ({{ Cookie::get('country_name') }})
                                @endif
                            </span>
                        </a>
                    </li>
                    <li class="nav-item no-dropdown-arrow dropdown download-li" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="" data-bs-original-title="Download">
                        <a class="nav-link dropdown-toggle " href="javascript:void(0);" data-bs-toggle="dropdown">
                            <span class="nav-img">
                                <img src="{{ asset('img/mob-nav-icon/download.svg') }}"
                                    class="img-responsive">
                            </span>
                            <span class="d-lg-none">Download</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end fade-down">
                            <li> <a href="javascript:void(0);">
                                    <img src="{{ asset('img/qr/qrcode_wealthmark.io.png') }}"
                                        class="header-download" alt="QR Code" />
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--<i class="nav-devider d-none d-sm-block"></i>-->
                    <li class="nav-item no-dropdown-arrow currency-li" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="" data-bs-original-title="Select Currency">
                        <a class="nav-link modal-currency ps-0" id="select-currency-modal"
                            href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#currLangModal">
                            <span class="nav-img">
                                <img src="{{ asset('img/mob-nav-icon/inr.svg') }}"
                                    class="img-responsive">
                            </span>
                            <span class="d-lg-none">INR</span>
                        </a>
                    </li>
                    <!--<i class="nav-devider d-none d-sm-block"></i>-->
                    <li class="nav-item no-dropdown-arrow theme-change">
                        <a class="nav-link ps-0" href="javascript:void(0);">
                            <!--<i class="bi-moon-stars-fill"></i>-->
                            <span class="nav-img">
                                <img src="{{ asset('img/mob-nav-icon/dark.svg') }}"
                                    class="img-responsive">
                            </span>
                        </a>
                    </li>
                    <!--</div>-->
                </ul>
            </div>
        </nav>
        <!--</div>-->


        <!--</div>-->

    </div>
</header>
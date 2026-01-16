
    <aside id="sidebar" class="sidebar scrollbar-style">
        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item show-mob">
                <a class="nav-link collapsed" href="{{ url(app()->getLocale()) }}/user/dashboard">
                    <!--<i class="bi bi-grid"></i>-->
                    <img src="{{ asset('img/dashboard-icons/sidebar-icons/dashboard.svg') }}" class="breadcrumb-icon" alt="">
                    <span class="hide_max_575">Dashboard</span>
                </a>
            </li>



            <li class="nav-item show-mob">
                <a class="nav-link collapsed" href="{{ url(app()->getLocale()) }}/user/security">
                    <img src="{{ asset('img/dashboard-icons/sidebar-icons/security.svg') }}" class="breadcrumb-icon" alt="">
                    <span class="hide_max_575">Security</span>
                </a>
            </li>
            <div class="sidebar-aopen-arrow">
                <div class="contact_icon">
                    <i class="bi bi-arrow-up-short"></i>
                     <i class="bi bi-arrow-down-short"></i>
                </div>
            </div>
            <li class="nav-item show-mob">
                <a class="nav-link collapsed" href="{{ url(app()->getLocale()) }}/user/identification">
               <img src="{{ asset('img/dashboard-icons/sidebar-icons/identification.svg') }}" class="breadcrumb-icon" alt="">
                    <span class="hide_max_575">Identification</span>
                </a>
            </li>

            <li class="nav-item show-mob">
                <a class="nav-link collapsed" href="{{ url(app()->getLocale()) }}/user/payment">
                 <img src="{{ asset('img/dashboard-icons/sidebar-icons/payment.svg') }}" class="breadcrumb-icon" alt="">
                    <span class="hide_max_575">Payment</span>
                </a>
            </li>



            <li class="nav-item mobile-tab-hide-listing">
               <a class="nav-link collapsed order-listing-click" data-bs-target="#forms-nav" data-bs-toggle="collapse" aria-expanded="false">
               <img src="{{ asset('img/dashboard-icons/sidebar-icons/order.svg') }}" class="breadcrumb-icon" alt=""><span>Orders</span>
                     <i class="bi bi-chevron-down ms-auto order-tabs-listing-icon"></i>
                </a>

               <ul id="forms-nav" class="nav-content order-listing-display-content collapse" >
                    <li>
                        <a href="{{ url(app()->getLocale()) }}/user/spot-order">
                            <i class="bi bi-diamond-fill"></i><span>Spot Order</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url(app()->getLocale()) }}/user/margin-order">
                            <i class="bi bi-diamond-fill"></i><span>Margin Order</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url(app()->getLocale()) }}/user/p2p-order">
                            <i class="bi bi-diamond-fill"></i><span>P2P Order</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url(app()->getLocale()) }}/user/buy-crypto-history">
                            <i class="bi bi-diamond-fill"></i><span>Buy Crypto History</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url(app()->getLocale()) }}/user/earn-history">
                            <i class="bi bi-diamond-fill"></i><span> Earn History</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url(app()->getLocale()) }}/user/coin-staking">
                            <i class="bi bi-diamond-fill"></i><span> Staking</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
              <img src="{{ asset('img/dashboard-icons/sidebar-icons/lending.svg') }}" class="breadcrumb-icon" alt="">
                    <span>Lending</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url(app()->getLocale()) }}/user/market">
                   <img src="{{ asset('img/dashboard-icons/sidebar-icons/market.svg') }}" class="breadcrumb-icon" alt="">
                    <span>Market</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url(app()->getLocale()) }}/user/referral">
                    <img src="{{ asset('img/dashboard-icons/sidebar-icons/refferal.svg') }}" class="breadcrumb-icon" alt="">
                    <span>Refferal</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url(app()->getLocale()) }}/user/reward-center">
                   <img src="{{ asset('img/dashboard-icons/sidebar-icons/reward-centre.svg') }}" class="breadcrumb-icon" alt="">
                    <span>Reward Center</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url(app()->getLocale()) }}/user/task-center">
                   <img src="{{ asset('img/dashboard-icons/sidebar-icons/task-centre.svg') }}" class="breadcrumb-icon" alt="">
                    <span>Task Center</span>
                </a>
            </li>
            @if(Auth::user()->account_type!=1)
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ url(app()->getLocale()) }}/user/api-management">
                      <img src="{{ asset('img/dashboard-icons/sidebar-icons/dashboard.svg') }}" class="breadcrumb-icon" alt="">
                        <span>API Management</span>
                    </a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url(app()->getLocale()) }}/user/settings">
                    <img src="{{ asset('img/dashboard-icons/sidebar-icons/setting.svg') }}" class="breadcrumb-icon" alt="">
                    <span>Settings</span>
                </a>
            </li>



        </ul>


    </aside>

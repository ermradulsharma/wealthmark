  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | Notification </title>
        @include('template.web_css')
     <link rel="stylesheet" href="https://wealthmark.io/assets/css/dashboard.css">
     <link rel="stylesheet" href="https://wealthmark.io/assets/css/alert.css">
  <style>
    .notification-read-inner{
        color: #505050!important;
        font-weight: 400!important;
    }

    .full-noti.open{
        background:whitesmoke;

    }
    .full-noti.open .notification_div_in{
        padding:20px;
    }

    .full-noti  .security-column {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    padding-top: 16px;
    padding-bottom: 16px;
    border-width: 0px 0px 1px;
    border-style: solid;
    border-color: rgb(234, 236, 239);
    align-items: flex-start;
    padding: 20px;
    border-radius: 10px !important;
    flex-direction:row;
}


      .notification-optn{
             display: inline-flex;
    align-items: center;
    color: black;
    background-color: #f5f8fd;
    margin: 0px 5px;
    padding: 5px;
    border-radius: 50%;
    line-height: 20px;
    font-size: 18px;
      }
      .small{
        display: none !important;
    }
      .notification-expand{
           background-color: #f5f8fd;
    margin: 0px 5px;
    padding: 5px;
    border-radius: 50%;
    line-height: 10px;
    font-size: 14px;
    font-weight:900 !important;
      }

     .dashboard-card-body .security-right-button{
         display:flex;
         align-items:center;
     }
     .ul-list li{
         font-size:14px;
         color:black;
         margin-bottom:5px;
         display:flex;
         font-weight:400 !important;
         align-items:center;
     }
     .ul-list li >i{
         font-size:20px;
         line-height:20px;
     }

     .noti-count-span{
           display: flex;
    position: absolute;
    background: #fdcb08 !important;
    padding: 4px;
    line-height: 10px;
    top: 5px;
    right: 8px;
    text-align: center;
    min-width: 20px;
    min-height: 20px;
    vertical-align: middle;
    font-size: 12px;
    border-radius: 50%;
    align-items: center;
    justify-content: center;
     }
  </style>

</head>
<body class="bg-white">
        @include('template.web_menu')
         <div class="dashboard-main coin_staking">
              @include('template.sidebar')
        <div class="container-fluid p-0">
            <section class="p2p-trading-box notification-top">
                        <div class="container">
                            <div class="row">
                                <div class="overview-inner-box text-center">
                                    <h3 class="digital-asset-heading text-white mb-3">Notification </h3>
                                    <p class="text-center text-white fw-bold"> Buy and sell BMK safely and easily on Wealth Mark
                                        P2P. Find the best offer below and buy and sell BMK with Your Preferred Payment Methods today.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

            <div class="bg-light-blue p-3 w-100">
                <div class="container-fluid p-0">
                    <div class="bg-white shadow-none border-0 px-3 py-3 mb-2 d-sm-flex align-items-center justify-content-between">

                                   <div class="">
                                       <h3 class="mb-0">Notifications</h3>
                                   </div>
                                   <div>
                                        <div class="yellow-text d-flex align-items-center justify-content-between cursor-pointer">
                                           <a href="#" class="notification-optn bg-transparent" id="Hide-read-notifications" onClick="notificationactivity(this.id)">
                                               <input type="checkbox" class=" me-1"> <span class="fs-14">Hide read notifications</span>
                                           </a>
                                            <a href="#" class="notification-optn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Unread Only" id="Unread-notifications" onClick="notificationactivity(this.id)">
                                               <i class="bi bi-gear-fill"></i>
                                            </a>
                                             <a href="#" class="notification-optn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Mark as read" id="Mark-as-read-notifications" onClick="handleClick(this.id, {{$readnotificationCount}})">
                                               <i class="bi bi-check-circle-fill"></i>
                                            </a>
                                             <a href="#" class="notification-optn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Clear All" id="Clear-all-notifications" onClick="notificationactivity(this.id)">
                                              <i class="bi bi-three-dots"></i>
                                            </a>
                                        </div>
                                   </div>
                                </div>
                    <div class="bg-white shadow-none border-0 px-3 py-3 mb-2">
                        <div class="dashboard-tabpills">

                            <div class="dashboard-card-body">
                                <ul class="nav nav-pills my-1 border-bottom overflow-auto flex-nowrap" id="all-notification-list" role="tablist">

                                <li class="nav-item position-relative" role="presentation">
                                    <a href="javascript:void(0)" class="nav-link active" id="all" onClick="load_noti(this.id)">All</a>
                                    <span class="noti-count-span notificaion_count_latest" id='notificaion_count_all'>{{ $readnotificationCount}}</span>
                                </li>
                                @foreach($notification_categories as $categories)
                                <?php
                                 $categories_notification_count = App\Models\Notification::where('notifiable_id', Auth::user()->id)->where('notification_category_id',$categories->id)->where('deleted_at',null)->where('read_at',null)->count();

                                 ?>
                                <li class="nav-item position-relative" role="presentation">
                                    <a href="javascript:void(0)" class="nav-link " id="{{$categories->id}}" onClick="load_noti(this.id)"> {{ $categories->title }}</a>
                                    <span class="noti-count-span notificaion_count_latest_cat" id='notificaion_count_{{$categories->id}}' onClick="updateNotificationCount_by_categories(this.id)">{{$categories_notification_count }}</span>
                                </li>
                                @endforeach
                                </ul>

                                <div class="mt-2 max-height-500px scrollbar-style" id="load_data_here">
                                @if($notificationCount >0)
                                @foreach($allnotifications as $allnotification)

                                    @php  $notification = json_decode( $allnotification->data );  @endphp
                                    <div class="full-noti">
                                    <div class="security-column  {{ $allnotification->read_at ? 'notification-read' : 'notification-unread' }}">
                                        <div class="security-column-left">
                                            <div class="security-column-icon">
                                                <img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">
                                            </div>
                                            <div class="security-column-description">
                                                <h5 class="{{ $allnotification->read_at ? 'notification-read-inner' : '' }}">{{ $notification->order_title }}</h5>
                                                <span class="{{ $allnotification->read_at ? 'notification-read-inner' : '' }}">Order created at on  {{ \Carbon\Carbon::parse($notification->created_at)->toDateString()}}</span>
                                            </div>
                                        </div>
                                        <div class="security-column-right mt-0">
                                            <div class="security-right-button">
                                                <span class="fs-14 me-2 {{ $allnotification->read_at ? 'notification-read-inner' : '' }}">{{ \Carbon\Carbon::parse($notification->created_at)->toDateString()}}</span>
                                                <span class="notification-expand" onclick="notificationExpand({{$allnotification->id}})"><i class="bi bi-chevron-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notification_div_in" id="notification-{{$allnotification->id}}" style="display: none;">
                                        <div class="full-notification">
                                            <h3 class="title mb-1">Order Details</h3>
                                            <h6 class="sub-title mb-0 text-muted"></h6>
                                            <div class="h-divider mb-2 mt-2"></div>
                                            <div class="text">
                                                {{ $notification->order_title }}
                                            </div>
                                            @php $currencies=  App\Models\currencies::where('id', $notification->domestic_currency_type)->first(); @endphp
                                            <ul class="ul-list">
                                                <li><i class="bi bi-dot"></i>Order Id : {{ $notification->order_id }}</li>
                                                <li><i class="bi bi-dot"></i>Crypto type : {{ $notification->crypto_type }}</li>
                                                <li><i class="bi bi-dot"></i>Total crypto value : {{ $notification->total_crypto_value }} {{ $notification->crypto_type }}</li>
                                                <li><i class="bi bi-dot"></i>Total crypto value  : {{$currencies->name}} {{ $notification->domestic_currency_value }}</li>
                                                <li><i class="bi bi-dot"></i>Current crypto value : $ {{  $notification->crypto_current_value }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                                @endforeach
                                @else
                                    <div class="security-column">
                                       <div class="security-column-left">
                                            <div class="security-column-description">
                                                <h5>No Notifications Found</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="d-flex justify-content-center w-100 pg-nation" id="load_more_button">
                                {!! $allnotifications->render('pagination::bootstrap-5') !!}
                            </div>
                        </div>
                    </div>

                </div>
                </div>
            </div>
       </div>

</div>

   @include('template.web_footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://wealthmark.io/assets/js/alert.js"></script>

<script>



    function handleClick(id, notificationCount) {
        notificationactivity(id);
        if (notificationCount > 0) {
            triggerAlert('You have marked as read all notification!', 'success');
            setTimeout(() => {
                location.reload();
            }, 5000);
        } else {
            triggerAlert('Already you have marked as read all notification!', 'error');
            setTimeout(() => {
                location.reload();
            }, 5000);
        }
    }


    function notificationExpand(id) {
        var notification = $('#notification-' + id);
        var notificationById= id;
        var notificationactivity = 'notificationExpand';

        $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationById' : notificationById,
                    'notificationactivity' : notificationactivity,
                },
                success: function (data) {
                var element =notification.prev('.notification-unread').addClass('notification-read');
                element.removeClass('notification-unread');
                element.find('h5').addClass('notification-read-inner');
                element.find('span').addClass('notification-read-inner');
                // $('.full-noti').addClass('open');
                $(notification).parent('.full-noti').toggleClass('open');
                $(notification).parent('.full-noti').siblings().removeClass('open');
                $(notification).parent('.full-noti').siblings().children('.notification_div_in').hide();

                    notification.slideToggle();

                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.success, 'error');
                }
            });

    }

    function load_noti(id){
        var notiid = id;
         //alert(notiid);
        $("#" + notiid).addClass('active');
        $("#" + notiid).parent().siblings().children().removeClass('active');
         var from = from;
            var to = to;

        var paginating = 10;
        if(notiid === "1"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotifiation') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                     'notificationId' : notiid,
                    //  'userId' : '{{ Auth::user()->id }}' ,
                     'paginating' : paginating,
                    },
                    success: function (data) {
                        if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                             $.each(data.nofification.data, function (key, val) {

                        var notificationData = JSON.parse(val.data);

                                var html = '<div class="security-column ' + (val.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description ">';
                                    html += '<h5 class="' + (val.read_at ? 'notification-read-inner' : '') + '" >' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (val.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (val.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + notificationData.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + notificationData.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Activities Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No Activities Notifications Found', 'error');
                        }
                    },
                    error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);

                        triggerAlert(erroJson.error, 'error');
                    }
                });
            }
        if(notiid === "2"){
            $.ajax({
                type: 'POST',
                url: '{{ route('getNotifiation') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                     'notificationId' : notiid,
                    //  'userId' : '{{ Auth::user()->id }}' ,
                     'paginating' : paginating,
                    },
                    success: function (data) {
                        if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                             $.each(data.nofification.data, function (key, val) {

                        var notificationData = JSON.parse(val.data);

                                var html = '<div class="security-column ' + (val.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description ">';
                                    html += '<h5 class="' + (val.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (val.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (val.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + notificationData.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + notificationData.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Trade Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No Trade Notifications Found', 'error');
                        }
                    },
                    error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        triggerAlert(erroJson.error, 'error');
                    }
                });
        }
        if(notiid === "3"){
            $.ajax({
                type: 'POST',
                url: '{{ route('getNotifiation') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                     'notificationId' : notiid,
                    //  'userId' : '{{ Auth::user()->id }}' ,
                     'paginating' : paginating,
                    },
                    success: function (data) {
                        if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                             $.each(data.nofification.data, function (key, val) {

                        var notificationData = JSON.parse(val.data);

                                var html = '<div class="security-column ' + (val.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description ">';
                                    html += '<h5 class="' + (val.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (val.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (val.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + notificationData.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + notificationData.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No News Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No News Notifications Found', 'error');
                        }
                    },
                    error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        triggerAlert(erroJson.error, 'error');
                    }
                });
        }

        if(notiid === "4"){
            $.ajax({
                type: 'POST',
                url: '{{ route('getNotifiation') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                     'notificationId' : notiid,
                    //  'userId' : '{{ Auth::user()->id }}' ,
                     'paginating' : paginating,
                    },
                    success: function (data) {
                        if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                             $.each(data.nofification.data, function (key, val) {

                        var notificationData = JSON.parse(val.data);

                                var html = '<div class="security-column ' + (val.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description ">';
                                    html += '<h5 class="' + (val.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (val.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (val.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + notificationData.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + notificationData.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No System Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No System Notifications Found', 'error');
                        }
                    },
                    error: function(xhr, status, error) {
                        var erroJson = JSON.parse(xhr.responseText);
                        triggerAlert(erroJson.error, 'error');
                    }
                });
        }

        if(notiid === "all"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotifiation') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                     'allnotificationId' : 'all',
                    //  'userId' : '{{ Auth::user()->id }}' ,
                    'from' : from,
                    'to' : to,
                    'paginating' : paginating,
                },
                success: function (data) {

                    if(data.nofification.data.length >0){
                        var container = $('#load_data_here');
                        container.empty();

                       $.each(data.nofification.data, function (key, val) {

                            var notificationData = JSON.parse(val.data);


                            var html = '<div class="security-column  ' + (val.read_at ? 'notification-read' : 'notification-unread') + '">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-icon">';
                                html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                html += '</div>';
                                html += '<div class="security-column-description">';
                                html += '<h5 class="' + (val.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                html += '<span class="' + (val.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                html += '</div>';
                                html += '</div>';
                                html += '<div class="security-column-right mt-0">';
                                html += '<div class="security-right-button">';
                                html += '<span class="fs-14 me-2 ' + (val.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                html += '<span class="notification-expand" onclick="notificationExpand(' + notificationData.id +') "><i class="bi bi-chevron-down"></i></span>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                                html += '<div class="notification_div_in" id="notification-' + notificationData.id + '" style="display: none;">';
                                html += '<div class="full-notification">';
                                html += '<h3 class="title mb-1">Order Details</h3>';
                                html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                html += '<div class="h-divider mb-2 mt-2"></div>';
                                html += '<div class="text">' + notificationData.order_title + ' </div>';
                                html += '<ul class="ul-list"></ul>';
                                html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                html += '</ul>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                        });
                    }else{
                        var container = $('#load_data_here');
                        container.empty();
                        var html = '<div class="security-column">';
                            html += '<div class="security-column-left">';
                            html += '<div class="security-column-description">';
                            html += '<h5>No Notifications Found</h5>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        container.append(html);
                         triggerAlert('No Notifications Found', 'error');
                    }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);
                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
    }


</script>
<script>
    function notificationactivity(id){
        var notificationactivity = id;
        var selected_tab = $('#all-notification-list').children().children('.active').attr('id');
        if(notificationactivity === "Hide-read-notifications" && selected_tab === "all"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                    'selected_tab' : selected_tab ,
                },
                success: function (data) {

                   if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            data.nofification.forEach(function (item) {
                               var notificationData = JSON.parse(item.data);

                                var html = '<div class="security-column ' + (item.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description">';
                                    html += '<h5 class="' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (item.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + item.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + item.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Unread Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No Unread Notifications Found', 'error');
                              //$(".pagination").hide();
                        }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Unread-notifications" && selected_tab === "all"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            data.nofification.forEach(function (item) {
                               var notificationData = JSON.parse(item.data);

                                var html = '<div class="security-column ' + (item.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description ">';
                                    html += '<h5 class="' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (item.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + item.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + item.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Unread Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No Unread Notifications Found', 'error');
                        }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Mark-as-read-notifications" && selected_tab === "all"){


            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {

                    if(data.notificationCount > 0){

                        //triggerAlert('You have marked as read all notification!', 'success');
                    }
                    else{
                        // triggerAlert('Already you have marked as read all notification!', 'error');
                    }


                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.success, 'error');
                }
            });
        }
        if(notificationactivity === "Clear-all-notifications" && selected_tab === "all"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    // if(data.notificationCount > 0){
                    //     triggerAlert('Already you have clear all notification!', 'success');
                    // }else{
                    //     triggerAlert('You have clear all notification!', 'error');
                    // }
                    if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            triggerAlert('You have clear all notification!', 'error');
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('Already you have clear all notification!', 'success');
                        }

                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.success, 'error');
                }
            });
        }


        if(notificationactivity === "Hide-read-notifications" && selected_tab === "1"){

             //$(".pagination").hide();
            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                    'selected_tab' : selected_tab ,
                },
                success: function (data) {

                   if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            data.nofification.forEach(function (item) {
                               var notificationData = JSON.parse(item.data);

                                var html = '<div class="security-column  ' + (item.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description">';
                                    html += '<h5 class="' + (item.read_at ? 'notification-read-inner' : '') + '>' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (item.read_at ? 'notification-read-inner' : '') + '>Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + item.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + item.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Activities Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No Activities Notifications Found', 'error');
                             // $(".pagination").css("display", "none");

                        }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Unread-notifications" && selected_tab === "1"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            data.nofification.forEach(function (item) {
                               var notificationData = JSON.parse(item.data);

                                var html = '<div class="security-column ' + (item.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description ">';
                                    html += '<h5 class="' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (item.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + item.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + item.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Activities Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No Activities Notifications Found', 'error');
                        }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Mark-as-read-notifications" && selected_tab ==="1"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    if(data.notificationCount > 0){

                        triggerAlert('You have marked as read all activities notification!', 'success');
                    }else{
                         triggerAlert('You have marked as read all activities notification!', 'error');
                    }


                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Clear-all-notifications" && selected_tab === "1"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    // if(data.notificationCount > 0){
                    //     triggerAlert('Already you have clear all notification!', 'success');
                    // }else{
                    //     triggerAlert('You have clear all notification!', 'error');
                    // }
                    if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            triggerAlert('Already you have clear all activities notifications!', 'error');
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Activities Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Activities Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('Already you have clear all activities notifications!', 'error');
                        }

                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.success, 'error');
                }
            });
        }



        if(notificationactivity === "Hide-read-notifications" && selected_tab === "2"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                    'selected_tab' : selected_tab ,
                },
                success: function (data) {

                   if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            data.nofification.forEach(function (item) {
                               var notificationData = JSON.parse(item.data);

                                var html = '<div class="security-column ' + (item.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description ">';
                                    html += '<h5 class="' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (item.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + item.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + item.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Trade Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No Trade Notifications Found', 'error');
                        }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Unread-notifications" && selected_tab === "2"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            data.nofification.forEach(function (item) {
                               var notificationData = JSON.parse(item.data);

                                var html = '<div class="security-column ' + (item.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description ">';
                                    html += '<h5 class="' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (item.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + item.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + item.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Trade Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No Trade Notifications Found', 'error');
                        }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Mark-as-read-notifications" && selected_tab ==="2"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    if(data.notificationCount == 0){

                        triggerAlert('You have marked as read all trade notifications!', 'error');
                    }
                    else{
                         triggerAlert('You have marked as read all trade notifications!', 'error');
                    }


                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Clear-all-notifications" && selected_tab === "2"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    // if(data.notificationCount > 0){
                    //     triggerAlert('Already you have clear all notification!', 'success');
                    // }else{
                    //     triggerAlert('You have clear all notification!', 'error');
                    // }
                    if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            triggerAlert('Already you have clear all trde notifications!', 'error');
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Trade Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No Trade Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('Already you have clear all trde notifications!', 'error');
                        }

                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.success, 'error');
                }
            });
        }


        if(notificationactivity === "Hide-read-notifications" && selected_tab === "3"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                    'selected_tab' : selected_tab ,
                },
                success: function (data) {

                   if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            data.nofification.forEach(function (item) {
                               var notificationData = JSON.parse(item.data);

                                var html = '<div class="security-column ' + (item.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description ">';
                                    html += '<h5 class="' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (item.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + item.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + item.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No News Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No News Notifications Found', 'error');
                        }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Unread-notifications" && selected_tab === "3"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            data.nofification.forEach(function (item) {
                               var notificationData = JSON.parse(item.data);

                                var html = '<div class="security-column ' + (item.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description ">';
                                    html += '<h5 class="' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (item.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + item.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + item.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No News Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No News Notifications Found', 'error');
                        }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Mark-as-read-notifications" && selected_tab ==="3"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    if(data.notificationCount == 0){

                        triggerAlert('You have marked as read all news notifications!', 'error');
                    }
                    else{
                         triggerAlert('You have marked as read all news notifications!', 'error');
                    }


                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Clear-all-notifications" && selected_tab === "3"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    // if(data.notificationCount > 0){
                    //     triggerAlert('Already you have clear all notification!', 'success');
                    // }else{
                    //     triggerAlert('You have clear all notification!', 'error');
                    // }
                    if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            triggerAlert('You have clear all news notification!', 'error');
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No News Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No News Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('Already you have clear all news notification!', 'error');
                        }

                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.success, 'error');
                }
            });
        }


        if(notificationactivity === "Hide-read-notifications" && selected_tab === "4"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                    'selected_tab' : selected_tab ,
                },
                success: function (data) {

                   if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            data.nofification.forEach(function (item) {
                               var notificationData = JSON.parse(item.data);

                                var html = '<div class="security-column  ' + (item.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description">';
                                    html += '<h5 class="' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (item.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + item.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + item.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No System Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No System Notifications Found', 'error');
                        }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Unread-notifications" && selected_tab === "4"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            data.nofification.forEach(function (item) {
                               var notificationData = JSON.parse(item.data);

                                var html = '<div class="security-column  ' + (item.read_at ? 'notification-read' : 'notification-unread') + '">';
                                    html += '<div class="security-column-left">';
                                    html += '<div class="security-column-icon">';
                                    html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                                    html += '</div>';
                                    html += '<div class="security-column-description">';
                                    html += '<h5 class="' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                                    html += '<span class="' + (item.read_at ? 'notification-read-inner' : '') + '">Order created at on ' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="security-column-right mt-0">';
                                    html += '<div class="security-right-button">';
                                    html += '<span class="fs-14 me-2 ' + (item.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                                    html += '<span class="notification-expand" onclick="notificationExpand(' + item.id +') "><i class="bi bi-chevron-down"></i></span>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '<div class="notification_div_in" id="notification-' + item.id + '" style="display: none;">';
                                    html += '<div class="full-notification">';
                                    html += '<h3 class="title mb-1">Order Details</h3>';
                                    html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                                    html += '<div class="h-divider mb-2 mt-2"></div>';
                                    html += '<div class="text">' + notificationData.order_title + ' </div>';
                                    html += '<ul class="ul-list"></ul>';
                                    html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.id +  notificationData.crypto_type + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Total crypto value in inr  :' + notificationData.domestic_currency_value + '</li>';
                                    html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                                    html += '</ul>';
                                    html += '</div>';
                                    html += '</div>';
                                container.append(html);
                            });
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No System Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('No System Notifications Found', 'error');
                        }
                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Mark-as-read-notifications" && selected_tab ==="4"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    if(data.notificationCount == 0){

                        triggerAlert('You have marked as read all system notifications!', 'error');
                    }
                    else{
                         triggerAlert('You have marked as read all system notifications!', 'error');
                    }


                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.error, 'error');
                }
            });
        }
        if(notificationactivity === "Clear-all-notifications" && selected_tab === "4"){

            $.ajax({
                type: 'POST',
                url: '{{ route('getNotificationActivity') }}',
                data: {
                    '_token': "{{ csrf_token() }}",
                    'notificationactivity' : notificationactivity,
                    // 'userId' : '{{ Auth::user()->id }}' ,
                     'selected_tab' : selected_tab ,
                },
                success: function (data) {
                    // if(data.notificationCount > 0){
                    //     triggerAlert('Already you have clear all notification!', 'success');
                    // }else{
                    //     triggerAlert('You have clear all notification!', 'error');
                    // }
                    if(data.notificationCount > 0){
                            var container = $('#load_data_here');
                            container.empty();
                            triggerAlert('Already you have clear all system notifications!', 'error');
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No System Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                        }else{
                            var container = $('#load_data_here');
                            container.empty();
                            var html = '<div class="security-column">';
                                html += '<div class="security-column-left">';
                                html += '<div class="security-column-description">';
                                html += '<h5>No System Notifications Found</h5>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            container.append(html);
                             triggerAlert('Already you have clear all system notifications!', 'error');
                        }

                },
                error: function(xhr, status, error) {
                    var erroJson = JSON.parse(xhr.responseText);

                    triggerAlert(erroJson.success, 'error');
                }
            });
        }
    }
</script>

<script>

$(document).ready(function(){
       $("ul.pagination li:first-child").addClass("previous");
    $("ul.pagination li:last-child").addClass("next");
//     $("ul.pagination li:first-child").addClass("hide");
// $("ul.pagination li:last-child").addClass("hide");

// var disabledLi = $('.pagination li.disabled');
// disabledLi.removeAttr('disabled');
// var link = disabledLi.find('.page-link');
// link.removeAttr('aria-disabled');
// link.addClass('page-link');

$(document).on('click', '.next', function(event){
    event.preventDefault();
    var activePage = $('.pagination li.active');
    var page = parseInt(activePage.next().find('a').attr('href').split('page=')[1]);
    var lastPageNumber = parseInt($('.pagination li').eq(-2).find('a').attr('href').split('page=')[1]);

    activePage.removeClass('active');
    activePage.next().addClass('active');

    // Disable the "next" class if on the last page
    if (page == lastPageNumber) {
        $('.next').addClass('disabled');
    }

    // Enable the "previous" class if it was disabled before
    if (page < lastPageNumber) {
        $('.previous').removeClass('disabled');
    }

    // Enable or disable the page links based on current page number
    $('.pagination li').removeClass('disabled');
    if (page === 1) {
        $('.pagination li').eq(0).addClass('disabled');
    }
    if (page === lastPageNumber) {
        $('.pagination li').eq(-1).addClass('disabled');
    }

    fetch_data(page);
    history.pushState(null, '', $('.pagination li.active').find('a').attr('href'));
});


$(document).on('click', '.previous', function(event){
    event.preventDefault();
    var activePage = $('.pagination li.active');
    var page = parseInt(activePage.prev().find('a').attr('href').split('page=')[1]);
     var lastPageNumber = parseInt($('.pagination li').eq(-2).find('a').attr('href').split('page=')[1]);
    activePage.removeClass('active');
    activePage.prev().addClass('active');

    // Disable the "previous" class if on the first page
    if (page === 1) {
        $('.previous').addClass('disabled');
    }

    // Enable the "next" class if it was disabled before
    if (page > 1) {
        $('.next').removeClass('disabled');
    }

    // Enable or disable the page links based on current page number
    $('.pagination li').removeClass('disabled');
    if (page === 1) {
        $('.pagination li').eq(0).addClass('disabled');
    }
    if (page === lastPageNumber) {
        $('.pagination li').eq(-1).addClass('disabled');
    }

    fetch_data(page);
    history.pushState(null, '', $('.pagination li.active').find('a').attr('href'));
});



// $(document).on('click', '.next', function(event){
//     event.preventDefault();
//     var activePage = $('.pagination li.active');
//     var page = activePage.next().find('a').attr('href').split('page=')[1];
//     var lastPageNumber = $('.pagination li').eq(-2).find('a').attr('href').split('page=')[1];

//     activePage.removeClass('active');
//     activePage.next().addClass('active');

//     // Disable the "next" class if on the last page
//     if (page == lastPageNumber) {
//         $('.next').addClass('disabled');
//     }

//     // Enable the "previous" class if it was disabled before
//     if (page < lastPageNumber) {
//         $('.previous').removeClass('disabled');
//     }

//     fetch_data(page);
//     history.pushState(null, '', $('.pagination li.active').find('a').attr('href'));
// });


// $(document).on('click', '.previous', function(event){
//     event.preventDefault();
//     var activePage = $('.pagination li.active');
//     var page = activePage.prev().find('a').attr('href').split('page=')[1];

//     activePage.removeClass('active');
//     activePage.prev().addClass('active');

//     // Disable the "previous" class if on the first page
//     if (page === "1") {
//         $('.previous').addClass('disabled');
//     }

//     // Enable the "next" class if it was disabled before
//     if (page > "1") {
//         $('.next').removeClass('disabled');
//     }

//     fetch_data(page);
//     history.pushState(null, '', $('.pagination li.active').find('a').attr('href'));
// });


    // $(document).on('click', '.next', function(event){
    //     event.preventDefault();
    //     var activePage = $('.pagination li.active');
    //     var page = activePage.next().find('a').attr('href').split('page=')[1];
    //     var lastPageNumber = $('.pagination li').eq(-2).find('a').attr('href').split('page=')[1];

    //     activePage.removeClass('active');
    //     activePage.next().addClass('active');


    //     if (page == lastPageNumber) {
    //         $("li.page-item.next a").removeAttr("href");
    //         $("li.page-item.next a").addClass('disabled');
    //     }


    //     fetch_data(page);
    //     history.pushState(null, '', $('.pagination li.active').find('a').attr('href'));
    // });


    // $(document).on('click', '.previous', function(event){
    //     event.preventDefault();
    //     var activePage = $('.pagination li.active');
    //     var page = activePage.prev().find('a').attr('href').split('page=')[1];


    //     activePage.removeClass('active');


    //     activePage.prev().addClass('active');


    //     if (page === "1") {
    //         $("li.page-item.previous a").removeAttr("href");
    //         $("li.page-item.previous a").addClass('disabled');
    //     }


    //     fetch_data(page);
    //     history.pushState(null, '', $('.pagination li.active').find('a').attr('href'));
    // });





    function fetch_data(page){

        var paginating = 2;

        $.ajax({
            type: 'get',

            url: '{{ route('getAjaxNotifiation') }}',
            data: {
                '_token': "{{ csrf_token() }}",
                'pageNumber' : page,
                'paginating' : paginating,

            },
            success:function(data){

                if(data.notification){
                    var container = $('#load_data_here');

                    container.empty();
                    $.each(data.notification.data, function (key, val) {
                        var notificationData = JSON.parse(val.data);

                        var html = '<div class="security-column ' + (val.read_at ? 'notification-read' : 'notification-unread') + '">';
                        html += '<div class="security-column-left">';
                        html += '<div class="security-column-icon">';
                        html += '<img src="https://wealthmark.io/assets/img/dashboard-icons/Security-Icon.svg" alt="">';
                        html += '</div>';
                        html += '<div class="security-column-description ">';
                        html += '<h5 class="' + (val.read_at ? 'notification-read-inner' : '') + '">' + notificationData.order_title + '</h5>';
                        html += '<span class="' + (val.read_at ? 'notification-read-inner' : '') + '">Order created on ' + notificationData.created_at.substr(0, 10) + '</span>';
                        html += '</div>';
                        html += '</div>';
                        html += '<div class="security-column-right mt-0">';
                        html += '<div class="security-right-button">';
                        html += '<span class="fs-14 me-2 ' + (val.read_at ? 'notification-read-inner' : '') + '">' + notificationData.created_at.substr(0, 10) + '</span>';
                        html += '<span class="notification-expand" onclick="notificationExpand(' + notificationData.id +') "><i class="bi bi-chevron-down"></i></span>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '<div class="notification_div_in" id="notification-' + notificationData.id + '" style="display: none;">';
                        html += '<div class="full-notification">';
                        html += '<h3 class="title mb-1">Order Details</h3>';
                        html += '<h6 class="sub-title mb-0 text-muted"></h6>';
                        html += '<div class="h-divider mb-2 mt-2"></div>';
                        html += '<div class="text">' + notificationData.order_title + ' </div>';
                        html += '<ul class="ul-list">';
                        html += '<li><i class="bi bi-dot"></i>Order Id : ' + notificationData.order_id + '</li>';
                        html += '<li><i class="bi bi-dot"></i>Crypto type : ' + notificationData.crypto_type + '</li>';
                        html += '<li><i class="bi bi-dot"></i>Total crypto value : ' + notificationData.crypto_value + ' ' + notificationData.crypto_type + '</li>';
                        html += '<li><i class="bi bi-dot"></i>Total crypto value in INR: ' + notificationData.domestic_currency_value + '</li>';
                        html += '<li><i class="bi bi-dot"></i>Current crypto value : $ ' + notificationData.crypto_current_value + '</li>';
                        html += '</ul>';
                        html += '</div>';
                        html += '</div>';
                        container.append(html);

                    });


                }else{

                }
            },
            error: function(xhr, status, error) {
                var erroJson = JSON.parse(xhr.responseText);
                triggerAlert(erroJson.error, 'error');
            }
        });

    }

});

    function updateNotificationCount() {
      var notiCountSpan = document.getElementById('notificaion_count_all');

      var allcount = notiCountSpan.innerHTML = <?php echo $readnotificationCount?>;
      //console.log(allcount);

    var notificaion_count_all = 'all';
    $.ajax({
            type: 'POST',
            url: '{{ route('getNotificationActivity') }}',
            data: {
                '_token': "{{ csrf_token() }}",

                'all':notificaion_count_all,
            },
            success: function (data) {
                //console.log(data);
                if(data.all_notificationCount>0){
                    $('#notificaion_count_all').html(data.all_notificationCount);
                     $('#countNotification').html(data.all_notificationCount);

                }else{
                    $('#notificaion_count_all').html('0');
                     $('#countNotification').html('0');
                }

            },
            error: function(xhr, status, error) {
                var erroJson = JSON.parse(xhr.responseText);
                triggerAlert(erroJson.success, 'error');
            }
        });
    }
    setInterval(updateNotificationCount, 5000);


    function updateNotificationCount_cat(categoryId) {
        var notiCountSpan = document.getElementById('notificaion_count_' + categoryId);
        var notiCountSpan1 = document.getElementById('notificaion_count_' + categoryId).innerHTML;
        var categoryId =categoryId;
       // var all =0;
        $.ajax({
            type: 'POST',
            url: '{{ route('getNotificationActivity') }}',
            data: {
                '_token': "{{ csrf_token() }}",
                'categoryId' : categoryId,
                //'all':all,
            },
            success: function (data) {
            //   if(all == 0){
            //          console.log(data);
            //         // if(data.Activities_notification>0){
            //         //     $('#notificaion_count_all').html(data.all_categories_notifications);
            //         // }else{
            //         //     $('#notificaion_count_all').html('0');
            //         // }
            //     }
                //console.log(data);
                 if(categoryId==1){
                    //  console.log(data);
                    if(data.Activities_notification>0){
                        $('#notificaion_count_1').html(data.Activities_notification);

                    }else{
                        $('#notificaion_count_1').html('0');

                    }

                }

                 if(categoryId==2){
                   // console.log(data);
                    if(data.Trade_Notification>0 ){
                        $('#notificaion_count_2').html(data.Trade_Notification);

                    }else{
                        $('#notificaion_count_2').html('0');

                    }
                }
                 if(categoryId==3 ){
                     //console.log(data);
                    if(data.News_Notification>0 ){
                        $('#notificaion_count_3').html(data.News_Notification);

                    }else{
                        $('#notificaion_count_3').html('0');

                    }
                }
                 if(categoryId==4 ){
                     //console.log(data);
                    if(data.System_Notification>0){
                        $('#notificaion_count_4').html(data.System_Notification);

                    }else{
                        $('#notificaion_count_4').html('0');

                    }
                }
            },
            error: function(xhr, status, error) {
                var erroJson = JSON.parse(xhr.responseText);
                triggerAlert(erroJson.success, 'error');
            }
        });
    }
    @foreach($notification_categories as $categories)
      setInterval(function() {
        updateNotificationCount_cat({{ $categories->id }});
      }, 5000);
    @endforeach
</script>

</body>
</html>











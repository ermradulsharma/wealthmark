<?php //dd($allads); ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | {{ Request::segment(2) }}</title>
      @include('template.web_css')
      <link rel='stylesheet' href="{{ asset('_trading.css') }}">
      <link rel="stylesheet" href="{{ asset('rt.css') }}">
      <style>
       .Ad-Number:hover{
           /*font-size: 15px;*/
        color: #2bb1b9;
       }

       .bg-light-warning{
           background-color: #d9400a2b ;
       }

        .bg-light-danger{
           background-color: #ed233691;
       }
        .my-post-header-div{
            display:flex;
            align-items:center;
            justify-content:space-between;
        }
        .my-post-fliter-div{
            display:flex;
            align-items:center;
            flex-wrap:wrap;
        }
        .my-post-fliter-div > * {
            margin-right:5px;
        }

     .my-post-tbl th > span , .my-post-tbl td > span{
         display: flex;
    padding: 5px;
    align-items: center;
    width: 100%;
     }
    .online {
        color: var(--text-green);
    }

    .completed {
        color: rgb(0, 0, 0);
        background: var(--border-yellow);
    }




    .offline {
        color: var(--text-red);

    }

     .my-post-tbl td > span > span{
         margin-right:5px;
         white-space:nowrap;
     }
     .my-post-tbl .action i{
       background: var(--bg-whitesmoke);
    color: var(--text-black);
    padding: 5px;
    margin-right: 5px;
    border-radius: 5px;
    line-height: 10px;
    cursor: pointer;
   }
     .my-post-tbl .payment-method{
         display: inline-block;
        width: auto;
        color: var(--text-white);
        border-radius: 5px;
        font-size: 12px;
        min-width:100px;
        text-align:center;
     }


      @media(max-width:992px){


      }

      @media(max-width:768px){
        .my-post-header-div{
             display:block;
        }

        .my-post-header-div > div > div{
            margin:10px 0px !important;
        }
        .my-post-fliter-div > * {
            max-width:48% !important;
            margin-bottom:10px;
        }

      }


      @media(max-width:576px){
        .my-post-fliter-div > * {
            max-width:100% !important;
            margin-bottom:10px;
        }
        .my-post-fliter-div{
                justify-content: space-between;
        }

      }


	.share-ads-div{
	    background:white;
	    padding:10px;
	    display:flex;
	    flex-direction:column;

	}
	.share-ads-div .first{
	   /*width:180px;*/
	   width:100%;
	   border-right:2px solid var(--border-light-blue);
	   margin-right:10px;
	   padding:10px;
	   font-size:12px;
	   color:var(--text-white);
	}
	.share-ads-div .first .ads-qr-code{
	    width:130px;
	    height:130px;
	    border:2px solid var(--border-light-blue);
	    margin:auto;
	    margin-bottom:15px;
	    padding:5px;
	}
	.share-ads-div .first .ads-qr-code img{
	    width:100%;
	}
	.share-ads-div .second{
	    /*width:calc(100% - 190px);*/
	    width:100%;
	    margin-top:15px;
	}
	.ads-share-link{
	    word-wrap: break-word;
        background: var(--bg-light-blue);
        padding: 10px;
        padding-right: 40px;
        position: relative;
        font-size: 14px;
        margin-top:15px;
	}
	.ads-share-link .copy-link{
	    background: var(--bg-yellow);
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        width: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
	}

	.download-qr-code{
	    min-height:300px;
	    padding:20px 0px;
	    background:url('https://www.wealthmark.io/-gr-bg.png');
	    width:100%;
	    max-width:450px;
	    margin:auto
	}
.download-qr-code .first{
    font-size:16px;
}
.download-qr-code .first .ads-details{
    background-color: #00000082 !important;
    padding: 20px;
}
      </style>
      <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
   </head>
   <body>
    @include('template.web_menu')
<?php //echo "<pre>"; print_r($allads);die(); ?>

      <div class="bg-light-blue p-4">
          <div class="container-fluid">
               <div class="dashboard-tabpills">
                <div class="dashboard-card balance-details mb-4">
                    <div class="dashboard-card-body">
                        <div class="bg-light-blue p-2 mb-2 ps-3">
                            <div class="my-post-header-div">
                                 <h3 class="mb-0 text-black">My Ads</h3>

                            </div>


                        </div>

                        <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="Online-tab" data-bs-toggle="pill" data-bs-target="#Online" type="button" role="tab" aria-controls="Online" aria-selected="false">Online</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="History-tab" data-bs-toggle="pill" data-bs-target="#History" type="button" role="tab" aria-controls="History" aria-selected="false">History</button>
                        </li>


                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="Online" role="tabpanel" aria-labelledby="Online-tab">
                                <div class="py-3 px-3">
                                    <div class="d-md-flex align-items-center justify-content-between ">
                                        <div class="my-post-fliter-div">
                                            <div class="lf-select_coin-to max-width-150px">
                                                 <div class="coin-swap-from m-0 height-40px border-0">
                                                    <input type="text" value="31" class="lf-select-coin-to-input">
                                                    <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                                                 </div>
                                                 <div class="lf-select-coin-to-active-div">
                                                    <div class="wm-dropdown-optn-item-div">
                                                       <div class="wm-dropdown-optn-item-txt">All Crypto</div>
                                                    </div>
                                                 </div>
                                                 <div class="wm-dropdown-div wm-dropdown-div-open"  style="display: none;">
                                                    <div class="p-3">
                                                        <div class=" wm-dropdown-srch-div">
                                                            <i class="bi bi-search wm-dropdown-search-icn"></i>
                                                            <input type="text" class="wm-dropdown-search-input" placeholder="Enter country name" value="">
                                                            <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn countrybarToggle w-auto h-auto"></i>
                                                        </div>
                                                    </div>

                                                    <ul role="listbox" class="wm-dropdown-list currency_filter wm-dropdown-list-css">

                                                       <li role="option" id="BMK" title="BMK" class="wm-dropdown-optn-item ">
                                                          <div class="wm-dropdown-optn-item-inner">
                                                             <div class="wm-dropdown-optn-item-div">
                                                               <div class="wm-dropdown-optn-item-txt">BMK</div>
                                                             </div>
                                                          </div>
                                                       </li>

                                                    </ul>
                                                 </div>
                                              </div>
                                            <div class="lf-select_coin-to max-width-150px">
                                                 <div class="coin-swap-from m-0 height-40px border-0 ">
                                                    <input type="text" value="31" class="lf-select-coin-to-input">
                                                    <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                                                 </div>
                                                 <div class="lf-select-coin-to-active-div">
                                                    <div class="wm-dropdown-optn-item-div">
                                                       <div class="wm-dropdown-optn-item-txt">All Type</div>
                                                    </div>
                                                 </div>
                                                 <div class="wm-dropdown-div wm-dropdown-div-open"  style="display: none;">
                                                    <div class="p-3">
                                                        <div class=" wm-dropdown-srch-div">
                                                            <i class="bi bi-search wm-dropdown-search-icn"></i>
                                                            <input type="text" class="wm-dropdown-search-input" placeholder="Enter country name" value="">
                                                            <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn countrybarToggle w-auto h-auto"></i>
                                                        </div>
                                                    </div>

                                                    <ul role="listbox" class="wm-dropdown-list currency_filter wm-dropdown-list-css">

                                                       <li role="option" id="BMK" title="BMK" class="wm-dropdown-optn-item ">
                                                          <div class="wm-dropdown-optn-item-inner">
                                                             <div class="wm-dropdown-optn-item-div">
                                                                <div class="wm-dropdown-optn-item-txt">BMK</div>
                                                             </div>
                                                          </div>
                                                       </li>

                                                    </ul>
                                                 </div>
                                              </div>
                                            <div class="lf-select_coin-to max-width-150px">
                                                 <div class="coin-swap-from m-0 height-40px border-0">
                                                    <input type="text" value="31" class="lf-select-coin-to-input">
                                                    <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                                                 </div>
                                                 <div class="lf-select-coin-to-active-div">
                                                    <div class="wm-dropdown-optn-item-div">
                                                       <div class="wm-dropdown-optn-item-txt">All Status</div>
                                                    </div>
                                                 </div>
                                                 <div class="wm-dropdown-div wm-dropdown-div-open"  style="display: none;">
                                                    <div class="p-3">
                                                        <div class=" wm-dropdown-srch-div">
                                                            <i class="bi bi-search wm-dropdown-search-icn"></i>
                                                            <input type="text" class="wm-dropdown-search-input" placeholder="Enter country name" value="">
                                                            <i class="bi bi-x-circle-fill wm-dropdown-search-cross-icn countrybarToggle w-auto h-auto"></i>
                                                        </div>
                                                    </div>

                                                    <ul role="listbox" class="wm-dropdown-list currency_filter wm-dropdown-list-css">

                                                       <li role="option" id="BMK" title="BMK" class="wm-dropdown-optn-item ">
                                                          <div class="wm-dropdown-optn-item-inner">
                                                             <div class="wm-dropdown-optn-item-div">
                                                                <div class="wm-dropdown-optn-item-txt">BMK</div>
                                                             </div>
                                                          </div>
                                                       </li>

                                                    </ul>
                                                 </div>
                                              </div>
                                            <a href="#" class="btn-yellow shadow-none">Filter</a>
                                            <a href="#" class="btn-default d-inline-block">Reset</a>
                                        </div>
                                        <div class="">
                                           <div class="custom-modal-search-div m-0 w-100">
                                                <svg viewBox="0 0 24 24" fill="none" class="custom-modal-search-icn">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
                                                </svg>
                                                <input type="text" id="coinModalInput" placeholder="Search Coin" class="custom-modal-search-input" value="">
                                            </div>
                                        </div>
                                   </div>
                                    <div class="h-divider my-3"></div>
                                    <div class="d-smflex align-items-center mb-4">
                                        <div class="max-width-50px p-1 mb-2">
                                            <input type="checkbox" class="allcheckbox">
                                            <span class="checked-count"></span>
                                        </div>
                                       <a href="javascript:void" class="btn-default d-inline-block PublishAll mb-2">
                                           Publish All
                                       </a>
                                       &nbsp;
                                       <a href="javascript:void" class="btn-default d-inline-block TakeAllOffline mb-2" >
                                           Take All Offline
                                       </a>
                                    </div>
                                    <div class="table-responsive scrollbar-style-h">
                                        <table class="table my-post-tbl">
                                            <tr class="bg-whitesmoke">
                                                <th>
                                                    <span>
                                                    SL. No.
                                                    </span>
                                                </th>
                                                <th>
                                                    <span>Ad Number</span>
                                                </th>
                                                <th>
                                                    <span>Type </span></th>
                                                <th>
                                                    <span>Assets Type / Cash</span>
                                                </th>
                                                <th>
                                                    <span>Inital Amount</span>
                                                </th>
                                                <th>
                                                    <span>Post Status</span>
                                                </th>
                                                <th>
                                                    <span>Order Limit</span>
                                                </th>
                                                <th>
                                                    <span>Post Date</span>
                                                </th>
                                                <th>
                                                    <span>Payment method</span>
                                                </th>

                                                <th>
                                                     <span>Status</span>
                                                </th>
                                                <th>
                                                     <span>Action</span>
                                                </th>
                                            </tr>
                                            @foreach($allads as $ads)



                                            <tr>

                                                <td valign="middle">
                                                    <div class="flex-div">

                                                    <input type="checkbox" class="adsid me-1" name="adsid" value="{{$ads->id}}">

                                                    <span>{{($alladsData->currentPage() - 1) * $alladsData->perPage() + $loop->iteration}}</span>
                                                </div>
                                                </td>
                                                <!--<td>-->

                                                <!--</td>-->
                                                <td>
                                                    <span class="Ad-Number cursor-pointer" onClick="editAds({{ $ads->id }} )" >{{$ads->adsid}}</span>
                                                </td>
                                                <td>
                                                    <span class="post-type text-green">@if($ads->ordertype == 0)Buy @else Sell @endif</span>
                                                </td>
                                                <td>
                                                    <span class="assets-type">{{$ads->cryptoname}}/{{$ads->currenciesname}}</span>
                                                </td>
                                                <td>
                                                    <span class="Inital-Amount">{{$ads->total_amount}}{{$ads->cryptoname}}</span>
                                                </td>
                                                <td >
                                                    @if($ads->status == 0)
                                                        <span class="post-status offline"> Offline </span>
                                                    @elseif($ads->status == 1)
                                                        <span class="post-status online"> Online </span>
                                                    @elseif($ads->status == 2)
                                                        <span class="post-status completed"> Completed </span>
                                                    @elseif($ads->status == 3)
                                                        <span class="post-status completed bg-red text-white"> canceled </span>
                                                    @endif



                                                </td>
                                                <td>
                                                    <span class="order-limit">
                                                            <span class="first">{{$ads->order_lower_limit}}</span>
                                                            <span class="symbol"> ~ </span>
                                                            <span class="second">{{$ads->order_higher_limit}}</span>
                                                            <span class="c-name"> {{$ads->currenciesname}} </span>
                                                    </span>
                                                </td>
                                                 <td>
                                                   <span class="ad-price">

                                                    <span class="first " >

                                                        {{ App\Http\Controllers\HomeController::fetchDateFromSQL($ads->created_at) }}

                                                    </span>

                                                </span>

                                                </td>
                                               <td valign="middle">

                                                   @if (!empty($ads->payment_method_type))

                                                        @foreach ($ads->payment_method_type as $method)
                                                        <?php // print_r(json_decode($method)->method_type); ?>

                                                            <small class="buyer_payment_type">{{ json_decode($method)->method_type }}</small>

                                                         @endforeach

                                                    @endif
                                                </td>

                                                 <td valign="middle">
                                                     @if($ads->status != 2)
                                                     <div class="form-check form-switch">



                                                     <input class="form-check-input Changestatus" data-id="{{$ads->id}}" class="toggle-class" id="Changestatus" type="checkbox" data-onstyle="success" role="switch"  data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $ads->status ? 'checked' : '' }}>
                                                      </div>
                                                      @endif

                                                        @if($ads->status == 2)
                                                            <div class="bg-light-theme fs-14 p-50 rounded text-center">
                                                                Order&nbsp;Completed
                                                            </div>
                                                        @elseif($ads->status == 0)
                                                        <div class="bg-light-warning fs-14 p-50 rounded text-center" style="#d9400a2b">
                                                                Order&nbsp;Offline
                                                            </div>
                                                        @elseif($ads->status == 3)
                                                        <div class="bg-light-danger fs-14 p-50 rounded text-center">
                                                                Order&nbsp;Conceled
                                                            </div>
                                                        @endif
                                                </td>


                                                 <td>
                                                    <span class="action">


                                                        @if($ads->status != 2)
                                                            <i class="bi bi-trash ads show_confirm " style="display:none" id="{{$ads->id}}" data-toggle="tooltip" title="Delete"></i>
                                                            <i class="bi bi-share-fill" data-target-modal="share-post" id="{{$ads->id}}"></i>
                                                            <i class="bi bi-pencil-square" id="{{$ads->id}}" onClick=editAds(this.id)></i>
                                                        @endif
                                                    </span>
                                                </td>

                                            </tr>
                                             @endforeach

                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center pgnation mt-4">
                                        {!! $alladsData->render('pagination::bootstrap-5') !!}
                                    </div>




                                </div>
                            </div>
                            <div class="tab-pane fade" id="History" role="tabpanel" aria-labelledby="History-tab">
                                    <div class="min-height-200px"> </div>

                                 <div class="flex-example">
                                    <div class="1">a</div>
                                    <div class="2">2</div>
                                    <div class="3">3</div>
                                 </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>




    <div id="share-post">
        <div class="hide">
            <div class="wm-custom-modal-diolog max-width-450px">
                <div class="">
                   <div class="wm-custom-modal-header">
                            <span>Share Post</span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>
                   </div>
                   <div class="wm-custom-modal-body p-3 bg-light-blue mb-2">

                        <div class="share-ads-div">
                            <div class="first">
                                <div id="add-qr-div">
                                    <div class="ads-qr-code">
                                            <img src="https://www.wealthmark.io/code.png">
                                    </div>
                                    <div class="ads-details">
                                        <div class="flex-div fs-5 justify-content-center p-2">
                                            <span class="text-green">Sell</span>
                                            <span class="text-black mx-2">BMK</span>
                                            <img src="https://wealthmark.io/storage/app/" class="max-width-30px">
                                        </div>
                                        <div class="flex-div justify-content-between">
                                            <span class="text-muted">Price</span>
                                            <span class="text-black">
                                                <i class="bi bi-currency-dollar me-1"></i>
                                                <span>500</span>
                                            </span>
                                        </div>
                                         <div class="flex-div justify-content-between">
                                            <span class="text-muted">Amount</span>
                                            <span class="text-black">
                                                <i class="bi bi-currency-dollar me-1"></i>
                                                <span>50000</span>
                                            </span>
                                        </div>
                                         <div class="flex-div justify-content-between">
                                            <span class="text-muted">Limit</span>
                                            <span class="text-black">
                                                <i class="bi bi-currency-dollar"></i>
                                                <span>
                                                    <span>500</span>
                                                    <span class="mx-2"> ~ </span>
                                                    <span>600</span>
                                                </span>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a href="javascript:void(0)" class="btn-yellow shadow-none w-100" id="download-qr-img">
                                        Share this Image
                                    </a>
                                </div>
                            </div>
                            <div class="second">
                                    <div>
                                        <h3 class="title">Sharing Link</h3>
                                        <div class="h-divider my-2"></div>
                                        <div class="fs-14 text-muted">
                                            Copy the following content and share to others. Users can access the Ad by clicking the link
                                        </div>
                                        <div class="ads-share-link">
                                            <div>
                                                https://wealthmark.io/en/register-person/ZCHFNG78SUsdsdsdsdsdsdsdfsdsfsdsfd
                                            </div>
                                            <div class="copy-link">
                                                <svg viewBox="0 0 24 24" fill="none" class="max-width-20px">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 3H3v13h3V6h10V3zm5 5H8v13h13V8zm-5.25 3h-2.5v2.25H11v2.5h2.25V18h2.5v-2.25H18v-2.5h-2.25V11z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                        </div>


                </div>
            </div>
        </div>
    </div>


    <!--download qr for my-ads-->
    <div id="postShareImgSection" class="download-qr-code share-ads-div hide">

                            <div class="first w-100 border-0">
                                <div class="flex-div">
                                        <img src="https://wealthmark.io/lthmark-logo.svg" alt="dd" class="wealthmark-logo">

                                        <span></span>
                                </div>
                                    <div class="flex-div justify-content-center mb-4 text-center">
                                          <span>  Scan QR Code with <br>
                                            Wealthmark App To Trade</span>
                                    </div>

                                    <div class="ads-qr-code mb-4">
                                            <img src="https://wealthmark.io/lthmark-logo.svg">
                                    </div>
                                     <div class="flex-div justify-content-between mt-4 mb-3 px-3">
                                        <div>
                                            <div class="fs-14 text-muted">30 Days Completed Orders</div>
                                            <div>0</div>
                                        </div>
                                         <div>
                                            <div class="fs-14 text-muted">30 Days Completion Ratio</div>
                                            <div>0.00%</div>
                                        </div>
                                    </div>
                                    <div class="ads-details bg-white">
                                        <div class="flex-div fs-5 justify-content-center p-2">
                                            <span class="text-green">Sell</span>
                                            <span class="mx-2">BMK</span>
                                            <img src="https://wealthmark.io/storage/app/" class="max-width-30px">
                                        </div>
                                        <div class="flex-div justify-content-between">
                                            <span class="">Price</span>
                                            <span class="">
                                                <i class="bi bi-currency-dollar me-1"></i>
                                                <span>500</span>
                                            </span>
                                        </div>
                                         <div class="flex-div justify-content-between">
                                            <span class="">Amount</span>
                                            <span class="">
                                                <i class="bi bi-currency-dollar me-1"></i>
                                                <span>50000</span>
                                            </span>
                                        </div>
                                         <div class="flex-div justify-content-between">
                                            <span class="">Limit</span>
                                            <span class="">
                                                <i class="bi bi-currency-dollar"></i>
                                                <span>
                                                    <span>500</span>
                                                    <span class="mx-2"> ~ </span>
                                                    <span>600</span>
                                                </span>
                                            </span>
                                        </div>

                                    </div>
                                </div>
</div>

 <!--download qr for my-ads-->



    <div id="edit-post">
        <div class="hide">
            <div class="wm-custom-modal-diolog max-width-1000px" >
                <div class="">
                    <div class="wm-custom-modal-header">
                        <span>Edit Post</span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close edit-close" id="wm-custom-modal-close">
                            <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="wm-custom-modal-body px-3 max-height-700px scrollbar-style">
                    <div class="container-fluid p-0 m-0">
                         @include('web.p2pTrading_template.templatePostAdd')
                    </div>
                </div>
        </div>
    </div>

 <div id="confirm_post_modal">
        <div class="hide">
            <div class="wm-custom-modal-diolog max-width-450px">
                <div class="border-bottom">
                   <div class="wm-custom-modal-header">
                            <span>Confirm Post</span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close"  >
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>
                </div>
                    <div class="wm-custom-modal-body px-3">
                        <div class="container-fluid p-0 m-0 max-height-500px scrollbar-style">
                            <input type="hidden" class="adsid" name="adsid" value="">
                            <div class="flex-div post-status-div">
                                <div class="">
                                    Type
                                </div>
                                <div class="post-type">

                                </div>
                            </div>
                            <div class="flex-div post-status-div">
                                <div class="">
                                    Assets
                                </div>
                                <div class="post-Assets selected-asset">

                                </div>
                            </div>
                             <div class="flex-div post-status-div">
                                <div class="">
                                   Currency
                                </div>
                                <div class="post-Currency">

                                </div>
                                <input type="hidden" class="postCurrencyid" name="postCurrencyid" value="">
                            </div>
                             <div class="flex-div post-status-div">
                                <div class="">
                                   Price type
                                </div>
                                <div class="post-Currency-type">

                                </div>
                            </div>
                             <div class="flex-div post-status-div">
                                <div class="post-Currency-type">

                                </div>
                                <div class="post-fixed-value">
                                   <span class="post-fixed-total-value"></span><span class="post-Assets"></span>
                                </div>
                            </div>
                             <div class="flex-div post-status-div">
                                <div class="">
                                  Order Limit
                                </div>
                                <div class="post-Order-limit">
                                    <span class="post-Order-lower-limit"></span><span class="post-Currency"></span>~<span class="post-Order-higher-limit"></span><span class="post-Currency"></span>

                                </div>
                            </div>
                             <div class="flex-div post-status-div">
                                <div class="">
                                   Total Trading Amount
                                </div>
                                <div class="post-Trading-amt">
                                  <span class="post-Trading-amt-val"></span><span class="post-Assets"></span>
                                </div>
                            </div>
                             <div class="flex-div post-status-div">
                                <div class="">
                                    <span> Estimated Fee </span>
                                    <span class="ms-1 yellow-text"><i class="bi bi-info-circle-fill"></i> </span>
                                </div>
                                <div class="post-Estimated-fee">
                                   <span class="post-Estimated-fee-val"></span><span class="post-Estimated-fee-type"></span>
                                </div>
                                <input type="hidden" class="hestimatedfeeid" name="hestimatedfeeid" value="">
                            </div>
                           <div class="h-divider my-1"></div>
                            <div class="flex-div post-status-div">
                                <div class="">
                                    <span> Counterparty Conditions </span>
                                </div>
                                <div class="post-Counterparty-condition">
                                    <span class="d-block mb-1 compleated-kyc"></span>
                                    <span class="d-block mb-1 registered-day"></span>
                                    <span class="d-block mb-1 holding-more">
                                        <span class="ms-1 yellow-text"><i class="bi bi-info-circle-fill"></i></span>
                                    </span>

                                </div>
                            </div>


                             <div class="flex-div post-status-div">
                                <div class="">
                                    <span> Payment Method </span>
                                </div>
                                <div class="post-Payment-Method">
                                <span></span>

                                </div>
                            </div>

                             <div class="flex-div post-status-div">
                                <div class="">
                                    <span> Payment Time Limit </span>
                                </div>
                                <div class="post-time-limit">
                                <span class="post-time-limit-val"></span><span>Min</span>
                                </div>
                            </div>


                        </div>
                         <div class="flex-div my-4 w-100">
                                <a href="javascript:void(0)" id="SubmitEditPostAds" onclick="SubmitEditPostAds(this.id)" class="btn-yellow w-100">Confirm to Post</a>
                            </div>
                    </div>
                </div>
        </div>
    </div>
<!-- nickname model-->
      <div id="nickNameEdit" class="open_edit_modal">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="wm-custom-modal-body px-3">
                   <div class="wm-custom-modal-header m-0">
                            <span>Edit Nickname</span>
                            <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                              <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                            </svg>
                    </div>


                    <div class="container-fluid p-0 m-0">
                            <div class="row">
                               <div class="col-md-12">
                                    <form name="nicknameForm" id="nicknameForm" class="nicknameForm">
                             <p class="fs-14 mb-2">Set a customized nickname for your profile.</p>

                              <span class="fs-14 mb-2 d-block"><b> Nick Name </b></span>
                                  <div class="">
                                    <input type="hidden" id="nikefld" name="_token" value="{{ csrf_token() }}">
                                     <input type="text" maxlength="8" minlength="2" pattern="\d*" id="nickName" name="nickName" value="{{ (Auth::user()->nick_name !== NULL) ? Auth::user()->nick_name : '' }}" class="form-control">
                                   </div>
                          </form>
                               </div>


                                <div class="d-block col-12 mt-3 w-100 text-center mb-3">
                                    <!--<button type="button" class="btn-default d-inline-block close_custom_modal_btn border-0 me-3">Close Modal</button>-->
                                     <!--<button type="button" class="save-nickName btn-theme-light w-100">Save</button>-->

                                     <!--<a href="{{ url(app()->getLocale().'/update_table_column_byID') }}" class="btn-yellow d-inline-block">Save</a>-->
                                     <button type="button" class="save-nickName btn-yellow d-inline-block border-0">Save</button>

                                </div>

                            </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@include('template.web_footer')
@include('user.payment.paymentMethodsTemplates.selectAllPaymethods')
    <script src="{{ asset('t.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script>
    // $(".edit-close").click(function(){
    //     $(this).parent().parent().parent().parent().addClass("hide").removeClass("custom-modal-bck-bg");
    //     location.reload();

    // });
    function delMthod(id) {
        // console.log(id);
        element = $(".ele_"+id)
        element.remove();
        $('.select-payment a').removeClass('selected');
    }

    function addHiddenValues_01062023(id){
        const ID = id;
        $('#'+ID).parent().addClass('selected');
        $('#'+ID).parent().siblings().removeClass('selected');

    }

    function addHiddenValues(id){
        const ID = id;

        // $(this).parent().addClass('selected');
        const parentA = event.target.closest('a');

        if(parentA.classList.contains('selected')){
            parentA.classList.remove('selected');

        } else {
            parentA.classList.add('selected');
        }
    }

    $("#confirm_paymentOn_p2ptrading").click(function(){
        var selectedMethod = $('.select-payment').find('.selected div');
        var addedMethod = $('.added-payment-div');
        var id = $('.select-payment a.selected div').attr('id');
        var paymentMethodIds = [];
        selectedMethod.each(function() {
            paymentMethodIds.push($(this).attr('id'));
        });

        var checkPaymentMethodIds = [];
        $('.selected-payment-option-div').find('.added-payment-div').each(function() {
            checkPaymentMethodIds.push($(this).attr('id'));
        });

        if(paymentMethodIds.length < 4){
            var loadpaymentmethod = $('#selected-payment-option');
            $.each(paymentMethodIds, function(index, id) {
                var Value = $("#" + id).html();
                const count =$('.selected-payment-option-div').find('.fs-12').length;
                if(count<3){
                    if(jQuery.inArray(id , checkPaymentMethodIds) == -1){
                        var html ='<div class="d-flex align-items-center border rounded p-2 min-width-100px hover-border cursor-pointer selected-payment-option-div ele_'+id+'">';
                        html +='<img src="https://wealthmark.io/hboard-icons/bank-account.svg" class="max-width-20px me-2" alt="wealthmark.io">';
                        html +='<span class="fs-12 added-payment-div" id="'+id+'">'+ Value +'</span>';
                        html += '<span class="bi bi-x-circle-fill " onclick="delMthod('+id+')"></span></div>';
                        $(".selected-payment-option-hide").css("display" , "block")
                        loadpaymentmethod.append(html);
                    }
                }
            });
        } else {
            triggerAlert('You can select up to 3 methods','error');
            $('#payMethod .hide').addClass('custom-modal-bck-bg').removeClass('hide');
        }
        // var id = $('.select-payment a.selected div').attr('id');
        // // var paymentMethodIds = $('.selected-payment-option-div').find('.added-payment-div').attr('id').map(function() {
        // //     return $(this).attr('id');
        // // }).get();
        // var paymentMethodIds = [];
        // $('.selected-payment-option-div').find('.added-payment-div').each(function() {
        //     paymentMethodIds.push($(this).attr('id'));
        // });
        // console.log(paymentMethodIds);

        // if(jQuery.inArray( id , paymentMethodIds) !== -1){
        //   triggerAlert('Already added!','error');
        // } else {
        //     const count =$('.selected-payment-option-div').find('.fs-12').length;
        //     if(count<3) {
        //         var Value = $("#" + id).html();
        //         var loadpaymentmethod = $('#selected-payment-option');

        //         // loadpaymentmethod.empty();

        //         var html ='<div class="d-flex align-items-center border rounded p-2 min-width-100px hover-border cursor-pointer selected-payment-option-div ele_'+id+'">';
        //         html +='<img src="https://wealthmark.io/hboard-icons/bank-account.svg" class="max-width-20px me-2" alt="wealthmark.io">';
        //         html +='<span class="fs-12 added-payment-div" id="'+id+'">'+ Value +'</span>';

        //         html += '<span class="bi bi-x-circle-fill " onclick="delMthod('+id+')"></span></div>';
        //         $(".selected-payment-option-hide").css("display" , "block")
        //         loadpaymentmethod.append(html);

        //     } else {
        //         triggerAlert('You can select up to 3 methods','error');
        //     }

        // }
    });

    $( document ).ready(function() {
        const default_selected_crypto_name=$('.default-selected-crypto-name').text();
        const default_selected_currency_name=$('.default-currency-name').text();
        const default_selected_coin_BMK_Currentprice=$('#choose-coin-BMK_Currentprice').val();
        const selectedglobalCurrency=$('.selectedglobalCurrency').val();
        const myVar = '{{ env('HIGHEST_ORDER_PRICE_PERCENTAGE') }}';

        const orderPrice = default_selected_coin_BMK_Currentprice / selectedglobalCurrency;
        const totalprice = $("#order-price span").text(orderPrice.toFixed(8));
        const highestOrderprice_percentage = ((orderPrice * myVar) / 100).toFixed(8);
        const total_highest_order_price = (parseFloat(orderPrice) + parseFloat(highestOrderprice_percentage)).toFixed(8);
        const highest_order_price_val = $("#highest-order-price input").val(total_highest_order_price);
        const highest_order_price = $("#highest-order-price span").text(total_highest_order_price);
        $("#crrent_price input").val(parseFloat(orderPrice).toFixed(8));

        const item_symbol = $("#selected_crrency .selectedglobalCurrencysymbol").val()

        $(".item-symbol").val(item_symbol);
        $(".total-trading-currency-type").text(default_selected_crypto_name);

        //console.log(default_selected_coin_BMK_Currentprice);
        const fixedvalue = $('#fmyInput').val();

        //$('input[name="total-trading-currency-type-value"]').val(default_selected_coin_BMK_Currentprice);
        $('input[name="total-trading-currency-type-value"]').val(fixedvalue);
        $('input[name="selected-golobal-currency-type-rate"]').val(selectedglobalCurrency);




        $(".lower-order-limit").text(default_selected_currency_name);
        $(".higher-order-limit").text(default_selected_currency_name);
        $(".holding-more-than-crypto-name").text(default_selected_crypto_name);


        $(".selected-golobal-currency-type").text(default_selected_currency_name);
        $(".selected-golobal-currency-type-value").text(orderPrice.toFixed(8));

        // add click event listener to plus button
        function compairForhighestOredr(){
             var highestPrice =  parseFloat($("#highest-order-price input").val());
            var currentValue = parseFloat($('#crrent_price input').val());
            var newValue = currentValue + 1.00; // change this to adjust the increment value
            if(newValue > highestPrice){
                 triggerAlert('You cannot set Price Margin more than Highest Order price','error');

            }else{
                  $('#crrent_price input').val(newValue.toFixed(8));
            }

        }

        $('.plus').on('click', function() {
            compairForhighestOredr();
        });


        // $('#crrent_price input').on('input', function() {
        //   compairForhighestOredr();

        // });

        // add click event listener to minus button
        $('.minus').on('click', function() {
            var currentValue = parseFloat($('#crrent_price input').val());
            var newValue = currentValue - 1.00; // change this to adjust the decrement value
            $('#crrent_price input').val(newValue.toFixed(8));
        });

        const ordertypecheckedvalue=$('input[name="price_type"]:checked').val();
        if(ordertypecheckedvalue == 0){
            $('.price-formula').addClass('hide');
        }

        // console.log(ordertypecheckedvalue);

    });

    function select_crypto(id){

        crypto_id = id;
        //alert(crypto_id);
        const selected_crypto_value = $("#"+crypto_id+'_'+"Currentprice").val();
        const selectedcurrencyPrice = $('.selectedcurrencyPrice').val();
        const selectedcryptoType =  $("#"+crypto_id+ " .wm-dropdown-optn-item-txt").html();
        const selectedglobalCurrency=$('.selectedglobalCurrency').val();
        const selectedCurrencysymbol=$('.selectedCurrencysymbol').val();
        const default_selected_currency_name = $('.default-currency-name').text();

        const myVar = '{{ env('HIGHEST_ORDER_PRICE_PERCENTAGE') }}';
        const orderPrice = selected_crypto_value / selectedglobalCurrency;
        const totalprice = $("#order-price span").text(orderPrice.toFixed(8));
        const highestOrderprice_percentage = ((orderPrice * myVar) / 100).toFixed(8);
        const total_highest_order_price = (parseFloat(orderPrice) + parseFloat(highestOrderprice_percentage)).toFixed(8);
         const highest_order_price_val = $("#highest-order-price input").val(total_highest_order_price);
        const highest_order_price = $("#highest-order-price span").text(total_highest_order_price);
        $("#crrent_price input").val(parseFloat(orderPrice).toFixed(8));



        const item_symbol = $("#selected_crrency .selectedglobalCurrencysymbol").val()
        $(".item-symbol").text(item_symbol);

        // console.log(selected_crypto_value);
        // console.log(selectedcurrencyPrice);

        $(".total-trading-currency-type").text(selectedcryptoType);
        $(".lower-order-limit").text(default_selected_currency_name);
        $(".higher-order-limit").text(default_selected_currency_name);
        $(".holding-more-than-crypto-name").text(selectedcryptoType);
         const fixedvalue = $('#fmyInput').val();

        $(".selected-golobal-currency-type").text(fixedvalue);
        $(".selected-golobal-currency-type-value").text(fixedvalue);



        $('input[name="total-trading-currency-type-value"]').val(fixedvalue);
        $('input[name="selected-golobal-currency-type-rate"]').val(selectedglobalCurrency);


        $('.selectedCoinPrice').val(selected_crypto_value);
        $('#selected_crypto .bS-crypto-select-coin').attr('src' , $("#"+crypto_id+' '+ ".custom-modal-drpdn-img-1").attr('src'));
        $('#selected_crypto .selectedCrypto').val(selectedcryptoType);
        // $('.custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');

    }

    function select_currency(id){

        currency_id = id;

        $('#selected_crrency .bS-crypto-select-coin').attr('src' , $("#"+currency_id+' '+ ".custom-modal-drpdn-img-1").attr('src'));
        $('#selected_crrency .bS-crypto-select-coin-title').html($("#" +currency_id+' '+ ".custom-modal-drpdn-title").html());
        $('#selected_crrency .bS-crypto-select-coin-symbol').html('<span>'+$("#" +currency_id+' '+ ".currency_symbol").html()+'</span>');
        $('.selectedglobalCurrency').val($("#" +currency_id+' '+ ".selectedcurrencyPrice").val());
        $('.selectedglobalCurrencyRate').val($("#" +currency_id+' '+ ".selectedCurrencyRate").val());

        $('.selectedglobalCurrencyId').val($("#" +currency_id+' '+ ".selectedCurrencyId").val());

        $('.selectedglobalCurrencyname').val($("#" +currency_id+' '+ ".selectedCurrencyname").val());


        $('.selectedglobalCurrencysymbol').val($("#" +currency_id+' '+ ".selectedCurrencySymbol").val());

        // $('.custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');

        const selected_crypto_value = $('.selectedCoinPrice').val();
        const selectedcurrencyPrice = $('.selectedglobalCurrency').val();
        const selectedcryptoType = $('.default-selected-crypto-name').text();
        const myVar = '{{ env('HIGHEST_ORDER_PRICE_PERCENTAGE') }}';


        const orderPrice = selected_crypto_value / selectedcurrencyPrice;
        const totalprice = $("#order-price span").text(orderPrice.toFixed(8));
        const highestOrderprice_percentage = ((orderPrice * myVar) / 100).toFixed(8);
        const total_highest_order_price = (parseFloat(orderPrice) + parseFloat(highestOrderprice_percentage)).toFixed(8);
        const highest_order_price = $("#highest-order-price span").text(total_highest_order_price);
         const highest_order_price_val = $("#highest-order-price input").val(total_highest_order_price);
        $("#crrent_price input").val(parseFloat(orderPrice).toFixed(8));

         const item_symbol = $("#selected_crrency .selectedglobalCurrencysymbol").val()
        $(".item-symbol").text(item_symbol);


        var selectedglobalCurrencyname = $("#selected_crrency .selectedglobalCurrencyname").val()
         // console.log(selectedglobalCurrencyname);
        //  console.log(selectedcryptoType);
           const fixedvalue = $('#fmyInput').val();

        $('input[name="total-trading-currency-type-value"]').val(fixedvalue);
        $('input[name="selected-golobal-currency-type-rate"]').val(selectedcurrencyPrice);

        $(".total-trading-currency-type").text(selectedcryptoType);
        $(".lower-order-limit").text(selectedglobalCurrencyname);
        $(".higher-order-limit").text(selectedglobalCurrencyname);
         $(".holding-more-than-crypto-name").text(selectedcryptoType);
        $(".selected-golobal-currency-type").text(selectedglobalCurrencyname);
        $(".selected-golobal-currency-type-value").text(orderPrice.toFixed(8));


        // console.log(selected_crypto_value);
        // console.log(selectedcurrencyPrice);
        // console.log(selectedcryptoType);


    }

    function count_crypto(amountToTrading){

        const total_trading_currency_type_value = $('.total-trading-currency-type-value').val();
        const selected_golobal_currency_type_rate= $('.selected-golobal-currency-type-rate').val();

        // console.log(amountToTrading);
        //  console.log(total_trading_currency_type_value);
          // console.log(selected_golobal_currency_type_rate);
          const fixedvalue = $('#fmyInput').val();
        const amount_To_Trading = (amountToTrading * total_trading_currency_type_value) / selected_golobal_currency_type_rate;
         const fixed_amount_To_Trading = (amountToTrading * fixedvalue);
      //  console.log(amount_To_Trading);
        $(".selected-golobal-currency-type-value").text('');
        $(".selected-golobal-currency-type-value").text(fixed_amount_To_Trading.toFixed(8));
         $("#higherlimit").val(fixed_amount_To_Trading.toFixed(8));
          $('input[name="holding_coin"]').val(amountToTrading)
        // console.log(total_trading_currency_type_value);
        // console.log(selected_golobal_currency_type_rate);
        //console.log(amount_To_Trading);

    }

    function checkHoldingCoins(){
            if($('input[name="holding_coin"]').val() <   $('#amount').val()){
                   triggerAlert('Held Coins must be higher OR eqaul to trade ammount '+$('#amount').val()+' !','error');
                   $('input[name="holding_coin"]').val($('#amount').val());
            }
        }
</script>
<script>
    function editAds(id){
    var adsid = id;

    //alert(id);
    $.ajax({
        type: 'post',
        url: '{{ route('edit-ads') }}',
        data: {
            '_token': "{{ csrf_token() }}",
            'adsId' : adsid,
        },
        success: function (data) {
            console.log(data.edit_ads_data);
            console.log(data.method_type);
            $('.postTypeOrder').val(data.edit_ads_data.ordertype);
            if(data.edit_ads_data !=''){
               $("#edit-post").children('.hide').addClass('custom-modal-bck-bg').removeClass('hide');
                const myInput = $('#fmyInput').val(data.edit_ads_data.fixed_floating_pice);
                //   $('.lf-select_coin-to').css("pointer-events","none");
                if(data.edit_ads_data.ordertype==0){
                    $('#buy').addClass('active');
                    $('#sell').hide();
                    $('.available_coins').hide();
                }
                if(data.edit_ads_data.ordertype==1){
                    $('#buy').hide();
                    $('#buy').removeClass('active');
                    $('#sell').addClass('active');
                }
                if (data.edit_ads_data.pricetype == 1) {
                  $('#price_type_0').removeAttr('checked');
                  $('#price_type_1').attr('checked', 'checked');
                }
                if (data.edit_ads_data.pricetype == 0) {
                  $('#price_type_0').attr('checked', 'checked');
                }

                $('#amount').val(data.edit_ads_data.total_amount);
                $('.selected-golobal-currency-type-value').text(data.edit_ads_data.cryptovalue_in_domestictype);
                var loadpaymentmethoddiv = $('#selected-payment-option');
                loadpaymentmethoddiv.empty();
                if (data.method_type != '') {
                    for (var i = 0; i < data.method_type.length; i++) {
                        var id = data.method_type[i].id;
                        var methodType = data.method_type[i].method_type;
                       //  alert(methodType);

                        var loadpaymentmethod = $('#selected-payment-option');
                        var html = '<div class="d-flex align-items-center border rounded p-2 min-width-100px hover-border cursor-pointer selected-payment-option-div ele_' + id + '">';
                        html += '<img src="https://wealthmark.io/hboard-icons/bank-account.svg" class="max-width-20px me-2" alt="wealthmark.io">';
                        html += '<span class="fs-12 added-payment-div" id="' + id + '">' + methodType + '</span>';
                        html += '<span class="bi bi-x-circle-fill" onclick="delMthod(' + id + ')"></span></div>';

                        $(".selected-payment-option-hide").css("display", "block");
                        loadpaymentmethod.append(html);
                    }
                }
                $('input[name="adsid"]').val(data.edit_ads_data.id);
                $('#lowerlimit').val(data.edit_ads_data.order_lower_limit);
                $('#higherlimit').val(data.edit_ads_data.order_higher_limit);
                if(data.edit_ads_data.payment_time_limit==15){
                    $('#selected-order-time').val('15_Minutes');
                }
                if(data.edit_ads_data.payment_time_limit==20){
                    $('#selected-order-time').val('20_Minutes');
                }
                if(data.edit_ads_data.payment_time_limit==25){
                    $('#selected-order-time').val('25_Minutes');
                }
                if(data.edit_ads_data.payment_time_limit==30){
                    $('#selected-order-time').val('30_Minutes');
                }
                if(data.edit_ads_data.auto_replay!=''){
                    $('#autoreplay').val(data.edit_ads_data.auto_replay);
                }
                if(data.edit_ads_data.terms!=''){
                    $('#remarks').val(data.edit_ads_data.terms);
                }

                if(data.edit_ads_data.countryparty_condition!=''){
                    const conditionData = JSON.parse(data.edit_ads_data.countryparty_condition);
                    const completedKYC = conditionData.CompletedKYC;
                    const registeredAccountDay = conditionData.registerd_account_day;
                    const holdingCoin = conditionData.holding_coin;

                    if (completedKYC === '1') {
                        $('#kycCheck').attr('checked', 'checked');
                    }

                    if (registeredAccountDay != '') {
                        $('#regDaysCheck').attr('checked', 'checked');
                        $('input[name="registerd_account_day"]').val(registeredAccountDay);
                    }

                    if (holdingCoin != '') {
                        $('#holding_coinCheck').attr('checked', 'checked');
                        $('input[name="holding_coin"]').val(holdingCoin);
                    }

                }
                if(data.edit_ads_data.status==0){
                   $('#post_status_1').removeAttr('checked');
                  $('#post_status_0').attr('checked', 'checked');
                }
                if(data.edit_ads_data.status==1){
                   $('#post_status_0').removeAttr('checked');
                  $('#post_status_1').attr('checked', 'checked');
                }


           }


        },
        error: function(xhr, status, error) {
            triggerAlert('something went wrong!', 'error');
        }
    });

}
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('.bi.bi-trash').click(function(event) {
            event.preventDefault();
            $(this).tooltip('show');
        });
    });

    $(document).ready(function() {
        $('.show_confirm').click(function(event) {
            var button = $(this);
            var adsid = $('.ads').attr('id');
            //alert(adsid);
            var name = button.data("name");
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this ${name}?`,
                text: "It will permanently deleted !",
                type: 'warning',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    button.prop('disabled', true);
                    $.ajax({
                        type: 'post',
                        url: '{{ route('post.delete') }}',
                        data: {
                            '_token': "{{ csrf_token() }}",
                            'adsid' : adsid,
                        },
                        success: function (data) {
                            triggerAlert('Ads deleted successfully', 'error');
                            setTimeout(function() {
                                location.reload();
                            }, 3000);

                        },
                        error: function(xhr, status, error) {
                            triggerAlert('something went wrong!', 'error');
                        }
                    });

                }
            });
        });
    });
</script>
<script>
    $(function() {
        $('.Changestatus').change(function() {

            var status = $(this).prop('checked') == true ? 1 : 0;
            var ads_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{route('ChangePostAdsStatus')}}',
                data: {'status': status, 'ads_id': ads_id},
                success: function(data){

                  if(data.data == 0){
                    triggerAlert('Your post has to be offline', 'error');
                     setTimeout(function() {
                            location.reload();
                        }, 5000);
                  }
                  if(data.data == 1){
                    triggerAlert('Your post has to be online', 'success');
                        setTimeout(function() {
                            location.reload();
                        }, 5000);
                  }

                }
            });
        })
     })
    $('.allcheckbox').change(function() {
        var checkboxes= $('table.my-post-tbl input[name="adsid"]').prop('checked', $(this).prop('checked'));
         var count = checkboxes.filter(':checked').length;

         $(".checked-count").text(count);

    });
    $('.PublishAll').click(function() {
        var checkboxes = $('table.my-post-tbl input[type="checkbox"]:checked').closest('.table-responsive').find('tbody input[name="adsid"]:checked');
      var processedCheckboxes = []; // to store processed checkboxes
      var values = [];
        checkboxes.each(function() {
          values.push($(this).val());
        });

      $('table.my-post-tbl input[type="checkbox"]:checked').each(function() {

        // check if checkbox has already been processed
        if ($.inArray(values, processedCheckboxes) == -1) {
            processedCheckboxes.push(values); // add to processed list
            var status = 1 ;
            var ads_id = values;
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{route('ChangePostAdsStatusall')}}',
                data: {'status': status, 'ads_id': ads_id},
                success: function(data){
                    if(data.data == 0){
                        triggerAlert('Your post has to be offline', 'error');
                        setTimeout(function() {
                            location.reload();
                        }, 5000);
                    }
                    if(data.data == 1){
                        triggerAlert('Your post has to be online', 'success');
                        setTimeout(function() {
                            location.reload();
                        }, 5000);
                    }
                }
            });
        }
      });
    });
    $('.TakeAllOffline').click(function() {
            var checkboxes = $('table.my-post-tbl input[type="checkbox"]:checked').closest('.table-responsive').find('tbody input[name="adsid"]:checked');

            var processedCheckboxes = []; // to store processed checkboxes
            var values = [];
            checkboxes.each(function() {
              values.push($(this).val());
            });

            $('table.my-post-tbl input[type="checkbox"]:checked').each(function() {

            // var valuesString = values.join(",");
            console.log(values);
            // check if checkbox has already been processed
            if ($.inArray(values, processedCheckboxes) == -1) {
              processedCheckboxes.push(values); // add to processed list

              var status = 0 ;
              var ads_id = values;

              $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{route('ChangePostAdsStatusall')}}',
                data: {'status': status, 'ads_id': ads_id},
                success: function(data){
                  if(data.data == 0){
                    triggerAlert('Your post has to be offline', 'error');
                    setTimeout(function() {
                           location.reload();
                        }, 5000);

                  }
                  if(data.data == 1){
                    triggerAlert('Your post has to be online', 'success');
                     setTimeout(function() {
                           location.reload();
                        }, 5000);
                  }
                }
              });
            }
          });
        });

    function Steps(id){
        var divid = id;

            // if(divid == "first_step"){
            //     $("#" + divid).closest('.post-add-selection').addClass("hide");
            //     $("#" + divid).closest('.post-add-selection').next().removeClass('hide');
            //     $("#first-div-filter").addClass("hide");
            // }

            //  if(divid == "second_step"){
            //     $("#" + divid).closest('.post-add-selection').addClass("hide");
            //     $("#" + divid).closest('.post-add-selection').next().removeClass('hide');
            //     $("#first-div-filter").addClass("hide");
            // }

            if(divid == "first_step"){
                                if($("#crrent_price input").val().length < 1 === true){
                                     triggerAlert('Price Margin cannot be blank','error');
                                }else{
                                    var highestPrice =  parseFloat($("#highest-order-price input").val());
                                    var currentValue = parseFloat($('#crrent_price input').val());

                                    // console.log(highestPrice);
                                    // console.log(currentValue);
                                    if(parseFloat(currentValue) > highestPrice){
                                         triggerAlert('You cannot set Price Margin more than Highest Order price','error');

                                    }else{
                                         $("#" + divid).closest('.post-add-selection').addClass("hide");
                                         $("#" + divid).closest('.post-add-selection').next().removeClass('hide');
                                    }


                                 // $("#first-div-filter").removeClass("hide");
                                }
                            }

             if(divid == "second_step"){
                                if($('#amount').val().length < 1 === true){
                                    $("#no_of_coin_coin_box").addClass("border-danger");
                                    $("#no_of_coin_error").text("Enter no of coins.");

                                    setTimeout(function(){
                                        $("#no_of_coin_error").text("");
                                    $("#no_of_coin_coin_box").removeClass("border-danger");
                                    }, 4000);
                                }

                                if($('#lowerlimit').val().length < 1 === true){
                                    $("#lowerlimit_box").addClass("border-danger");
                                    $("#lowerlimit_error").text("Please enter min limit.");
                                    setTimeout(function(){
                                        $("#lowerlimit_box").removeClass("border-danger");
                                        $("#lowerlimit_error").text("");
                                    }, 4000);
                                }


                                if($('#higherlimit').val().length < 1 ===true){
                                    $("#higherlimit_box").addClass("border-danger");
                                    $("#higherlimit_error").text("Please enter max limit.");

                                    setTimeout(function(){
                                        $("#higherlimit_box").removeClass("border-danger");
                                        $("#higherlimit_error").text("");
                                    }, 4000);

                                }

                                if($('#selected-payment-option').find('.selected-payment-option-div').length < 1){
                                    $( 'span[data-target-modal="payMethod" ]').addClass("border-red");
                                    $("#selected-payment-option_error").text("Please select payment method.");

                                    setTimeout(function(){
                                        $( 'span[data-target-modal="payMethod" ]').removeClass("border-red");
                                        $("#selected-payment-option_error").text("");
                                    }, 4000);
                                }

                                if($("#nickName").val() == ''){
                                    $('#nikname_error').text("Please add nikname.");

                                    setTimeout(function(){
                                     $('#nikname_error').text(" ");
                                    }, 4000);
                                }

                                if($('#selected-order-time').val()==""){
                                    $('#selected-order-time').removeClass("border-0");
                                    $('#selected-order-time').addClass("border-red");
                                    $("#selected-order-time_error").text("Please select order time.");

                                    setTimeout(function(){
                                    $('#selected-order-time').addClass("border-0");
                                    $('#selected-order-time').removeClass("border-red");
                                    $("#selected-order-time_error").text("");
                                    }, 2000);

                                }


                                if( $("#nickName").val() == ''){
                                  triggerAlert('Nick name are required!','error');
                                }else if(($('#amount').val().length < 1 === true)){
                                  triggerAlert('Number of coin are required!','error');
                                }else if(($('#lowerlimit').val().length < 1 ===true)){
                                  triggerAlert('Lower limit are required!','error');
                                }else if(($('#higherlimit').val().length < 1 ===true)){
                                  triggerAlert('Higher limit are required!','error');
                                }else if(($('#selected-payment-option').find('.selected-payment-option-div').length < 1) ){
                                  triggerAlert('Select payment method at least one!','error');
                                }else if($('#selected-order-time').val()== ''){
                                  triggerAlert('Select payment time limit!','error');
                                }
                                else{
                                    check_vailable_cointInWallet();

                                    if( parseFloat($('#higherlimit').val()) < parseFloat($('#lowerlimit').val()) ){
                                        triggerAlert('Lower limit must be less than higher limit','error');
                                    }else{
                                         $("#" + divid).closest('.post-add-selection').addClass("hide");
                                         $("#" + divid).closest('.post-add-selection').next().removeClass('hide');
                                    }
                                    // $("#first-div-filter").removeClass("hide");
                                }
                            }





        }

    function backStep(id){
            var divid = id;
            $("#" + divid).closest('.post-add-selection').addClass("hide");
            $("#" + divid).closest('.post-add-selection').prev().removeClass('hide');
            if(divid === "div-2"){
                  $("#first-div-filter").removeClass("hide");
            }else{
                  $("#first-div-filter").addClass("hide");
            }
        }

</script>
<script>
    var section = document.getElementById("postShareImgSection");
    var downloadBtn = document.getElementById("download-qr-img");
    downloadBtn.addEventListener("click", function() {
        html2canvas(section).then(function(canvas) {
            var imageData = canvas.toDataURL("image/png");
            var link = document.createElement("a");
            link.href = imageData;
            link.download = "wealthmarkQr.png";
            link.click();
        });
    });
</script>
<script>
    function getAllValues() {
        if($("#nickName").val() == ''){
          $('#confirm_post_modal').addClass('hide');
          triggerAlert('Nick name are required!','error');
        }else if ($('#selected-order-time').val()== ''){
          $('#confirm_post_modal').addClass('hide');
          triggerAlert('Select payment time limit!','error');
        }
        else if ($('input[name="kycCheck"]:checked').length < 1){
          $('#confirm_post_modal').addClass('hide');
          triggerAlert('Checked Completed KYC!','error');
        }else if ($('input[name="regDaysCheck"]:checked').length < 1){
          $('#confirm_post_modal').addClass('hide');
          triggerAlert('Checked Registered day!','error');

        }else if ( $('input[name="registerd_account_day"]').val() < 1){
          $('#confirm_post_modal').addClass('hide');
          triggerAlert('Enter registered day!','error');

        }else if ($('input[name="registerd_account_day"]').val().length < 1 ){
          $('#confirm_post_modal').addClass('hide');
          triggerAlert('Enter registered day!','error');

        }else if ($('input[name="holding_coinCheck"]:checked').length < 1){
          $('#confirm_post_modal').addClass('hide');
          triggerAlert('Checked holding coin!','error');

        }else if ($('input[name="holding_coin"]').val() < 1 ){
          $('#confirm_post_modal').addClass('hide');
          triggerAlert('Enter number of holding coin!','error');

        }else if ($('input[name="holding_coin"]').val().length < 1 ){
          $('#confirm_post_modal').addClass('hide');
          triggerAlert('Enter number of holding coin!','error');

        }

        else{
            if($('#confirm_post_modal').hasClass('hide') === true){
                $('#confirm_post_modal').removeClass('hide');
            }

        const activeTabValue = $('.trade button.nav-link.active').attr('value');
        const selectedcryptoType = $('.default-selected-crypto-name').text();
        const selectedglobalCurrencyname = $("#selected_crrency .selectedglobalCurrencyname").val();
        const selectedglobalCurrencyId = $("#selected_crrency .selectedglobalCurrencyId").val();
        const order_price =$('#order-price span').text();
        const highest_order_price =$('#highest-order-price span').text();
        const price_type_checkedValue = $('input[name=price_type]:checked').val();
        const current_price = $('#crrent_price input').val();
        const total_trading_amount = $('#amount').val();
        const lowerlimit = $('#lowerlimit').val();
        const higherlimit = $('#higherlimit').val();

        // var text = $(".selected-payment-option-div").find(".added-payment-div").text().trim();
        //  alert(text);

        var text = $(".selected-payment-option-div").find(".added-payment-div").map(function() {
          return $(this).text().trim();
        }).get().join(',');

        // alert(text);

        var methodTypes = text.split(',').filter(function(value) {
          return value.trim().length > 0;
        });

        var methodIds = $(".added-payment-div").map(function() {
          return this.id;
        }).get();

        const postPaymentMethod = $('.post-Payment-Method');
        postPaymentMethod.empty();

        if (methodTypes.length > 0) {
          postPaymentMethod.append(`<span class="${methodTypes[0]}">${methodTypes[0]}</span><input type="hidden" class="methodIds_${methodIds[0]}" name="methodIds" value="${methodIds[0]}">`);

          for (let i = 1; i < methodTypes.length; i++) {
            postPaymentMethod.append(`, <span class="${methodTypes[i]}">${methodTypes[i]}</span><input type="hidden" class="methodIds_${methodIds[i]}" name="methodIds" value="${methodIds[i]}">`);
          }
        }




        // Payment Time
        const selectedTime= $('#selected-order-time').val().split('_Minutes')[0];

        // Remarks (Optional) Values

        const remarks = $('#remarks').val();
        // console.log(remarks);

        // Auto Reply (Optional) values

        const autoreplay =$('#autoreplay').val();
        // console.log(autoreplay);
        // Counterparty Conditions values

        var checkedValues = [];

        $('input[type=checkbox]:checked').each(function() {
            var checkboxLabel = $(this).siblings('.text-muted').text();
            if (checkboxLabel) {
                var inputVal = $(this).siblings('span').find('input').length ? $(this).siblings('span').find('input').val() : '';
                var inputUnit = $(this).siblings('.text-muted').last().text();
                checkedValues.push({
                    'value': checkboxLabel,
                    'inputValue': inputVal,
                    'inputUnit': inputUnit
                });
            }
        });


        //Status values
        const statuscheckedValue = $('input[name=post_status]:checked').val();
        // console.log(statuscheckedValue);

        if(activeTabValue == 0){
            $(".post-type").html('Buy');
        }
        if(activeTabValue == 1){
            $(".post-type").text('Sell');
        }

        $(".post-Assets").text(selectedcryptoType);
        $(".post-Currency").text(selectedglobalCurrencyname);

        if(price_type_checkedValue == 0){
            $(".post-Currency-type").text('Fixed');
        }
        if(price_type_checkedValue == 1){
            $(".post-Currency-type").text('Floating');
        }

        $(".post-fixed-total-value").text(current_price);

        $(".post-Order-lower-limit").text(lowerlimit);
        $(".post-Order-higher-limit").text(higherlimit);
        $(".post-Trading-amt-val").text(total_trading_amount);

        $('.compleated-kyc').text(checkedValues[0].value);
        $('.registered-day').text(`Registered ${checkedValues[1].inputValue} ${checkedValues[1].inputUnit}`);
        $('.holding-more').text(`Holding more than ${checkedValues[2].inputValue} ${checkedValues[2].inputUnit}`);

        const estimatedfee_val = $('.estimatedfee').text();
        const post_Estimated_fee_type = $('.estimatedfeetype').text();
         $(".post-Estimated-fee-val").text(estimatedfee_val);
         $(".post-Estimated-fee-type").text(post_Estimated_fee_type);

         const estimatedfeeID =  $('.estimatedfeeID').val();
         $('input[name="hestimatedfeeid"]').val(estimatedfeeID);
        $(".post-time-limit-val").text(selectedTime);

        const postCurrencyid = $('.selectedglobalCurrencyId').val();
         $('input[name="postCurrencyid"]').val(postCurrencyid);

        //$(".").text();

        }

    }

    function SubmitEditPostAds(id) {
       //alert(id);
        const ordertype = $('.postTypeOrder').val();
      //  alert(ordertype);
        const cryptoname= $('.selected-asset').text();
        const faithid= $('.postCurrencyid').val();
        const pricetype= $('input[name=price_type]:checked').val();
        const fixed_floating_pice= $('.post-fixed-total-value').text();
        const total_amount= $('.post-Trading-amt-val').text();
        const order_lower_limit= $('.post-Order-lower-limit').text();
        const order_higher_limit= $('.post-Order-higher-limit').text();
        const payment_method= $('.post-Payment-Method').text();
        const payment_time_limit= $('.post-time-limit-val').text();
        const terms= $('#remarks').val();
        const auto_replay= $('#autoreplay').val();

        const selectedCoinPrice = $('.selectedCoinPrice').val();
        const selectedglobalCurrency = $('.selectedglobalCurrency').val();
        const domestic_currency_value =  $('.selected-golobal-currency-type-value').text();
        const nickname = $('#nicknameval').val();
        const availableCoins = $('input[name="available_coins"]').val();
        const counterpartyConditions = {};
            $('.c-conditions input[type=checkbox]:first').each(function() {
                counterpartyConditions[$(this).next().text().replace(/\s/g, '')] = $(this).is(':checked') ? 1 : 0;
            });

            $('.c-conditions input[type=number]').each(function() {
                const name = $(this).attr('name');
                if (name) {
                    counterpartyConditions[name] = $(this).val();
                }
            });
        const cryptoPriceInInr = ($('#selected_crypto .selectedCoinPrice').val() / $('input[name="currency-1_price"].selectedcurrencyPrice ').val() ).toFixed(8);
        const estimated_fee= $('.hestimatedfeeid').val();
        const status= $('input[name=post_status]:checked').val();
        const methodIds = $('.post-Payment-Method input[class^="methodIds_"]').map(function() {

                            return $(this).val();

                            }).get();

        console.log(methodIds);
        const adsId = $('input[name="adsid"]').val();

        $.ajax({
            type: 'POST',
            url: '{{ route('EditPostAds') }}',
            cache: false,
            beforeSend: function(){ $("#SubmitEditPostAds").text("Post Getting Submited."); $("#SubmitEditPostAds").css("pointer-events","none"); },
            data: {
                '_token': "{{ csrf_token() }}",
                'adsId':adsId,
                'ordertype' : ordertype ,
                'cryptoname' : cryptoname ,
                'faithid' : faithid,
                'pricetype' : pricetype ,
                'fixed_floating_pice' : fixed_floating_pice ,
                'total_amount' : total_amount ,
                'order_lower_limit' : order_lower_limit,
                'order_higher_limit' : order_higher_limit ,
                'payment_method' : methodIds ,
                'payment_time_limit' : payment_time_limit,
                'terms' : terms ,
                'auto_replay' : auto_replay ,
                'countryparty_condition' : counterpartyConditions,
                'estimated_fee' : estimated_fee ,
                'status' : status ,
                'selectedCoinPrice' :selectedCoinPrice,
                'selectedglobalCurrency' : selectedglobalCurrency,
                'domestic_currency_value': domestic_currency_value,
                'cryptoPriceInInr' : cryptoPriceInInr,
                'nickname' : nickname,
                'availableCoins' : availableCoins
            },
            success: function (data) {

                $('#confirm_post_modal .custom-modal-bck-bg').addClass('hide').removeClass('custom-modal-bck-bg');
                document.getElementById("post-ads-form").reset();
                triggerAlert('Ads Edited successfully!','success');
                setTimeout(function(){
        //            window.location.href = '{{ url(app()->getLocale())."/my-ads" }}';

                }, 2500)
                $("#third-section").addClass('hide')
                $("#second-section").addClass('hide')
                $("#first-section").removeClass('hide')

            },
            error: function(xhr, status, error) {
                triggerAlert('Something went wrong!','error');
            }
        });

    }

    function check_vailable_cointInWallet(){
         if($("#sell").hasClass('active') == true ){
           var amount = $('#amount').val();

           var available_cointInwallet = $("input[name='available_coins']").val();
           if(parseFloat(available_cointInwallet) < parseFloat(amount)){
               triggerAlert('Insufficient coins in your wallet to sell','error');
               $('#amount').val('');

           }
      }
    }

    function checkLimit(){
        // console.log('wealthmark');

        check_vailable_cointInWallet();

        var higherlimit = $('#higherlimit').val();
        var lowerlimit = $('#lowerlimit').val();

        // console.log(amount);
        // console.log(higherlimit);
        // console.log(lowerlimit);

            if(higherlimit.length > 1 && lowerlimit.length > 1){

                if( parseFloat($('#higherlimit').val()) < parseFloat($('#lowerlimit').val()) ){
                    triggerAlert('Lower limit must be less than higher limit','error');
                }
            }

    }
</script>

 </body>
</html>







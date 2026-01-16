  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
  @include('template.web_css')


 <style>


.wrapper {
  display: block;
  margin: 5em auto;
  border: 1px solid #555;
  width: 700px;
  height: 350px;
  position: relative;
}
p{text-align:center;}
.label {
  height: 1em;
  padding: .3em;
  background: rgba(255, 255, 255, .8);
  position: absolute;
  display: none;
  color:#333;

}

 </style>


   </head>

 <body class="bg-white">
        @include('template.web_menu')

  <div data-target-modal="demo">
      Open Modal
  </div>


    <div id="demo">
        <div class="hide">
            <div class="wm-custom-modal-diolog">
                <div class="">
                    <div class="wm-custom-modal-header">
                        <span>Security verification </span>
                        <svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">
                             <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="wm-custom-modal-body px-3">
                    <div class="container-fluid p-0 m-0">


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //  $("#open_modal").click(function() {
        //     $(".hide").addClass("custom-modal-bck-bg").removeClass("hide");
        //  });
        $('[data-target-modal]').click(function() {
            const divId = $(this).attr('data-target-modal');
            $("#"+divId).children().removeClass('hide')
        });

         $(".wm-custom-modal-close").click(function() {
          $(".custom-modal-bck-bg").addClass("hide").removeClass("custom-modal-bck-bg");

        });
    </script>








    <!---------------------------------------tab pills------------------------------->

            <div class="dashboard-tabpills">
                <div class="dashboard-card balance-details mb-4">
                    <div class="dashboard-card-body">
                        <ul class="nav nav-pills my-1 border-bottom" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="false">Credit Card and Debit Card</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-p2p-tab" data-bs-toggle="pill" data-bs-target="#pills-p2p" type="button" role="tab" aria-controls="pills-p2p" aria-selected="false">Bank Deposit</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-margin-tab" data-bs-toggle="pill" data-bs-target="#pills-margin" type="button" role="tab" aria-controls="pills-margin" aria-selected="true">P2P Trading</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-futures-tab" data-bs-toggle="pill" data-bs-target="#pills-futures" type="button" role="tab" aria-controls="pills-futures" aria-selected="false">Third Party Payment</button>
                        </li>

                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">

                            </div>

                            <div class="tab-pane fade" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">

                            </div>
                            <div class="tab-pane fade " id="pills-margin" role="tabpanel" aria-labelledby="pills-margin-tab">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!---------------------------------------tab pills------------------------------->











 <!-------------------------switch boc-----------?-->
    <div class="switch-box">
<label class="switch">
  <input type="checkbox"/>
  <div></div>
</label>
</div>
<script>
    $('.switch input').on('change', function(){
  var dad = $(this).parent();
  if($(this).is(':checked'))
    dad.addClass('switch-checked');
  else
    dad.removeClass('switch-checked');
});

</script>
    <!-------------------------switch boc-----------?-->






  <!-----------------------------------pagination----------------------------------------------------------->

     <div class="pagination-div mt-3">
                   <button type="button" class="mirror pagination-back" aria-label="Previous page" disabled="">
                     <svg viewBox="0 0 24 24" fill="none" class="custom-modal-close-icon">
                       <path fill-rule="evenodd" clip-rule="evenodd" d="M11.934 12l3.89 3.89-1.769 1.767L8.398 12l1.768-1.768 3.89-3.889 1.767 1.768-3.889 3.89z" fill="currentColor"></path>
                     </svg>
                   </button>
                   <button type="button" aria-label="Page number 1" class="pagination-active" disabled="">1</button>
                   <button type="button" aria-label="Page number 2" class="pagination-all">2</button>
                   <button type="button" aria-label="Page number 3" class="pagination-all">3</button>
                   <button type="button" aria-label="Page number 4" class="pagination-all">4</button>
                   <button type="button" aria-label="Page number 5" class="pagination-all">5</button>
                   <button type="button" class="mirror pagination-next" aria-label="Next page">
                     <svg viewBox="0 0 24 24" fill="none" class="custom-modal-close-icon">
                       <path fill-rule="evenodd" clip-rule="evenodd" d="M12.288 12l-3.89 3.89 1.768 1.767L15.823 12l-1.768-1.768-3.889-3.889-1.768 1.768 3.89 3.89z" fill="currentColor"></path>
                     </svg>
                   </button>
                 </div>

<!-----------------------------------toltip----------------------------------------------------------->

<div  data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="content here.">

          Add WOO
</div>




<!-----------------------------------accordian----------------------------------------------------------->


<section class="wm-pay-accordian-section">
    <div class="container">
        <div class="outlet-main-div">
                 <div class="wm-outlet-div">

                            <div class="sec-title text-center mb-2">
                           <h2 class="heading-h2">FAQs</h2>
                            </div>

                        </div>
                         <div class="wm-outlet-div text-right justify-content-end">

                            <a href="#" class="learn-more btn-6">
                           <span>Learn More </span>
                           <span><i class="bi bi-chevron-right"></i></span>
                        </a>

                        </div>
                        </div>
    </div>
    <div class="container">
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-head" id="headingOne">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
     What is DeFi Staking?
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text">  DeFi (Decentralized Finance) is a way of providing financial services to users through smart contracts. Existing DeFi projects aim to provide higher annualized earnings for specific currencies.</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
  About Wealthmark DeFi Staking
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text">There's a relatively high threshold for users of DeFi products. Wealthmark DeFi Staking acts on behalf of users to participate in certain DeFi products, obtains and distributes realized earnings, and helps users to participate in DeFi products with a single click.</div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
     What are the advantages of DeFi Staking?
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text">1. Easy to use: You don't need to manage private keys, acquire resources, make trades, or perform other complicated tasks to participate in DeFi Staking. Wealthmark's one-stop service allows users to obtain generous online rewards without keeping an on-chain wallet. 2. No gas fee: Wealthmark Staking deposits users’ funds into smart contracts on users’ behalf, saving users on-chain gas fees.</div>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
   After I participate in DeFi Staking, how is the earnings cycle calculated?
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text">Once funds are successfully allocated to DeFi Staking, earnings are calculated beginning at 00:00 (UTC) the following day. The minimum earnings calculation period is one day; earnings for a period of less than one day will not be included in the earnings distribution.</div>
      </div>
    </div>
  </div>


</div>
</div>
</section>
 <script src="{{ asset('css/accordian_bootstrap.min.js') }}"></script>
<!---------end accordian--------------------->

<!------------------------------------------search function with spinner -------------------------------------------------------------->

 --------------------------------------------swap 2 values  jquery--------------------------------------------

                                           $.fn.swap = function (elem) {
                        elem = elem.jquery ? elem : $(elem);
                            return this.each(function () {
                            $(document.createTextNode('')).insertBefore(this).before(elem.before(this)).remove();
                        });
                    };


                $('#swap_value').click(function () {
                    $('#coinvert_coin_from_text').swap('#coinvert_coin_to_text');
                    $('#coinvert_coin_from_img').swap('#coinvert_coin_to_img');

                });


  <!--===========================================dropdown----------------------------------------                                      -->

     <div class="lf-select_coin-to">
                                             <div class="coin-swap-from m-0">
                                                <input type="text" value="31" class="lf-select-coin-to-input">
                                                <i class="bi bi-caret-down-fill lf-select-coin-to-icn"></i>
                                             </div>
                                             <div class="lf-select-coin-to-active-div">
                                                <div class="wm-dropdown-optn-item-div">
                                                   <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                   <div class="wm-dropdown-optn-item-txt">INR</div>
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
                                                   @foreach ($allcurrency as $currency)
                                                   <li role="option" id="{{ $currency->id }}" title="{{ $currency->id }}" class="wm-dropdown-optn-item " onclick="changeSrc2(this.id); changeSrc4(this.id)" style="display: list-item;">
                                                      <div class="wm-dropdown-optn-item-inner">
                                                         <div class="wm-dropdown-optn-item-div">
                                                            <img class="wm-dropdown-optn-item-img" src="{{ asset('img/87496d50-2408-43e1-ad4c-78b47b448a6a.png') }}">
                                                            <div class="wm-dropdown-optn-item-txt">{{ $currency->name }}</div>
                                                         </div>
                                                      </div>
                                                   </li>
                                                   @endforeach
                                                </ul>
                                             </div>
                                          </div>


  <!----------------------table to div convert------------------------------------------->



  <div class="tbl-convert-div">
                       <table class="table table-hover tbl-to-div">
                          <thead>
                                   <th>Date</th>
                                   <th>Pair</th>
                                   <th>Type</th>
                                   <th>Side</th>
                                   <th>Price</th>
                                   <th>Amount</th>
                                   <th>Filled</th>
                                   <th>	Total</th>
                                   <th>Trigger Conditions</th>
                                   <th>Action</th>

                          </thead>
                           <tbody>
                               <tr>
                                   <td><div class="">20-02-22</div></td>
                                   <td>USDT-BUSD</td>
                                   <td>Coin</td>
                                   <td>TRansfer</td>
                                   <td>12,500</td>
                                   <td>4,52,01200</td>
                                   <td>filled</td>
                                   <td>50 Coin</td>
                                   <td>Buy</td>
                                   <td>Buy</td>
                                   <td class="arrow-open">
                                       <span class="expand-row">
                                           <i class="bi bi-chevron-down"></i>
                                       </span>
                                   </td>
                               </tr>
                               <tr>
                                   <td><div class="">20-02-22</div></td>
                                   <td>USDT-BUSD</td>
                                   <td>Coin</td>
                                   <td>TRansfer</td>
                                   <td>12,500</td>
                                   <td>4,52,01200</td>
                                   <td>filled</td>
                                   <td>50 Coin</td>
                                   <td>Buy</td>
                                   <td>Buy</td>
                                    <td class="arrow-open">
                                       <span class="expand-row">
                                           <i class="bi bi-chevron-down"></i>
                                       </span>
                                   </td>

                               </tr>
                               <tr>
                                   <td><div class="">20-02-22</div></td>
                                   <td>USDT-BUSD</td>
                                   <td>Coin</td>
                                   <td>TRansfer</td>
                                   <td>12,500</td>
                                   <td>4,52,01200</td>
                                   <td>filled</td>
                                   <td>50 Coin</td>
                                   <td>Buy</td>
                                   <td>Buy</td>
                                    <td class="arrow-open">
                                       <span class="expand-row">
                                           <i class="bi bi-chevron-down"></i>
                                       </span>
                                   </td>

                               </tr>
                               <tr>
                                   <td><div class="">20-02-22</div></td>
                                   <td>USDT-BUSD</td>
                                   <td>Coin</td>
                                   <td>TRansfer</td>
                                   <td>12,500</td>
                                   <td>4,52,01200</td>
                                   <td>filled</td>
                                   <td>50 Coin</td>
                                   <td>Buy</td>
                                   <td>Buy</td>
                                    <td class="arrow-open">
                                       <span class="expand-row">
                                           <i class="bi bi-chevron-down"></i>
                                       </span>
                                   </td>

                               </tr>

                           </tbody>
                       </table>
                   </div>
                   <div id="tbl-append-here">

                   </div>


  <!------------------------------------dropdown button---------------------------->
 <div class="dropdown-container">
            <div class="custom-dropdown-toggle click-dropdown">
              DropDown Menu
            </div>
            <div class="custom-dropdown-menu">
              <ul>
                <li><a href="#">DropDown Menu Item 1</a></li>
                <li><a href="#">DropDown Menu Item 2</a></li>
                <li><a href="#">DropDown Menu Item 3</a></li>
                <li><a href="#">DropDown Menu Item 4</a></li>
              </ul>
            </div>
          </div>

  <style>

/* Dropdown menu css */
 .dropdown-container {
	 position: relative;
	 max-width: 240px;
}
 .dropdown-container .custom-dropdown-toggle {
	 color: #000;
	 background-color: #fff;
	 font-size: 17px;
	 padding: 18px 20px;
	 box-shadow: 0px 0px 4px -2px rgba(0, 0, 0, 0.5);
	 border-radius: 10px;
	 font-weight: 600;
	 cursor: pointer;
	 position: relative;
	 transition: all ease-in-out 0.3s;
}

 .dropdown-container .custom-dropdown-toggle:hover, .dropdown-container .custom-dropdown-toggle:active, .dropdown-container .custom-dropdown-toggle:focus {
	 background-color: #0979ce;
	 color: #fff;
}
 .dropdown-container .custom-dropdown-menu {
	 width: 100%;
	 border-radius: 10px;
	 box-shadow: 0px 0px 4px -2px rgba(0, 0, 0, 0.5);
	 margin-top: 17px;
	 position: absolute;
	 left: 0;
	 top: 100%;
	 display: none;
	 background-color: #fff;
	 z-index: 10;
}
 .dropdown-container .custom-dropdown-menu ul {
	 list-style: none;
	 padding: 0;
	 margin: 0;
	 overflow: hidden;
	 border-radius: 10px;
	 z-index: 10;
}
 .dropdown-container .custom-dropdown-menu a {
	 text-decoration: none;
	 display: block;
	 color: #000;
	 font-size: 15px;
	 padding: 16px 20px;
	 font-weight: 600;
	 box-shadow: 0px 0px 4px -2px rgba(0, 0, 0, 0.5);
	 transition: all ease-in-out 0.3s;
}
 .dropdown-container .custom-dropdown-menu a:hover, .dropdown-container .custom-dropdown-menu a:active, .dropdown-container .custom-dropdown-menu a:focus {
	 background-color: #0979ce;
	 color: #fff;
}
 .custom-dropdown-menu, .custom-dropdown-toggle {
	 position: relative;
}
 .custom-dropdown-menu::before, .custom-dropdown-toggle::before {
	 content: "";
	 position: absolute;
	 right: 20px;
	 top: 50%;
	 transform: translateY(-50%) rotate(45deg);
	 border: 5px solid;
	 border-top-color: rgba(0, 0, 0, 0);
	 border-left-color: rgba(0, 0, 0, 0);
	 margin-top: -2.5px;
	 background-color: rgba(0, 0, 0, 0);
	 transition: all ease-in-out 0.2s;
}
 .custom-dropdown-menu {
	 z-index: 10;
	 position: relative;
}
 .custom-dropdown-menu::before {
	 z-index: -1;
	 transform: rotate(-135deg);
	 top: -4px;
	 border-color: #fff;
	 box-shadow: 1px 1px 4px -2px rgba(0, 0, 0, 0.4);
}
 .dropdown-open .custom-dropdown-menu.dropdown-active {
	 display: block;
}
 .dropdown-container.dropdown-open .custom-dropdown-toggle {
	 background-color: #0979ce;
	 color: #fff;
}
 .dropdown-container.dropdown-open .custom-dropdown-toggle:before {
	 transform: rotate(-135deg);
}

  </style>


  <script>

// Get all the dropdown from document
document.querySelectorAll('.custom-dropdown-toggle').forEach(dropDownFunc);

// Dropdown Open and Close function
function dropDownFunc(dropDown) {
    console.log(dropDown.classList.contains('click-dropdown'));

    if(dropDown.classList.contains('click-dropdown') === true){
        dropDown.addEventListener('click', function (e) {
            e.preventDefault();

            if (this.nextElementSibling.classList.contains('dropdown-active') === true) {
                // Close the clicked dropdown
                this.parentElement.classList.remove('dropdown-open');
                this.nextElementSibling.classList.remove('dropdown-active');

            } else {
                // Close the opend dropdown
                closeDropdown();

                // add the open and active class(Opening the DropDown)
                this.parentElement.classList.add('dropdown-open');
                this.nextElementSibling.classList.add('dropdown-active');
            }
        });
    }

    if(dropDown.classList.contains('hover-dropdown') === true){

        dropDown.onmouseover  =  dropDown.onmouseout = dropdownHover;

        function dropdownHover(e){
            if(e.type == 'mouseover'){
                // Close the opend dropdowns
                closeDropdown();

                // add the open and active class(Opening the DropDown)
                this.parentElement.classList.add('dropdown-open');
                this.nextElementSibling.classList.add('dropdown-active');

            }

            // if(e.type == 'mouseout'){
            //     // close the dropdown after user leave the list
            //     e.target.nextElementSibling.onmouseleave = closeDropdown;
            // }
        }
    }

};


// Listen to the doc click
window.addEventListener('click', function (e) {

    // Close the menu if click happen outside menu
    if (e.target.closest('.dropdown-container') === null) {
        // Close the opend dropdown
        closeDropdown();
    }

});


// Close the openend Dropdowns
function closeDropdown() {
    console.log('run');

    // remove the open and active class from other opened Dropdown (Closing the opend DropDown)
    document.querySelectorAll('.dropdown-container').forEach(function (container) {
        container.classList.remove('dropdown-open')
    });

    document.querySelectorAll('.custom-dropdown-menu').forEach(function (menu) {
        menu.classList.remove('dropdown-active');
    });
}

// close the dropdown on mouse out from the dropdown list
document.querySelectorAll('.custom-dropdown-menu').forEach(function (dropDownList) {
    // close the dropdown after user leave the list
    dropDownList.onmouseleave = closeDropdown;
});

  </script>





  <!--=========================for btn animate untill form validation true==================================-->
  <section>
                <div class="container">
                    <div class="btn-animate">
                        <div>
                            <input type="checkbox" id="example-box" class="inputClass">
                        </div>
                        <button class="btn-animate-hover">Try to click me!</button>
                    </div>
                </div>
            </section>


  <script>
       $(document).on("change", "#example-box", function () {
    if($(this).is(':checked')){
        $('.btn-animate button').addClass('normal-btn').removeClass('btn-animate-hover');
    }else{
         $('.btn-animate button').addClass('btn-animate-hover').removeClass('normal-btn');
    }

});
 $('.btn-animate-hover').on('mouseover', function() {
        var dinHeight = $('.btn-animate').height();
        var dinWidth = $('.btn-animate').width();

        $(this).animate({
            'top': Math.random() * dinHeight + "px",
            'left': Math.random() * dinWidth + "px"
          }, "medium");
        })
  </script>































    </body>
</html>

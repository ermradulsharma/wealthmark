  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
  @include('template.web_css')


 <style>

 </style>


   </head>

 <body class="bg-white">
        @include('template.web_menu')





   <section  class="breadcrumbs shadow-sm career-section-breadcrumbs p-5">
          <div class="container-fluid">
              <div class="row justify-content-center">

                 <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12  d-flex flex-column justify-content-center">
                 <h3 class="top-heading yellow-text">Strategy Trading</h3>
                 <p class="top-p text-white">Trading made easy, trade like a pro.</p>

                 </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="actice-Strategies">
                      <div class="actice-Strategies-row">
                        <div class="actice-Strategies-txt">Active Strategies</div>
                        <div class="actice-Strategies-total-value">45,331</div>
                      </div>
                      <div class="sp-search-option-txt">
                        <div class="actice-Strategies-txt">Total Value</div>
                        <div class="actice-Strategies-total-value">$88,538,480.38</div>
                      </div>
                      <div class="actice-Strategies-icon">

                       <i class="bi bi-info-circle-fill"></i>

                      </div>
                    </div>
                 </div>
               </div>
            </div>
      </section>

<div class="bg-light-blue strategy-trading">

    <div class="container">
        <div class="row">
            <nav>
			<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Create Strategy</button>
				<button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Strategy Pool</button>
				<button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Trading Analytics</button>
			</div>
		</nav>
        </div>
    </div>
</div>

<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			    <div class=" bg-light-blue">
  <div class="strategy-card-main">
    <div class="strategy-card-main-inner">
      <div class="strategy-card-main-title">Long Term Yield Strategy</div>
      <div class="strategy-card-list">
        <div class="strategy-card-list-inner">
          <div>
            <div class="strategy-card-title">Spot Grid</div>
            <div class="strategy-card-subtitle">Buy low and sell high automatically 24/7 with just one click.</div>
            <div class="strategy-card-last">
              <div class="strategy-card-greentxt">25,730</div> Strategies Are Running. Total Investment <div class="strategy-card-greentxt">68,182,738.54</div> USDT
            </div>
          </div>
          <div class="button-container">
            <button type="button" class=" strategy-card-btn">Create</button>
          </div>
        </div>
        <div class="border-bottom-box">
          <div class="border-bottom"></div>
        </div>
        <div class="strategy-card-list-inner">
          <div>
            <div class="strategy-card-title">Futures Grid</div>
            <div class="strategy-card-subtitle">Multiply your purchasing power with an advanced version of Grid Trading.&nbsp;</div>
            <div class="strategy-card-last">
              <div class="strategy-card-greentxt">19,451</div> Strategies Are Running. Total Investment <div class="strategy-card-greentxt">20,419,214.85</div> USDT
            </div>
          </div>
          <div class="button-container">
            <button type="button" class=" strategy-card-btn">Create</button>
          </div>
        </div>
        <div class="border-bottom-box">
          <div class="border-bottom"></div>
        </div>
      </div>

    </div>
  </div>
</div>


			</div>
			<div class="tab-pane fade active show" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			    <div class="sp-div-main bg-lght-blue">
  <div class="strategy-card-main">
    <form class="sp-search-form">
      <div class="sp-search-form-inner">
        <div name="strategyType" class="sp-search-div">
          <div class=" sp-search-div-1">
            <input type="input" aria-label="Strategy Type" class="sp-search-input sp-search-input-bg" value="1">

              <div class="sp-drpdn-icon-div">
                <i class="bi bi-caret-down-fill sp-drpdn-icon"></i>

                </div>

            <label class="sp-search-lbl sp-search-lbl-txt">Strategy Type</label>
          </div>
          <div class="sp-search-value sp-search-value-placeholder">Spot Grid</div>
          <div class="sp-search-dropdown">
            <ul role="listbox" class="sp-search-dropdown-list sm-max-width-228">
              <li role="option" title="1" class="sp-active-option sp-search-option-item sp-search-active-color">
                <div class="sp-search-option flex-div">
                  <div class="sp-search-option-txt">Spot Grid</div>
                </div>
              </li>
              <li role="option"  title="2" class="sp-search-option-item sp-search-list-color">
                <div class="sp-search-option flex-div">
                  <div class="sp-search-option-txt">Futures Grid</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div name="market" class="sp-search-div">
          <div class=" sp-search-div-1">
            <input type="input" aria-label="Market" class="sp-search-input sp-search-input-" value="">

              <div class="sp-drpdn-icon-div">
               <i class="bi bi-caret-down-fill sp-drpdn-icon"></i>
              </div>

            <label class="sp-search-lbl sp-search-lbl-txt">Market</label>
          </div>
          <div class="sp-search-value sp-search-value-placeholder">All</div>
          <div class="sp-search-dropdown">

            <ul role="listbox" class="sp-search-dropdown-list sm-max-width-228">
              <li role="option"  title="" class="sp-active-option sp-search-option-item sp-search-active-color">
                <div class="sp-search-option flex-div">
                  <div class="sp-search-option-txt">All</div>
                </div>
              </li>

            </ul>
          </div>
        </div>
        <div name="roi" class="sp-search-div">
          <div class=" sp-search-div-1">
            <input type="input" aria-label="ROI" class="sp-search-input sp-search-input-" value="">
          <div class="sp-drpdn-icon-div">
                <i class="bi bi-caret-down-fill sp-drpdn-icon"></i>
                </div>
            <label class="sp-search-lbl sp-search-lbl-txt">ROI</label>
          </div>
          <div class="sp-search-value sp-search-value-placeholder">All</div>
          <div class="sp-search-dropdown">
            <ul role="listbox" class="sp-search-dropdown-list sm-max-width-228">
              <li role="option"  title="" class="sp-active-option sp-search-option-item sp-search-active-color">
                <div class="sp-search-option flex-div">
                  <div class="sp-search-option-txt">All</div>
                </div>
              </li>
              <li role="option"  title="0-0.05" class="sp-search-option-item sp-search-list-color">
                <div class="sp-search-option flex-div">
                  <div class="sp-search-option-txt">0-5%</div>
                </div>
              </li>

            </ul>
          </div>
        </div>
        <div name="zone" class="sp-search-div">
          <div class=" sp-search-div-1">
            <input type="input" aria-label="Zone" class="sp-search-input sp-search-input-" value="">
           <div class="sp-drpdn-icon-div">
                <i class="bi bi-caret-down-fill sp-drpdn-icon"></i>
                </div>
            <label class="sp-search-lbl sp-search-lbl-txt">Zone</label>
          </div>
          <div class="sp-search-value sp-search-value-placeholder">All</div>
          <div class="sp-search-dropdown">
            <ul role="listbox" class="sp-search-dropdown-list sm-max-width-228">
              <li role="option"  title="" class="sp-active-option sp-search-option-item sp-search-active-color">
                <div class="sp-search-option flex-div">
                  <div class="sp-search-option-txt">All</div>
                </div>
              </li>
              <li role="option" title="innovation-zone" class="sp-search-option-item sp-search-list-color">
                <div class="sp-search-option flex-div">
                  <div class="sp-search-option-txt">Innovation</div>
                </div>
              </li>


            </ul>
          </div>
        </div>
      </div>
      <div class="sp-filter-div">
        <button type="button" type="button" class=" sp-reset">Reset</button>
        <button type="button" type="submit" class=" sp-filter">Filter</button>
      </div>
    </form>
  </div>
</div>
<div class="bg-white pt-5 pb-5">
  <div class="strategy-card-main">
    <div class="strategy-card-title">Spot Grid</div>
    <div class="strategy-pool-category">
      <div class="strategy-pool-category-right">Data refreshed hourly. <br> Last updated on 2022-10-27 11:43:02. </div>
      <div class="flex-div">
        <button type="button" class="button-active strategy-pool-category-btn">ROI</button>
        <button type="button" class=" strategy-pool-category-btn">PNL</button>
        <button type="button" class="copy-count-btn strategy-pool-category-btn">Copy Popularity

            <div class="info-icon-div mr-10px">

                  <i class="bi bi-info-circle-fill "></i>

            </div>

        </button>
      </div>
    </div>
    <div class="strategy-pool-main-content">
      <div class="pool-main-content-block">
        <div class="pool-main-content-row1">
          <div class="pool-main-content-row1-left">GMT/BUSD</div>
          <div class="pool-main-content-row1-right">
            <div class="pool-main-content-row1-right-inner">

              <svg  viewBox="0 0 24 24" fill="none" class="pool-main-content-row1-right-inner-svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 3h11v13h-3V6H9V3zM4 8v13h11V8.02L4 8z" fill="currentColor"></path>
              </svg> 6300
            </div>
          </div>
        </div>
        <div class="pool-main-content-row2">
          <div class="">
            <div class="pool-main-content-row2-left-title">891.94%</div>
            <div class="pool-main-content-row2-subtitle">ROI</div>
          </div>
          <div class="">
            <div class="pool-main-content-row-title">7840.67</div>
            <div class="pool-main-content-row2-subtitle">PNL(USDT)</div>
          </div>
        </div>
        <div class="pool-main-content-row3">
          <div class="pool-main-content-row-left">Running Time</div>
          <div class="pool-main-content-row-right">156d 20h 54m</div>
        </div>
        <button  type="button" class=" pool-main-content-btn">Use Parameter</button>
      </div>
      <div class="pool-main-content-block">
        <div class="pool-main-content-row1">
          <div class="pool-main-content-row1-left">GMT/BUSD</div>
          <div class="pool-main-content-row1-right">
            <div class="pool-main-content-row1-right-inner">

              <svg  viewBox="0 0 24 24" fill="none" class="pool-main-content-row1-right-inner-svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 3h11v13h-3V6H9V3zM4 8v13h11V8.02L4 8z" fill="currentColor"></path>
              </svg> 45
            </div>
          </div>
        </div>
        <div class="pool-main-content-row2">
          <div class="">
            <div class="pool-main-content-row2-left-title">442.52%</div>
            <div class="pool-main-content-row2-subtitle">ROI</div>
          </div>
          <div class="">
            <div class="pool-main-content-row-title">474.08</div>
            <div class="pool-main-content-row2-subtitle">PNL(USDT)</div>
          </div>
        </div>
        <div class="pool-main-content-row3">
          <div class="pool-main-content-row-left">Running Time</div>
          <div class="pool-main-content-row-right">165d 1h 6m</div>
        </div>
        <button  type="button" class=" pool-main-content-btn">Use Parameter</button>
      </div>
      <div class="pool-main-content-block">
        <div class="pool-main-content-row1">
          <div class="pool-main-content-row1-left">GMT/BUSD</div>
          <div class="pool-main-content-row1-right">
            <div class="pool-main-content-row1-right-inner">

              <svg viewBox="0 0 24 24" fill="none" class="pool-main-content-row1-right-inner-svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 3h11v13h-3V6H9V3zM4 8v13h11V8.02L4 8z" fill="currentColor"></path>
              </svg> 9
            </div>
          </div>
        </div>
        <div class="pool-main-content-row2">
          <div class="">
            <div class="pool-main-content-row2-left-title">315.34%</div>
            <div class="pool-main-content-row2-subtitle">ROI</div>
          </div>
          <div class="">
            <div class="pool-main-content-row-title">609.59</div>
            <div class="pool-main-content-row2-subtitle">PNL(USDT)</div>
          </div>
        </div>
        <div class="pool-main-content-row3">
          <div class="pool-main-content-row-left">Running Time</div>
          <div class="pool-main-content-row-right">189d 20h 56m</div>
        </div>
        <button  type="button" class=" pool-main-content-btn">Use Parameter</button>
      </div>
      <div class="pool-main-content-block">
        <div class="pool-main-content-row1">
          <div class="pool-main-content-row1-left">GMT/BUSD</div>
          <div class="pool-main-content-row1-right">
            <div class="pool-main-content-row1-right-inner">

              <svg  viewBox="0 0 24 24" fill="none" class="pool-main-content-row1-right-inner-svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 3h11v13h-3V6H9V3zM4 8v13h11V8.02L4 8z" fill="currentColor"></path>
              </svg> 20
            </div>
          </div>
        </div>
        <div class="pool-main-content-row2">
          <div class="">
            <div class="pool-main-content-row2-left-title">303.99%</div>
            <div class="pool-main-content-row2-subtitle">ROI</div>
          </div>
          <div class="">
            <div class="pool-main-content-row-title">489.53</div>
            <div class="pool-main-content-row2-subtitle">PNL(USDT)</div>
          </div>
        </div>
        <div class="pool-main-content-row3">
          <div class="pool-main-content-row-left">Running Time</div>
          <div class="pool-main-content-row-right">163d 3h 17m</div>
        </div>
        <button type="button" class=" pool-main-content-btn">Use Parameter</button>
      </div>
      <div class="pool-main-content-block">
        <div class="pool-main-content-row1">
          <div class="pool-main-content-row1-left">GMT/BUSD</div>
          <div class="pool-main-content-row1-right">
            <div class="pool-main-content-row1-right-inner">

              <svg  viewBox="0 0 24 24" fill="none" class="pool-main-content-row1-right-inner-svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 3h11v13h-3V6H9V3zM4 8v13h11V8.02L4 8z" fill="currentColor"></path>
              </svg> 15
            </div>
          </div>
        </div>
        <div class="pool-main-content-row2">
          <div class="">
            <div class="pool-main-content-row2-left-title">296.12%</div>
            <div class="pool-main-content-row2-subtitle">ROI</div>
          </div>
          <div class="">
            <div class="pool-main-content-row-title">10443.75</div>
            <div class="pool-main-content-row2-subtitle">PNL(USDT)</div>
          </div>
        </div>
        <div class="pool-main-content-row3">
          <div class="pool-main-content-row-left">Running Time</div>
          <div class="pool-main-content-row-right">172d 19h 38m</div>
        </div>
        <button type="button" class=" pool-main-content-btn">Use Parameter</button>
      </div>
      <div class="pool-main-content-block">
        <div class="pool-main-content-row1">
          <div class="pool-main-content-row1-left">GMT/BUSD</div>
          <div class="pool-main-content-row1-right">
            <div class="pool-main-content-row1-right-inner">

              <svg  viewBox="0 0 24 24" fill="none" class="pool-main-content-row1-right-inner-svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 3h11v13h-3V6H9V3zM4 8v13h11V8.02L4 8z" fill="currentColor"></path>
              </svg> 1
            </div>
          </div>
        </div>
        <div class="pool-main-content-row2">
          <div class="">
            <div class="pool-main-content-row2-left-title">291.24%</div>
            <div class="pool-main-content-row2-subtitle">ROI</div>
          </div>
          <div class="">
            <div class="pool-main-content-row-title">1415.89</div>
            <div class="pool-main-content-row2-subtitle">PNL(USDT)</div>
          </div>
        </div>
        <div class="pool-main-content-row3">
          <div class="pool-main-content-row-left">Running Time</div>
          <div class="pool-main-content-row-right">190d 4h 26m</div>
        </div>
        <button type="button" class=" pool-main-content-btn">Use Parameter</button>
      </div>
    </div>
    <div class="view-btn-div">
      <a  class="view-more-link">View more &gt;</a>
    </div>
  </div>
</div>


			</div>
			<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

             <section class="bg-white">
<div class="container ">
  <h3 class="title mb-3">Trending Market Top 10</h3>
  <div class="Trading_Analytics_main">
    <div class="Trading_Analytics_refresh_div">
      <div class="Trading_Analytics_refresh">Data refreshed hourly. Last updated on 2022-10-27 13:42:48.</div>
    </div>
    <div class="Trading_Analytics_main">
      <div class="Trading_Analytics_fillter">
        <div  class="Trading_Analytics_fillter_btn">
          <div class="active Trading_Analytics_fillter_btn-text">Spot Grid</div>
        </div>
        <div  class="Trading_Analytics_fillter_btn">
          <div class=" Trading_Analytics_fillter_btn-text">Futures Grid</div>
        </div>
      </div>
      <div class="Trading_Analytics_div">
        <div class="Trading_Analytics_tbl">
          <div class="market-spot market-spot-col">
            <div class="table">
              <div class="table-row table-head">
                <span class="table-column table-column-ranking">Ranking</span>
                <span class="table-column table-column-market">Market</span>
                <span class="table-column table-column-totalRunningStrategy">Total Strategies in Running</span>
                <span class="table-column table-column-action">Action</span>
              </div>
              <div class="table-body ">
                <div class="table-row">
                  <span class="table-column table-column-ranking">
                    <div class="flex-div">

                       <img class="list-card-value-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                      <div class="list-card-value-img-txt">NO.1</div>
                    </div>
                  </span>
                  <span class="table-column table-column-market">BTC/BUSD</span>
                  <span class="table-column table-column-totalRunningStrategy">3266</span>
                  <span class="table-column table-column-action">
                    <button type="button" class=" -st-create-btn">Create</button>
                  </span>
                </div>
                <div class="table-row">
                  <span class="table-column table-column-ranking">
                    <div class="flex-div">
                       <img class="list-card-value-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                      <div class="list-card-value-img-txt">NO.2</div>
                    </div>
                  </span>
                  <span class="table-column table-column-market">BTC/USDT</span>
                  <span class="table-column table-column-totalRunningStrategy">2761</span>
                  <span class="table-column table-column-action">
                    <button type="button" class=" -st-create-btn">Create</button>
                  </span>
                </div>
                <div class="table-row">
                  <span class="table-column table-column-ranking">
                    <div class="flex-div">
                      <img class="list-card-value-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                      <div class="list-card-value-img-txt">NO.3</div>
                    </div>
                  </span>
                  <span class="table-column table-column-market">ETH/BUSD</span>
                  <span class="table-column table-column-totalRunningStrategy">1418</span>
                  <span class="table-column table-column-action">
                    <button type="button" class=" -st-create-btn">Create</button>
                  </span>
                </div>
                <div class="table-row">
                  <span class="table-column table-column-ranking">
                    <div class="flex-div">
                     <img class="list-card-value-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                      <div class="list-card-value-img-txt">NO.4</div>
                    </div>
                  </span>
                  <span class="table-column table-column-market">ETH/USDT</span>
                  <span class="table-column table-column-totalRunningStrategy">1298</span>
                  <span class="table-column table-column-action">
                    <button type="button" class=" -st-create-btn">Create</button>
                  </span>
                </div>
                <div class="table-row">
                  <span class="table-column table-column-ranking">
                    <div class="flex-div">
                       <img class="list-card-value-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
                      <div class="list-card-value-img-txt">NO.5</div>
                    </div>
                  </span>
                  <span class="table-column table-column-market">ETH/BTC</span>
                  <span class="table-column table-column-totalRunningStrategy">1076</span>
                  <span class="table-column table-column-action">
                    <button type="button" class=" -st-create-btn">Create</button>
                  </span>
                </div>

              </div>
            </div>
            <div class="empty-text-container"></div>
          </div>

          </div>
        </div>
      <div class="hide-scrollbar market-spot-m market-spot-css">
  <div class="list-card">
    <div class="list-card-body">
      <div class="list-card-row">
        <span class="list-card-label list-card-label-ranking">Ranking</span>
        <span class="list-card-value">
          <div class="flex-div">
           <img class="list-card-value-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div class="list-card-value-img-txt">NO.1</div>
          </div>
        </span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-market">Market</span>
        <span class="list-card-value">BTC/BUSD</span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-totalRunningStrategy">Total Strategies in Running</span>
        <span class="list-card-value">3266</span>
      </div>
    </div>
    <div class="list-card-footer">
      <button type="button" class=" -st-create-btn-m">Create</button>
    </div>
  </div>
  <div class="list-card">
    <div class="list-card-body">
      <div class="list-card-row">
        <span class="list-card-label list-card-label-ranking">Ranking</span>
        <span class="list-card-value">
          <div class="flex-div">
            <img class="list-card-value-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div class="list-card-value-img-txt">NO.2</div>
          </div>
        </span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-market">Market</span>
        <span class="list-card-value">BTC/USDT</span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-totalRunningStrategy">Total Strategies in Running</span>
        <span class="list-card-value">2759</span>
      </div>
    </div>
    <div class="list-card-footer">
      <button type="button" class=" -st-create-btn-m">Create</button>
    </div>
  </div>
  <div class="list-card">
    <div class="list-card-body">
      <div class="list-card-row">
        <span class="list-card-label list-card-label-ranking">Ranking</span>
        <span class="list-card-value">
          <div class="flex-div">
            <img class="list-card-value-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div class="list-card-value-img-txt">NO.3</div>
          </div>
        </span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-market">Market</span>
        <span class="list-card-value">ETH/BUSD</span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-totalRunningStrategy">Total Strategies in Running</span>
        <span class="list-card-value">1410</span>
      </div>
    </div>
    <div class="list-card-footer">
      <button type="button" class=" -st-create-btn-m">Create</button>
    </div>
  </div>
  <div class="list-card">
    <div class="list-card-body">
      <div class="list-card-row">
        <span class="list-card-label list-card-label-ranking">Ranking</span>
        <span class="list-card-value">
          <div class="flex-div">
            <img class="list-card-value-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div class="list-card-value-img-txt">NO.4</div>
          </div>
        </span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-market">Market</span>
        <span class="list-card-value">ETH/USDT</span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-totalRunningStrategy">Total Strategies in Running</span>
        <span class="list-card-value">1297</span>
      </div>
    </div>
    <div class="list-card-footer">
      <button type="button" class=" -st-create-btn-m">Create</button>
    </div>
  </div>
  <div class="list-card">
    <div class="list-card-body">
      <div class="list-card-row">
        <span class="list-card-label list-card-label-ranking">Ranking</span>
        <span class="list-card-value">
          <div class="flex-div">

             <img class="list-card-value-img" src="{{ asset('img/94863af2-c980-42cf-a139-7b9f462a36c2.png') }}">
            <div class="list-card-value-img-txt">NO.5</div>
          </div>
        </span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-market">Market</span>
        <span class="list-card-value">ETH/BTC</span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-totalRunningStrategy">Total Strategies in Running</span>
        <span class="list-card-value">1075</span>
      </div>
    </div>
    <div class="list-card-footer">
      <button type="button" class=" -st-create-btn-m">Create</button>
    </div>
  </div>
  <div class="list-card">
    <div class="list-card-body">
      <div class="list-card-row">
        <span class="list-card-label list-card-label-ranking">Ranking</span>
        <span class="list-card-value">
          <div class="list-card-value-img-txt-m">NO.6</div>
        </span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-market">Market</span>
        <span class="list-card-value">GMT/BUSD</span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-totalRunningStrategy">Total Strategies in Running</span>
        <span class="list-card-value">878</span>
      </div>
    </div>
    <div class="list-card-footer">
      <button type="button" class=" -st-create-btn-m">Create</button>
    </div>
  </div>
  <div class="list-card">
    <div class="list-card-body">
      <div class="list-card-row">
        <span class="list-card-label list-card-label-ranking">Ranking</span>
        <span class="list-card-value">
          <div class="list-card-value-img-txt-m">NO.7</div>
        </span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-market">Market</span>
        <span class="list-card-value">sp/BUSD</span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-totalRunningStrategy">Total Strategies in Running</span>
        <span class="list-card-value">784</span>
      </div>
    </div>
    <div class="list-card-footer">
      <button type="button" class=" -st-create-btn-m">Create</button>
    </div>
  </div>
  <div class="list-card">
    <div class="list-card-body">
      <div class="list-card-row">
        <span class="list-card-label list-card-label-ranking">Ranking</span>
        <span class="list-card-value">
          <div class="list-card-value-img-txt-m">NO.8</div>
        </span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-market">Market</span>
        <span class="list-card-value">LUNC/BUSD</span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-totalRunningStrategy">Total Strategies in Running</span>
        <span class="list-card-value">484</span>
      </div>
    </div>
    <div class="list-card-footer">
      <button type="button" class=" -st-create-btn-m">Create</button>
    </div>
  </div>
  <div class="list-card">
    <div class="list-card-body">
      <div class="list-card-row">
        <span class="list-card-label list-card-label-ranking">Ranking</span>
        <span class="list-card-value">
          <div class="list-card-value-img-txt-m">NO.9</div>
        </span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-market">Market</span>
        <span class="list-card-value">sp/USDT</span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-totalRunningStrategy">Total Strategies in Running</span>
        <span class="list-card-value">469</span>
      </div>
    </div>
    <div class="list-card-footer">
      <button type="button" class=" -st-create-btn-m">Create</button>
    </div>
  </div>
  <div class="list-card">
    <div class="list-card-body">
      <div class="list-card-row">
        <span class="list-card-label list-card-label-ranking">Ranking</span>
        <span class="list-card-value">
          <div class="list-card-value-img-txt-m">NO.10</div>
        </span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-market">Market</span>
        <span class="list-card-value">sp/BTC</span>
      </div>
      <div class="list-card-row">
        <span class="list-card-label list-card-label-totalRunningStrategy">Total Strategies in Running</span>
        <span class="list-card-value">437</span>
      </div>
    </div>
    <div class="list-card-footer">
      <button type="button" class=" -st-create-btn-m">Create</button>
    </div>
  </div>
</div>

      </div>

    </div>
  </div>

</div>
</section>
</div>
	</div>

</div>













  @include('template.country_language')
    @include('template.web_footer')



    </body>
</html>

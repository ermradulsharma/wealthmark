<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css" />
   <style>

   .nft-top-section{
          background: var(--bg-white) url(https://wealthmark.io/assets/img/nft/top-banner.png);
    padding-top: 100px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
   }

  .nft-top-section  .content-box {
     margin-top: 30px;
    margin-bottom: 80px;
  }
   .nft-top-section h1{
       color: #000000;
    margin-bottom: 15px;
    font-size: 50px;
    font-family: sans-serif !important;
    text-transform: uppercase;

   }


.nft-page .slider img {
    width:100%;
    padding:5px;
}
 .slick-dots {
	 text-align: center;
	 margin: 0 0 10px 0;
	 padding: 0;
}
 .slick-dots li {
	 display: inline-block;
	 margin-left: 4px;
	 margin-right: 4px;
}
 .slick-dots li.slick-active button {
	 background-color: black;
}
 .slick-dots li button {
	 font: 0/0 a;
	 text-shadow: none;
	 color: transparent;
	 background-color: #999;
	 border: none;
	 width: 15px;
	 height: 15px;
	 border-radius: 50%;
}
 .slick-dots li :hover {
	 background-color: black;
}
/* Custom Arrow */
 .prev {
	 color: #999;
	 position: absolute;
	 top: 38%;
	 left: -2em;
	 font-size: 1.5em;
}
 .prev :hover {
	 cursor: pointer;
	 color: black;
}
 .next {
	 color: #999;
	 position: absolute;
	 top: 38%;
	 right: -2em;
	 font-size: 1.5em;
}
 .next :hover {
	 cursor: pointer;
	 color: black;
}
.wm-btn-group-outile .btn-outline-primary{
        color: var(--text-gray);
        border:1px solid transparent;
    border-color: #fdc116;

}

.wm-btn-group-outile .btn-outline-primary.active , .wm-btn-group-outile .btn-outline-primary:hover{
        color: #000;
    background-color: #fdc116;
    border-color: #fdc116;
}
.wm-btn-group-outile .btn-outline-primary:focus{
    box-shadow:0 0 0 0.25rem rgb(13 110 253 / 0%);
}
.wm-btn-group-outile .btn-img{
    width:20px;
    height:20px;
}


.btn-group>.btn:not(:first-child){
    margin-left: -1px;
}


.nft-page .dashboard-card-body > .div{
     background: transparent;
     margin-bottom: 30px;
    justify-content: space-between;
    display:flex;
    align-items:center;

 }

 @media screen and (max-width: 768px) {
	 .next {
		 display: none !important;
	}
	.nft-page .dashboard-card-body > .div{
	    display:block !important;
	}
	.nft-page .dashboard-card-body > .div > * , .nft-page .dashboard-card-body > .div  .btn-group{
	    margin-bottom:15px;
	    width:100%;
	}
}



 .css-12nnkcx {
    box-sizing: border-box;
    margin:auto;
    margin-bottom:16px;
    min-width: 0px;
    background-color: rgb(255, 255, 255);
    /*width: 210px;*/
    width:95%;
}
.css-x0dwiq {
    margin: 0px 0px 8px;
    min-width: 0px;
    box-sizing: border-box;
    border-radius: 12px;
    box-shadow: rgba(24, 26, 32, 0.1) 0px 0px 1px, rgba(71, 77, 87, 0.04) 0px 3px 6px, rgba(24, 26, 32, 0.04) 0px 1px 2px;
    transition: all 0.3s ease 0s;
    cursor: pointer;
    overflow: hidden;
    /*width: 210px;*/
    background-color: rgb(255, 255, 255);
    padding-bottom: 12px;
}
.css-1n0rtc0 {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    position: relative;
    width: 100%;
    height: 70px;
}
.css-hr04qc {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 1;
}
.css-hr04qc img{
    height:100%;
}

.css-spt8x2 {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    position: absolute;
    left: 12px;
    bottom: -20px;
    border-radius: 34%;
    background-color: rgb(255, 255, 255);
    overflow: hidden;
    width: 32px;
}
.css-qx3vov {
    box-sizing: border-box;
    margin: 0px 16px 0px 0px;
    min-width: 0px;
    position: relative;
    width: 32px;
    height: 32px;
}
.css-alnszv {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    color: rgb(255, 255, 255);
    width: 100%;
    height: 100%;
    font-size: 100%;
    fill: rgb(255, 255, 255);
    position: absolute;
}
.css-eq7ejj {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    padding-left: 48px;
}
.css-nekt17 {
    box-sizing: border-box;
    margin: 0px;
    min-width: 0px;
    font-weight: 500;
    line-height: 24px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: center;
    font-size: 12px;
    color: rgb(30, 35, 41);
}
.css-x2gp5l {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: inline-block;
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
}
.css-14nfsts {
    box-sizing: border-box;
    margin: 0px 0px 0px 4px;
    color: rgb(240, 185, 11);
    font-size: 16px;
    fill: rgb(240, 185, 11);
    min-width: 16px;
    cursor: pointer;
    width: 1em;
    height: 1em;
}
.css-ryevcu {
    box-sizing: border-box;
    margin: 16px 0px 0px;
    min-width: 0px;
    display: flex;
    padding-bottom: 12px;
    padding-left: 12px;
    padding-right: 12px;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
}
.css-10nf7hq {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    flex-wrap:wrap;
}
.css-1833vnl {
    box-sizing: border-box;
    margin: 0px 4px 0px 0px;
    min-width: 0px;
    font-weight: 400;
    font-size: 12px;
    line-height: 16px;
    color: rgb(71, 77, 87);
}
.css-161jes6 {
    box-sizing: border-box;
    margin: 0px 8px 0px 0px;
    min-width: 0px;
    font-size: 14px;
    line-height: 20px;
    color: rgb(30, 35, 41);
    font-weight: 700;
}
.css-x0dwiq:hover {
    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 15px;
    transform: translateY(-4px);
}


.css-m3366f {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    /*min-height: 300px;*/
    width: 100%;
}
.css-1ezltp {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    cursor: pointer;
    background-color: #FFFFFF;
    -webkit-transition: all .3s ease;
    border-bottom: 2px solid var(--border-light-blue);
    transition: all .3s ease;
    /* border-radius: 12px; */
    font-size: 14px;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 78px;
    padding-right:20px;
}
.css-8mkl8q {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex: 2;
    -ms-flex: 2;
    flex: 2;
    width: auto;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.css-pwc015 {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    margin-right: 4px;
}
.css-g6a8d3 {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    position: relative;
    width: 40px;
    height: 40px;
    margin-right: 16px;
}
.css-1wr4jig {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
.css-1rwh7zc {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 14px;
    font-weight: 500;
    color: #1E2329;
}
.css-1kb1lvw {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    margin-left: 8px;
}
.css-1igvyjw {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex: 1.2;
    -ms-flex: 1.2;
    flex: 1.2;
    width: auto;
    margin-left: 0;
    -webkit-align-items: flex-end;
    -webkit-box-align: flex-end;
    -ms-flex-align: flex-end;
    align-items: flex-end;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}
.css-q3dmv4 {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    text-align: right;
    margin-bottom: 2px;
    font-size: 14px;
}
.css-9w1gf {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    color: #1E2329;
}
.css-10uhjuc {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    font-weight: 500;
    font-size: 12px;
    color: #F6465D;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.css-xvk0zx {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    width: auto;
    margin-left: 0;
    -webkit-align-items: flex-end;
    -webkit-box-align: flex-end;
    -ms-flex-align: flex-end;
    align-items: flex-end;
    color: #1E2329;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}
.css-1yd5y1d {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    color: transparent;
    width: 100%;
    height: 100%;
    font-size: 100%;
    fill: #1E2329;
    fill: transparent;
    position: absolute;
}
.css-sfpjqh {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    height: 32px;
    line-height: 32px;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 28px;
    text-align: center;
    margin-right: 4px;
    color: #707A8A;
    font-size: 16px;
}
.css-lewdm6 {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    font-weight: 500;
    font-size: 12px;
    color: #03A66D;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.css-ble2lt {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 100%;
}
.css-ble2lt {
    max-width: initial;
}

.css-lks204 {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #EAECEF;
    width: 100%;
    height: 40px;
    background-color: #FFFFFF;
    font-size: 14px;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    color: #707A8A;
    padding-right:20px;
}

.css-1franx3 {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-flex: initial;
    -ms-flex: initial;
    flex: initial;
    width: 300px;
    /*padding-bottom: 14px;*/
    font-size: 12px;
}
.css-1yvlwnw {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    cursor: initial;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.css-7ku8i0 {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    white-space: nowrap;
    color: #707A8A;
    font-size: 12px;
    line-height: 20px;
    padding-left:10px;
}
.css-1216xuz {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-flex: initial;
    -ms-flex: initial;
    flex: initial;
    width: 130px;
    /*padding-bottom: 14px;*/
    margin-left: 20px;
    font-size: 12px;
}
.css-m2mihz {
    box-sizing: border-box;
    margin: 0;
    min-width: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-flex: initial;
    -ms-flex: initial;
    flex: initial;
    width: 106px;
    /*padding-bottom: 14px;*/
    margin-left: 20px;
    font-size: 12px;
}

.lazy-load-image-custom-wrapper{
    display: flex;
    width: 100%;
    height: 100%;
    margin-right: 0;
    border-radius: 12px;
    object-fit: cover;
    flex-shrink: 0;
    background-color: transparent;
}
 .lazy-load-image-custom-wrapper img{
     height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 12px;
    background: none;
    background-size: contain;
 }



@media screen and (min-width: 767px){
    .css-7ku8i0 {
    font-size: 14px;
}
    .css-lks204 {
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
    .css-sfpjqh {
    margin-right: 12px;
}
    .css-8mkl8q {
    -webkit-flex: 4;
    -ms-flex: 4;
    flex: 4;
    width: auto;
}
    .css-1ezltp {
    font-size: 14px;
}
    .css-ryevcu {
    padding-bottom: 20px;
}
    .css-spt8x2 {
    width: 60px;
    bottom: -40px;
}
/*    .css-12nnkcx {*/
/*    width: 100%;*/
/*    margin-right: 0px;*/
/*}*/
.css-x0dwiq {
    width: 100%;
    padding-bottom: 0px;
}
.css-1n0rtc0 {
    height: 123px;
}
.css-qx3vov {
    width: 60px;
    height: 60px;
}
.css-eq7ejj {
    padding-left: 78px;
    margin-top: 12px;
}
.css-nekt17 {
    font-size: 14px;
}
.css-pwc015 {
    margin-right: 16px;
}
.css-1igvyjw {
    -webkit-flex: 1.2;
    -ms-flex: 1.2;
    flex: 1.2;
    width: auto;
    margin-left: 20px;
}
.css-xvk0zx {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    width: auto;
    margin-left: 20px;
}
}

@media screen and (min-width: 1023px){
    .css-lks204 {
    -webkit-box-pack: initial;
    -webkit-justify-content: initial;
    -ms-flex-pack: initial;
    justify-content: initial;
}
    .css-1ezltp {
    font-size: 16px;
}
.css-1igvyjw {
    -webkit-flex: initial;
    -ms-flex: initial;
    flex: initial;
    width: 130px;
    margin-left: 20px;
}
.css-8mkl8q {
    -webkit-flex: initial;
    -ms-flex: initial;
    flex: initial;
    width: 300px;
}
.css-xvk0zx {
    -webkit-flex: initial;
    -ms-flex: initial;
    flex: initial;
    width: 106px;
    margin-left: 20px;
}
}
   </style>
</head>

<body class="nft-page">
    @include('template.web_menu')

<section class="nft-top-section">
   <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 content-box">
            <h1 >One-stop platform for all things NFTs</h1>
            <div class="text-muted fs-4 ">Trade, Stake and Loan NFTs securely on Wealthmark NFT</div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 position-relative">

         <!-- Slider -->
        <div class="slider responsive">
          <div>
						<img src="{{ asset('assets/img/nft/nft-slide-1.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-2.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-3.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-4.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-5.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-1.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-2.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-3.jpg') }}" alt="" />
					</div>
        </div>
				 <!-- control arrows -->
				<div class="prev responsive-prev">
				<i class="bi bi-chevron-left"></i>
				</div>
				<div class="next responsive-next">
					<i class="bi bi-chevron-right"></i>
				</div>

      </div>
    </div>
  </div>
</section>


  <section class="bg-light-blue">
    <div class="container">
           <div class="dashboard-tabpills">

                    <div class="dashboard-card-body">
                        <div class="div">


                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active bg-transparent" id="pills-spot-tab" data-bs-toggle="pill" data-bs-target="#pills-spot" type="button" role="tab" aria-controls="pills-spot" aria-selected="false">Trending</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link  bg-transparent" id="pills-p2p-tab" data-bs-toggle="pill" data-bs-target="#pills-p2p" type="button" role="tab" aria-controls="pills-p2p" aria-selected="false">Top</button>
                        </li>


                        </ul>
    <div class="d-flex align-items-center gap-2 flex-wrap wm-btn-group-outile">
       <div class="btn-group" role="group" aria-label="Basic outlined example">
            <button type="button" class="btn btn-outline-primary active">All</button>
            <button type="button" class="btn btn-outline-primary"><img src="https://wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="btn-img"></button>
            <button type="button" class="btn btn-outline-primary"><img src="https://wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="btn-img"></button>
            <button type="button" class="btn btn-outline-primary"><img src="https://wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="btn-img"></button>
            <button type="button" class="btn btn-outline-primary"><img src="https://wealthmark.io/assets/img/87496d50-2408-43e1-ad4c-78b47b448a6a.png" class="btn-img"></button>
</div>

<div class="btn-group" role="group" aria-label="Basic outlined example">
  <button type="button" class="btn btn-outline-primary">1H</button>
  <button type="button" class="btn btn-outline-primary active">6H</button>
  <button type="button" class="btn btn-outline-primary">24H</button>
  <button type="button" class="btn btn-outline-primary">7D</button>
</div>
    </div>
            </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-spot" role="tabpanel" aria-labelledby="pills-spot-tab">

                               <div class="row">
                                   <div class="col-lg-6 mb-3">
                                       <div class="css-lks204">
                                           <div class="css-1franx3">
                                              <div class="css-1yvlwnw">
                                                 <div data-bn-type="text" class="css-7ku8i0">Collections</div>
                                              </div>
                                           </div>
                                           <div class="css-1216xuz">
                                              <div class="css-1yvlwnw">
                                                 <div data-bn-type="text" class="css-7ku8i0">Floor Price</div>
                                              </div>
                                           </div>
                                           <div class="css-m2mihz">
                                              <div class="css-1yvlwnw">
                                                 <div data-bn-type="text" class="css-7ku8i0">Volume</div>
                                              </div>
                                           </div>
                                        </div>
                                       <div class="css-m3366f">
   <div class="css-vurnku">
                                              <div class="css-1ezltp">
                                                 <div class="css-8mkl8q">
                                                    <!--<div class="css-pwc015">-->
                                                        <!--<span class="lazy-load-image-custom-wrapper lazy-load-image-background " style="display:flex;flex-shrink:0;mr:minor,16px">-->
                                                        <!--    <img  src="https://bin.bnbstatic.com/image/julia/nft/marketplace/first_iii.png" width="24" height="24"  mr="minor,16px">-->
                                                        <!--</span>-->
                                                    <!--</div>-->
                                                     <div  class="css-sfpjqh">1</div>
                                                    <div class="css-g6a8d3">
                                                       <svg  viewBox="0 0 1024 1024" fill="none" class="css-1yd5y1d">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                                                       </svg>
                                                       <div class="css-1x55ckl"><span class="lazy-load-image-custom-wrapper lazy-load-image-background  lazy-load-image-loaded" ><img  src="{{ asset('assets/img/nft/img-1.webp') }}" ></span></div>
                                                    </div>
                                                    <div class="css-1wr4jig">
                                                       <div class="css-10nf7hq">
                                                          <div class="css-1rwh7zc">BoringPunks</div>
                                                          <div class="css-1kb1lvw"><span class="lazy-load-image-custom-wrapper lazy-load-image-background " ><img  src="data:image/svg+xml,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Ccircle%20cx%3D%228%22%20cy%3D%228%22%20r%3D%228%22%20fill%3D%22%23F2F2F2%22%2F%3E%3Cpath%20d%3D%22M8%2010.83v2.786l3.43-4.815L8%2010.83z%22%20fill%3D%22%232F3030%22%2F%3E%3Cpath%20d%3D%22M8%206.53v3.586l3.43-2.03L8%206.53z%22%20fill%3D%22%23000%22%2F%3E%3Cpath%20d%3D%22M8%202.4v4.13l3.43%201.557L8%202.4z%22%20fill%3D%22%232F3030%22%2F%3E%3Cpath%20d%3D%22M8%2010.83v2.786L4.57%208.801%208%2010.83z%22%20fill%3D%22%23828384%22%2F%3E%3Cpath%20d%3D%22M8%206.53v3.586l-3.43-2.03L8%206.53z%22%20fill%3D%22%23343535%22%2F%3E%3Cpath%20d%3D%22M8%202.4v4.13L4.57%208.087%208%202.4z%22%20fill%3D%22%23828384%22%2F%3E%3C%2Fsvg%3E" width="16" height="16"  ml="xs"></span></div>
                                                       </div>
                                                    </div>
                                                 </div>
                                                 <div class="css-1igvyjw">
                                                    <div class="css-q3dmv4">
                                                       <div class="css-9w1gf">0.06 ETH</div>
                                                    </div>
                                                    <div class="css-10uhjuc">
                                                       <div class="css-ble2lt">-54.21</div>
                                                       %
                                                    </div>
                                                 </div>
                                                 <div class="css-xvk0zx">
                                                    <div class="css-q3dmv4">
                                                       <div class="css-9w1gf">768.08 ETH</div>
                                                    </div>
                                                    <div class="css-10uhjuc">
                                                       <div class="css-ble2lt">-20.19</div>
                                                       %
                                                    </div>
                                                 </div>
                                              </div>
      </div>
                                           <div class="css-vurnku">
                                              <div class="css-1ezltp">
                                                 <div class="css-8mkl8q">
                                                    <!--<div class="css-pwc015">-->
                                                        <!--<span class="lazy-load-image-custom-wrapper lazy-load-image-background " style="display:flex;flex-shrink:0;mr:minor,16px">-->
                                                        <!--    <img  src="https://bin.bnbstatic.com/image/julia/nft/marketplace/second_iii.png" width="24" height="24"  mr="minor,16px">-->
                                                        <!--</span>-->
                                                    <!--</div>-->
                                                     <div class="css-sfpjqh">2</div>
                                                    <div class="css-g6a8d3">
                                                       <svg  viewBox="0 0 1024 1024" fill="none" class="css-1yd5y1d">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                                                       </svg>
                                                       <div class="css-1x55ckl"><span class="lazy-load-image-custom-wrapper lazy-load-image-background  lazy-load-image-loaded" ><img  src="{{ asset('assets/img/nft/img-2.webp') }}" ></span></div>
                                                    </div>
                                                    <div class="css-1wr4jig">
                                                       <div class="css-10nf7hq">
                                                          <div class="css-1rwh7zc">Pepe BoringPunks</div>
                                                          <div class="css-1kb1lvw"><span class="lazy-load-image-custom-wrapper lazy-load-image-background " ><img  src="data:image/svg+xml,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Ccircle%20cx%3D%228%22%20cy%3D%228%22%20r%3D%228%22%20fill%3D%22%23F2F2F2%22%2F%3E%3Cpath%20d%3D%22M8%2010.83v2.786l3.43-4.815L8%2010.83z%22%20fill%3D%22%232F3030%22%2F%3E%3Cpath%20d%3D%22M8%206.53v3.586l3.43-2.03L8%206.53z%22%20fill%3D%22%23000%22%2F%3E%3Cpath%20d%3D%22M8%202.4v4.13l3.43%201.557L8%202.4z%22%20fill%3D%22%232F3030%22%2F%3E%3Cpath%20d%3D%22M8%2010.83v2.786L4.57%208.801%208%2010.83z%22%20fill%3D%22%23828384%22%2F%3E%3Cpath%20d%3D%22M8%206.53v3.586l-3.43-2.03L8%206.53z%22%20fill%3D%22%23343535%22%2F%3E%3Cpath%20d%3D%22M8%202.4v4.13L4.57%208.087%208%202.4z%22%20fill%3D%22%23828384%22%2F%3E%3C%2Fsvg%3E" width="16" height="16"  ml="xs"></span></div>
                                                       </div>
                                                    </div>
                                                 </div>
                                                 <div class="css-1igvyjw">
                                                    <div class="css-q3dmv4">
                                                       <div class="css-9w1gf">&lt; 0.01 ETH</div>
                                                    </div>
                                                    <div class="css-lewdm6">
                                                       <div class="css-ble2lt">+0.00</div>
                                                       %
                                                    </div>
                                                 </div>
                                                 <div class="css-xvk0zx">
                                                    <div class="css-q3dmv4">
                                                       <div class="css-9w1gf">47.46 ETH</div>
                                                    </div>
                                                    <div class="css-lewdm6">
                                                       <div class="css-ble2lt">+0.00</div>
                                                       %
                                                    </div>
                                                 </div>
                                              </div>
      </div>
                                           <div class="css-vurnku">
                                              <div class="css-1ezltp">
                                                 <div class="css-8mkl8q">
                                                    <!--<div class="css-pwc015">-->
                                                            <!--<span class="lazy-load-image-custom-wrapper lazy-load-image-background " style="display:flex;flex-shrink:0;mr:minor,16px">-->
                                                            <!--    <img  src="https://bin.bnbstatic.com/image/julia/nft/marketplace/third_iii.png" width="24" height="24"  mr="minor,16px">-->
                                                            <!--</span>-->
                                                        <!--</div>-->

                                                         <div class="css-sfpjqh">3</div>

                                                    <div class="css-g6a8d3">
                                                       <svg  viewBox="0 0 1024 1024" fill="none" class="css-1yd5y1d">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                                                       </svg>
                                                       <div class="css-1x55ckl">
                                                           <span class="lazy-load-image-custom-wrapper lazy-load-image-background  lazy-load-image-loaded" >
                                                               <img  src="{{ asset('assets/img/nft/img-3.webp') }}" >
                                                             </span>
                                                        </div>
                                                    </div>
                                                    <div class="css-1wr4jig">
                                                       <div class="css-10nf7hq">
                                                          <div class="css-1rwh7zc">Cornerstone: Companions</div>
                                                          <div class="css-1kb1lvw"><span class="lazy-load-image-custom-wrapper lazy-load-image-background " ><img  src="data:image/svg+xml,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Ccircle%20cx%3D%228%22%20cy%3D%228%22%20r%3D%228%22%20fill%3D%22%23F2F2F2%22%2F%3E%3Cpath%20d%3D%22M8%2010.83v2.786l3.43-4.815L8%2010.83z%22%20fill%3D%22%232F3030%22%2F%3E%3Cpath%20d%3D%22M8%206.53v3.586l3.43-2.03L8%206.53z%22%20fill%3D%22%23000%22%2F%3E%3Cpath%20d%3D%22M8%202.4v4.13l3.43%201.557L8%202.4z%22%20fill%3D%22%232F3030%22%2F%3E%3Cpath%20d%3D%22M8%2010.83v2.786L4.57%208.801%208%2010.83z%22%20fill%3D%22%23828384%22%2F%3E%3Cpath%20d%3D%22M8%206.53v3.586l-3.43-2.03L8%206.53z%22%20fill%3D%22%23343535%22%2F%3E%3Cpath%20d%3D%22M8%202.4v4.13L4.57%208.087%208%202.4z%22%20fill%3D%22%23828384%22%2F%3E%3C%2Fsvg%3E" width="16" height="16"  ml="xs"></span></div>
                                                       </div>
                                                    </div>
                                                 </div>
                                                 <div class="css-1igvyjw">
                                                    <div class="css-q3dmv4">
                                                       <div class="css-9w1gf">0.03 ETH</div>
                                                    </div>
                                                    <div class="css-lewdm6">
                                                       <div class="css-ble2lt">+0.00</div>
                                                       %
                                                    </div>
                                                 </div>
                                                 <div class="css-xvk0zx">
                                                    <div class="css-q3dmv4">
                                                       <div class="css-9w1gf">116.99 ETH</div>
                                                    </div>
                                                    <div class="css-lewdm6">
                                                       <div class="css-ble2lt">+0.00</div>
                                                       %
                                                    </div>
                                                 </div>
                                              </div>
      </div>


</div>
                                   </div>
                                   <div class="col-lg-6 mb-3">
                                       <div class="css-lks204">
                                           <div class="css-1franx3">
                                              <div class="css-1yvlwnw">
                                                 <div data-bn-type="text" class="css-7ku8i0">Collections</div>
                                              </div>
                                           </div>
                                           <div class="css-1216xuz">
                                              <div class="css-1yvlwnw">
                                                 <div data-bn-type="text" class="css-7ku8i0">Floor Price</div>
                                              </div>
                                           </div>
                                           <div class="css-m2mihz">
                                              <div class="css-1yvlwnw">
                                                 <div data-bn-type="text" class="css-7ku8i0">Volume</div>
                                              </div>
                                           </div>
                                        </div>
                                       <div class="css-m3366f">
                                           <div class="css-vurnku">
                                              <div class="css-1ezltp">
                                                 <div class="css-8mkl8q">
                                                    <!--<div class="css-pwc015">-->
                                                        <!--<span class="lazy-load-image-custom-wrapper lazy-load-image-background " style="display:flex;flex-shrink:0;mr:minor,16px">-->
                                                        <!--    <img  src="https://bin.bnbstatic.com/image/julia/nft/marketplace/first_iii.png" width="24" height="24"  mr="minor,16px">-->
                                                        <!--</span>-->
                                                    <!--</div>-->
                                                     <div  class="css-sfpjqh">1</div>
                                                    <div class="css-g6a8d3">
                                                       <svg  viewBox="0 0 1024 1024" fill="none" class="css-1yd5y1d">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                                                       </svg>
                                                       <div class="css-1x55ckl"><span class="lazy-load-image-custom-wrapper lazy-load-image-background  lazy-load-image-loaded" ><img  src="{{ asset('assets/img/nft/img-1.webp') }}" ></span></div>
                                                    </div>
                                                    <div class="css-1wr4jig">
                                                       <div class="css-10nf7hq">
                                                          <div class="css-1rwh7zc">BoringPunks</div>
                                                          <div class="css-1kb1lvw"><span class="lazy-load-image-custom-wrapper lazy-load-image-background " ><img  src="data:image/svg+xml,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Ccircle%20cx%3D%228%22%20cy%3D%228%22%20r%3D%228%22%20fill%3D%22%23F2F2F2%22%2F%3E%3Cpath%20d%3D%22M8%2010.83v2.786l3.43-4.815L8%2010.83z%22%20fill%3D%22%232F3030%22%2F%3E%3Cpath%20d%3D%22M8%206.53v3.586l3.43-2.03L8%206.53z%22%20fill%3D%22%23000%22%2F%3E%3Cpath%20d%3D%22M8%202.4v4.13l3.43%201.557L8%202.4z%22%20fill%3D%22%232F3030%22%2F%3E%3Cpath%20d%3D%22M8%2010.83v2.786L4.57%208.801%208%2010.83z%22%20fill%3D%22%23828384%22%2F%3E%3Cpath%20d%3D%22M8%206.53v3.586l-3.43-2.03L8%206.53z%22%20fill%3D%22%23343535%22%2F%3E%3Cpath%20d%3D%22M8%202.4v4.13L4.57%208.087%208%202.4z%22%20fill%3D%22%23828384%22%2F%3E%3C%2Fsvg%3E" width="16" height="16"  ml="xs"></span></div>
                                                       </div>
                                                    </div>
                                                 </div>
                                                 <div class="css-1igvyjw">
                                                    <div class="css-q3dmv4">
                                                       <div class="css-9w1gf">0.06 ETH</div>
                                                    </div>
                                                    <div class="css-10uhjuc">
                                                       <div class="css-ble2lt">-54.21</div>
                                                       %
                                                    </div>
                                                 </div>
                                                 <div class="css-xvk0zx">
                                                    <div class="css-q3dmv4">
                                                       <div class="css-9w1gf">768.08 ETH</div>
                                                    </div>
                                                    <div class="css-10uhjuc">
                                                       <div class="css-ble2lt">-20.19</div>
                                                       %
                                                    </div>
                                                 </div>
                                              </div>
      </div>
                                           <div class="css-vurnku">
                                              <div class="css-1ezltp">
                                                 <div class="css-8mkl8q">
                                                    <!--<div class="css-pwc015">-->
                                                        <!--<span class="lazy-load-image-custom-wrapper lazy-load-image-background " style="display:flex;flex-shrink:0;mr:minor,16px">-->
                                                        <!--    <img  src="https://bin.bnbstatic.com/image/julia/nft/marketplace/second_iii.png" width="24" height="24"  mr="minor,16px">-->
                                                        <!--</span>-->
                                                    <!--</div>-->
                                                     <div class="css-sfpjqh">2</div>
                                                    <div class="css-g6a8d3">
                                                       <svg  viewBox="0 0 1024 1024" fill="none" class="css-1yd5y1d">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                                                       </svg>
                                                       <div class="css-1x55ckl"><span class="lazy-load-image-custom-wrapper lazy-load-image-background  lazy-load-image-loaded" ><img  src="{{ asset('assets/img/nft/img-2.webp') }}" ></span></div>
                                                    </div>
                                                    <div class="css-1wr4jig">
                                                       <div class="css-10nf7hq">
                                                          <div class="css-1rwh7zc">Pepe BoringPunks</div>
                                                          <div class="css-1kb1lvw"><span class="lazy-load-image-custom-wrapper lazy-load-image-background " ><img  src="data:image/svg+xml,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Ccircle%20cx%3D%228%22%20cy%3D%228%22%20r%3D%228%22%20fill%3D%22%23F2F2F2%22%2F%3E%3Cpath%20d%3D%22M8%2010.83v2.786l3.43-4.815L8%2010.83z%22%20fill%3D%22%232F3030%22%2F%3E%3Cpath%20d%3D%22M8%206.53v3.586l3.43-2.03L8%206.53z%22%20fill%3D%22%23000%22%2F%3E%3Cpath%20d%3D%22M8%202.4v4.13l3.43%201.557L8%202.4z%22%20fill%3D%22%232F3030%22%2F%3E%3Cpath%20d%3D%22M8%2010.83v2.786L4.57%208.801%208%2010.83z%22%20fill%3D%22%23828384%22%2F%3E%3Cpath%20d%3D%22M8%206.53v3.586l-3.43-2.03L8%206.53z%22%20fill%3D%22%23343535%22%2F%3E%3Cpath%20d%3D%22M8%202.4v4.13L4.57%208.087%208%202.4z%22%20fill%3D%22%23828384%22%2F%3E%3C%2Fsvg%3E" width="16" height="16"  ml="xs"></span></div>
                                                       </div>
                                                    </div>
                                                 </div>
                                                 <div class="css-1igvyjw">
                                                    <div class="css-q3dmv4">
                                                       <div class="css-9w1gf">&lt; 0.01 ETH</div>
                                                    </div>
                                                    <div class="css-lewdm6">
                                                       <div class="css-ble2lt">+0.00</div>
                                                       %
                                                    </div>
                                                 </div>
                                                 <div class="css-xvk0zx">
                                                    <div class="css-q3dmv4">
                                                       <div class="css-9w1gf">47.46 ETH</div>
                                                    </div>
                                                    <div class="css-lewdm6">
                                                       <div class="css-ble2lt">+0.00</div>
                                                       %
                                                    </div>
                                                 </div>
                                              </div>
      </div>
                                           <div class="css-vurnku">
                                              <div class="css-1ezltp">
                                                 <div class="css-8mkl8q">
                                                    <!--<div class="css-pwc015">-->
                                                            <!--<span class="lazy-load-image-custom-wrapper lazy-load-image-background " style="display:flex;flex-shrink:0;mr:minor,16px">-->
                                                            <!--    <img  src="https://bin.bnbstatic.com/image/julia/nft/marketplace/third_iii.png" width="24" height="24"  mr="minor,16px">-->
                                                            <!--</span>-->
                                                        <!--</div>-->

                                                         <div class="css-sfpjqh">3</div>

                                                    <div class="css-g6a8d3">
                                                       <svg  viewBox="0 0 1024 1024" fill="none" class="css-1yd5y1d">
                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                                                       </svg>
                                                       <div class="css-1x55ckl">
                                                           <span class="lazy-load-image-custom-wrapper lazy-load-image-background  lazy-load-image-loaded" >
                                                               <img  src="{{ asset('assets/img/nft/img-3.webp') }}" >
                                                             </span>
                                                        </div>
                                                    </div>
                                                    <div class="css-1wr4jig">
                                                       <div class="css-10nf7hq">
                                                          <div class="css-1rwh7zc">Cornerstone: Companions</div>
                                                          <div class="css-1kb1lvw"><span class="lazy-load-image-custom-wrapper lazy-load-image-background " ><img  src="data:image/svg+xml,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Ccircle%20cx%3D%228%22%20cy%3D%228%22%20r%3D%228%22%20fill%3D%22%23F2F2F2%22%2F%3E%3Cpath%20d%3D%22M8%2010.83v2.786l3.43-4.815L8%2010.83z%22%20fill%3D%22%232F3030%22%2F%3E%3Cpath%20d%3D%22M8%206.53v3.586l3.43-2.03L8%206.53z%22%20fill%3D%22%23000%22%2F%3E%3Cpath%20d%3D%22M8%202.4v4.13l3.43%201.557L8%202.4z%22%20fill%3D%22%232F3030%22%2F%3E%3Cpath%20d%3D%22M8%2010.83v2.786L4.57%208.801%208%2010.83z%22%20fill%3D%22%23828384%22%2F%3E%3Cpath%20d%3D%22M8%206.53v3.586l-3.43-2.03L8%206.53z%22%20fill%3D%22%23343535%22%2F%3E%3Cpath%20d%3D%22M8%202.4v4.13L4.57%208.087%208%202.4z%22%20fill%3D%22%23828384%22%2F%3E%3C%2Fsvg%3E" width="16" height="16"  ml="xs"></span></div>
                                                       </div>
                                                    </div>
                                                 </div>
                                                 <div class="css-1igvyjw">
                                                    <div class="css-q3dmv4">
                                                       <div class="css-9w1gf">0.03 ETH</div>
                                                    </div>
                                                    <div class="css-lewdm6">
                                                       <div class="css-ble2lt">+0.00</div>
                                                       %
                                                    </div>
                                                 </div>
                                                 <div class="css-xvk0zx">
                                                    <div class="css-q3dmv4">
                                                       <div class="css-9w1gf">116.99 ETH</div>
                                                    </div>
                                                    <div class="css-lewdm6">
                                                       <div class="css-ble2lt">+0.00</div>
                                                       %
                                                    </div>
                                                 </div>
                                              </div>
      </div>

</div>
                                   </div>
                                   <div class="col-md-12">
                                       <div class="p-2 mt-5 text-center">
                                            <a href="javascript:void(0)" class="btn-yellow"> View More </a>
                                       </div>
                                   </div>
                               </div>


                            </div>

                            <div class="tab-pane fade" id="pills-p2p" role="tabpanel" aria-labelledby="pills-p2p-tab">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
</section>





<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="sec-title">
                    <h2 class="heading-h2">Featured</h2>
                </div>
            </div>

            <div class="col-md-12 position-relative">

         <!-- Slider -->
        <div class="slider Featured">
          <div>
						<img src="{{ asset('assets/img/nft/nft-slide-1.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-2.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-3.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-4.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-5.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-1.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-2.jpg') }}" alt="" />
					</div>
					<div>
						<img src="{{ asset('assets/img/nft/nft-slide-3.jpg') }}" alt="" />
					</div>
        </div>
				 <!-- control arrows -->
				<div class="prev Featured-prev">
				<i class="bi bi-chevron-left"></i>
				</div>
				<div class="next Featured-next">
					<i class="bi bi-chevron-right"></i>
				</div>

      </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-12">
                <div class="sec-title">
                    <h2 class="heading-h2">New Listings</h2>
                </div>
            </div>

            <div class="col-md-12 position-relative">

         <!-- Slider -->
        <div class="slider newListings">
                    <div>
						<div class="css-12nnkcx">
   <a href="javascript:void(0)">
      <div class="css-x0dwiq">
         <div class="css-1n0rtc0">
            <div class="css-hr04qc">

                    <img src="{{ asset('assets/img/nft/slider-1.webp') }}" >

            </div>
            <div class="css-spt8x2">
               <div class="css-qx3vov">
                  <svg  viewBox="0 0 1024 1024" fill="none" class="css-alnszv">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                  </svg>
                  <div class="css-1ehyqbw">

                          <img src="{{ asset('assets/img/nft/img-3.webp') }}" >
                    </div>
               </div>
            </div>
         </div>
         <div class="css-eq7ejj">
            <div class="css-nekt17">Alan Walker Origins（BNFT）</div>
            <div class="css-x2gp5l">
               <svg  viewBox="0 0 24 24" fill="none" class="css-14nfsts">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.824 5.34L14.43 2.927 12.02 4.32 9.608 2.928 8.216 5.339H5.43v2.785L3.02 9.516l1.392 2.412-1.392 2.411 2.411 1.392v2.785h2.785l1.392 2.412 2.412-1.393 2.411 1.393 1.393-2.412h2.784v-2.784l2.412-1.393-1.393-2.411 1.393-2.412-2.412-1.392V5.339h-2.784zm-4.964 7.107l4.432-4.431 1.767 1.767-6.199 6.2-3.92-3.92 1.769-1.767 2.151 2.152z" fill="currentColor"></path>
               </svg>
            </div>
         </div>
         <div class="css-ryevcu">
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Volume</div>
               <div>102.8K USD</div>

            </div>
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Floor Price</div>
               <div class="">3.45 USD</div>
            </div>
         </div>
      </div>
   </a>
</div>
					</div>
					<div>
						<div class="css-12nnkcx">
   <a href="javascript:void(0)">
      <div class="css-x0dwiq">
         <div class="css-1n0rtc0">
            <div class="css-hr04qc">

                    <img src="{{ asset('assets/img/nft/slider-1.webp') }}" >

                    </div>
            <div class="css-spt8x2">
               <div class="css-qx3vov">
                  <svg  viewBox="0 0 1024 1024" fill="none" class="css-alnszv">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                  </svg>
                  <div class="css-1ehyqbw">

                          <img src="https://public.nftstatic.com/static/nft/webp/e32d614c8d2d47718731dcf09cb19d57_64x64.webp" >

                          </div>
               </div>
            </div>
         </div>
         <div class="css-eq7ejj">
            <div class="css-nekt17">Alan Walker Origins（BNFT）</div>
            <div class="css-x2gp5l">
               <svg  viewBox="0 0 24 24" fill="none" class="css-14nfsts">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.824 5.34L14.43 2.927 12.02 4.32 9.608 2.928 8.216 5.339H5.43v2.785L3.02 9.516l1.392 2.412-1.392 2.411 2.411 1.392v2.785h2.785l1.392 2.412 2.412-1.393 2.411 1.393 1.393-2.412h2.784v-2.784l2.412-1.393-1.393-2.411 1.393-2.412-2.412-1.392V5.339h-2.784zm-4.964 7.107l4.432-4.431 1.767 1.767-6.199 6.2-3.92-3.92 1.769-1.767 2.151 2.152z" fill="currentColor"></path>
               </svg>
            </div>
         </div>
         <div class="css-ryevcu">
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Volume</div>
               <div>102.8K USD</div>

            </div>
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Floor Price</div>
               <div class="">3.45 USD</div>
            </div>
         </div>
      </div>
   </a>
</div>
					</div>
					<div>
						<div class="css-12nnkcx">
   <a href="javascript:void(0)">
      <div class="css-x0dwiq">
         <div class="css-1n0rtc0">
            <div class="css-hr04qc">
                <img src="{{ asset('assets/img/nft/slider-1.webp') }}" >
                </div>
            <div class="css-spt8x2">
               <div class="css-qx3vov">
                  <svg  viewBox="0 0 1024 1024" fill="none" class="css-alnszv">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                  </svg>
                  <div class="css-1ehyqbw"><img src="https://public.nftstatic.com/static/nft/webp/e32d614c8d2d47718731dcf09cb19d57_64x64.webp" ></div>
               </div>
            </div>
         </div>
         <div class="css-eq7ejj">
            <div class="css-nekt17">Alan Walker Origins（BNFT）</div>
            <div class="css-x2gp5l">
               <svg  viewBox="0 0 24 24" fill="none" class="css-14nfsts">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.824 5.34L14.43 2.927 12.02 4.32 9.608 2.928 8.216 5.339H5.43v2.785L3.02 9.516l1.392 2.412-1.392 2.411 2.411 1.392v2.785h2.785l1.392 2.412 2.412-1.393 2.411 1.393 1.393-2.412h2.784v-2.784l2.412-1.393-1.393-2.411 1.393-2.412-2.412-1.392V5.339h-2.784zm-4.964 7.107l4.432-4.431 1.767 1.767-6.199 6.2-3.92-3.92 1.769-1.767 2.151 2.152z" fill="currentColor"></path>
               </svg>
            </div>
         </div>
         <div class="css-ryevcu">
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Volume</div>
               <div>102.8K USD</div>

            </div>
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Floor Price</div>
               <div class="">3.45 USD</div>
            </div>
         </div>
      </div>
   </a>
</div>
					</div>
					<div>
						<div class="css-12nnkcx">
   <a href="javascript:void(0)">
      <div class="css-x0dwiq">
         <div class="css-1n0rtc0">
            <div class="css-hr04qc"><img src="{{ asset('assets/img/nft/slider-1.webp') }}" ></div>
            <div class="css-spt8x2">
               <div class="css-qx3vov">
                  <svg  viewBox="0 0 1024 1024" fill="none" class="css-alnszv">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                  </svg>
                  <div class="css-1ehyqbw">
                      <img src="https://public.nftstatic.com/static/nft/webp/e32d614c8d2d47718731dcf09cb19d57_64x64.webp" >
                      </div>
               </div>
            </div>
         </div>
         <div class="css-eq7ejj">
            <div class="css-nekt17">Alan Walker Origins（BNFT）</div>
            <div class="css-x2gp5l">
               <svg  viewBox="0 0 24 24" fill="none" class="css-14nfsts">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.824 5.34L14.43 2.927 12.02 4.32 9.608 2.928 8.216 5.339H5.43v2.785L3.02 9.516l1.392 2.412-1.392 2.411 2.411 1.392v2.785h2.785l1.392 2.412 2.412-1.393 2.411 1.393 1.393-2.412h2.784v-2.784l2.412-1.393-1.393-2.411 1.393-2.412-2.412-1.392V5.339h-2.784zm-4.964 7.107l4.432-4.431 1.767 1.767-6.199 6.2-3.92-3.92 1.769-1.767 2.151 2.152z" fill="currentColor"></path>
               </svg>
            </div>
         </div>
         <div class="css-ryevcu">
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Volume</div>
               <div>102.8K USD</div>

            </div>
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Floor Price</div>
               <div class="">3.45 USD</div>
            </div>
         </div>
      </div>
   </a>
</div>
					</div>
					<div>
						<div class="css-12nnkcx">
   <a href="javascript:void(0)">
      <div class="css-x0dwiq">
         <div class="css-1n0rtc0">
            <div class="css-hr04qc">
                <img src="{{ asset('assets/img/nft/slider-1.webp') }}" >

            </div>
            <div class="css-spt8x2">
               <div class="css-qx3vov">
                  <svg  viewBox="0 0 1024 1024" fill="none" class="css-alnszv">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                  </svg>
                  <div class="css-1ehyqbw">
                      <img src="https://public.nftstatic.com/static/nft/webp/e32d614c8d2d47718731dcf09cb19d57_64x64.webp" >

                    </div>
               </div>
            </div>
         </div>
         <div class="css-eq7ejj">
            <div class="css-nekt17">Alan Walker Origins（BNFT）</div>
            <div class="css-x2gp5l">
               <svg  viewBox="0 0 24 24" fill="none" class="css-14nfsts">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.824 5.34L14.43 2.927 12.02 4.32 9.608 2.928 8.216 5.339H5.43v2.785L3.02 9.516l1.392 2.412-1.392 2.411 2.411 1.392v2.785h2.785l1.392 2.412 2.412-1.393 2.411 1.393 1.393-2.412h2.784v-2.784l2.412-1.393-1.393-2.411 1.393-2.412-2.412-1.392V5.339h-2.784zm-4.964 7.107l4.432-4.431 1.767 1.767-6.199 6.2-3.92-3.92 1.769-1.767 2.151 2.152z" fill="currentColor"></path>
               </svg>
            </div>
         </div>
         <div class="css-ryevcu">
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Volume</div>
               <div>102.8K USD</div>

            </div>
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Floor Price</div>
               <div class="">3.45 USD</div>
            </div>
         </div>
      </div>
   </a>
</div>
					</div>
					<div>
					<div class="css-12nnkcx">
   <a href="javascript:void(0)">
      <div class="css-x0dwiq">
         <div class="css-1n0rtc0">
            <div class="css-hr04qc">
                <img src="{{ asset('assets/img/nft/slider-1.webp') }}" >
                </div>
            <div class="css-spt8x2">
               <div class="css-qx3vov">
                  <svg  viewBox="0 0 1024 1024" fill="none" class="css-alnszv">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                  </svg>
                  <div class="css-1ehyqbw">
                      <img src="https://public.nftstatic.com/static/nft/webp/e32d614c8d2d47718731dcf09cb19d57_64x64.webp" ></div>
               </div>
            </div>
         </div>
         <div class="css-eq7ejj">
            <div class="css-nekt17">Alan Walker Origins（BNFT）</div>
            <div class="css-x2gp5l">
               <svg  viewBox="0 0 24 24" fill="none" class="css-14nfsts">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.824 5.34L14.43 2.927 12.02 4.32 9.608 2.928 8.216 5.339H5.43v2.785L3.02 9.516l1.392 2.412-1.392 2.411 2.411 1.392v2.785h2.785l1.392 2.412 2.412-1.393 2.411 1.393 1.393-2.412h2.784v-2.784l2.412-1.393-1.393-2.411 1.393-2.412-2.412-1.392V5.339h-2.784zm-4.964 7.107l4.432-4.431 1.767 1.767-6.199 6.2-3.92-3.92 1.769-1.767 2.151 2.152z" fill="currentColor"></path>
               </svg>
            </div>
         </div>
         <div class="css-ryevcu">
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Volume</div>
               <div>102.8K USD</div>

            </div>
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Floor Price</div>
               <div class="">3.45 USD</div>
            </div>
         </div>
      </div>
   </a>
</div>
					</div>
					<div>
						<div class="css-12nnkcx">
   <a href="javascript:void(0)">
      <div class="css-x0dwiq">
         <div class="css-1n0rtc0">
            <div class="css-hr04qc"><img src="{{ asset('assets/img/nft/slider-1.webp') }}" >
            </div>
            <div class="css-spt8x2">
               <div class="css-qx3vov">
                  <svg  viewBox="0 0 1024 1024" fill="none" class="css-alnszv">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                  </svg>
                  <div class="css-1ehyqbw">
                      <img src="https://public.nftstatic.com/static/nft/webp/e32d614c8d2d47718731dcf09cb19d57_64x64.webp" >
                      </div>
               </div>
            </div>
         </div>
         <div class="css-eq7ejj">
            <div class="css-nekt17">Alan Walker Origins（BNFT）</div>
            <div class="css-x2gp5l">
               <svg  viewBox="0 0 24 24" fill="none" class="css-14nfsts">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.824 5.34L14.43 2.927 12.02 4.32 9.608 2.928 8.216 5.339H5.43v2.785L3.02 9.516l1.392 2.412-1.392 2.411 2.411 1.392v2.785h2.785l1.392 2.412 2.412-1.393 2.411 1.393 1.393-2.412h2.784v-2.784l2.412-1.393-1.393-2.411 1.393-2.412-2.412-1.392V5.339h-2.784zm-4.964 7.107l4.432-4.431 1.767 1.767-6.199 6.2-3.92-3.92 1.769-1.767 2.151 2.152z" fill="currentColor"></path>
               </svg>
            </div>
         </div>
         <div class="css-ryevcu">
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Volume</div>
               <div>102.8K USD</div>

            </div>
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Floor Price</div>
               <div class="">3.45 USD</div>
            </div>
         </div>
      </div>
   </a>
</div>
					</div>
					<div>
					<div class="css-12nnkcx">
   <a href="javascript:void(0)">
      <div class="css-x0dwiq">
         <div class="css-1n0rtc0">
            <div class="css-hr04qc">
                <img src="{{ asset('assets/img/nft/slider-1.webp') }}" >
                </div>
            <div class="css-spt8x2">
               <div class="css-qx3vov">
                  <svg  viewBox="0 0 1024 1024" fill="none" class="css-alnszv">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M884.363636 0H139.636364C62.487273 0 0 62.487273 0 139.636364v744.727272c0 77.149091 62.487273 139.636364 139.636364 139.636364h744.727272c77.149091 0 139.636364-62.487273 139.636364-139.636364V139.636364c0-77.149091-62.487273-139.636364-139.636364-139.636364zM514.792727 977.454545C139.869091 977.454545 46.545455 884.130909 46.545455 509.207273S139.869091 46.545455 514.792727 46.545455 977.454545 134.4 977.454545 509.207273 889.6 977.454545 514.792727 977.454545z" fill="currentColor"></path>
                  </svg>
                  <div class="css-1ehyqbw">

                          <img src="https://public.nftstatic.com/static/nft/webp/e32d614c8d2d47718731dcf09cb19d57_64x64.webp" >

                          </div>
               </div>
            </div>
         </div>
         <div class="css-eq7ejj">
            <div class="css-nekt17">Alan Walker Origins（BNFT）</div>
            <div class="css-x2gp5l">
               <svg  viewBox="0 0 24 24" fill="none" class="css-14nfsts">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.824 5.34L14.43 2.927 12.02 4.32 9.608 2.928 8.216 5.339H5.43v2.785L3.02 9.516l1.392 2.412-1.392 2.411 2.411 1.392v2.785h2.785l1.392 2.412 2.412-1.393 2.411 1.393 1.393-2.412h2.784v-2.784l2.412-1.393-1.393-2.411 1.393-2.412-2.412-1.392V5.339h-2.784zm-4.964 7.107l4.432-4.431 1.767 1.767-6.199 6.2-3.92-3.92 1.769-1.767 2.151 2.152z" fill="currentColor"></path>
               </svg>
            </div>
         </div>
         <div class="css-ryevcu">
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Volume</div>
               <div>102.8K USD</div>

            </div>
            <div class="css-10nf7hq">
               <div class="fs-12 text-muted me-1">Floor Price</div>
               <div class="">3.45 USD</div>
            </div>
         </div>
      </div>
   </a>
</div>
					</div>
        </div>
				 <!-- control arrows -->
				<div class="prev newListings-prev">
				<i class="bi bi-chevron-left"></i>
				</div>
				<div class="next newListings-next">
					<i class="bi bi-chevron-right"></i>
				</div>

      </div>
        </div>
    </div>
</section>




<section class="wm-pay-accordian-section bg-light-blue">
    <div class="container">
        <div class="outlet-main-div">
                 <div class="wm-outlet-div">

                            <div class="sec-title text-center mb-2">
                           <h2 class="heading-h2">FAQs</h2>
                            </div>

                        </div>

                        </div>
    </div>
    <div class="container">
  <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-head" id="headingOne">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
     How to Find NFTs on Wealthmark NFT Marketplace
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text"> You can search through the wide variety of NFTs on our marketplace in four ways:</div>
        <ul>
            <li class="text-muted fs-14 fw-normal mb-3"><b>Find the latest drops from cross-chain NFT listings on the Marketplace. </b> In addition to NFTs listed on Wealthmark NFT, you can find third-party NFT listings too. Stay tuned for more NFT collections, marketplaces, and chains on Wealthmark NFT in the future.</li>
            <li class="text-muted fs-14 fw-normal mb-3"><b> Narrow your NFT search in a variety of ways using our new filters.</b>  Modify the filters to explore and trade NFTs with less friction.</li>
            <li class="text-muted fs-14 fw-normal mb-3"><b> View popular NFTs through the leaderboards to find NFTs based on specific metrics.</b>  Browse through rankings on the [Stats] page and the four leaderboards, NFTs, NFT Collections, Creators, and Mystery Boxes.</li>
            <li class="text-muted fs-14 fw-normal mb-3"><b> Search for NFTs by interest using specific keywords. </b> Search for the full name of the NFT collection you’re interested in to view it in the search results. For more details, please refer to  How to Find NFTs on Wealthmark NFT Marketplace.</li>
        </ul>




      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
  How do I sell an NFT?
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text">All NFT assets on Wealthmark NFT are discoverable even if they’re not listed for sale. You can list and sell your NFTs and Mystery Boxes in three ways.</div>
      <ul>
            <li class="text-muted fs-14 fw-normal mb-3"><b>Fixed Price :  </b> Set a fixed price for your NFT on the listing page, which will allow buyers to purchase your NFT instantly with the price you set. Once the transaction is successful, you will receive the funds in your account.  </li>
            <li class="text-muted fs-14 fw-normal mb-3"><b> Auction : </b> Click [Highest Bid] on the listing page. Your NFT will be auctioned and sold to the highest bidder. Set the minimum bid amount for your sale, a buy-out price, the minimum markup percentage, and the date and time for your listing.</li>
            <li class="text-muted fs-14 fw-normal mb-3"><b> View popular NFTs through the leaderboards to find NFTs based on specific metrics.</b>  Browse through rankings on the [Stats] page and the four leaderboards, NFTs, NFT Collections, Creators, and Mystery Boxes.</li>
            <li class="text-muted fs-14 fw-normal mb-3"><b> Search for NFTs by interest using specific keywords. </b> Search for the full name of the NFT collection you’re interested in to view it in the search results. For more details, please refer to  How to Find NFTs on Wealthmark NFT Marketplace.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    What are the NFT Transaction Fees on Wealthmark?
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text">
            Transaction fees may apply when you mint, trade, deposit, withdraw, create, and burn NFTs on the Wealthmark NFT marketplace. These transaction fees are calculated based on various factors, which include market conditions and network status.
</div><div class="text">Please note that we charge different fees for third-party platform NFTs. Transaction fees for third-party platform NFTs include gas fee, platform fee and royalty fees. As NFTs from other platforms are on-chain, buyers of third-party-platform NFTs will have to pay the gas fee in addition to the listed price of the NFT asset.
        </div>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
  How do I buy an NFT?
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

    <!-- <div id="demo">-->
    <!--    <div class="custom-modal-bck-bg">-->
    <!--        <div class="wm-custom-modal-diolog max-width-800px bg-black">-->
    <!--            <div class="">-->
    <!--                <div class="wm-custom-modal-header fs-5 text-white">-->
    <!--                    <span>Wealthmark NFT Marketplace Terms and Conditions </span>-->
                        <!--<svg viewBox="0 0 24 24" fill="none" class="wm-custom-modal-close" id="wm-custom-modal-close">-->
                        <!--     <path d="M6.697 4.575L4.575 6.697 9.88 12l-5.304 5.303 2.122 2.122L12 14.12l5.303 5.304 2.122-2.122L14.12 12l5.304-5.303-2.122-2.122L12 9.88 6.697 4.575z" fill="currentColor"></path>-->
                        <!--</svg>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="wm-custom-modal-body p-3 max-height-500px scrollbar-style"> -->
    <!--                <div class="text-white fs-14 fw-normal text-justify">-->

    <!--                    <div>-->
    <!--                        <div class="fs-14 yellow-text"> 1. Acceptance of NFT Terms; Modification of NFT Terms </div>-->
    <!--                        <div class="text-muted fs-14 fw-normal my-2"> Welcome to the Wealthmark NFT Marketplace owned and operated by Hash Muse Pte Ltd, whose address is at 531A Upper Cross Street, #04-95 Hong Lim Complex, Singapore (“Company”, “we”, “us”, or “our”). These Terms and Conditions (“NFT Terms”) constitute a legally binding agreement between Company and each registered or unregistered end user (each, a “User”, “you” or “your”) of the Wealthmark NFT Marketplace located at nft.Wealthmark.com or such other URL as may be designated by Company from time to time, as well as any mobile apps or other related services or applications thereto (collectively, the “NFT Marketplace”). The NFT Marketplace is considered part of the “Wealthmark Services” as defined in the Wealthmark Terms of Use (“Wealthmark Terms”) set forth here. Company is a “Wealthmark Operator” under the Wealthmark Terms. The Wealthmark Terms are incorporated by reference into these NFT Terms, and also govern your use and access of the NFT Marketplace. In the event of a conflict between these terms of these NFT Terms and the Wealthmark Terms, the NFT Terms will supersede and control. Please carefully review these NFT Terms and the Wealthmark Terms. By accessing and using the NFT Marketplace (including by purchasing or bidding on any items herein), you are deemed to have read, accepted, executed and agreed to be bound by these NFT Terms (including the Wealthmark Terms as incorporated by reference herein). We may change or amend the NFT Marketplace or these NFT Terms at any time at our sole and absolute discretion. Any changes to these NFT Terms will be in effect as of the “Last Revised” date referred to at the top of this page. You acknowledge and agree that the form and nature of the NFT Marketplace, and any part of it, may change from time to time without prior notice to you, and that we may add new or remove existing features and change any part of the NFT Marketplace. IF ANY PROVISION OF THESE NFT TERMS OR THE Wealthmark TERMS OR ANY FUTURE CHANGES ARE UNACCEPTABLE TO YOU, DO NOT USE OR CONTINUE TO USE THE NFT MARKETPLACE. YOUR CONTINUED USE OF THE NFT MARKETPLACE FOLLOWING THE POSTING OF ANY NOTICE OF ANY CHANGE TO THESE TERMS OF SERVICE SHALL CONSTITUTE YOUR ACCEPTANCE AND AGREEMENT TO SUCH CHANGE. ARBITRATION NOTICE: THE Wealthmark TERMS CONTAIN AN ARBITRATION CLAUSE. EXCEPT FOR CERTAIN TYPES OF DISPUTES MENTIONED IN THAT ARBITRATION CLAUSE AND GOVERNING LAW CLAUSE, YOU AND COMPANY AGREE THAT DISPUTES BETWEEN US WILL BE RESOLVED BY MANDATORY BINDING ARBITRATION IN ACCORDANCE WITH THE ARBITRATION CLAUSE AND GOVERNING LAW CLAUSE IN THE Wealthmark TERMS, AND YOU AND COMPANY WAIVE ANY RIGHT TO PARTICIPATE IN A CLASS-ACTION LAWSUIT OR CLASS-WIDE ARBITRATION. FOR THE AVOIDANCE OF DOUBT, COMPANY IS A “Wealthmark OPERATOR” FOR THE PURPOSE OF THE ARBITRATION CLAUSE. </div>-->
    <!--                        <div class="fs-14 yellow-text"> 2. Overview of the NFT Marketplace </div>-->
    <!--                        <div class="text-muted fs-14 fw-normal my-2"> The NFT Marketplace provides you with the opportunity to create (or as we call it, mint), sell, purchase, bid on, collect, trade, showcase and otherwise transact digital blockchain collectibles, which may be represented as a non-fungible token (“NFT”) linked with certain digital media and art (“NFT Media”). We facilitate transactions between buyer and seller of an NFT, but we are not a party to any agreement between buyer and seller of an NFT on the NFT Marketplace. We collect revenue on the NFT Marketplace via transaction fees and other applicable fees which we display when you interact with the NFT Marketplace. For the avoidance of doubt, NFTs transacted on the NFT Marketplace are considered “Digital Assets” as defined in the Wealthmark Terms. Company reserves the right to (but is not required or obligated to be) take any action in relation to any disputes arising from purchases via the NFT Marketplace, including in connection with any auctions or other purchase methods. For NFT Sellers: By minting, providing, or selling an NFT through the NFT Marketplace, you hereby represent and warrant that you own all legal right, title and interest in all intellectual property rights to the NFT Media linked or associated with such NFT, or you are legally authorized by the intellectual property owner to mint, provide or sell the NFT on the NFT Marketplace. Except for NFTs minted on the NFT Marketplace, in order to list any NFT for sale on the NFT Marketplace, you must first deposit the NFT for sale for custody with Company until such time as the NFT is sold or you decide to remove the NFT from the NFT Marketplace. For clarity, Company has no obligation or liability to you for keeping, storing, or helping you recover any NFT Media associated with your NFTs. For NFT Buyers: When you purchase an NFT, you own the NFT that is associated with certain NFT Media, but you do not own any intellectual property rights in such NFT Media except for the license grants expressly set forth herein. In certain cases, we may help to evaluate or provide you with information about a seller of an NFT. However, such information is provided for informational purposes only. You bear full responsibility for verifying the authenticity, legitimacy, identity of any NFT you purchase on the NFT Marketplace. We make no representations, guarantees or promises about the identity, legitimacy, legality, decency, quality or authenticity of any NFT on the NFT Marketplace. Notwithstanding any sale clearing period that may be implemented for the sale of any NFTs, you acknowledge that Company is not required or obligated to adjudicate or decide on any disputes in connection with any NFTs sold on the NFT Marketplace. </div>-->
    <!--                        <div class="fs-14 yellow-text"> 3. License to Your Content </div>-->
    <!--                        <div class="text-muted fs-14 fw-normal my-2"> In connection with your use of the NFT Marketplace, you may be able to post, upload, or submit content to be made available through the NFT Marketplace, including NFT Media that is tied to NFTs you wish to sell on the NFT Marketplace as a seller, and any other content associated with your NFTs (“Your Content”). You retain all rights to Your Content you post, upload, submit, or otherwise made available through the NFT Marketplace, except for rights expressly granted herein. In order to operate the NFT Marketplace, we must obtain from you certain license rights in Your Content so that actions we take in operating the NFT Marketplace are not considered legal violations. Accordingly, by using the NFT Marketplace and uploading Your Content or otherwise made Your Content available, you grant us a license to access, use, host, cache, store, copy, reproduce, transmit, display, publish, distribute, adapt and modify (for technical purposes, e.g., making sure content is viewable on smartphones as well as computers and other devices) Your Content in any and all media or distribution methods (now know or later developed) but solely as required to be able to operate and provide services of the NFT Marketplace. You agree that this license includes the right for us to provide, promote, and improve the NFT Marketplace and to make Your Content available to other companies, organizations or individuals for the distribution, promotion or publication of Your Content on other media and services. You agree that these rights and licenses are royalty free, transferable, sub-licensable, worldwide and irrevocable (for so long as Your Content is stored with us), and include a right for us to make Your Content available to, and pass these rights along to, others with whom we have contractual relationships related to the provision of the NFT Marketplace, and solely for purpose of providing the NFT Marketplace, and to otherwise permit access to disclose Your Content to third parties if we determine such access is necessary to comply with our legal obligations. As part of the foregoing license grant you agree that the other Users of the NFT Marketplace shall have the right to comment on and/or tag Your Content and/or to use, publish, display, modify or include a copy of Your Content as part of their own use of the NFT Marketplace; except that the foregoing shall not apply to any of Your Content that you post privately for non-public display on the NFT Marketplace. By posting or submitting Your Content to the NFT Marketplace, you represent and warrant that you have, or have obtained, all rights, licenses, consents, permissions, power and/or authority necessary to grant the rights granted herein for Your Content. You agree that Your Content will not contain material subject to copyright or other proprietary rights, unless you have the necessary permission or are otherwise legally entitled to post the material and to grant us the license described above. If you sell an NFT through the NFT Marketplace, you grant to the buyer of the NFT a worldwide, non-exclusive, non-transferable, royalty-free license to use, copy, and display the NFT Media for such purchased NFT, solely for the following purposes: (a) for the buyer’s own personal use; (b) as part of a marketplace that permits the purchase and sale of such NFTs, provided that the marketplace cryptographically verifies each NFT’s owner’s rights to display the NFT Media for their NFTs to ensure that only the actual owner can display the NFT Media; or (c) as part of a third party website or application that permits the inclusion, involvement, or participation of your NFT, provided that the website/application cryptographically verifies each NFT’s owner’s rights to display the NFT Media for their NFTs to ensure that only the actual owner can display the NFT Media, and provided that the NFT Media is no longer visible once the owner of the NFTs leaves the website/application (the “NFT Purchase License”). If you are a buyer of NFTs, then you acknowledge and agree that the NFT Purchase License set forth above only lasts as long as you are the valid owner and holder of the NFT associated with the licensed NFT Media. If you sell or transfer the NFT to another person, this NFT Purchase License will transfer to such other owner or holder of the NFT, and you will no longer have the benefits of such NFT Purchase License. Unless otherwise specified by seller of an NFT in writing, your purchase of an NFT does not give you the right to publicly display, perform, distribute, sell or otherwise reproduce the NFT or its related NFT Media for any commercial purpose. If you sell an NFT, you agree that you will not have any claims against Company for any breach of these NFT Terms by a purchaser, including if they make commercial use of the related NFT Media in breach of these NFT Terms. We have the right to remove or refuse to post any of Your Content, including NFTs, (a) for any or no reason in our sole discretion; and (b) take any action with respect to Your Content that we deem necessary or appropriate in our sole discretion, including if we believe that Your Content violates these NFT Terms, infringes any intellectual property right of any person or entity, threatens the personal safety of Users of the NFT Marketplace or the public, or could create liability for Company or other Users. </div>-->
    <!--                        <div class="fs-14 yellow-text"> 4. Specific Terms for the Premium Platform and Creators </div>-->
    <!--                        <div class="text-muted fs-14 fw-normal my-2"> As part of the NFT Marketplace, Company offers a premium platform (the “Premium Platform”) which only allows creators that are invited or otherwise approved by Company (“Invited Creators”) to mint and sell NFTs (the “Creator’s NFTs”) associated with their original NFT Media (the “Creator’s NFT Media”). Company may enter into an addendum with any Invited Creator (a “Creator Addendum”) setting forth terms for using the Premium Platform as an Invited Creator. If there is a conflict between a Creator Addendum and these NFT Terms, the provisions of the Creator Addendum shall take precedence for such Invited Creator. Invited Creator hereby grants to Company a perpetual, irrevocable and exclusive right and license to use, reproduce, display the Creator’s NFT Media in connection with the promotion of the Creator’s NFT Media, the Creator’s NFTs and the NFT Marketplace. For clarity, unless otherwise specified in a Creator Addendum, the exclusive license granted above means that Invited Creator cannot itself, or grant to any other party any right to, use, reproduce, display the Creator’s NFT Media in connection with non-fungible tokens or any other blockchain collectibles, platforms or services. In order for Company to exercise its rights to the Creator’s NFT Media, Invited Creator will provide Company with high-resolution images and other embodiments of such NFT Media as reasonably requested by Company. Company shall have the sole control over the promotion and marketing of the Creator’s NFTs, including the sole discretion to select certain Creator’s NFTs or Invited Creators to participate in events hosted by Company. As reasonably requested by Company, Invited Creator will support Company in the promotion or marketing of the Creator’s NFTs through participation in the marketing activities as agreed upon by the parties in a Creator Addendum. In connection with the promotion of the Creator’s NFTs, Invited Creator hereby grants Company a right to use the name, image, photo, biography, signature and likeness of the Invited Creator solely in connection with the marketing and promotion of the Creator’s NFTs. Invited Creator will not engage in any promotion or marketing of Company, the NFT Marketplace, or any Creator’s NFTs in a manner that is misleading or deceptive or not in compliance with applicable law. Invited Creator must disclose any material connection between Invited Creator and Company in any such promotion in a clear and conspicuous manner, including in close proximity to any such marketing statements. Invited Creator will not promote or market the Creator’s NFTs in a manner intended to give buyers the impression that such NFTs are investment products or that they can expect capital appreciation or derive profits from purchase of such NFTs, or indicate that such NFTs may be characterized as securities or any other form of regulated investment product in any applicable jurisdiction. If requested by Company, Invited Creator will reasonably cooperate with Company to validate the authenticity of the Creator’s NFTs and the Creator’s NFT Media. Invited Creator acknowledges and agrees that Company will charge a platform fee which is 10% (or other percentage as provided in a Creator Addendum) of the purchase price for any sale of the Creator’s NFTs on the Premium Platform. For the avoidance of doubt, any use of or interaction with the Premium Platform by any User (including an Invited Creator) is governed by terms in this Section 4 and the rest of these NFT Terms not in direct contradicton with terms in this Section 4. </div>-->
    <!--                        <div class="fs-14 yellow-text"> 5. Specific Terms for the Standard Platform and Initial Sale </div>-->
    <!--                        <div class="text-muted fs-14 fw-normal my-2"> As part of the NFT Marketplace, Company offers a standard platform (the “Standard Platform”) which allows any registered Users to create NFT collections (subject to paying an associated smart contract deployment fee) and mint and sell NFTs (the “Standard NFTs”) associated with the User’s NFT Media. Creators of Standard NFTs can also set their own royalty fee for their NFT collections. For an initial sale of a Standard NFT (i.e. the first instance a newly minted Standard NFT is sold by the creator to a buyer), the transaction proceeds from the sale of the Standard NFT (the “Transaction Proceeds”) shall be frozen in the seller’s account for a pre-specified period of time (the “Initial Sale Clearing Period”) after which the Transaction Proceeds will be released to the seller. Company may extend the Initial Sale Clearing Period for a further period of time (the “Extended Clearing Period”) provided that: (a) within the Initial Sale Clearing Period, a bona fide complaint is raised by the buyer or a third party for claims that relate to intellectual property infringement, the identity, legitimacy, authenticity and/or validity of legal title of the Standard NFT, violation of the Wealthmark Terms , these NFT Terms and/or violation of the terms of the NFT sale as agreed between the seller and the buyer. For any claim raised by the buyer, the buyer shall furnish proof that the Standard NFT at issue remains in their account and agrees to have the NFT frozen pending resolution of the dispute. The buyer or third party submitting a complaint shall agree that Wealthmark may supply a copy of this complaint to the seller, including the buyer/third party’s identity and contact details. (b) Company suspects the Standard NFT, the Standard NFT transaction, the seller’s activity in relation to the Standard NFT and/or the Transaction Proceeds to be in violation of the applicable terms of sale (including the Wealthmark Terms and these NFT Terms) or any applicable laws and regulations. After the Extended Clearing Period, Company may only continue to freeze if legal proceedings or investigations by the authorities have been commenced against the seller (and where such legal proceedings or investigations require the Transaction Proceeds to be frozen ), or in such other circumstances that the Company deems appropriate in its sole discretion. For the avoidance of doubt, the Company reserves the right to freeze and take such other action in respect of the Transaction Proceeds (being Digital Assets or funds in a Wealthmark User’s Account) in accordance with the Wealthmark Terms, regardless of whether the situation is expressly provided for under this Section 5. In such circumstances, Company has the discretion to extend the freeze for any further duration pending the resolution of the dispute. If Company does not receive proof that such a formal legal action or complaint has been filed within the Extend Clearing Period, Company may be entitled to release the Transaction Proceeds to the seller. If the complainant and the seller are able to resolve the dispute at any stage, Company will require written confirmation of the resolution of the dispute from all parties before it may proceed to release the Transaction Proceeds to the seller. In no circumstances shall Company bear any liability or responsibility for any act or omission done in relation to the freezing (or omission to freeze) the Transaction Proceeds, and there shall be no freezing as part of any secondary sale of Standard NFTs. In addition, by minting a Standard NFT, you acknowledge and agree that you have read and accept the “NFT Minting Rules”, which includes examples of inappropriate content and our right at our sole discretion to, among other things, delist or otherwise remove your NFT collection(s) or Standard NFTs from the NFT Marketplace. For the avoidance of doubt, any use of or interaction with the Standard Platform by any User is governed by terms in this Section 5 and the rest of these NFT Terms not in direct contradiction with terms in this Section 5. </div>-->
    <!--                        <div class="fs-14 yellow-text"> 6. Copyright Policy </div>-->
    <!--                        <div class="text-muted fs-14 fw-normal my-2"> Company may, but is not obligated to, monitor the NFTs, NFT Media and Your Content uploaded to the NFT Marketplace for any infringement of a third party’s intellectual property rights. However, Company cannot undertake to review all such content before it is posted on the Service, and cannot ensure prompt removal of objectionable content after it has been posted. Accordingly, Company assume no liability for any action regarding transmissions, communications, or content provided by any user or third party. Company will take down NFTs in response to Digital Millennium Copyright Act takedown notices and/or other intellectual property infringement claims and will terminate a seller’s access if the seller is deemed to be a repeat infringer. If you believe that any text, graphics, photos, audio, videos or other materials or works uploaded, downloaded or appearing on the Services have been copied in a way that constitutes copyright infringement, you may submit a notification to our legal department, by providing the following information in writing: (a) identification of the copyrighted work that is claimed to be infringed; (b) identification of the allegedly infringing material that is requested to be removed, including a description of where it is located on the NFT Marketplace; (c) information for our copyright agent to contact you, such as an address, telephone number and e-mail address; (d) a statement that you have a good faith belief that the identified, allegedly infringing use is not authorized by the copyright owners, its agent or the law; (e) a statement that the information above is accurate, and under penalty of perjury, that you are the copyright owner or the authorized person to act on behalf of the copyright owner; and (f) the physical or electronic signature of a person authorized to act on behalf of the owner of the copyright or of an exclusive right that is allegedly infringed. Notices of copyright infringement claims should be sent by mail to: Hash Muse Pte Ltd, Attn: Legal Department, 531A Upper Cross Street, #04-95 Hong Lim Complex, Singapore; or by e-mail to legal@Wealthmark.com. It is our policy, in appropriate circumstances and at our discretion, to disable or terminate the accounts of Users who repeatedly infringe copyrights or intellectual property rights of others. Any User of the NFT Marketplace who has uploaded or posted materials identified as infringing as described above may supply a counter-notification. When we receive a counter- notification, we may reinstate the posts or material in question, in our sole discretion. To file a counter-notification with us, you must provide a written communication (by regular mail or by email) that sets forth: (a) your name, address, telephone number, e-mail address and physical or electronic signature; (b) identification of the material that has been removed or to which access has been disabled and the location at which the material appeared before it was removed or access to it was disabled; and (c) a statement under penalty of perjury that you have a good faith belief that the material was removed or disabled as a result of mistake or misidentification of the material to be removed or disabled. Please note that you will be liable for damages if you materially misrepresent that content or an activity is not infringing the copyrights of others. </div>-->
    <!--                        <div class="fs-14 yellow-text"> 7. Restrictions on Marketing and Promotional Activities and Logo Use </div>-->
    <!--                        <div class="text-muted fs-14 fw-normal my-2"> Any marketing and promotional activities, whether in digital, print or any other form, that you may conduct in connection with your use of the NFT Marketplace are subject to our review and prior written approval. We will only allow marketing and promotional activities to be referred to strictly as collaboration with Wealthmark NFT (but not with Wealthmark). You should submit any such plan relating to marketing and promotional activities and materials for our review and provide any information that we reasonably request. The plan should contain all key information including but not limited to details of the relevant NFT projects, all planned media channels or distributions, relationships between different counterparties, etc. No mention of token-related topics or any implication relating to token issue or listing, or collaboration with Wealthmark may be included. You must not create and/or publish any marketing or promotional materials that may: (a) be deemed false and misleading; (b) breach or infringes the rights of any third parties, including intellectual property rights; (c) breach any applicable laws and regulations; (d) breach any of our guidelines or instructions that may be made available to you; and (e) bring into disrepute or damage the goodwill of Wealthmark and/or NFT Marketplace. We reserve the right to request changes or suspension to such plan and activity as we deem necessary and reject any plan and activity in its entirety in our absolute discretion. Subject to further guidelines that may be made available to you, we may permit you to use the Wealthmark Marks, at our sole discretion, for the sole purposes of marketing or promoting your NFTs on the NFT Marketplace. Terms of such guidelines made available to you shall be incorporated into these terms by express reference herein. You must not use Wealthmark’s name, logo, trade names and any other marks (“Wealthmark Marks”) without our prior written approval. You agree to indemnify us against all liabilities, costs, expenses, damages and losses (including but not limited to any direct, indirect or consequential losses, loss of profit, loss of reputation, loss of goodwill and all interest, penalties and legal costs (calculated on a full indemnity basis) and all other professional costs and expenses) suffered or incurred by us arising out of or in connection with any such marketing and promotional activities that you conduct in connection with your use of the NFT Marketplace. </div>-->
    <!--                        <div class="fs-14 yellow-text"> 8. Verification and Payment </div>-->
    <!--                        <div class="text-muted fs-14 fw-normal my-2"> When you make purchases through the NFT Marketplace, including, without limitation, any purchase for NFTs, you must provide and maintain valid payment information in connection with your Wealthmark Account (as defined in the Wealthmark Terms) with us. You represent and warrant that you are authorized to use the payment method you use via the NFT Marketplace to make any purchase. You authorize us to charge your payment method for the total amount of your purchase price. Your order may be suspended or cancelled for any reason, including if the payment method cannot be verified, is invalid or is otherwise not acceptable. Other payments terms for purchases are set forth in the relevant sections of the Wealthmark Terms. We have no liability to you or to any third party for any claims or damages that may arise as a result of any payments or transactions that you engage in via the NFT Marketplace, or any other payment or transactions that you conduct via the NFT Marketplace. We do not provide refunds for any purchases that you might make on or through the NFT Marketplace – whether for NFTs or anything else. You will be solely responsible to pay any and all sales, use, value-added and other taxes, duties, and assessments (except taxes on our net income) now or hereafter claimed or imposed by any governmental authority associated with your use of the NFT Marketplace or NFTs, except for income taxes levied on us as a result of such purchases of NFTs. </div>-->
    <!--                        <div class="fs-14 yellow-text"> 9. Assumption of Risks </div>-->
    <!--                        <div class="text-muted fs-14 fw-normal my-2"> DO YOUR OWN RESEARCH. You accept and acknowledge that (i) the value of an NFT is subjective; prices of an NFT are subject to volatility and fluctuations in the price of cryptocurrency can also materially and adversely affect NFT prices; (ii) a lack of use or public interest in NFTs could negatively impact the potential utility of NFTs; (iii) the regulatory regime governing NFTs is uncertain, and new regulations or policies may materially adversely affect the utility of NFTs; and (iv) there are risks associated with purchasing items associated with content created by third parties through peer-to-peer transactions, including but not limited to, the risk of purchasing counterfeit items, mislabeled items, items that are vulnerable to metadata decay, items on smart contracts with bugs, and items that may become untransferable. You represent and warrant that you have done sufficient research before making any decisions to sell, buy, transfer, or otherwise interact with any NFTs. You further acknowledge and agree it is your sole responsibility to carry out all necessary due diligence for all your activities relating to NFTs, and you represent and warrant that you have not and are not relying on, and shall have no remedies, in respect of any statement or representation made by Company and/or Wealthmark (as defined in the Wealthmark Terms) in relation to any sale, buy, transfer or interaction otherwise with any NFTs. Any purchase or sale you make, accept or facilitate outside of the NFT Marketplace of an NFT will be entirely at your risk. You acknowledge that you have obtained sufficient information to make an informed decision to purchase an NFT, including carefully reviewing the code of the smart contract and the NFT and fully understand and accept the functions of the same. We do not control or endorse purchases or sales of NFTs outside of the NFT Marketplace. We expressly deny and disclaim any liability to you and deny any obligation to indemnify you or hold you harmless for any losses you may incur by transacting, or facilitating transactions, in NFTs outside of the NFT Marketplace. Certain parts of the NFT Marketplace may display, include or make available content, data, information, applications or materials from third parties (“Third Party Materials”). By using the NFT Marketplace, you acknowledge and agree that Company is not responsible for examining or evaluating the content, accuracy, completeness, availability, timeliness, validity, copyright compliance, legality, decency, quality or any other aspect of such Third Party Materials. We do not warrant or endorse and do not assume and will not have any liability or responsibility to you or any other person for any third-party services, Third Party Materials, or for any other materials, products, or services of third parties. If you have a dispute with one or more users, YOU RELEASE US FROM CLAIMS, DEMANDS, AND DAMAGES OF EVERY KIND AND NATURE, KNOWN AND UNKNOWN, ARISING OUT OF OR IN ANY WAY CONNECTED WITH SUCH DISPUTES. IN ENTERING INTO THIS RELEASE YOU EXPRESSLY WAIVE ANY PROTECTIONS (WHETHER STATUTORY OR OTHERWISE) THAT WOULD OTHERWISE LIMIT THE COVERAGE OF THIS RELEASE TO INCLUDE THOSE CLAIMS WHICH YOU MAY KNOW OR SUSPECT TO EXIST IN YOUR FAVOUR AT THE TIME OF AGREEING TO THIS RELEASE. </div>-->
    <!--                        <div class="fs-14 yellow-text"> 10. Limitation of Liability </div>-->
    <!--                        <div class="text-muted fs-14 fw-normal my-2"> TO THE FULLEST EXTENT PERMITTED BY LAW, YOU AGREE THAT IN NO EVENT WILL COMPANY BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY LOST PROFIT OR ANY INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL OR PUNITIVE DAMAGES RELATED TO THE LOSS OF REVENUE, LOSS OF PROFIT, LOSS OF BUSINESS OR ANTICIPATED SAVING, LOSS OF USE, LOSS OF GOODWILL OR LOSS OF DATA, WHETHER CAUSED BY TORT (INCLUDING NEGLIGENCE), BREACH OF CONTRACT, OR OTHERWISE, EVEN IF PARTIES HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES; AND (B) FOR ANY OTHER CLAIM, DEMAND, OR DAMAGES WHATSOEVER RESULTING FROM OR ARISING OUT OF OR IN CONNECTION WITH THESE TERMS OF THE DELIVERY, USE, OR PERFORMANCE OF THE SERVICE. ACCESS TO, AND USE OF, THE SERVICE, PRODUCTS OR THIRD-PARTY SITES, AND PRODUCTS ARE AT YOUR OWN DISCRETION AND RISK, AND YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM OR MOBILE DEVICE OR LOSS OF DATA RESULTING THEREFROM. NOTWITHSTANDING ANYTHING TO THE CONTRARY CONTAINED HEREIN, IN NO EVENT SHALL THE MAXIMUM AGGREGATE LIABILITY OF COMPANY ARISING OUT OF OR IN ANY WAY RELATED TO THESE TERMS, THE ACCESS TO AND USE OF THE SERVICE, CONTENT, OR NFTS EXCEED $100. </div>-->
    <!--                        <div class="fs-14 yellow-text"> 11. Termination </div>-->
    <!--                        <div class="text-muted fs-14 fw-normal my-2"> If you breach any of the provisions of these NFT Terms, we reserve the right, with or without notice and in our sole discretion, to suspend, disable, terminate, or delete your account and/or your ability to access or use the NFT Marketplace (or any part of the foregoing) at any time and for any or no reason, and you acknowledge and agree that we shall have no liability or obligation to you in such event and that you will not be entitled to a refund of any amounts that you have already paid to us. </div>-->
    <!--                        <div class="fs-14 yellow-text"> 12. Contact </div>-->
    <!--                        <div class="text-muted fs-14 fw-normal my-2"> General questions or comments about the NFT Marketplace or these NFT Terms should be sent either by mail to Hash Muse Pte Ltd, 531A Upper Cross Street, #04-95 Hong Lim Complex, Singapore, or by contacting the customer support team at https://www.Wealthmark.com/en/ support/requests/new. </div>-->
    <!--                    </div>-->


    <!--                </div>-->
    <!--            </div>-->

    <!--             <div class="wm-custom-modal-footer p-3"> -->
    <!--                    <div class="d-flex align-items-center justify-content-between">-->
    <!--                        <p class="text-muted">Please read and accept the Terms and Conditions before proceeding.</p>-->
    <!--                        <a href="javascript:void(0)" class="btn-yellow">Accept</a>-->
    <!--                    </div>-->
    <!--             </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    @include('template.web_footer')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>
   <script src="{{ asset('assets/css/accordian_bootstrap.min.js') }}"></script>

  <script>

  $('.newListings').slick({
        dots: false,
	    prevArrow: $('.newListings-prev'),
	    nextArrow: $('.newListings-next'),
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
});

$('.Featured').slick({
        dots: false,
	    prevArrow: $('.Featured-prev'),
	    nextArrow: $('.Featured-next'),
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
});

    $('.responsive').slick({
        dots: false,
	    prevArrow: $('.responsive-prev'),
	    nextArrow: $('.responsive-next'),
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
});
  </script>
</body>

</html>

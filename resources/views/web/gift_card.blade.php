<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')
    <link rel='stylesheet' href="{{('../assets/css/deepak_custom.css') }}">
    <link rel='stylesheet' href="{{('../assets/css/style_main.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="description" content="Wealthmark is a leading player in the Crypto ecosystem.Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.">
    <meta name="keywords" content="Wealthmark, Crypto, coins">
    <meta name="author" content="Wealthmark">
    <script>
    $(document).ready(function() {
        $(".next-slide").click(function() {
            $("#banner-one").hide(1000);
            $(".next-slide-2").show(1000);
            $("#banner-two").show(1000);
            $(".next-slide").addClass("next-slide-2");
        });
        $(".next-slide-2").click(function() {
            $(".next-slide-2").removeClass(".next-slide-2");
            $(".next-slide-2").addClass("next-slide-3");
            $("#banner-two").hide(1000);
            $("#banner-three").show(1000);
        });

        $(".next-slide-3").click(function() {
            $(".next-slide-3").removeClass(".next-slide-3");
            $(".next-slide-3").addClass("next-slide-4");
            $("#banner-one").show(1000);
            $("#banner-two").hide(1000);
            $("#banner-three").hide(1000);
        });
    });
    </script>
<style>
    .carousel-control-next-icon, .carousel-control-prev-icon {
    display: inline-block;
    width: 4rem;
}
/* ADVERTISERS SERVICE CARD */
body {
  font-family: "Roboto", sans-serif !important;
}

.sec-icon {
  position: relative;
  display: inline-block;
  padding: 0;
  margin: 0 auto;
}

.sec-icon::before {
  content: "";
  position: absolute;
  height: 1px;
  left: -70px;
  margin-top: -5.5px;
  top: 60%;
  background: #333333;
  width: 50px;
}

.sec-icon::after {
  content: "";
  position: absolute;
  height: 1px;
  right: -70px;
  margin-top: -5.5px;
  top: 60%;
  background: #333;
  width: 50px;
}

.advertisers-service-sec {
  background-color: #f5f5f5;
}

.advertisers-service-sec span {
    color: #fdc116;
}
.advertisers-service-sec .col {
  padding: 0 1em 1em 1em;
  text-align: center;
}

.advertisers-service-sec .service-card {
  width: 100%;
  height: 100%;
  padding: 2em 1.5em;
  border-radius: 5px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  transition: 0.5s;
  position: relative;
  z-index: 2;
  overflow: hidden;
  background: #fff;
}

.advertisers-service-sec .service-card::after {
    content: "";
    width: 100%;
    height: 100%;
    background: linear-gradient(#ffffff, #fdc116);
    position: absolute;
    left: 0%;
    top: -98%;
    z-index: -2;
    transition: all 0.4s cubic-bezier(0.77, -0.04, 0, 0.99);
}

.advertisers-service-sec h3 {
  font-size: 20px;
  text-transform: capitalize;
  font-weight: 600;
  color: #1f194c;
  margin: 1em 0;
  z-index: 3;
}

.advertisers-service-sec p {
  color: #575a7b;
  font-size: 15px;
  line-height: 1.6;
  letter-spacing: 0.03em;
  z-index: 3;
}

.advertisers-service-sec .icon-wrapper {
  background-color: #2c7bfe;
  position: relative;
  margin: auto;
  font-size: 30px;
  height: 2.5em;
  width: 2.5em;
  color: #ffffff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  transition: 0.5s;
  z-index: 3;
}

.advertisers-service-sec .service-card:hover:after {
  top: 0%;
}

.service-card .icon-wrapper {
  background-color: #ffffff;
  color: rgb(255, 23, 131);
}

.advertisers-service-sec .service-card:hover .icon-wrapper {
  color: #0dcaf0;
}

.advertisers-service-sec .service-card:hover h3 {
  color: #263674;
}

.advertisers-service-sec .service-card:hover p {
    color: #263674;
}
/* ADVERTISERS SERVICE CARD ENDED */

</style>


</head>

<body>
    @include('template.web_menu')

    <!-- gift banner section  start-->
    <section class="gift-banner-section" id="gift-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-0">

                    <!-- Carousel -->
                    <div id="demo" class="carousel slide position-static" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 order-2 order-lg-1">
                                        <div class="blogs-inner-box-slider gift-card-tab-box">
                                            <div class="left-content-block">
                                                <h1>Transfer Crypto <br />with Wealth Mark Gift Card </h1>
                                                <div class="text">Gift crypto with your referral code and choose from
                                                    30+ thematic templates</div><br />
                                                <a href="#" class="btn btn-yellow shadow mt-3"> Transfer Crypto &#x2192;
                                                </a>
                                            </div>
                                            <div class="gift-tabing-section mt-5">
                                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="pills-redeem-home-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-redeem-home"
                                                            type="button" role="tab" aria-controls="pills-redeem-home"
                                                            aria-selected="true">Redeem</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-redeem-profile-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-redeem-profile"
                                                            type="button" role="tab"
                                                            aria-controls="pills-redeem-profile"
                                                            aria-selected="false">Add Card</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-redeem-contact-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-redeem-contact"
                                                            type="button" role="tab"
                                                            aria-controls="pills-redeem-contact"
                                                            aria-selected="false">Check Card</button>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-redeem-home"
                                                        role="tabpanel" aria-labelledby="pills-redeem-home-tab">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="16 characters in digits and letters"
                                                                aria-label="Recipient's username"
                                                                aria-describedby="basic-addon2">
                                                            <a href="#" class="input-group-text"
                                                                id="basic-addon2">Redeem</a>
                                                        </div>
                                                        <div class="text">Wealth Mark is not responsible for, and
                                                            assumes no liability
                                                            to you for, any
                                                            unlawful
                                                            conduct or fraud by any third party associated with any Gift
                                                            Card. <a href="#" class="text-warning"> View more </a></div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-redeem-profile" role="tabpanel"
                                                        aria-labelledby="pills-redeem-profile-tab">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="16 characters in digits and letters"
                                                                aria-label="Recipient's username"
                                                                aria-describedby="basic-addon2">
                                                            <a href="#" class="input-group-text" id="basic-addon2">Add
                                                                Card</a>
                                                        </div>
                                                        <div class="text">Wealth Mark is not responsible for, and
                                                            assumes no liability
                                                            to you for, any
                                                            unlawful
                                                            conduct or fraud by any third party associated with any Gift
                                                            Card. <a href="#" class="text-warning"> View more </a></div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-redeem-contact" role="tabpanel"
                                                        aria-labelledby="pills-redeem-contact-tab">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="16 characters in digits and letters"
                                                                aria-label="Recipient's username"
                                                                aria-describedby="basic-addon2">
                                                            <a href="#" class="input-group-text" id="basic-addon2">Check
                                                                Card</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 order-1 order-lg-2">
                                        <div class="blogs-inner-box-slider">
                                            <img src="{{ asset('assets/img/gift-card.gif') }}"
                                                class="img-fluid animated" alt="walth mark blog">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 order-2 order-lg-1">
                                        <div class="blogs-inner-box-slider gift-card-tab-box">
                                            <div class="left-content-block">
                                                <h1>Transfer Crypto <br />with Wealth Mark Gift Card </h1>
                                                <div class="text">Gift crypto with your referral code and choose from
                                                    30+ thematic templates</div><br />
                                                <a href="#" class="btn btn-yellow shadow mt-3"> Transfer Crypto &#x2192;
                                                </a>
                                            </div>
                                            <div class="gift-tabing-section mt-5">
                                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="pills-home-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-home"
                                                            type="button" role="tab" aria-controls="pills-home"
                                                            aria-selected="true">Redeem</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-profile-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-profile"
                                                            type="button" role="tab" aria-controls="pills-profile"
                                                            aria-selected="false">Add Card</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-contact-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-contact"
                                                            type="button" role="tab" aria-controls="pills-contact"
                                                            aria-selected="false">Check Card</button>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-home"
                                                        role="tabpanel" aria-labelledby="pills-home-tab">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="16 characters in digits and letters"
                                                                aria-label="Recipient's username"
                                                                aria-describedby="basic-addon2">
                                                            <a href="#" class="input-group-text"
                                                                id="basic-addon2">Redeem</a>
                                                        </div>
                                                        <div class="text">Wealth Mark is not responsible for, and
                                                            assumes no liability
                                                            to you for, any
                                                            unlawful
                                                            conduct or fraud by any third party associated with any Gift
                                                            Card. <a href="#" class="text-warning"> View more </a></div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                        aria-labelledby="pills-profile-tab">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="16 characters in digits and letters"
                                                                aria-label="Recipient's username"
                                                                aria-describedby="basic-addon2">
                                                            <a href="#" class="input-group-text" id="basic-addon2">Add
                                                                Card</a>
                                                        </div>
                                                        <div class="text">Wealth Mark is not responsible for, and
                                                            assumes no liability
                                                            to you for, any
                                                            unlawful
                                                            conduct or fraud by any third party associated with any Gift
                                                            Card. <a href="#" class="text-warning"> View more </a></div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                                        aria-labelledby="pills-contact-tab">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="16 characters in digits and letters"
                                                                aria-label="Recipient's username"
                                                                aria-describedby="basic-addon2">
                                                            <a href="#" class="input-group-text" id="basic-addon2">Check
                                                                Card</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 order-1 order-lg-2">
                                        <div class="blogs-inner-box-slider">
                                            <img src="{{ asset('assets/img/gif-wallet.gif') }}"
                                                class="img-fluid animated" alt="walth mark blog">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 order-2 order-lg-1">
                                        <div class="blogs-inner-box-slider gift-card-tab-box">
                                            <div class="left-content-block">
                                                <h1>Transfer Crypto <br />with Wealth Mark Gift Card </h1>
                                                <div class="text">Gift crypto with your referral code and choose from
                                                    30+ thematic templates</div><br />
                                                <a href="#" class="btn btn-yellow shadow mt-3"> Transfer Crypto &#x2192;
                                                </a>
                                            </div>
                                            <div class="gift-tabing-section mt-5">
                                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="pills-check-card-home-tab"
                                                            data-bs-toggle="pill"
                                                            data-bs-target="#pills-check-card-home" type="button"
                                                            role="tab" aria-controls="pills-check-card-home"
                                                            aria-selected="true">Redeem</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-check-card-profile-tab"
                                                            data-bs-toggle="pill"
                                                            data-bs-target="#pills-check-card-profile" type="button"
                                                            role="tab" aria-controls="pills-check-card-profile"
                                                            aria-selected="false">Add Card</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-check-card-contact-tab"
                                                            data-bs-toggle="pill"
                                                            data-bs-target="#pills-check-card-contact" type="button"
                                                            role="tab" aria-controls="pills-check-card-contact"
                                                            aria-selected="false">Check Card</button>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="pills-check-card-home"
                                                        role="tabpanel" aria-labelledby="pills-check-card-home-tab">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="16 characters in digits and letters"
                                                                aria-label="Recipient's username"
                                                                aria-describedby="basic-addon2">
                                                            <a href="#" class="input-group-text"
                                                                id="basic-addon2">Redeem</a>
                                                        </div>
                                                        <div class="text">Wealth Mark is not responsible for, and
                                                            assumes no liability
                                                            to you for, any
                                                            unlawful
                                                            conduct or fraud by any third party associated with any Gift
                                                            Card. <a href="#" class="text-warning"> View more </a></div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-check-card-profile"
                                                        role="tabpanel" aria-labelledby="pills-check-card-profile-tab">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="16 characters in digits and letters"
                                                                aria-label="Recipient's username"
                                                                aria-describedby="basic-addon2">
                                                            <a href="#" class="input-group-text" id="basic-addon2">Add
                                                                Card</a>
                                                        </div>
                                                        <div class="text">Wealth Mark is not responsible for, and
                                                            assumes no liability
                                                            to you for, any
                                                            unlawful
                                                            conduct or fraud by any third party associated with any Gift
                                                            Card. <a href="#" class="text-warning"> View more </a></div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pills-check-card-contact"
                                                        role="tabpanel" aria-labelledby="pills-check-card-contact-tab">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="16 characters in digits and letters"
                                                                aria-label="Recipient's username"
                                                                aria-describedby="basic-addon2">
                                                            <a href="#" class="input-group-text" id="basic-addon2">Check
                                                                Card</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 order-1 order-lg-2">
                                        <div class="blogs-inner-box-slider">
                                            <img src="{{ asset('assets/img/gift-card.gif ') }}"
                                                class="img-fluid animated" alt="walth mark blog">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next animated" type="button" data-bs-target="#demo"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon">
                            <br/>
                                <small class="carasual-arrow-icon-txt1">Send a Gift</small>
                                <small class="carasual-arrow-icon-txt2">Transfer Crypto</small>
                            </span>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- gift banner section end -->


    <!-- popular cards section start -->
<!-- ADVERTISERS SERVICE CARD -->
<section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="section-header text-center">
        <h2 class="fw-bold fs-1">
          Wealthmark
          <span class="b-class-secondary">Gift Card </span>Services
        </h2>
        <p class="sec-icon"><i class="fa fa-gift"></i></p>
      </div>
    </div>
    <div class="row mt-5 mt-md-4 row-cols-1 row-cols-sm-1 row-cols-md-3 justify-content-center">
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <img src="{{ asset('assets/img/usdt-icon.png') }}"
                                                class="img-fluid animated" alt="walth mark blog">
          </div>
          <h3>USDT Gift Card</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quisquam consequatur necessitatibus eaque.
          </p>
        </div>
      </div>

      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <img src="{{ asset('assets/img/SHIB-icon.png') }}"
                                                class="img-fluid animated" alt="walth mark blog">
          </div>
          <h3>SHIB Gift Card</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quisquam consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <img src="{{ asset('assets/img/eth-icon.png') }}"
                                                class="img-fluid animated" alt="walth mark blog">
          </div>
          <h3>ETH Gift Card</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quisquam consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <img src="{{ asset('assets/img/doge-icon.png') }}"
                                                class="img-fluid animated" alt="walth mark blog">
          </div>
          <h3>DOGE Gift Card</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quisquam consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <img src="{{ asset('assets/img/btc-icon.png') }}"
                                                class="img-fluid animated" alt="walth mark blog">
          </div>
          <h3>BTC Gift Card</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quisquam consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
            <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
            <img src="{{ asset('assets/img/gif-wallet.gif') }}"
                                                class="img-fluid animated" alt="walth mark blog">
          </div>
          <h3>Wealthmark Gift Card</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quisquam consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ADVERTISERS SERVICE CARD ENDED -->
    <!-- popular cards section end -->


    <!-- My card Section -->
    <section class="My-card-section" id="My-card-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sec-title text-left mb-5">
                        <span class="title">Know About</span>
                        <h2 class="heading-h2">My Cards</h2>
                    </div>
                    <div class="available-gift-card" id="added-gift-card">
                        <img src="{{ asset('assets/img/added-card-icon.jpg') }}" class="img-fluid"
                            alt="gift Card Image">
                        <div class="text text-center">No gift card available Create Gift Card</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- My card Section -->


    <!-- grow-your-business section  start-->
    <section class="grow-your-business" id="business-grow">
        <div class="container">
            <div class="row">
                <div class="row banner-1" id="grow-business">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 order-2 order-lg-1">
                        <div class="left-content">
                            <h2>Grow your business with versatile crypto solutions</h2>
                            <div class="text">Wealth Mark Code is a prepaid crypto voucher that enables your business to
                                transfer
                                and
                                exchange crypto outside of Wealth Mark, supported by API. Use cases include: Gift Card
                                reselling, loyalty and game rewards, e-commerce purchases and more. </div><br />
                            <a href="#" class="btn learn-more-btn mt-4">Learn More &#x2192; </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 order-1 order-lg-2 grow-business-img-block">
                        <img src="{{ asset('assets/img/grow-business-img.png') }}" class="img-fluid"
                            alt="gift Card Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- grow-your-business section end -->


    <!-- FAQ section  start-->

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
 <script src="{{ asset('assets/css/accordian_bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
  $(".carasual-arrow-icon-txt1").click(function(){
    $(".carasual-arrow-icon-txt1").hide();
    $(".carasual-arrow-icon-txt2").show();
  });
  $(".carasual-arrow-icon-txt2").click(function(){
    $(".carasual-arrow-icon-txt2").hide();
    $(".carasual-arrow-icon-txt1").show();
  });
});
</script>
    <!-- FAQ section end -->

    @include('template.country_language')
    @include('template.web_footer')
</body>

</html>

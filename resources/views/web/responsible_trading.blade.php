<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | Create Entity Account</title>
    @include('template.web_css')
    <link rel='stylesheet' href="{{('../css/deepak_custom.css') }}">
</head>

<body class="bg-white">
    @include('template.web_menu')

    <section class="res-trading-banner-section bg-light-blue">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h3 class="top-trading-heading">Responsible Trading with Wealth Mark</h3>
                    <div class="text">Wealth Mark encourages our users to trade responsibly. Trading can be engaging and
                        fun, but trading is a serious business and it can lead to financial and emotional distress.
                        Trading derivatives carries risk, and furthermore, cryptocurrencies and other digital assets
                        often have high levels of price volatility.</div>
                    <div class="trading-btn-row">
                        <a href="#" class="btn btn-yellow shadow"> Sign up</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  order-1 order-lg-2 hero-img text-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('img/responsible-trading/responsible-trading.png') }}"  class="max-width-350px" alt="responsible image">
                </div>
            </div>
        </div>
    </section>

    <section class="res-trading-second-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text mb-5">Responsible trading is about exercising control over your trades and taking
                        accountability for your actions. Trading responsibly also means acknowledging when you may not
                        be suited for trading. Responsible traders do not go beyond their means. In other words, you
                        should never risk funds you cannot afford to lose.
                        At Wealth Mark, we have established several features and guidelines to help users trade
                        responsibly and make informed trading decisions. Here are some tips and good practices that will
                        help you be a more responsible trader:</div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-2">
                    <div class="card">
                        <img src="{{ asset('img/responsible-trading/wm-accountability.svg') }}" class="img-fluid"
                            alt="gift Card Image" />
                        <div class="card-body">
                            <h5 class="card-title">Wealth Mark Accountability </h5>
                            <p class="text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <div class="read-more-block">
                                <a href="#" class="btn btn-blue shadow"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-2">
                    <div class="card">
                        <img src="{{ asset('img/responsible-trading/practicing-self-discipline.svg') }}" class="img-fluid"
                            alt="gift Card Image" />
                        <div class="card-body">
                            <h5 class="card-title">Practicing Self-Discipline</h5>
                            <p class="text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <div class="read-more-block">
                                <a href="#" class="btn btn-blue shadow"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-2">
                    <div class="card">
                        <img src="{{ asset('img/responsible-trading/continuously-educating.svg') }}" class="img-fluid"
                            alt="gift Card Image" />
                        <div class="card-body">
                            <h5 class="card-title">Continuously Educating</h5>
                            <p class="text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <div class="read-more-block">
                                <a href="#" class="btn btn-blue shadow"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-2">
                    <div class="card">
                        <img src="{{ asset('img/responsible-trading/protecting-your-capital.svg') }}" class="img-fluid"
                            alt="gift Card Image" />
                        <div class="card-body">
                            <h5 class="card-title">Protecting Your Capital</h5>
                            <p class="text mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <div class="read-more-block">
                                <a href="#" class="btn btn-blue shadow"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="responsible-trading-about" id="responsible-trading-about-section">
        <div class="container">
            <div class="row mb-3  bg-secondary">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ asset('img/anti-addiction-dark.png') }}" class="img-fluid"
                        alt="responsible image">
                </div>
                <div class="content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Know About</span>
                            <h2 class="heading-h2">Anti-Addiction Notice</h2>
                        </div>
                        <div class="text">Wealth Markhas established several procedures to remind traders of impulsive
                            trading behavior. For instance, when a trader experiences a losing streak or suffers a heavy
                            loss, we continuously remind them of the risk involved in derivatives trading and encourage
                            them to hold back on trading activities.</div>
                        <div class="text">Our system-generated notifications constantly remind users of the dangers of
                            compulsive trading and the risk involved when trading more complicated products like
                            derivatives.</div>
                        <div class="trading-avalibility">
                            <p>Available in: &nbsp;</p>
                            <a class="badge bg-warning">&#10607; Options </a>
                        </div>
                    </div>

                </div>

            </div>
        
            <div class="row mb-3">
                <div class="content-column col-lg-6 col-md-6 col-sm-12 order-2 order-lg-1">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Know About</span>
                            <h2 class="heading-h2">Cooling-Off Period Function</h2>
                        </div>
                        <div class="text">When traders face a losing streak, it may be challenging to turn the tide and
                            stop the bleeding. In these situations, traders must know when to stop and avoid compulsive
                            trading behaviors. Sometimes, the best trade is no trade at all.</div>
                        <div class="text">To encourage self-discipline and responsible trading, Wealth Mark launched the
                            Cooling-off Period function for users to temporarily disable derivative trading activities
                            and abstain from compulsive trading behavior.</div>
                    </div>

                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-6 col-sm-12 order-1 order-lg-2">
                    <img src="{{ asset('img/demo-5-dark.png') }}" class="img-fluid"
                        alt="responsible image">
                </div>

               

                <!-- Image Column -->


            </div>
          
          <div class="row mb-3 bg-secondary">
               <div class="image-column col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ asset('img/margin-b-dark.png') }}" class="img-fluid"
                        alt="responsible image">
                </div>

                <div class="content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="text">The Cooling-off Period function is also available on margin trading. Margin
                            traders can temporarily suspend margin-trading-related activities including isolated or
                            cross margin trading, and the borrowing of cryptocurrencies for a specific period.</div>
                        <div class="text">This feature allows you to limit and control your trading activities,
                            especially in situations when you feel pressured by losses. It also enables you to abstain
                            from behavior and activities that can lead to irresponsible trades.</div>
                        <div class="trading-avalibility">
                            <p>Available in: &nbsp;</p>
                            <a class="badge bg-warning">&#10607; Options </a>
                        </div>
                    </div>

                </div>
          </div>
            <div class="row mb-3 ">
                <div class="content-column col-lg-6 col-md-6 col-sm-12 order-2 order-lg-1">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Know About</span>
                            <h2 class="heading-h2">Price protection</h2>
                        </div>
                        <div class="text">Users also have access to advanced risk control features such as price
                            protection, which protects users from potential market manipulation. When enabled, this
                            feature prevents bad actors from exploiting market efficiencies to trigger stop-losses or
                            take-profit orders of other users to their disadvantage. Therefore, Wealth Mark strongly
                            recommends the Price Protection feature to safeguard your positions especially when the
                            market is extremely volatile. Find more about how to enable the Price Protection feature on
                            our </div>
                        <div class="trading-avalibility">
                            <p>Available in: &nbsp;</p>
                            <a class="badge bg-warning">&#10607; Options </a>
                        </div>
                    </div>

                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-6 col-sm-12 order-1 order-lg-2">
                    <img src="{{ asset('img/price-protection-a-dark.png') }}" class="img-fluid"
                        alt="responsible image">
                </div>

            </div>
          
            <div class="row mb-3 bg-secondary">
                <div class="image-column col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ asset('img/insurance-funds-dark.png') }}" class="img-fluid"
                        alt="responsible image">
                </div>

                <div class="content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Know About</span>
                            <h2 class="heading-h2">Insurance Funds</h2>
                        </div>
                        <div class="text">Users also have access to advanced risk control features such as price
                            protection, which protects users from potential market manipulation. When enabled, this
                            feature prevents bad actors from exploiting market efficiencies to trigger stop-losses or
                            take-profit orders of other users to their disadvantage. Therefore, Wealth Mark strongly
                            recommends the Price Protection feature to safeguard your positions especially when the
                            market is extremely volatile. Find more about how to enable the Price Protection feature on
                            our </div>
                        <div class="trading-avalibility">
                            <p>Available in: &nbsp;</p>
                            <a class="badge bg-warning">&#10607; Options </a>
                        </div>
                    </div>

                </div>

                <!-- Image Column -->


            </div>
        
            <div class="row mb-3">
                <div class="content-column col-lg-6 col-md-6 col-sm-12 order-2 order-lg-1">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Know About</span>
                            <h2 class="heading-h2">Price protection</h2>
                        </div>
                        <div class="text">Users also have access to advanced risk control features such as price
                            protection, which protects users from potential market manipulation. When enabled, this
                            feature prevents bad actors from exploiting market efficiencies to trigger stop-losses or
                            take-profit orders of other users to their disadvantage. Therefore, Wealth Mark strongly
                            recommends the Price Protection feature to safeguard your positions especially when the
                            market is extremely volatile. Find more about how to enable the Price Protection feature on
                            our </div>
                        <div class="trading-avalibility">
                            <p>Available in: &nbsp;</p>
                            <a class="badge bg-warning">&#10607; Options </a>
                        </div>
                    </div>

                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-6 col-sm-12 order-1 order-lg-2">
                    <img src="{{ asset('img/price-protection-a-dark.png') }}" class="img-fluid"
                        alt="responsible image">
                </div>

            </div>
        
            <div class="row mb-3 bg-secondary">
                <div class="image-column col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ asset('img/insurance-funds-dark.png') }}" class="img-fluid"
                        alt="responsible image">
                </div>


                <div class="content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Know About</span>
                            <h2 class="heading-h2">Insurance Funds</h2>
                        </div>
                        <div class="text">Users also have access to advanced risk control features such as price
                            protection, which protects users from potential market manipulation. When enabled, this
                            feature prevents bad actors from exploiting market efficiencies to trigger stop-losses or
                            take-profit orders of other users to their disadvantage. Therefore, Wealth Mark strongly
                            recommends the Price Protection feature to safeguard your positions especially when the
                            market is extremely volatile. Find more about how to enable the Price Protection feature on
                            our </div>
                        <div class="trading-avalibility">
                            <p>Available in: &nbsp;</p>
                            <a class="badge bg-warning">&#10607; Options </a>
                        </div>
                    </div>

                </div>

                <!-- Image Column -->

            </div>
      
            <div class="row mb-3">
                <div class="content-column col-lg-6 col-md-6 col-sm-12 order-2 order-lg-1">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Know About</span>
                            <h2 class="heading-h2">Price protection</h2>
                        </div>
                        <div class="text">Users also have access to advanced risk control features such as price
                            protection, which protects users from potential market manipulation. When enabled, this
                            feature prevents bad actors from exploiting market efficiencies to trigger stop-losses or
                            take-profit orders of other users to their disadvantage. Therefore, Wealth Mark strongly
                            recommends the Price Protection feature to safeguard your positions especially when the
                            market is extremely volatile. Find more about how to enable the Price Protection feature on
                            our </div>
                        <div class="trading-avalibility">
                            <p>Available in: &nbsp;</p>
                            <a class="badge bg-warning">&#10607; Options </a>
                        </div>
                    </div>

                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-6 col-sm-12 order-1 order-lg-2">
                    <img src="{{ asset('img/price-protection-a-dark.png') }}" class="img-fluid"
                        alt="responsible image">
                </div>

            </div>
        
            <div class="row mb-3 bg-secondary">
                <div class="image-column col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ asset('img/quiz-b-dark.png') }}" class="img-fluid"
                        alt="responsible image">
                </div>
                <div class="content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Know About</span>
                            <h2 class="heading-h2">Client-Knowledge Assessments</h2>
                        </div>
                        <div class="text">In addition to our wide-ranging educational content, Wealth Mark has also
                            established a Customer Knowledge Assessment criteria for new users wanting to trade complex
                            products such as futures or margin.
                            The purpose of the Customer Knowledge Assessment (CKA) is to ascertain a potential user’s
                            knowledge and experience to understand the risks and features of complex crypto products
                            such as crypto-derivatives prior to any trades made on the Wealth Mark Futures platform.
                        </div>
                        <div class="trading-avalibility">
                            <p>Available in: &nbsp;</p>
                            <a class="badge bg-warning">&#10607; Options </a>
                        </div>
                    </div>

                </div>

                <!-- Image Column -->


            </div>
       
        </div>
    </section>

    <section class="res-trad-about-section">
        <div class="container">
            <div class="row">
                <div class="image-column col-lg-4 col-md-6 col-sm-12 order-2 order-lg-1">

                    <img src="{{ asset('img/responsible-trading-light.svg') }}" class="img-fluid"
                        alt="responsible image">
                </div>
                <div class="content-column col-lg-8 col-md-6 col-sm-12 order-2 order-1 order-lg-2">
                    <div class="inner-column">

                        <h3>You may not be suited for trading if you are: </h3>
                        <ul class="res-trading-listing">
                            <li>Finding it difficult to stop or reduce your trading activities </li>
                            <li>Feeling stressed or irritated when a friend or family member suggests you stop or reduce
                                your trading activities </li>
                            <li>Having negative thoughts when the market moves against your trades </li>
                            <li>Not taking responsibility to understand your own financial situation </li>
                            <li>Not taking the time to read and familiarise yourself with our products and services and
                                terms of use </li>
                            <li>Trading with funds beyond your means </li>
                        </ul><br />
                        <div class="text">If you have questions or are concerned about your ability to trade
                            responsibly, please
                            contact us at Wealtjh Markres-trad- Support. </div>
                    </div>
                </div>


                <!-- Image Column -->

            </div>
        </div>
    </section>
    <section class="responsible-tradinge-cta-section" id="responsible-trading">
        <div class="container">
            <div class="row">
                <h4 class="text-center">Wealth Mark Takes Responsible Trading Seriously, and
                    You Should Too.</h4>
            </div>
            <div class="row digital-assets-row">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a class="btn btn-blue ">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="competitive-fees" id="trading-start-crypto">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Start Trading Crypto Futures Now</h2>
            </div>
            <div class="row digital-assets-row">
                <div class="col-md-12 d-flex">
                    <a class="btn btn-yellow shadow ">Register Now </a>
                    <a class="btn btn-blue shadow">Trade Now</a>
                </div>
            </div>
        </div>
    </section>
    @include('template.country_language')
    @include('template.web_footer')



</body>

</html>
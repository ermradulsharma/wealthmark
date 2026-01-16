<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Wealth Mark | {{ Request::segment(2) }}</title>
    @include('template.web_css')

    <style>

.labs-top{
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1920' height='440' preserveAspectRatio='none' viewBox='0 0 1920 440'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1024%26quot%3b)' fill='none'%3e%3crect width='1920' height='440' x='0' y='0' fill='rgba(38%2c 54%2c 116%2c 1)'%3e%3c/rect%3e%3cpath d='M13.678424461310673-55.17740474728663L-48.29182182642691 61.37167751009174 68.25726043095146 123.34192379782934 130.22750671868906 6.792841540450951z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M79.47056518836972 141.45457691033894L135.25617573814202 21.821949021501126 15.623547849304202-33.96366152827116-40.1620627004681 85.66896636056664z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M62.00887791544939 146.13342191360277L137.72096751378746 38.00535206745583 29.5928976676405-37.70673753088221-46.11919193069755 70.42133231526472z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1826.9304222003502-10.497287201675576L1860.7583750380438 136.66740756099006 1958.85349200106 48.34216752162078z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1738.07 35.27 a129.2 129.2 0 1 0 258.4 0 a129.2 129.2 0 1 0 -258.4 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1772.3068008081723 42.1900284754921L1864.00170570876 137.142882120194 1958.954559353462 45.447977219606315 1867.2596544528742-49.50487642509559z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M42.1900284754921 499.69319919182755L137.142882120194 407.99829429123986 45.447977219606315 313.04544064653794-49.50487642509559 404.7403455471256z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M-53.454576910338965 431.47056518836973L66.17805097849882 487.2561757381421 121.96366152827116 367.6235478493043 2.331033639433386 311.837937299532z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M-39.90233907992702 456.9586175406932L90.47252187863116 477.60796692600366 111.1218712639416 347.23310596744545-19.25298969461657 326.58375658213504z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1978.6997057679514 381.5664976276821L1873.2798184417088 302.12691457161174 1899.260122711881 486.98638495392476z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1794.2761970299255 459.84963260398615L1925.29228904658 475.93638593346566 1941.3790423760595 344.92029391681115 1810.362950359405 328.83354058733164z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1782.55 342.79 a40.24 40.24 0 1 0 80.48 0 a40.24 40.24 0 1 0 -80.48 0z' fill='rgba(28%2c 83%2c 142%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1024'%3e%3crect width='1920' height='440' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
}
.labs-abt{
  display: flex;
  justify-content: center;
  align-items: center;
 overflow:hidden;
 padding:60px 0;
}

.labs-abt .hero {
  display: grid;
  grid-template-columns: 4fr 1fr 4fr;
  grid-template-rows: 1fr 6fr 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  max-width: 1000px;
  width: 90%;
  margin: 0 auto;
}

/* LEFT PART */
.left {
  grid-area: 1 / 1 / 3 / 3;
  border: 10px solid #263674;
  padding: 30px;
  background-color: #FFFFFF;
  position: relative;
}
.left h1{
  text-transform: uppercase;
  font-size: clamp(20px, 5vw ,40px);
  font-weight: 700;
  white-space: nowrap;
}
.left h1 span{
  color: #F1C50E;
}
.left p{
  margin-top: 25px;
  margin-bottom: 50px;
  font-size: 16px;
}
.left a{
  padding: 10px;
  text-transform: uppercase;
  text-decoration: none;
  border: 2px solid #F1C50E;
  color: #000;
  font-weight: 700;
  display:inline-block;
  margin-top:15px;
}
.left a:hover{
  color: #FFFFFF;
  background-color: #F1C50E;
}


/* RIGHT PART */
.right {
  grid-area: 2 / 2 / 4 / 4;
  border: 10px solid #263674;
  z-index: -1;
  position: relative;
}

.right img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  max-width:650px;
}

/* LEFT AND RIGHT BANDS */
.left::before,
.right::before{
  content: '';
  position: absolute;
  top: 50%;
  height: 50%;
  width: 50vw;
  background: #fdc116;
}
.left::before{
  left: 0;
  transform: translateY(-50%) translateX(-100%);
}
.right::before{
  right: 0;
  transform: translateY(-50%) translateX(100%);
}

@media screen and (max-width: 768px){
 .labs-abt .hero{
     display:block;
 }
}


.transition {
  transition: .3s cubic-bezier(.3, 0, 0, 1.3)
}

.five .transition {
  transition: .5s cubic-bezier(.3, 0, 0, 1.3)
}



.five > li {
  background: #FFFFFF;
  border: 1px solid rgba(150,150,150,0.29);
  -moz-box-shadow: 0px 0px 18px 0px rgba(103,85,85,0.39);
  box-shadow: 0px 0px 18px 0px rgba(103,85,85,0.39);
  width: 250px;
  height: 350px;
  display: inline-block;
  margin: 0 20px;
  text-align: center;
}

/*.five > li:hover img {*/
/*  margin-top: 30px;*/
/*}*/


.five > li img.more-about {
  left: 103px;
  padding: 1px;
  position: absolute;
  width: 45px;
  z-index: 1;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  bottom: 50px;
}
.five > li:hover {
  -moz-box-shadow: 0px 0px 5px 0px rgba(103,85,85,0.25);
  box-shadow: 0px 0px 5px 0px rgba(103,85,85,0.25);
}
.five > li:hover span {
  border-radius: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  top: -300px;
  background: #263674;
}
.five > li:hover span p {
  color: white;
  font-size: 14px;
}
.five > li span .text-wrapper {
  opacity: 0;
}
.five > li:hover span .text-wrapper {
  bottom: 20px;
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  width: 200px;
  opacity: 1;
}
.five > li:hover .social {
  margin-top: 250px;
  display:block;
}
.five > li:hover .wrapper > img {
  display: none;
}
.five > li:hover h3 {
  color: #263674;
  margin-top: -105px;
}
.five > li .wrapper {
  overflow: hidden;
  position: absolute;
  width: 250px;
  height: 350px;
}
.five > li span {
  display: block;
  height: 500px;
  left: -125px;
  position: absolute;
  top: -490px;
  width: 500px;
  background: #263674;
}
.five .mamber-img {
  width: 100px;
}
.five > li h3 em {
  display: block;
  font-style: normal;
  text-transform: uppercase;
  font-weight: 300;
  font-size: 12px;
 margin-top: 5px ;
 color: #263674;
}
.five .social {
  list-style: none;
  text-align: center;
  margin: 10px 0 0 0;
  padding: 10px;
  display:none;
}
.five .social li {
  opacity: 0;
  display: inline-block;
  padding: 5px;
}
.five > li:hover .social li {
  opacity: 0.5;
}
.five .social li a {
  cursor: pointer;
  display: block;
}
.five .social li a:hover {
  opacity: 0.5;
}
.five .social li img {
  width: 24px;
}
.five > li:hover .social li a {
  -webkit-animation: social-show 0.5s 1;
  -moz-animation: social-show 0.5s 1;
  -o-animation: social-show 0.5s 1;
  animation: social-show 0.5s 1;
  -webkit-animation-delay: 0s;
  -moz-animation-delay: 0s;
  -o-animation-delay: 0s;
  animation-delay: 0s;
}
.five .social li img {
  width: 24px;
}
 @-webkit-keyframes social-show {
 from {
margin-top: 140px;
}
to {
  margin-top: 0px;
}
}
 @-moz-keyframes social-show {
 from {
margin-top: 140px;
}
to {
  margin-top: 0px;
}
}
 @-o-keyframes social-show {
 from {
margin-top: 140px;
}
to {
  margin-top: 0px;
}
}
 @keyframes social-show {
 from {
margin-top: 140px;
}
to {
  margin-top: 0px;
}
}


.labs-team-profile{
    margin: auto;
    margin-bottom: 20px;
    width: 120px;
    height: 120px;
    border-radius: 50%;
}


.labs-team{
    background: white;
    padding: 20px 10px;
    max-width: 200px;
    margin: auto;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
    cursor:pointer;
}
.content-box > h3{
    /*font-size:14px;*/
    margin-bottom:5px;
    text-align:center;
}
.content-box > div{
    text-align:center;
    font-size:14px;
}

  </style>
</head>

<body>
    @include('template.web_menu')







   <section class="breadcrumbs-box shadow-sm labs-top">
         <div class="container">
            <div class="row align-items-center justify-content-center">

               <div class="col-lg-8 text-center">
                  <h1 class="display-4 yellow-text mb-3"> Wealth Mark Institutional</h1>
                  <h3 class="fs-5 text-white mb-3">Your Trusted Platform in Digital Institutions</h3>

                  <div class="mt-4 mb-4">
                     <a href="#" class="btn-yellow w-auto shadow">Get Started</a>
                  </div>
               </div>
            </div>
         </div>
      </section>

    <div class="labs-abt">
        <div class="hero">
            <div class="left">
                <h3 class="mb-3">About Wealthmark Labs</h3>
                <div class="fs-14 text-muted mb-2 text-justify">Wealthmark Labs identifies, invests, and empowers viable blockchain entrepreneurs, startups, and communities, providing financing to industry projects that help grow the wider blockchain ecosystem.</div>
                <div class="fs-14 text-muted mb-2 text-justify">Wealthmark Labs is committed to supporting fast-executing, technical teams who positively impact the crypto space and build the decentralised web.</div>
                <div class="fs-14 text-muted mb-2 text-justify">Wealthmark Labs is committed to supporting fast-executing, technical teams who positively impact the crypto space and build the decentralised web.</div>
                <a href="#">Learn more</a>
            </div>
            <div class="right">
              <img src="{{ asset('img/lab/wm-photo.jpg') }}" alt="">
            </div>
        </div>
    </div>




<section class="bg-light-blue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="sec-title">
                            <span class="title">Know About</span>
                            <h3 class="heading-h2">Meet the Team</h3>
                    </div>
            </div>
        </div>






<!--<ul class="five">-->

<!--  <li class="transition">-->
<!--    <div class="wrapper"> -->
    <!--<img class="more-about" src="http://dooreight.com/codepen/people/more_blue.svg">-->

<!--      <ul class="social">-->
<!--        <li class="transition">-->
<!--            <a href="#">-->
<!--               <i class="bi bi-whatsapp"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="transition">-->
<!--            <a href="#">-->
<!--               <i class="bi bi-facebook"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="transition">-->
<!--            <a href="#">-->
<!--                <i class="bi bi-twitter"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="transition">-->
<!--            <a href="#">-->
<!--                <i class="bi bi-telegram"></i>-->
<!--            </a>-->
<!--        </li>-->
<!--      </ul>-->
<!--      <img src="{{ asset('img/team-dummy.jpg') }}" class="labs-team-profile" alt="">-->
<!--      <h3 class="transition title">Name here</h3>-->
<!--      <div class="transition sub-title">Designation</div>-->
<!--      <span class="transition">-->
<!--      <div class="text-wrapper transition">-->
<!--        <p> Young artist from Barcelona. She hates Comic Sans. It was popularised in the 1960s with the release Letraset sheets containing. Various versions have evolved over the years.</p>-->
<!--      </div>-->
<!--      </span> </div>-->
<!--  </li>-->

<!--</ul>-->

    </div>
       <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="labs-team">
                            <div class="img-box">
                                <img src="{{ asset('img/team-dummy.jpg') }}" class="labs-team-profile">
                            </div>
                            <div class="content-box">
                                <h3>Name Here</h3>
                                <div>Subtitle here</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>















    @include('template.country_language')
    @include('template.web_footer')






</body>

</html>

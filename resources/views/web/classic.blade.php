  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Create Entity Account</title>
  @include('template.web_css')
      <style>
  .classic_services{
      background:url('{{ asset('img/assets/img/classic/classic-cover.png') }}');
  }
</style>

   </head>

 <body class="bg-white">
        @include('template.web_menu')


  <div class="classic_services pt-5 pb-5">
     <div class="container">
         <div class="row align-items-center justify-content-center">
             <div class="col-md-6 col-sm-6 col-xs-12 text-center order-sm-2">
                      <!--<svg viewBox="0 0 550 506" fill="none"  role="img" class="classic-svh-top mb-5" alt="wealthmark classic">-->
                      <!--    <g clip-path="url(#home-banner_svg__a)">-->
                      <!--      <g opacity="0.5">-->
                      <!--        <path d="m302.703 90.665-29.54 17.014-29.652-17.014 29.652-17.013 29.54 17.013Z" fill="#FCEA9C"></path>-->
                      <!--        <path d="M302.703 90.665V174.7l-29.54 17.013v-84.033l29.54-17.014Z" fill="#F8D33A"></path>-->
                      <!--        <path d="M273.163 107.679v83.719l-29.652-17.014V90.666l29.652 17.013Z" fill="url(#home-banner_svg__b)"></path>-->
                      <!--      </g>-->
                      <!--      <path d="m359.142 241.142-74.711 40.534-38.105-21.843 74.899-40.535 37.917 21.844Z" fill="#FAFAFA"></path>-->
                      <!--      <path d="M359.143 241.142v46.301l-74.712 40.535v-46.302l74.712-40.534Z" fill="#E6E8EA"></path>-->
                      <!--      <path d="M284.368 281.676v45.785l-38.105-21.844v-45.784l38.105 21.843Z" fill="#AEB4BC"></path>-->
                      <!--      <g opacity="0.5">-->
                      <!--        <path d="m492.319 151.18-13.39 8.352-88.325-56.201 13.537-8.352 88.178 56.201Z" fill="#FCEA9C"></path>-->
                      <!--        <path d="M492.319 151.18v103.945l-13.391 8.352V159.532l13.391-8.352Z" fill="#F8D33A"></path>-->
                      <!--        <path d="M478.929 159.532v103.556l-88.325-56.201V103.331l88.325 56.201Z" fill="url(#home-banner_svg__c)"></path>-->
                      <!--      </g>-->
                      <!--      <g opacity="0.9">-->
                      <!--        <path d="m443.91 156.832-38.726 22.396-109.008-61.616 38.963-22.396 108.771 61.616Z" fill="#E6E8EA"></path>-->
                      <!--        <path d="M443.908 156.832v92.079l-38.726 22.396v-92.072l38.726-22.396v-.007Z" fill="#AEB4BC"></path>-->
                      <!--        <path d="M405.107 179.235v91.401l-109.008-61.617v-91.407l109.008 61.616v.007Z" fill="#CACED3"></path>-->
                      <!--      </g>-->
                      <!--      <path d="m314.644 146.508-61.814 35.614-62.114-35.614 62.114-35.614 61.814 35.614Z" fill="#F5F5F5"></path>-->
                      <!--      <path d="M314.644 146.508v75.478l-61.814 35.613v-75.477l61.814-35.614Z" fill="#E6E8EA"></path>-->
                      <!--      <path d="M252.733 182.115v74.625l-62.114-35.614v-74.618l62.114 35.614v-.007Z" fill="#CACED3"></path>-->
                      <!--      <path d="m449.077 253.427-24.281 13.987-24.399-13.987 24.399-13.987 24.281 13.987Z" fill="#FAFAFA"></path>-->
                      <!--      <path d="M449.077 253.427v29.651l-24.281 13.987v-29.651l24.281-13.987Z" fill="#E6E8EA"></path>-->
                      <!--      <path d="M424.762 267.414v29.315l-24.4-13.986v-29.316l24.4 13.987Z" fill="#CACED3"></path>-->
                      <!--      <path d="m416.782 256.111-48.122 27.722-48.352-27.722 48.352-27.722 48.122 27.722Z" fill="#E6E8EA"></path>-->
                      <!--      <path d="M416.782 256.111v78.853l-48.122 27.723v-78.854l48.122-27.722Z" fill="#929AA5"></path>-->
                      <!--      <path d="M368.583 283.833v78.189L320.231 334.3v-78.189l48.352 27.722Z" fill="#CACED3"></path>-->
                      <!--      <path d="m387.5 373.671-37.917 21.844-38.105-21.844 38.105-21.843 37.917 21.843Z" fill="#E6E8EA"></path>-->
                      <!--      <path d="M387.5 373.672v46.301l-37.917 21.844v-46.302l37.917-21.843Z" fill="#AEB4BC"></path>-->
                      <!--      <path d="M349.513 395.515v45.784l-38.105-21.843v-45.784l38.105 21.843Z" fill="#CACED3"></path>-->
                      <!--      <path d="m356.188 181.898-23.597 13.596-23.694-13.596 23.694-13.595 23.597 13.595Z" fill="#F8D33A"></path>-->
                      <!--      <path d="M356.188 181.898v28.967l-23.597 13.595v-28.966l23.597-13.596Z" fill="url(#home-banner_svg__d)"></path>-->
                      <!--      <path d="M332.591 195.494v28.715l-23.694-13.596v-28.715l23.694 13.596Z" fill="#FCEA9C"></path>-->
                      <!--      <path d="m387.5 235.141-50.779 30.812-23.695-13.596 50.87-30.812 23.597 13.596h.007Z" fill="url(#home-banner_svg__e)"></path>-->
                      <!--      <path d="M387.5 235.141v28.966l-50.779 30.812v-28.966l50.779-30.812Z" fill="#F8D33A"></path>-->
                      <!--      <path d="M336.728 265.953v28.714l-23.695-13.595v-28.715l23.695 13.596Z" fill="#FCEA9C"></path>-->
                      <!--      <path d="m386.321 200.848-23.597 13.596-23.694-13.596 23.694-13.595 23.597 13.595Z" fill="#F8D33A"></path>-->
                      <!--      <path d="M386.321 200.848v28.967l-23.597 13.595v-28.966l23.597-13.596Z" fill="url(#home-banner_svg__f)"></path>-->
                      <!--      <path d="M362.724 214.444v28.714l-23.694-13.595v-28.715l23.694 13.596Z" fill="#FCEA9C"></path>-->
                      <!--      <path d="m238.416 234.599-21.651 12.47-21.735-12.47 21.735-12.47 21.651 12.47Z" fill="#F8D33A"></path>-->
                      <!--      <path d="M238.416 234.599v26.569l-21.651 12.47v-26.569l21.651-12.47Z" fill="url(#home-banner_svg__g)"></path>-->
                      <!--      <path d="M216.765 247.069v26.338l-21.735-12.47v-26.338l21.735 12.47Z" fill="#FCEA9C"></path>-->
                      <!--      <path d="m326.648 200.254-23.597 13.595-23.694-13.595 23.694-13.595 23.597 13.595Z" fill="#F8D33A"></path>-->
                      <!--      <path d="M326.649 200.254v28.966l-23.597 13.596v-28.967l23.597-13.595Z" fill="url(#home-banner_svg__h)"></path>-->
                      <!--      <path d="M303.045 213.849v28.715l-23.695-13.595v-28.715l23.695 13.595Z" fill="#FCEA9C"></path>-->
                      <!--      <path d="m347.623 214.297-14.885 8.576-14.962-8.576 14.962-8.577 14.885 8.577Z" fill="#E6E8EA"></path>-->
                      <!--      <path d="M347.623 214.297v18.181l-14.885 8.576v-18.181l14.885-8.576Z" fill="#929AA5"></path>-->
                      <!--      <path d="M332.71 222.88v17.972l-14.962-8.577v-17.971l14.962 8.576Z" fill="#CACED3"></path>-->
                      <!--      <g opacity="0.5">-->
                      <!--        <path d="m161.804 155.434-9.374 5.844-61.828-39.339 9.472-5.844 61.73 39.339Z" fill="#FCEA9C"></path>-->
                      <!--        <path d="M161.804 155.434v48.427l-9.374 5.843v-48.419l9.374-5.844v-.007Z" fill="#F8D33A"></path>-->
                      <!--        <path d="M152.43 161.285v48.154l-61.828-39.34v-48.16l61.828 39.339v.007Z" fill="url(#home-banner_svg__i)"></path>-->
                      <!--      </g>-->
                      <!--      <g opacity="0.5">-->
                      <!--        <path d="m534.848 297.834-6.48 4.04-42.744-27.198 6.549-4.04 42.675 27.198Z" fill="#FCEA9C"></path>-->
                      <!--        <path d="M534.848 297.834v33.481l-6.48 4.041v-33.482l6.48-4.04Z" fill="#F8D33A"></path>-->
                      <!--        <path d="M528.368 301.874v33.293l-42.744-27.198v-33.293l42.744 27.198Z" fill="url(#home-banner_svg__j)"></path>-->
                      <!--      </g>-->
                      <!--      <path d="m491.957 324.841-3.409 6.711-4.107-6.308 7.516-.403Zm-18.685 12.167.355.547-.351.229-.355-.226.351-.55Zm-33.92-21.594-.301-.579.334-.173.317.202-.35.55Zm-12.801 5.921 1.042-.541.601 1.156-1.042.542-.601-1.157Zm3.125-1.625 2.083-1.083.602 1.157-2.084 1.083-.601-1.157Zm4.167-2.166 2.083-1.084.601 1.157-2.083 1.083-.601-1.156Zm4.166-2.167 1.042-.542.601 1.157-1.041.542-.602-1.157Zm1.693-.513 1.06.675-.7 1.099-1.06-.674.7-1.1Zm3.18 2.024 2.12 1.35-.7 1.1-2.12-1.35.7-1.1Zm4.24 2.7 2.12 1.349-.7 1.1-2.12-1.35.7-1.099Zm4.24 2.699 2.12 1.35-.7 1.099-2.12-1.349.7-1.1Zm4.24 2.699 2.12 1.35-.7 1.1-2.12-1.35.7-1.1Zm4.24 2.7 2.12 1.349-.7 1.1-2.12-1.35.7-1.099Zm4.24 2.699 2.12 1.35-.7 1.099-2.12-1.349.7-1.1Zm4.24 2.699 2.12 1.35-.701 1.1-2.119-1.35.7-1.1Zm4.24 2.7 1.06.675-.701 1.099-1.06-.675.701-1.099Zm.354.678 1.168-.76.711 1.092-1.168.761-.711-1.093Zm3.503-2.281 2.336-1.521.711 1.092-2.335 1.521-.712-1.092Zm4.672-3.042 2.335-1.521.712 1.093-2.336 1.52-.711-1.092Zm4.671-3.042 2.336-1.521.711 1.093-2.336 1.521-.711-1.093ZM233.074 352.388l4.073-6.33 3.445 6.692-7.518-.362Zm3.359-2.463 2.439-1.255.596 1.159-2.438 1.255-.597-1.159Zm4.877-2.511 2.438-1.255.597 1.159-2.438 1.255-.597-1.159Zm4.876-2.51 2.439-1.256.596 1.159-2.438 1.256-.597-1.159Zm4.877-2.511 2.438-1.255.597 1.159-2.438 1.255-.597-1.159Zm4.877-2.511 2.438-1.255.597 1.159-2.439 1.255-.596-1.159Zm4.876-2.51 2.438-1.256.597 1.159-2.438 1.256-.597-1.159Zm4.877-2.511 2.438-1.255.597 1.159-2.439 1.255-.596-1.159Zm4.876-2.511 2.439-1.255.596 1.159-2.438 1.255-.597-1.159Zm4.877-2.511 1.219-.627.597 1.159-1.219.627-.597-1.159Z" fill="#AEB4BC"></path>-->
                      <!--      <path opacity="0.5" d="m123.429 110.391 7.527-.047-3.722 6.542-3.805-6.495Zm3.669 1.338 2.231 1.269-.645 1.133-2.231-1.269.645-1.133Zm4.461 2.538 2.231 1.269-.645 1.133-2.23-1.269.644-1.133Zm4.462 2.538 2.231 1.27-.645 1.133-2.231-1.269.645-1.134Zm4.462 2.539 2.23 1.269-.644 1.133-2.231-1.269.645-1.133Zm4.461 2.538 2.231 1.27-.645 1.133-2.231-1.27.645-1.133Zm4.462 2.539 2.23 1.269-.644 1.133-2.231-1.269.645-1.133Zm4.461 2.538 2.231 1.27-.645 1.133-2.23-1.27.644-1.133Zm4.462 2.539 2.231 1.269-.645 1.133-2.231-1.269.645-1.133Zm4.461 2.538 2.231 1.269-.645 1.134-2.23-1.27.644-1.133Zm4.462 2.539 2.231 1.269-.645 1.133-2.231-1.269.645-1.133Zm4.461 2.538 2.231 1.269-.644 1.133-2.231-1.269.644-1.133Zm4.462 2.539 2.231 1.269-.645 1.133-2.231-1.269.645-1.133Zm4.462 2.538 1.115.635-.645 1.133-1.115-.635.645-1.133Z" fill="#76808F"></path>-->
                      <!--      <path d="m339.03 446.318-7.525-.192 3.929-6.42 3.596 6.612Zm-76.643-46.897-.34.556-.966-.591.996-.538.31.573Zm26.111-13.366-1.075.581-.62-1.147 1.075-.581.62 1.147Zm-3.226 1.743-2.15 1.161-.619-1.147 2.15-1.161.619 1.147Zm-4.3 2.323-2.15 1.162-.619-1.147 2.15-1.162.619 1.147Zm-4.3 2.323-2.15 1.162-.619-1.147 2.15-1.162.619 1.147Zm-4.3 2.324-2.15 1.161-.619-1.147 2.15-1.161.619 1.147Zm-4.3 2.323-2.15 1.161-.62-1.146 2.151-1.162.619 1.147Zm-4.3 2.323-1.075.581-.62-1.147 1.075-.581.62 1.147Zm-1.045-.549 1.128.69-.681 1.112-1.127-.69.68-1.112Zm3.382 2.069 2.254 1.38-.68 1.112-2.255-1.38.681-1.112Zm4.508 2.759 2.254 1.379-.68 1.112-2.254-1.379.68-1.112Zm4.508 2.759 2.255 1.379-.681 1.112-2.254-1.379.68-1.112Zm4.509 2.758 2.254 1.38-.68 1.112-2.255-1.38.681-1.112Zm4.508 2.759 2.254 1.379-.68 1.112-2.254-1.379.68-1.112Zm4.509 2.759 2.254 1.379-.681 1.112-2.254-1.379.681-1.112Zm4.508 2.758 2.254 1.38-.68 1.112-2.254-1.38.68-1.112Zm4.508 2.759 2.255 1.379-.681 1.112-2.254-1.379.68-1.112Zm4.509 2.758 2.254 1.38-.681 1.112-2.254-1.38.681-1.112Zm4.508 2.759 2.254 1.379-.68 1.112-2.254-1.379.68-1.112Zm4.508 2.759 2.255 1.379-.681 1.112-2.254-1.379.68-1.112Zm4.509 2.758 2.254 1.38-.68 1.112-2.255-1.38.681-1.112Zm4.508 2.759 2.254 1.379-.68 1.112-2.254-1.379.68-1.112Zm4.509 2.759 2.254 1.379-.681 1.112-2.254-1.379.681-1.112Zm4.508 2.758 2.254 1.38-.68 1.112-2.254-1.38.68-1.112Zm4.508 2.759 2.255 1.379-.681 1.112-2.254-1.379.68-1.112Z" fill="#AEB4BC"></path>-->
                      <!--    </g>-->
                      <!--    <path d="m227.555 273.983-31.663 19.879L.312 186.868l-.047-.096 34.079-19.607 193.211 106.794v.024Z" fill="#CACED3"></path>-->
                      <!--    <path d="m208.974 457.303-26.522 19.063c18.2-21.005 16.502-64.815 16.502-64.815l-3.061-117.641 31.663-19.879v121.91s1.674 38.918-18.582 61.362Z" fill="#fdc116"></path>-->
                      <!--    <path d="m182.451 476.366-7.222 6.307c-1.029.647-2.033 1.295-3.061 1.894-4.018 1.966-10.332 4.173-12.293 5.156l-55.196 15.946-78.012-93.854S.265 374.504.265 322.757V186.772l.071.096 60.123 32.899 80.093 43.834 55.363 30.285 3.086 117.641s1.698 43.81-16.526 64.815l-.024.024Z" fill="url(#home-banner_svg__k)"></path>-->
                      <!--    <path d="m138.472 447.376-37.069 10.718-52.35-62.993s-21.596-23.379-21.596-71.505c0-34.722.048-81.169.048-81.169l135.145 78.316 2.057 74.167s.693 19.878-5.788 34.841c-5.309 12.301-19.156 16.977-20.471 17.649h.024v-.024Z" fill="url(#home-banner_svg__l)"></path>-->
                      <!--    <g opacity="0.3">-->
                      <!--      <path d="m111.154 23.448-5.412 3.373L70.05 4.111 75.518.738l35.636 22.71Z" fill="#FCEA9C"></path>-->
                      <!--      <path d="M111.154 23.448v27.956l-5.412 3.373V26.825l5.412-3.373v-.004Z" fill="#F8D33A"></path>-->
                      <!--      <path d="M105.742 26.825v27.799L70.05 31.913V4.11l35.692 22.71v.004Z" fill="url(#home-banner_svg__m)"></path>-->
                      <!--    </g>-->
                      <!--    <defs>-->
                      <!--      <linearGradient id="home-banner_svg__b" x1="243.511" y1="141.035" x2="273.163" y2="141.035" gradientUnits="userSpaceOnUse">-->
                      <!--        <stop stop-color="#fdc116"></stop>-->
                      <!--        <stop offset="1" stop-color="#F8D33A"></stop>-->
                      <!--      </linearGradient>-->
                      <!--      <linearGradient id="home-banner_svg__c" x1="485.296" y1="196.495" x2="306.925" y2="149.809" gradientUnits="userSpaceOnUse">-->
                      <!--        <stop stop-color="#fdc116"></stop>-->
                      <!--        <stop offset="1" stop-color="#F8D33A"></stop>-->
                      <!--      </linearGradient>-->
                      <!--      <linearGradient id="home-banner_svg__d" x1="344.386" y1="181.898" x2="344.386" y2="224.46" gradientUnits="userSpaceOnUse">-->
                      <!--        <stop stop-color="#fdc116"></stop>-->
                      <!--        <stop offset="1" stop-color="#F8D33A"></stop>-->
                      <!--      </linearGradient>-->
                      <!--      <linearGradient id="home-banner_svg__e" x1="350.263" y1="221.545" x2="350.263" y2="265.953" gradientUnits="userSpaceOnUse">-->
                      <!--        <stop stop-color="#fdc116"></stop>-->
                      <!--        <stop offset="1" stop-color="#F8D33A"></stop>-->
                      <!--      </linearGradient>-->
                      <!--      <linearGradient id="home-banner_svg__f" x1="374.519" y1="200.848" x2="374.519" y2="243.403" gradientUnits="userSpaceOnUse">-->
                      <!--        <stop stop-color="#fdc116"></stop>-->
                      <!--        <stop offset="1" stop-color="#F8D33A"></stop>-->
                      <!--      </linearGradient>-->
                      <!--      <linearGradient id="home-banner_svg__g" x1="227.59" y1="234.599" x2="227.59" y2="273.645" gradientUnits="userSpaceOnUse">-->
                      <!--        <stop stop-color="#fdc116"></stop>-->
                      <!--        <stop offset="1" stop-color="#F8D33A"></stop>-->
                      <!--      </linearGradient>-->
                      <!--      <linearGradient id="home-banner_svg__h" x1="314.847" y1="200.254" x2="314.847" y2="242.809" gradientUnits="userSpaceOnUse">-->
                      <!--        <stop stop-color="#fdc116"></stop>-->
                      <!--        <stop offset="1" stop-color="#F8D33A"></stop>-->
                      <!--      </linearGradient>-->
                      <!--      <linearGradient id="home-banner_svg__i" x1="154.417" y1="174.335" x2="38.284" y2="143.938" gradientUnits="userSpaceOnUse">-->
                      <!--        <stop stop-color="#fdc116"></stop>-->
                      <!--        <stop offset="1" stop-color="#F8D33A"></stop>-->
                      <!--      </linearGradient>-->
                      <!--      <linearGradient id="home-banner_svg__j" x1="529.742" y1="310.905" x2="449.457" y2="289.886" gradientUnits="userSpaceOnUse">-->
                      <!--        <stop stop-color="#fdc116"></stop>-->
                      <!--        <stop offset="1" stop-color="#F8D33A"></stop>-->
                      <!--      </linearGradient>-->
                      <!--      <linearGradient id="home-banner_svg__k" x1="189.411" y1="283.887" x2="-39.654" y2="398.234" gradientUnits="userSpaceOnUse">-->
                      <!--        <stop offset="0.28" stop-color="#848E9C"></stop>-->
                      <!--        <stop offset="1" stop-color="#E6E8EA"></stop>-->
                      <!--      </linearGradient>-->
                      <!--      <linearGradient id="home-banner_svg__l" x1="164.73" y1="350.261" x2="27.457" y2="350.261" gradientUnits="userSpaceOnUse">-->
                      <!--        <stop stop-color="#fdc116"></stop>-->
                      <!--        <stop offset="1" stop-color="#F8D33A"></stop>-->
                      <!--      </linearGradient>-->
                      <!--      <linearGradient id="home-banner_svg__m" x1="106.889" y1="34.359" x2="39.847" y2="16.811" gradientUnits="userSpaceOnUse">-->
                      <!--        <stop stop-color="#fdc116"></stop>-->
                      <!--        <stop offset="1" stop-color="#F8D33A"></stop>-->
                      <!--      </linearGradient>-->
                      <!--      <clipPath id="home-banner_svg__a">-->
                      <!--        <path fill="#fff" transform="translate(90.602 73.652)" d="M0 0h459.05v384.442H0z"></path>-->
                      <!--      </clipPath>-->
                      <!--    </defs>-->
                      <!--  </svg>-->
                      <img src="{{ asset('img/classic/classic-cover-graphic.png') }}" class="w-100 classic-svh-top mb-5" alt="wealthmark classic" />
                    </div>
                     <div class="col-md-6 col-sm-6 col-xs-12 order-sm-1">
                        <h2 class="heading-h2 text-white mb-0">Wealthmark Best Crypto Currency Partners </h2>
                            <div class="text text-dark">Discover bespoke classic services from Wealthmark Institutional built for sophisticated investors and asset managers, including hedge funds, family offices, liquidity providers, proprietary trading firms, brokers, and more</div>
                      </div>


                </div>
            </div>
      </div>
       <div class="bg-dark-blue p-2 reward-section">
       <div class="container">
           <div class="row aligh-items-center justify-content-center">
               <div class="col-md-6">
                <a href="https://www.wealthmark.io/en/register" class="reward-link">
                     <svg  viewBox="0 0 24 24" fill="none" class="reward-gift-svg">
                          <path d="M13.5 6.379V3h-3v3.379l-2.94-2.94-2.12 2.122L7.878 8H4v3h6.75V8h2.5v3H20V8h-3.879l2.44-2.44-2.122-2.12L13.5 6.378zM4 13.5V20h6.75v-6.5H4zM13.25 20H20v-6.5h-6.75V20z" fill="currentColor"></path>
                    </svg>
                    <div class="reward-text">Register now and get verified - Enjoy Welcome Rewards up to $100!</div>
                    <div class="reward-div-arrow">
                        <svg  viewBox="0 0 24 24" fill="none" class="reward-arrow-svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21 11.999l-7.071-7.071-1.768 1.768 4.055 4.054H2.999v2.5h13.216l-4.054 4.053 1.768 1.768L21 12v-.001z" fill="currentColor"></path>
                        </svg>
                    </div>
                </a>
               </div>
           </div>
       </div>
   </div>


<section class="wm-pay-accordian-section">
    <div class="container">
        <div class="row align-items-center " >
            <div class="col-md-6 col-sm-12 col-xs-12">
            <img src="{{ asset('img/classic/classic-your-asset-management.png') }}" class="w-100" alt="" />

        </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="sec-title">
                        <span class="title">Why Choose Wealthmark Classic Service ??</span>
                        <h1 class="heading-h2 no-before pb-2">Enhance Your Trading Experience</h1>

            </div>
          <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-head" id="headingOne">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
   Integrated and Flexible Account Structure
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="text">  Enhance asset allocation and capital efficiency with a flexible account architecture that follows your lead.</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingTwo">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
 Execution and Order Management
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <div class="text">Execute and manage large orders simultaneously from multiple accounts with robust order management system and API endpoints.</div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-head" id="headingThree">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    Reporting and Account Statement
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text">Download reports on trade history and account balance, and share them with external stakeholders.</div>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-head" id="headingFour">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
  Risk Monitoring and Management
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text">Monitor account risks at a glance, and adjust trading strategies in real-time based on your risk appetite.</div>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-head" id="headingFive">
      <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
  Custom Login and Permission Control
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
  <div class="text">Improve security through permission controls and customize access rights for different sub-accounts and users.</div>
      </div>
    </div>
  </div>


</div>
         </div>
        </div>
    </div>
</section>


 <section id="classic_services" class="bg-light-blue">
     <div class="container">
         <div class="sec-title">
                        <span class="title">Welcome to #Wealthmark</span>
                        <h1 class="heading-h2 no-before pb-2">Introducing Wealthmark Classic services </h1>

                </div>
       <div class="Classic_services_tabs_main">
          <div class="Classic_services_tabs_active" id="Normal_Account" onClick="Showdiv(this.id)">
            <img src="{{ asset('img/classic/classic-normal-sub-account.svg') }}" class="Classic_services_tb_icn" alt="wealthmark classic" />
            <div class="Classic_services_tb_div">
              <div  class="Classic_services_tb_title">Normal Sub-Account</div>
              <div  class="Classic_services_tb_sbtitle">Fund Segregation and Risk Management</div>
            </div>
          </div>
          <div class="Classic_services_tabs" id="Management__Account" onClick="Showdiv(this.id)">

             <img src="{{ asset('img/classic/classic-class-asset-management-sub-account.svg') }}" class="Classic_services_tb_icn" alt="wealthmark classic" />
            <div class="Classic_services_tb_div">
              <div  class="Classic_services_tb_title">Asset Management Sub-Account</div>
              <div  class="Classic_services_tb_sbtitle">Entrust Your Accounts to Professional Asset Managers</div>
            </div>
          </div>
          <div class="Classic_services_tabs" id="Manage__Account" onClick="Showdiv(this.id)">
            <img src="{{ asset('img/classic/classic-managed-sub-account.svg') }}" class="Classic_services_tb_icn">
            <div class="Classic_services_tb_div">
              <div  class="Classic_services_tb_title">Managed Sub-Account</div>
              <div  class="Classic_services_tb_sbtitle">Diversify Portfolio with Multiple Trading Teams</div>
            </div>
          </div>
        </div>
  <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

         <div class="classic_services_divs mt-5 mb-5 open show" id="wm-Normal-Sub-Account">
             <div class="pb-5">
                 <div class="row align-items-center justify-content-between">
                     <div class="col-md-6 col-sm-12 col-xs-12">
                         <img src="{{ asset('img/assets/img/classic/normal-sub-account-graphic.svg') }}" class="img-fluid " alt="" >
                     </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                         <div class="text pt-4">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's............................................................
                         </div>
                         <ul class="Classic_services_ul">
                              <li class="Classic_services_ul_li">dummy text</li>
                              <li class="Classic_services_ul_li">dummy text</li>
                              <li class="Classic_services_ul_li">Family Offices</li>
                              <li class="Classic_services_ul_li">Asset Managers</li>
                              <li class="Classic_services_ul_li">Proprietary Trading Firms</li>
                              <li class="Classic_services_ul_li">More</li>
                        </ul>
                        <div  class="text">Asset Management Sub-Accounts are exclusive to VIP clients. Contact your account manager or email <a  href="#" target="_blank"  class="yellow-text">classic@wealthmark.com</a>.</div>
                            <div class="mt-4 d-flex justify-content-between align-items-center">
                                <a class="btn btn-yellow">
                                    <svg  viewBox="0 0 24 24" fill="none" class="faq-icon">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21a9 9 0 100-18 9 9 0 000 18zM10.75 8.5V6h2.5v2.5h-2.5zm0 9.5v-7h2.5v7h-2.5z" fill="currentColor"></path></svg>
                                    Apply Now
                                </a>

                                <a  href="#" target="_blank" class="btn btn-default">
                                        <svg  viewBox="0 0 24 24" fill="none" class="faq-icon">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>
                                        </svg>
                                    FAQ
                                </a>
                            </div>
                     </div>
                 </div>
             </div>
             <div class="pb-5">
                 <div class="row align-items-center justify-content-between">
                     <div class="col-md-6 col-sm-12 col-xs-12 order-md-2 text-center">
                         <img src="{{ asset('img/assets/img/classic/classic-key-benefits.svg') }}" class="img-fluid  w-75" alt="" >
                     </div>
                      <div class="col-md-6 col-sm-12 col-xs-12 order-md-1">
                         <h3 class="title mb-4">
                             Key Benefits
                         </h3>
                         <ul class="Classic_services_ul_list_benifits">
                              <li class="CS_ul_list_benifits_li">
                               <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                              <li class="CS_ul_list_benifits_li">
                                 <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>


                              <li class="CS_ul_list_benifits_li">
                                 <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>

                              <li class="CS_ul_list_benifits_li">
                                   <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                        </ul>

                     </div>
                 </div>
             </div>
              <div class="pb-5">
                  <div class="row">
                      <div class="col-md-10">
                          <h3 class="title">
                              Industry Leading Innovations with Institutional Focus
                          </h3>
                      </div>
                  </div>
                 <div class="row pt-5 align-items-center justify-content-between">
                     <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-1">
                        <div class="cs-grup-chart">
                              <div class="cs-grup-chart-main-block">
                                <div class="cs-grup-chart-block-img-div">
                                  <img src="#" class="cs-grup-chart-block-img">
                                </div>
                                <div  class="cs-grup-chart-main-title">Group Account</div>
                              </div>
                              <div class="cs-grup-chart-nodes">
                                <div class="cs-grup-chart-nodes-top-div">
                                  <div class="cs-grup-chart-nodes-left"></div>
                                  <div class="cs-grup-chart-nodes-right"></div>
                                </div>
                                <div class="cs-grup-chart-nodes-bottm-div">
                                  <div class="cs-grup-chart-nodes-left"></div>
                                  <div class="cs-grup-chart-nodes-right"></div>
                                </div>
                              </div>
                              <div class="cs-grup-chart-sb-block">
                                <div class="cs-grup-chart-block-inner">
                                  <div class="cs-grup-chart-block-img-div">
                                    <img src="" class="cs-grup-chart-block-img">
                                  </div>
                                  <div  class="cs-grup-chart-block-title">Group Entity 1</div>
                                </div>
                                <div class="cs-grup-chart-block-inner">
                                  <div class="cs-grup-chart-block-img-div">
                                    <img src="" class="cs-grup-chart-block-img">
                                  </div>
                                  <div  class="cs-grup-chart-block-title">Group Entity 2</div>
                                </div>
                                <div class="cs-grup-chart-block-inner">
                                  <div class="cs-grup-chart-block-img-div">
                                    <img src="" class="cs-grup-chart-block-img">
                                  </div>
                                  <div  class="cs-grup-chart-block-title">Group Entity 3</div>
                                </div>
                              </div>
                              <div class="cs-grup-chart-nodes">
                                <div class="cs-grup-chart-nodes-top-div">
                                  <div class="cs-grup-chart-nodes-left"></div>
                                  <div class="cs-grup-chart-nodes-right"></div>
                                </div>
                                <div class="cs-grup-chart-nodes-bottm-div">
                                  <div class="cs-grup-chart-nodes-left"></div>
                                  <div class="cs-grup-chart-nodes-right"></div>
                                </div>
                              </div>
                              <div class="cs-grup-chart-sb-block">
                                <div class="cs-grup-chart-block-inner">
                                  <div  class="cs-grup-chart-block-title">Trader 1</div>
                                </div>
                                <div class="cs-grup-chart-block-inner">
                                  <div  class="cs-grup-chart-block-title">Trader 2</div>
                                </div>
                                <div class="cs-grup-chart-block-inner">
                                  <div  class="cs-grup-chart-block-title">Trader 3</div>
                                </div>
                              </div>
                            </div>
                     </div>
                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-2 pt-4">
                         <div class="text">
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                         </div>
                         <ul class="Classic_services_ul_list_benifits">
                              <li class="CS_ul_list_benifits_li">
                                   <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                              <li class="CS_ul_list_benifits_li">
                                   <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                              <li class="CS_ul_list_benifits_li">
                                   <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                              <li class="CS_ul_list_benifits_li">
                                    <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                        </ul>

                         <div class="text pt-4">
                             To activate Wealthmark Fund Manager, please contact your VIP sales representative or send an email to vip@Wealthmark.com.
                         </div>
                         <div class="mt-4 d-flex justify-content-between align-items-center">


                                <a href="#" target="_blank" class="btn btn-default">
                                        <svg viewBox="0 0 24 24" fill="none" class="faq-icon">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>
                                        </svg>
                                    FAQ
                                </a>
                            </div>
                     </div>
                 </div>
             </div>

         </div>
         <div class="classic_services_divs mt-5 mb-5 open hide" id="wm-Asset-Management-Sub-Account">
             <div class="pb-5">
                 <div class="row align-items-center justify-content-between">
                     <div class="col-md-6 col-sm-12 col-xs-12">
                         <img src="{{ asset('img/classic/classic-class-asset-management-sub-account-graphic.svg') }} " class="img-fluid " alt="" >
                     </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                         <div class="text pt-4">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's............................................................
                         </div>
                         <ul class="Classic_services_ul">
                              <li class="Classic_services_ul_li">dummy text</li>
                              <li class="Classic_services_ul_li">dummy text</li>
                              <li class="Classic_services_ul_li">Family Offices</li>
                              <li class="Classic_services_ul_li">Asset Managers</li>
                              <li class="Classic_services_ul_li">Proprietary Trading Firms</li>
                              <li class="Classic_services_ul_li">More</li>
                        </ul>
                        <div  class="text">Asset Management Sub-Accounts are exclusive to VIP clients. Contact your account manager or email <a  href="#" target="_blank"  class="yellow-text">classic@wealthmark.com</a>.</div>
                            <div class="mt-4 d-flex justify-content-between align-items-center">


                                <a  href="#" target="_blank" class="btn btn-default">
                                        <svg  viewBox="0 0 24 24" fill="none" class="faq-icon">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>
                                        </svg>
                                    FAQ
                                </a>
                            </div>
                     </div>
                 </div>
             </div>
             <div class="pb-5">
                 <div class="row align-items-center justify-content-between">
                     <div class="col-md-6 col-sm-12 col-xs-12 order-md-2 text-center">
                         <img src="{{ asset('img/assets/img/classic/classic-key-benefits.svg') }}" class="img-fluid  w-75" alt="" >
                     </div>
                      <div class="col-md-6 col-sm-12 col-xs-12 order-md-1">
                         <h3 class="title mb-4">
                             Key Benefits
                         </h3>
                         <ul class="Classic_services_ul_list_benifits">
                              <li class="CS_ul_list_benifits_li">
                               <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                              <li class="CS_ul_list_benifits_li">
                                 <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>


                              <li class="CS_ul_list_benifits_li">
                                 <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>

                              <li class="CS_ul_list_benifits_li">
                                   <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                        </ul>

                     </div>
                 </div>
             </div>
              <div class="pb-5">
                  <div class="row">
                      <div class="col-md-10">
                          <h3 class="title">
                              Industry Leading Innovations with Institutional Focus
                          </h3>
                      </div>
                  </div>
                 <div class="row pt-5 align-items-center justify-content-between">
                     <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-1">
                        <div class="cs-grup-chart">
                              <div class="cs-grup-chart-main-block">
                                <div class="cs-grup-chart-block-img-div">
                                  <img src="#" class="cs-grup-chart-block-img">
                                </div>
                                <div  class="cs-grup-chart-main-title">Group Account</div>
                              </div>
                              <div class="cs-grup-chart-nodes">
                                <div class="cs-grup-chart-nodes-top-div">
                                  <div class="cs-grup-chart-nodes-left"></div>
                                  <div class="cs-grup-chart-nodes-right"></div>
                                </div>
                                <div class="cs-grup-chart-nodes-bottm-div">
                                  <div class="cs-grup-chart-nodes-left"></div>
                                  <div class="cs-grup-chart-nodes-right"></div>
                                </div>
                              </div>
                              <div class="cs-grup-chart-sb-block">
                                <div class="cs-grup-chart-block-inner">
                                  <div class="cs-grup-chart-block-img-div">
                                    <img src="" class="cs-grup-chart-block-img">
                                  </div>
                                  <div  class="cs-grup-chart-block-title">Group Entity 1</div>
                                </div>
                                <div class="cs-grup-chart-block-inner">
                                  <div class="cs-grup-chart-block-img-div">
                                    <img src="" class="cs-grup-chart-block-img">
                                  </div>
                                  <div  class="cs-grup-chart-block-title">Group Entity 2</div>
                                </div>
                                <div class="cs-grup-chart-block-inner">
                                  <div class="cs-grup-chart-block-img-div">
                                    <img src="" class="cs-grup-chart-block-img">
                                  </div>
                                  <div  class="cs-grup-chart-block-title">Group Entity 3</div>
                                </div>
                              </div>
                              <div class="cs-grup-chart-nodes">
                                <div class="cs-grup-chart-nodes-top-div">
                                  <div class="cs-grup-chart-nodes-left"></div>
                                  <div class="cs-grup-chart-nodes-right"></div>
                                </div>
                                <div class="cs-grup-chart-nodes-bottm-div">
                                  <div class="cs-grup-chart-nodes-left"></div>
                                  <div class="cs-grup-chart-nodes-right"></div>
                                </div>
                              </div>
                              <div class="cs-grup-chart-sb-block">
                                <div class="cs-grup-chart-block-inner">
                                  <div  class="cs-grup-chart-block-title">Trader 1</div>
                                </div>
                                <div class="cs-grup-chart-block-inner">
                                  <div  class="cs-grup-chart-block-title">Trader 2</div>
                                </div>
                                <div class="cs-grup-chart-block-inner">
                                  <div  class="cs-grup-chart-block-title">Trader 3</div>
                                </div>
                              </div>
                            </div>
                     </div>
                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-2 pt-4">
                         <div class="text">
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                         </div>
                         <ul class="Classic_services_ul_list_benifits">
                              <li class="CS_ul_list_benifits_li">
                                   <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                              <li class="CS_ul_list_benifits_li">
                                   <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                              <li class="CS_ul_list_benifits_li">
                                   <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                              <li class="CS_ul_list_benifits_li">
                                    <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                        </ul>

                         <div class="text pt-4">
                             To activate Wealthmark Fund Manager, please contact your VIP sales representative or send an email to vip@Wealthmark.com.
                         </div>
                         <div class="mt-4 d-flex justify-content-between align-items-center">


                                <a href="#" target="_blank" class="btn btn-default">
                                        <svg viewBox="0 0 24 24" fill="none" class="faq-icon">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>
                                        </svg>
                                    FAQ
                                </a>
                            </div>
                     </div>
                 </div>
             </div>

         </div>
         <div class="classic_services_divs mt-5 mb-5 open hide" id="wm-Manage-Sub-Account">

             <div class="pb-5">
                 <div class="row align-items-center justify-content-between">
                     <div class="col-md-6 col-sm-12 col-xs-12">
                         <img src="{{ asset('img/classic/classic-managed-graphic.png') }} " class="img-fluid " alt="" >
                     </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                         <div class="text pt-4">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's............................................................
                         </div>
                         <ul class="Classic_services_ul">
                              <li class="Classic_services_ul_li">dummy text</li>
                              <li class="Classic_services_ul_li">dummy text</li>
                              <li class="Classic_services_ul_li">Family Offices</li>
                              <li class="Classic_services_ul_li">Asset Managers</li>
                              <li class="Classic_services_ul_li">Proprietary Trading Firms</li>
                              <li class="Classic_services_ul_li">More</li>
                        </ul>
                        <div  class="text">Asset Management Sub-Accounts are exclusive to VIP clients. Contact your account manager or email <a  href="#" target="_blank"  class="yellow-text">classic@wealthmark.com</a>.</div>
                            <div class="mt-4 d-flex justify-content-between align-items-center">


                                <a  href="#" target="_blank" class="btn btn-default">
                                        <svg  viewBox="0 0 24 24" fill="none" class="faq-icon">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>
                                        </svg>
                                    FAQ
                                </a>
                            </div>
                     </div>
                 </div>
             </div>
             <div class="pb-5">
                 <div class="row align-items-center justify-content-between">
                     <div class="col-md-6 col-sm-12 col-xs-12 order-md-2 text-center">
                         <img src="{{ asset('img/assets/img/classic/classic-key-benefits.svg') }}" class="img-fluid  w-75" alt="" >
                     </div>
                      <div class="col-md-6 col-sm-12 col-xs-12 order-md-1">
                         <h3 class="title mb-4">
                             Key Benefits
                         </h3>
                         <ul class="Classic_services_ul_list_benifits">
                              <li class="CS_ul_list_benifits_li">
                               <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                              <li class="CS_ul_list_benifits_li">
                                 <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>


                              <li class="CS_ul_list_benifits_li">
                                 <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>

                              <li class="CS_ul_list_benifits_li">
                                   <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                        </ul>

                     </div>
                 </div>
             </div>
              <div class="pb-5">
                  <div class="row">
                      <div class="col-md-10">
                          <h3 class="title">
                              Industry Leading Innovations with Institutional Focus
                          </h3>
                      </div>
                  </div>
                 <div class="row pt-5 align-items-center justify-content-between">
                     <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-1">
                        <div class="cs-grup-chart">
                              <div class="cs-grup-chart-main-block">
                                <div class="cs-grup-chart-block-img-div">
                                  <img src="#" class="cs-grup-chart-block-img">
                                </div>
                                <div  class="cs-grup-chart-main-title">Group Account</div>
                              </div>
                              <div class="cs-grup-chart-nodes">
                                <div class="cs-grup-chart-nodes-top-div">
                                  <div class="cs-grup-chart-nodes-left"></div>
                                  <div class="cs-grup-chart-nodes-right"></div>
                                </div>
                                <div class="cs-grup-chart-nodes-bottm-div">
                                  <div class="cs-grup-chart-nodes-left"></div>
                                  <div class="cs-grup-chart-nodes-right"></div>
                                </div>
                              </div>
                              <div class="cs-grup-chart-sb-block">
                                <div class="cs-grup-chart-block-inner">
                                  <div class="cs-grup-chart-block-img-div">
                                    <img src="" class="cs-grup-chart-block-img">
                                  </div>
                                  <div  class="cs-grup-chart-block-title">Group Entity 1</div>
                                </div>
                                <div class="cs-grup-chart-block-inner">
                                  <div class="cs-grup-chart-block-img-div">
                                    <img src="" class="cs-grup-chart-block-img">
                                  </div>
                                  <div  class="cs-grup-chart-block-title">Group Entity 2</div>
                                </div>
                                <div class="cs-grup-chart-block-inner">
                                  <div class="cs-grup-chart-block-img-div">
                                    <img src="" class="cs-grup-chart-block-img">
                                  </div>
                                  <div  class="cs-grup-chart-block-title">Group Entity 3</div>
                                </div>
                              </div>
                              <div class="cs-grup-chart-nodes">
                                <div class="cs-grup-chart-nodes-top-div">
                                  <div class="cs-grup-chart-nodes-left"></div>
                                  <div class="cs-grup-chart-nodes-right"></div>
                                </div>
                                <div class="cs-grup-chart-nodes-bottm-div">
                                  <div class="cs-grup-chart-nodes-left"></div>
                                  <div class="cs-grup-chart-nodes-right"></div>
                                </div>
                              </div>
                              <div class="cs-grup-chart-sb-block">
                                <div class="cs-grup-chart-block-inner">
                                  <div  class="cs-grup-chart-block-title">Trader 1</div>
                                </div>
                                <div class="cs-grup-chart-block-inner">
                                  <div  class="cs-grup-chart-block-title">Trader 2</div>
                                </div>
                                <div class="cs-grup-chart-block-inner">
                                  <div  class="cs-grup-chart-block-title">Trader 3</div>
                                </div>
                              </div>
                            </div>
                     </div>
                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-2 pt-4">
                         <div class="text">
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                         </div>
                         <ul class="Classic_services_ul_list_benifits">
                              <li class="CS_ul_list_benifits_li">
                                   <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                              <li class="CS_ul_list_benifits_li">
                                   <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                              <li class="CS_ul_list_benifits_li">
                                   <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                              <li class="CS_ul_list_benifits_li">
                                    <i class="bi bi-check2 CS_ul_list_benifits_li_check"></i>
                                <div  class="Classic_services_tb_title">Lorem Ipsum is simply dummy text of the printing</div>
                              </li>
                        </ul>

                         <div class="text pt-4">
                             To activate Wealthmark Fund Manager, please contact your VIP sales representative or send an email to vip@Wealthmark.com.
                         </div>
                         <div class="mt-4 d-flex justify-content-between align-items-center">


                                <a href="#" target="_blank" class="btn btn-default">
                                        <svg viewBox="0 0 24 24" fill="none" class="faq-icon">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3H19v18H6.5v-2.5H4V16h2.5v-2.75H4v-2.5h2.5V8H4V5.5h2.5V3zm6.25 4.75c-.69 0-1.25.56-1.25 1.25v.5H9V9a3.75 3.75 0 116.402 2.652L14 13.053V14.5h-2.5v-2.482l2.134-2.134a1.25 1.25 0 00-.884-2.134zM11.5 19v-2.5H14V19h-2.5z" fill="currentColor"></path>
                                        </svg>
                                    FAQ
                                </a>
                            </div>
                     </div>
                 </div>
             </div>
         </div>


     </div>
 </section>




 <section class="bg-white">
     <div class="container">
         <div class="wm-faq-search wm-faq-search-1 bg-light-blue">
  <div  class="wm-faq-search-title">Got a Question?</div>
  <div class="wm-faq-search-inner">
    <div class="wm-faq-search-box-main">

        <div class=" wm-faq-search-box-div">

            <svg  viewBox="0 0 24 24" fill="none" class="wm-faq-search--icn">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 6a5 5 0 110 10 5 5 0 010-10zm0-3a8 8 0 017.021 11.838l3.07 3.07-1.59 1.591-1.591 1.591-3.07-3.07A8 8 0 1111 3z" fill="currentColor"></path>
            </svg>

          <input type="input" value="" placeholder="Search" maxlength="50" class="wm-faq-search-input-box">

            <button type="button" class="btn-yellow border-0 me-2">
              Search
            </button>

        </div>

    </div>

      <a  href="#" target="_blank" class="wm-faq-search-default-btn">Live Chat</a>

  </div>
</div>
     </div>
 </section>



  @include('template.country_language')
    @include('template.web_footer')
  <script src="{{ asset('assets/css/accordian_bootstrap.min.js') }}"></script>
  <script>
      $(".Classic_services_tabs_main").on("click", ".Classic_services_tabs", function () {
            $(this).addClass("Classic_services_tabs_active").removeClass("Classic_services_tabs");
            $(this).siblings(".Classic_services_tabs_active").removeClass("Classic_services_tabs_active").addClass("Classic_services_tabs");
        });

      $("#Normal_Account").click(function(){
            $("#wm-Normal-Sub-Account").addClass("show").removeClass("hide");
            $("#wm-Asset-Management-Sub-Account").addClass("hide").removeClass("show");
            $("#wm-Manage-Sub-Account").addClass("hide").removeClass("show");
    });


    $("#Management__Account").click(function(){
            $("#wm-Asset-Management-Sub-Account").addClass("show").removeClass("hide");
            $("#wm-Normal-Sub-Account").addClass("hide").removeClass("show");
            $("#wm-Manage-Sub-Account").addClass("hide").removeClass("show");
    });


      $("#Manage__Account").click(function(){
            $("#wm-Manage-Sub-Account").addClass("show").removeClass("hide");
            $("#wm-Asset-Management-Sub-Account").addClass("hide").removeClass("show");
            $("#wm-Normal-Sub-Account").addClass("hide").removeClass("show");
    });


  </script>
    </body>
</html>

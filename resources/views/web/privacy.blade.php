  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Wealth Mark | Privacy</title>
  @include('template.web_css')
      
  
<style>

div.text {
    font-size: 16px!important;
}
ul.policy {
    list-style: arabic-indic;
    color: red;
    list-style-type: roman!important;
}
.scroll-div{
    margin-bottom:20px;
}
 .sticky-sidebar{
    position: sticky;
    top: 80px;
    height: 100vh;
    padding: 10px;
background:#f5f8fd !important;
overflow:auto
 }
  .sticky-sidebar  .block{
    display: flex;
    align-items: center;
    line-height: 20px;
    font-size: 15px;
    padding: 10px;
    border-bottom: 1px solid white;
    background: white;
    margin-bottom: 10px;
    cursor: pointer; 
    color:black;
    border-radius:10px;
  }
  
    .sticky-sidebar  .block.active{
        color:white;
        background:#fdc116;
    }
    .privacy-sidebar-toggle-box{
            display:none;
        }
    @media(max-width:768px){
        .sticky-sidebar{
            display:none;
        }
    .privacy-sidebar-toggle-box {
    display: block;
    width: 20px;
    margin: auto;
}
        .sticky-sidebar {
    position: sticky;
    top: 80px;
    height: 50vh;
    padding: 10px;
    background: #f5f8fd !important;
    overflow: auto;
}
    }
</style>
  
   </head>
   
 <body class="bg-white">
        @include('template.web_menu')
    
 
    <div class="container-fluid">
            <div class="row bg-light-blue p-3 d-flex justify-content-between align-items-center">
        <div class="col-11">
                    <h1 class="heading-h2 mb-0 pb-0 fs-1">PRIVACY & POLICY</h1>
        </div>
         <div class="col-1">
                  <i class="bi bi-three-dots-vertical privacy-sidebar-toggle-box"></i>
              </div>
    </div>
    </div>
      
      <section class="privacy-section pt-2">
        <div class="container-fluid">
            <div class="row justify-content-center"> 
                <div class="col-lg-3 col-md-4 mb-3">
                    <div class="sticky-sidebar scrollbar-style">
                        <a href="#demo-1" class="block active">
                            <div class="me-1"> </div>
                            <div class="">Heading-1</div>
                        </a>
                        <a href="#demo-2" class="block">
                            <div class="me-1"> </div>
                            <div class="">Reasons regarding the collection of your information</div>
                        </a>
                        <a href="#demo-3" class="block">
                            <div class="me-1"> </div>
                            <div class="">Your personal information for the following purposes</div>
                        </a>
                        <a href="#demo-4" class="block">
                            <div class="me-1"> </div>
                            <div class="">Information We Collect</div>
                       </a>
                        <a href="#demo-5" class="block">
                            <div class="me-1"> </div>
                            <div class="">Contact information.</div>
                       </a>
                        <a href="#demo-6" class="block">
                            <div class="me-1"> </div>
                            <div class="">Payment and billing information.</div>
                      </a>
                        <a href="#demo-7" class="block">
                            <div class="me-1"> </div>
                            <div class="">Automatic Information</div>
                        </a>
                        <a href="#demo-8" class="block">
                            <div class="me-1"> </div>
                            <div class="">When you create a account</div>
                        </a>
                        <a href="#demo-9" class="block">
                            <div class="me-1"> </div>
                            <div class="">Legal Basis for our use of personal information </div>
                        </a>
                        <a href="#demo-10" class="block">
                            <div class="me-1"> </div>
                            <div class="">Information on your use</div>
                      </a>
                        <a href="#demo-11" class="block">
                            <div class="me-1"> </div>
                            <div class="">How we use your information</div>
                        </a>
                        <a href="#demo-12" class="block">
                            <div class="me-1"> </div>
                            <div class="">Sharing of information with third-parties</div>
                        </a>
                        <a href="#demo-13" class="block">
                            <div class="me-1"> </div>
                            <div class="">Change in Control</div>
                        </a>
                        <a href="#demo-14" class="block">
                            <div class="me-1"> </div>
                            <div class="">Change in Control</div>
                        </a>
                        <a href="#demo-15" class="block">
                            <div class="me-1"> </div>
                            <div class="">Change in Control</div>
                        </a>
                        <a href="#demo-16" class="block">
                            <div class="me-1"> </div>
                            <div class="">Change in Control</div>
                        </a>
                        <a href="#demo-17" class="block">
                            <div class="me-1"> </div>
                            <div class="">Change in Control</div>
                        </a>
                        <a href="#demo-18" class="block">
                            <div class="me-1"> </div>
                            <div class="">Change in Control</div>
                        </a>
                        <a href="#demo-19" class="block">
                            <div class="me-1"> </div>
                            <div class="">Change in Control</div>
                        </a>
                        <a href="#demo-20" class="block">
                            <div class="me-1"> </div>
                            <div class="">Change in Control</div>
                        </a>
                    </div>
                </div>
               
                <div class="col-lg-8 col-md-7 col-sm-12">
   <div class="inner-column">
     <div class="scroll-div" id="demo-1"></div>
     <div class="scroll-div" id="demo-2">
       <div class="sec-title">
         <span class="title">Welcome to Wealthmark</span>
         <h3 class="heading-h2">PRIVACY & POLICY</h3>
       </div>
       <div class="text"><span class="yellow-text">Wealthmark</span> respects your privacy and is committed to protecting it through our compliance with this Privacy Policy (“Policy”). This Policy describes the type of personally identifiable information we may collect or that you may provide when you access or use the Wealthmark website and/or mobile app (collectively, “Site”), as well as our practices for collecting, using, maintaining, protecting and disclosing that information. Except to the extent we receive your authorization or as permitted or required by applicable law, we will handle your data in accordance with the terms of the Policy in effect at the time of the collection. This Policy also does not apply to information that you provide to, or that is collected by, any third party. These third parties may have their own privacy policies, which we encourage you to read before providing information on or through them.</div>
       <div class="text text-left"> Privacy Policy shall be hereafter for the sake of brevity referred to as <b> “Policy” </b> . </div>
       <div class="text">The mention of the terms <b> “us” </b> , <b> “we” </b>, <b> “our” </b> found anywhere in this Policy shall refer to Wealthmark. The term “User” mentioned anywhere in this Policy shall refer to you, your and the end user (collectively) (Any term which does not find its mention here, the definition of the same shall be construed and accorded with the meaning and definition accrued to it in the respective clause/paragraph and the universally accepted and identified definitions of such term(s)} </div>
     </div>
     <div class="scroll-div" id="demo-3">
       <h4>Reasons regarding the collection of your information</h4>
       <div class="text">When you use our Website, we collect and store your personal information which is consented and provided by you from time to time governed by this Policy. Our primary goal in doing so is to provide you a safe, efficient, smooth and customized experience. This allows us to provide services and features that most likely meet your needs, and to customize our Website to make your experience safer and easier. More importantly, while doing so we collect personal information from you that we consider necessary for achieving this purpose.</div>
     </div>
     <div class="scroll-div" id="demo-4">
       <h4>Wealthmark uses your personal information for the following purposes:</h4>
       <div class="text">Transaction services. We use your personal information to process your orders, and to communicate with you about orders and services;</div>
       <div class="text">Communicate with you. We use your personal information to communicate with you in relation to Wealthmark Services;</div>
       <div class="text">We collect and process identity information and Sensitive Personal Data (as detailed in section 1) to comply with our Know Your Customer (“KYC”) obligations under applicable laws and regulations, and Anti-Money Laundering laws and regulations;</div>
       <div class="text">Provide, troubleshoot, and improve Wealthmark Services. We use your personal information to provide functionality, analyse performance, fix errors, and improve the usability and effectiveness of Wealthmark Services.</div>
       <div class="text">Improve our services. We process personal information to improve our services and for you to have a better user experience.</div>
       <div class="text">Recommendations and personalization. We use your personal information to recommend features and services that might be of interest to you, identify your preferences, and personalize your experience with Wealthmark Services; </div>
     </div>
     <div class="scroll-div" id="demo-5">
       <h4>Information We Collect </h4>
       <div class="text">We may collect information from a variety of sources to operate the Site, carry out our business, comply with law and other purposes described herein such as-</div>
     </div>
     <div class="scroll-div" id="demo-6">
       <h4>Contact information. </h4>
       <div class="text">We might collect your basic information including but not limited to name, email, mobile number, phone number, street, city, state, pincode, country, date of birth and IP address</div>
     </div>
     <div class="scroll-div" id="demo-7">
       <h4>Payment and billing information.</h4>
       <div class="text">We may collect your billing name, billing address and payment method when you make a transaction. We may collect any details pertaining to your credit/debit card on our Site. Your Card information might be obtained and processed by our online payment partner. The privacy policy of which is not and should not be deemed in any way related to our Policy and we shall not be liable for the same. (We further encourage you to read and be well conversant with their Privacy Policy).</div>
     </div>
     <div class="scroll-div" id="demo-8">
       <h4>Automatic Information</h4>
       <div class="text">Below mentioned are the types and ways of information we collect and analyze</div>
       <ul class="policy">
         <li> The internet protocol (IP) address used to connect your computer to the internet;</li>
         <li> Login, e-mail address, and password;</li>
         <li> The location of your device or computer;</li>
         <li> Device metrics such as when a device is in use, application usage, connectivity data, and any errors or event failures;</li>
         <li> Usage metrics (e.g., the occurrences of technical errors, your interactions with service features and content, your settings preferences and backup information, location of your device running an application, information about uploaded images, videos and files such as the file name, dates, times and location of such media);</li>
         <li> Version and time zone settings;</li>
         <li> Purchase and content use history, which we sometimes aggregate with similar information from other customers.</li>
         <li> The full Uniform Resource Locator (URL) clickstream to, through, and from our websites, including date and time; products and content you viewed or searched for; page response times, download errors, length of visits to certain pages, and page interaction information (such as scrolling, clicks, and mouse-overs);</li>
         <li> Phone numbers used to call our customer service number; and images or videos </li>
       </ul>
       <div class="text"> We may also use device identifiers, cookies, and other technologies on devices, applications, and our web pages to collect browsing, usage, or other technical information. </div>
     </div>
     <div class="scroll-div" id="demo-9">
       <h4>When you create a [USER ACCOUNT/PROFILE] with us, you may provide: </h4>
       <ul class="policy">
         <li> Contact information, such as name, home address, email address and telephone number;</li>
         <li> Account information, such as username, password, Account settings and preferences;</li>
         <li> Financial information, such as occupation, bank account numbers, bank statement and trading information.</li>
         <li> Identity verification information, such as gender, ID number, tax number or images of your government-issued ID, passport, national ID card or driver’s We also use third-party authentication services that may collect biometric data as part of the account creation and identity verification process, and those entities may collect your biometric identifiers or information. Note: US residents may be asked to provide their social security numbers;</li>
         <li> Residence verification information, such as utility bill details or similar information;</li>
         <li> Demographic information, such as age, income, education, and employment status;</li>
         <li> Image in photo or video form (where required as part of our know-your-customer checks), which may also include biometric data processed during a video verification process;</li>
         <li> Records of our discussions, if you contact us or we contact you (including records of phone and video calls);</li>
         <li> Information regarding the way in which you use our Services, such as when you used our Services, and the specific Services you used and the Transactions you carried out; and Other information relating to communications with us, whether through the Wealthmark website or via e-mail, over the phone or via any other medium.</li>
       </ul>
       <div class="text">We also automatically collect certain computer, device and browsing information when you access/use the Wealthmark Platform or the Wealthmark Services. This information is aggregated to provide statistical data about our users’ browsing actions and patterns, and does not personally identify individuals. This information may include:</div>
       <ul class="policy">
         <li> Computer or mobile device information, including IP address, operating system, network system, browser type and settings; </li>
         <li> Geolocation information; and </li>
         <li> Website usage information. </li>
       </ul>
       <div class="text"> <strong>Finally, we may collect Personal Data from third-party partners and public sources, which include:</strong> </div>
       <ul class="policy">
         <li> Reputational information</li>
         <li> Financial information; and</li>
         <li> Business activities of corporate customers.</li>
       </ul>
       <div class="text"> We need to collect certain types of information for compliance with legal requirements relating to our anti-fraud/anti-money-laundering/counter-financing-of-terrorism/know-your-customer obligations. If this information is not provided, we may not be able to provide a Service for you </div>
       <div class="text"> It is important to note that the Personal Data we collect when you create an Account will be retained for the mandatory retention period set forth by applicable law as it is necessary for us to maintain an exhaustive documentation of our operations as required from us as regulated financial sector professionals, even if your Account has not been successfully activated (e.g. if Account verification has not been completed) or no transaction has been made using it. </div>
     </div>
     <div class="scroll-div" id="demo-10">
       <h4>Legal Basis for our use of personal information (EU and UK GDPR) </h4>
       <div class="text">Performance of a contract when we provide you with products or services, or communicate with you about them. This includes when we use your personal information to take and handle orders, and process payments</div>
       <div class="text">Legal obligation; to comply with our legal obligations under applicable laws and regulations, and Anti-Money Laundering laws and regulations</div>
       <div class="text">Your consent when we ask for your consent to process your personal information for a specific purpose that we communicate to you. When you consent to processing your personal information for a specified purpose, you may withdraw your consent at any time and we will stop processing your data for that purpose.</div>
       <div class="text">Our legitimate interests and the interests of our users when, for example, we detect and prevent fraud and abuse in order to protect the security of our users, ourselves, or others;</div>
       <div class="text">Performance of a contract when we provide you with products or services, or communicate with you about them. This includes when we use your personal information to take and handle orders, and process payments</div>
       <div class="text">Fraud prevention and credit risks. We process personal information to prevent and detect fraud and abuse in order to protect the security of our users, Wealthmark Services and others. We may also use scoring methods to assess and manage credit risks.</div>
       <div class="text">Legal obligation; to comply with our legal obligations under applicable laws and regulations, and Anti-Money Laundering laws and regulations</div>
       <div class="text">Our legitimate interests and the interests of our users when, for example, we detect and prevent fraud and abuse in order to protect the security of our users, ourselves, or others;</div>
       <div class="text">Information about your behavior: we may process information about you on your behavior and your activity for marketing and advertising purposes</div>
       <div class="text">Our legitimate interest to improve our services;</div>
       <div class="text">Your consent when we ask for your consent to process your personal information for a specific purpose that we communicate to you. When you consent to processing your personal information for a specified purpose, you may withdraw your consent at any time and we will stop processing your data for that purpose.</div>
     </div>
     <div class="scroll-div" id="demo-11">
       <h4>Information on your use </h4>
       <div class="text">If logged in to a [USER ACCOUNT/PROFILE], we may collect information about and log your visits and use of the Site. This includes, for example, when you view or click on embedded content or ads. We also use cookies and IP addresses to identify you and log your use of the Site. As you use the Site, certain information may be passively collected about you or your activities over time and across third-party applications or websites using various technologies, such as navigational data collection and behavioral tracking services. We, or third parties authorized by us, that are subject to confidentiality obligations consistent with this Privacy Policy, may collect information that is not personally identifiable, such as your IP address, browser, operating system, mobile network information and specific website functions.</div>
       <div class="text">To monitor utilization of the Site and continuously improve its quality, we may compile statistical information concerning the usage of the Site using analytics services, such as those provided by Google Analytics. Examples of this information would include: the number of visitors to the Site, or to sections or pages within the Site, patterns of traffic flowing through the Site, length of time spent on the Site, or in sections or pages of the Site, the other sites that refer visitors to the Site, the pages of the Site that visitors frequently use as entry and exit points, utilization of the browser and operating systems and versions used by visitors to the Site, methods used to browse away from the page, any phone number used to call our customer service number, and location information. The analytics services may transfer this information to third parties in case of a legal obligation or if a third party processes data on behalf of that service. </div>
       <div class="text">While all of this information can be associated with the IP address your computer had while you visited the Site, it will not be associated with you as an individual, or associated with any other information you may submit through the Site, or that we may store about you for any other purposes. We may use this information to generate aggregate statistics about visitors to our Site. Please check your web browser if you want to learn what information your browser sends or how to change your settings.</div>
     </div>
     <div class="scroll-div" id="demo-12">
       <h4>How we use your information </h4>
       <div class="text">Pursuant to this Policy, we use information that we collect about you or that you provide to us, including any personal information, to: </div>
       <ul class="policy">
         <li>Create and administer your Account and generally for accounting, billing, maintenance of legal documentation and claim and dispute management. Related processing operations are necessary for the performance of a contract with you (or to take steps at your request prior to entering into a contract) and for compliance with legal obligations to which we are subject;</li>
         <li>Provide Services to you and process your transactions. Related processing operations are necessary for the performance of a contract with you and for compliance with legal obligations to which we are subject;</li>
         <li>Verify your identity in accordance with applicable know-your-customer, anti-money-laundering/counter-financing of terrorism and other financial-sector legislation or regulations, including those required for compliance with the Wealthmark Anti-Money Laundering Policy, as well as address other law enforcement needs as described in our Terms of Use, and generally as required for compliance with legislation and regulations applicable to Wealthmark. We may also share your Personal Data with other financial institutions, as authorized by relevant laws and regulations of different countries to the extent that this statute may be determined to apply to Wealthmark. Related processing operations are necessary for the performance of a contract with you and for compliance with legal obligations to which we are subject;</li>
         <li>Prevent fraud and other financial crimes. Related processing operations are necessary for compliance with legal obligations to which we are subject and for purposes of our legitimate interests (that is, developing and improving our anti-fraud system, preventing, detecting, investigating and prosecuting security threats, fraud, financial crimes, misconduct or other illegal or malicious activity and meeting our legal responsibilities);</li>
         <li>Personalise your Wealthmark Platform and Services experience. Related processing operations are necessary for purposes of our legitimate interests (that is, improving our Services);</li>
         <li>Analyse the Site and Wealthmark Platform usage and improve the Site and Wealthmark Platform offerings through surveys, research, planning and statistical analysis. Related processing operations are necessary for purposes of our legitimate interests (that is, improving and promoting our Services);</li>
         <li>Respond to your customer service requests and support needs. Related processing operations are necessary for the performance of a contract with you and for purposes of our legitimate interests (that is, improving our Services and offering you the best experience);</li>
         <li>Conduct internal operational and administrative processes, such as accounting, risk management, compliance and record keeping functions, staff training, quality control and any other purposes that are necessary for the performance of our contract with you. Related processing operations are necessary for purposes of our legitimate interests (that is, improving and promoting our Services, improving risk management practices and ensuring quality control); and
         <li>Contact you about the Wealthmark Services. The email address you provide may be used to communicate information and updates related to your use of Wealthmark Services.</li>
         <li>In the event we require to use your Personal Data for any other purposes, we will notify you and obtain your consent beforehand, unless we are required or permitted under DP Law to process your personal data without your consent.</li>
       </ul>
     </div>
     <div class="scroll-div" id="demo-13">
       <h4>Sharing of information with third-parties</h4>
       
        <div class="text"> <strong>How we may disclose your information</strong> </div>
       <div class="text"> In general, we will not disclose your data except with your consent and as described in this Policy. We may disclose your data for the same reasons that we may use it as described in this Policy, which includes disclosing it to our affiliates and non-affiliated third parties, as we deem necessary to carry out those purposes. </div>
       <h4>Legal Process, Security, Defense, Protection. </h4>
       <div class="text"> It is possible that we will need to disclose information about you if required by law or other legal process. Additionally, we may disclose information about you if we have a good faith belief that disclosure is reasonably necessary to: </div>
       <ul class="policy">
         <li> Demonstrate our relationship with you </li>
         <li> Investigate, prevent or take action regarding suspected or actual illegal activities or to assist law enforcement agencies </li>
         <li> Protect the security or integrity of the Site </li>
         <li> Investigate and defend ourselves against any third-party allegations or claims </li>
         <li> Protect the rights and safety of others.</li>
       </ul>
     </div>
     <div class="scroll-div" id="demo-14">
       <h4>Change in Control</h4>
       <div class="text"> We can share, assign or license your personal data in connection with certain business transactions, such as a sale, acquisitions, merger or change in control, or in preparation for any of these events. In such cases, we will take appropriate steps under the circumstances to ensure that the recipient agrees to provide privacy protections substantially similar to those established by this Policy. Any entity that acquires all or substantially all of the Company’s assets will have the right to continue using your data consistent with this Policy or an alternate privacy policy as regulated by that entity. </div>
       <div class="text"> We do not indulge in selling of Customer information to any entity and in no case will we sell or license your data to third parties, except as set forth above or as required or permitted by law. Only Wealthmark or its authorized agents have access to personal information provided by users of the Site. </div>
     </div>
     <div class="scroll-div" id="demo-15">
       <h4> Cookies and Similar Technology </h4>
       <div class="text"> A cookie is a small file which asks permission to be placed on your computer’s hard drive. Once you agree, the file is added and the cookie helps analyze web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences. We may use technologies such as cookies, pixel tags, browser analysis tools, server logs and web beacons to recognize you when you return to the Site and to help us improve the quality of our service when you visit our Site. We also use cookies to tailor our products, services and advertising to suit your personal interests, estimate our audience size, track visits to and sales at our Site, and, as applicable, to process your order and track your status in our promotions, contests and sweepstakes. We do not link your URL or IP address to any personal information unless you have logged into our Site with an established [USER ACCOUNT/PROFILE]. Overall, cookies help us provide you with a better website, by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us. You may control cookies, including preventing or stopping the installation and storage of cookies, through your browser settings and other tools. If you do so, our Site may not function correctly. Please refer to the Help feature of your browser for information on disabling cookies. From time to time we may offer you the option of signing up, or having us sign you up, for various mailing lists, emailing list or other directory-related list used to send communications from us for purposes of keeping our users updated with respect to developments in the website, products listed on it for reselling by verified and authenticated sellers, or otherwise (“Marketing Updates”). </div>
     </div>
     <div class="scroll-div" id="demo-16">
       <h4> Changes to this Policy </h4>
       <div class="text"> We reserve the right to change this Policy at any time. In the event we make material changes to the Policy, we will provide notice in a form of a notification through the Site. Changes will be effective immediately upon posting to the Site and will apply to your use of the Site after the “effective date” as listed. You understand and agree that your continued use of the Site after the effective date, means that the collection, use and dissemination of your information is subject to the updated Policy. Except to the extent we receive your authorization or as permitted or required by applicable law, we will handle your data in accordance with the terms of the Policy in effect at the time of the collection. </div>
     </div>
     <div class="scroll-div" id="demo-17">
       <h4> How secure is your information with us? </h4>
       <div class="text"> <strong>We design our systems with your security and privacy in mind</strong> </div>


       <ul class="policy">
         <li> We have in place softwares and encryption protocols which assure that your information and data altogether is safe while being transmitted. </li>
         <li> we have implemented a security program that contains administrative, technical and physical controls that are designed to reasonably safeguard your data from unlawful use, unauthorized access or disclosure.</li>
       </ul>
     </div>
     <div class="scroll-div" id="demo-18">
       <h4>Links to Third Party Sites</h4>
       <div class="text"> We may provide links to websites or resources, including through third-party advertising (the "Third-Party Materials"), outside of our Site for your informational purposes only. You acknowledge and agree we are not responsible for the availability of such sites or resources, and do not endorse and are not responsible or liable for any content, advertising, goods, services or other materials on, available through or provided by such sites or resources. We are not responsible for the privacy or other practices of such sites and cannot guarantee the security of any of your personal information that you provide or is collected by such sites. This Privacy Policy applies to information collected by our Site. We encourage you to review the privacy policies and terms and conditions on those linked sites. </div>
     </div>
     <div class="scroll-div" id="demo-19">
       <h4> Security of Information. </h4>
       <div class="text"> No system for safeguarding personal or other information is 100% secure, and, even though we have taken steps to protect your personal information from being intercepted, accessed, used or disclosed by unauthorized persons, we cannot fully eliminate security risks associated with personal information. However, we take a number of steps to safeguard the security of personal information obtained through the Site but there is no fool proof method promising that data may not be accessed, disclosed, altered or destroyed by breach of any of our administrative, physical or technical safeguards. Additionally, we use Secure Socket Layer (SSL) data encryption when data is transmitted over the internet to our Site. Any transmission of personal information is at your own risk. We are not responsible for circumvention of any security measures we provide. Please bear in mind that anyone you provide with your log-in information will also have access to your account and personally identifiable information. If you use the Site, you are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer or device. </div>
     </div>
     <div class="scroll-div" id="demo-20">
       <h4> Updates to this policy </h4>
       <div class="text"> This Privacy Policy was first published on_______. From time to time we may change our privacy practices. We will notify you of any material changes to this policy as required by law </div>
     </div>
   </div>
 </div>
                <!-- Image Column -->
               
            </div>
        </div>
    </section>
      
   
  @include('template.country_language')
    @include('template.web_footer') 
      
<script>
    $(window).scroll(function() {
		var windscroll = $(window).scrollTop();
		if (windscroll >= 100) {
			$('.scroll-div').each(function(i) {
        // The number at the end of the next line is how pany pixels you from the top you want it to activate.
				if ($(this).position().top <= windscroll - 0) {
					$('.sticky-sidebar .block.active').removeClass('active');
					$('.sticky-sidebar .block').eq(i).addClass('active');
				}
			});

		} else {

			$('.sticky-sidebar .block.active').removeClass('active');
			$('.sticky-sidebar .block:first').addClass('active');
		}

		}).scroll();
		
		


</script>
  
  <script>
$(document).ready(function(){
  $(".privacy-sidebar-toggle-box").click(function(){
    $(".sticky-sidebar").slideToggle();
  });
    $(".block").click(function(){
    $(".sticky-sidebar").slideUp();
  });
  
});
</script>

    </body>
</html>
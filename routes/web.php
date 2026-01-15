<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\TwitterController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Redirect root to the locale
Route::get('/', function () {
    return redirect(app()->getLocale());
});

// Cache clearing route (utility)
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('event:clear');
    return "All caches were cleared";
})->name('clear.cache');

Route::group(
    ['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => ['setlocale']],
    function () {
        Route::get('/upload_img', function () {
            return view('welcome2');
        });
        Route::post('/upload_img', [App\Http\Controllers\HomeController::class, 'upload_img']);
        Route::get('/test_page', [App\Http\Controllers\GiftcardController::class, 'test_page']);

        Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
        
        Route::get('/about-us', function () {
            return view('web.about-us');
        });
        Route::get('/register_business_process', function () {
            return view('auth.register_business_process');
        });
        Route::get('/camera_test', function () {
            return view('auth.camera-test');
        });
        Route::get('admin/fluctuate_wallet_coin', [App\Http\Controllers\GiftcardController::class, 'fluctuate_wallet_coin']);
        Route::get('/get_coin_record', [App\Http\Controllers\HomeController::class, 'get_coin_record']);
        Route::get('/get_our_coin', [App\Http\Controllers\HomeController::class, 'get_our_coin']);
        // Route::get('/get_bitcoin', [App\Http\Controllers\HomeController::class, 'get_bitcoin']);
        // Route::get('/get_ethereum', [App\Http\Controllers\HomeController::class, 'get_ethereum']);
        // Route::get('/get_tether', [App\Http\Controllers\HomeController::class, 'get_tether']);
        // Route::get('/get_dogecoin', [App\Http\Controllers\HomeController::class, 'get_dogecoin']);

        Route::get('/login', [App\Http\Controllers\HomeController::class, 'login']);
        Route::get('/login/{msg}', [App\Http\Controllers\HomeController::class, 'login']);
        Route::get('/check_login', [App\Http\Controllers\HomeController::class, 'check_login']);

        Route::get('/request_potp', [App\Http\Controllers\HomeController::class, 'request_potp']);
        Route::get('/request_eotp', [App\Http\Controllers\HomeController::class, 'request_eotp']);
        Route::get('/request_otp', [App\Http\Controllers\HomeController::class, 'request_otp']);

        Route::get('/request_login_phone_otp', [App\Http\Controllers\HomeController::class, 'request_login_phone_otp']);
        Route::get('/request_login_email_otp', [App\Http\Controllers\HomeController::class, 'request_login_email_otp']);
        //request_email_otp

        //change email and phone
        Route::get('/change-email-authenticator', [App\Http\Controllers\HomeController::class, 'change_email_authenticator']);
        Route::get('/change-sms-authenticator', [App\Http\Controllers\HomeController::class, 'change_sms_authenticator']);


        //Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);

        Route::get('/need-kyc', [App\Http\Controllers\HomeController::class, 'need_kyc']);


        // signzy.tech kyc api routes
        Route::get('user/KycApiLogin', [App\Http\Controllers\KycVerificationController::class, 'KycApiLogin']);
        Route::get('user/ApiLogin', [App\Http\Controllers\KycVerificationController::class, 'CallKycApi']);
        Route::get('user/identify', [App\Http\Controllers\KycVerificationController::class, 'identify']);

        Route::get('user/verifyDigilocker', [App\Http\Controllers\KycVerificationController::class, 'verifyDigilocker']);
        Route::get('user/getwayverifyDigilocker', [App\Http\Controllers\KycVerificationController::class, 'getwayverifyDigilocker']);
        Route::get('user/redirectdigilocker', [App\Http\Controllers\KycVerificationController::class, 'redirectdigilocker']);
        Route::get('user/callbackdigilocker', [App\Http\Controllers\KycVerificationController::class, 'callbackdigilocker']);
        Route::post('user/update-digilocker-aadhaarAndType', [App\Http\Controllers\KycVerificationController::class, 'update_digilocker_aadhaarAndType']);
        Route::get('user/failed-digilocker-details', [App\Http\Controllers\HomeController::class, 'failed_digilocker_details']);

        Route::get('user/read-identity-document', [App\Http\Controllers\KycVerificationController::class, 'read_identity_document']);
        Route::get('user/verifyFaceWithId', [App\Http\Controllers\KycVerificationController::class, 'verifyFaceWithId']);
        Route::get('user/verifyPan', [App\Http\Controllers\KycVerificationController::class, 'verify_pan_card']);
        Route::get('user/verifyPanNumber', [App\Http\Controllers\KycVerificationController::class, 'verify_pan_number']);
        Route::post('/decode-blob', [App\Http\Controllers\HomeController::class, 'decoeBlob']);

        // end kyc api routes
        Route::get('/register', [App\Http\Controllers\HomeController::class, 'register']);
        Route::get('/register-person', [App\Http\Controllers\HomeController::class, 'register_person']);
        Route::get('/register-business', [App\Http\Controllers\HomeController::class, 'register_business']);
        Route::get('/register-business/{ref}', [App\Http\Controllers\HomeController::class, 'register_business']);

        Route::get('/register-action', [App\Http\Controllers\HomeController::class, 'register_action']);
        Route::get('/register-person/{ref}', [App\Http\Controllers\HomeController::class, 'register_person']);
        Route::get('/reset-password', [App\Http\Controllers\HomeController::class, 'reset_password']);

        Route::post('/create-entity', [App\Http\Controllers\Api\RegisterEntityTypeController::class, 'register']);
        Route::get('/create-entity', [App\Http\Controllers\Api\RegisterEntityTypeController::class, 'register']);

        Route::get('/delete-entity/{id}', [App\Http\Controllers\Api\RegisterEntityTypeController::class, 'delete']);

        Route::post('/verify_otp', [App\Http\Controllers\HomeController::class, 'verify_otp']);

        Route::post('verify_email_otp', [App\Http\Controllers\HomeController::class, 'verify_email_otp']);
        Route::post('verify_phone_otp', [App\Http\Controllers\HomeController::class, 'verify_phone_otp']);
        Route::post('verify_Lphone_otp', [App\Http\Controllers\HomeController::class, 'verify_Lphone_otp']);
        Route::post('verify_Lemail_otp', [App\Http\Controllers\HomeController::class, 'verify_Lemail_otp']);
        /*---------------------Start entity Pages -----------*/

        //	Route::get('demoo', [App\Http\Controllers\Api\EntityController::class, 'dashboardDemo']);
        //  Route::get('demoo', [App\Http\Controllers\Api\EntityController::class, 'generate_referral_usernames']);

        Route::get('entity-enterprise', [App\Http\Controllers\Api\EntityController::class, 'entity_enterprise']);
        Route::get('entity-verification', [App\Http\Controllers\Api\EntityController::class, 'verifyEntity']);
        Route::get('entity-dashboard', [App\Http\Controllers\Api\EntityController::class, 'entityDashboard']);

        Route::get('/entityUpdate/{id}', [App\Http\Controllers\Api\EntityController::class, 'update_entity']);
        Route::get('/relatedPartiesUpdate/{id}', [App\Http\Controllers\Api\EntityController::class, 'update_related_parties']);
        Route::get('/businessDocumentUpdate/{id}', [App\Http\Controllers\Api\EntityController::class, 'update_business_docs']);
        Route::get('/entityProfile', [App\Http\Controllers\Api\EntityController::class, 'entity_profile']);

        Route::get('/custom_read_mail_template', [App\Http\Controllers\Api\UserController::class, 'custom_read_mail_template']);
        Route::get('/is-entity-verified/{id}', [App\Http\Controllers\HomeController::class, 'is_entity_verified']);




        /*---------------------ends entity Pages -----------*/

        /*---------------------Start After user login Pages -----------*/
        Route::get('user/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);
        Route::get('user/enable-sms-authentication', [App\Http\Controllers\HomeController::class, 'enable_sms_authentication']);
        Route::get('user/enable-email-authentication', [App\Http\Controllers\HomeController::class, 'enable_email_authentication']);
        Route::get('enable-google-authenticator', [App\Http\Controllers\HomeController::class, 'enable_google_authenticator']);
        Route::get('change-google-authenticator', [App\Http\Controllers\HomeController::class, 'change_google_authenticator']);
        Route::get('remove-google-authenticator', [App\Http\Controllers\HomeController::class, 'remove_google_authenticator']);

        Route::get('set_country', [App\Http\Controllers\HomeController::class, 'setCookie']);
        Route::get('get_country', [App\Http\Controllers\HomeController::class, 'getCookie']);

        Route::post('save_personal_info', [App\Http\Controllers\HomeController::class, 'save_personal_info']);
        Route::post('save_id_card_info', [App\Http\Controllers\HomeController::class, 'save_id_card_info']);
        Route::post('save_selfie_info', [App\Http\Controllers\HomeController::class, 'save_selfie_info']);

        Route::post('send_otp_by_secure_mail', [App\Http\Controllers\HomeController::class, 'send_otp_by_secure_mail']);
        Route::post('send_otp_by_secure_phone', [App\Http\Controllers\HomeController::class, 'send_otp_by_secure_phone']);
        Route::post('verify_enable_email', [App\Http\Controllers\HomeController::class, 'verify_enable_email']);

        Route::post('send_otp_enable_secure_phone', [App\Http\Controllers\HomeController::class, 'send_otp_enable_secure_phone']);
        Route::post('send_otp_enable_secure_mail', [App\Http\Controllers\HomeController::class, 'send_otp_enable_secure_mail']);
        Route::post('verify_enable_phone', [App\Http\Controllers\HomeController::class, 'verify_enable_phone']);

        Route::get('reset-password', [App\Http\Controllers\HomeController::class, 'reset_password']);
        Route::get('request_reset_password_otp', [App\Http\Controllers\HomeController::class, 'request_reset_password_otp']);
        Route::post('verify_reset_pass_otp', [App\Http\Controllers\HomeController::class, 'verify_reset_pass_otp']);
        Route::post('verifyOTP_beforeAddPayment', [App\Http\Controllers\HomeController::class, 'verifyOTP_beforeAddPayment']);
        Route::post('verify_old_user_reset_pass_otp', [App\Http\Controllers\HomeController::class, 'verify_old_user_reset_pass_otp']);
        Route::post('submit_reset_pass', [App\Http\Controllers\HomeController::class, 'submit_reset_pass']);
        Route::get('pass_success', [App\Http\Controllers\HomeController::class, 'pass_success']);
        Route::get('request-reset-password', [App\Http\Controllers\HomeController::class, 'request_reset_password']);

        Route::get('user/security', [App\Http\Controllers\HomeController::class, 'security']);
        Route::get('user/password', [App\Http\Controllers\HomeController::class, 'password']);
        Route::post('user/submit_change_pass', [App\Http\Controllers\HomeController::class, 'submit_change_pass']);
        Route::post('user/submit_change_pass_otp', [App\Http\Controllers\HomeController::class, 'submit_change_pass_otp']);
        Route::get('user/change_password_otp', [App\Http\Controllers\HomeController::class, 'change_password_otp']);
        Route::post('user/update_user_column', [App\Http\Controllers\HomeController::class, 'update_user_column']);

        Route::get('user/identification', [App\Http\Controllers\HomeController::class, 'identification']);
        Route::get('user/payment', [App\Http\Controllers\HomeController::class, 'payment']);
        Route::get('user/referral', [App\Http\Controllers\HomeController::class, 'referral']);
        Route::get('user/settings', [App\Http\Controllers\HomeController::class, 'settings']);
        Route::get('user/api-management', [App\Http\Controllers\HomeController::class, 'api_management']);
        Route::get('user/task-center', [App\Http\Controllers\HomeController::class, 'task_center']);
        Route::get('user/market', [App\Http\Controllers\HomeController::class, 'market']);
        Route::get('user/reward-center', [App\Http\Controllers\HomeController::class, 'reward_center']);
        Route::get('user/overview', [App\Http\Controllers\HomeController::class, 'overview']);
        Route::get('user/fiat-and-spot', [App\Http\Controllers\HomeController::class, 'fiat_and_spot']);
        Route::get('user/funding', [App\Http\Controllers\HomeController::class, 'funding']);
        Route::get('user/futures', [App\Http\Controllers\HomeController::class, 'futures']);
        Route::get('user/earn', [App\Http\Controllers\HomeController::class, 'earn']);
        Route::get('user/jex', [App\Http\Controllers\HomeController::class, 'jex']);
        Route::get('user/wazirx', [App\Http\Controllers\HomeController::class, 'wazirx']);
        Route::get('user/pexpay', [App\Http\Controllers\HomeController::class, 'pexpay']);
        Route::get('user/tokocrypto', [App\Http\Controllers\HomeController::class, 'tokocrypto']);
        Route::get('user/wealthmark_tr', [App\Http\Controllers\HomeController::class, 'wealthmark_tr']);
        Route::post('verify_otp_giftcard', [App\Http\Controllers\HomeController::class, 'verify_otp_giftcard']);
        Route::post('buy_with_otp_giftcard', [App\Http\Controllers\HomeController::class, 'buy_with_otp_giftcard']);
        Route::get('user/coin-staking', [App\Http\Controllers\HomeController::class, 'staking_coin']);
        Route::get('user/coin-staking-term-and-conditions', [App\Http\Controllers\HomeController::class, 'coin_staking_term_conditions']);
        Route::post('user/submit-staking-record', [App\Http\Controllers\StakingController::class, 'submit_staking_record']);
        Route::get('user/get_staking_coin_detail', [App\Http\Controllers\StakingController::class, 'get_staking_coin_detail']);
        Route::get('user/get_coin_for_staking', [App\Http\Controllers\StakingController::class, 'get_coin_for_staking']);
        Route::get('user/get_recurring_coin_detail', [App\Http\Controllers\StakingController::class, 'get_recurring_coin_detail']);
        Route::post('user/genrate-staking-record-otp', [App\Http\Controllers\StakingController::class, 'genrate_staking_record_otp']);


        /*---------------------Start After user login Pages -----------*/



        /*---------------------Start Website Pages -----------*/

        /*--- Buy Crypto ---*/
        Route::get('card-deposite', [App\Http\Controllers\HomeController::class, 'card_deposite']);
        Route::get('cash-balance', [App\Http\Controllers\HomeController::class, 'cash_balance']);
        Route::get('third-party-payment', [App\Http\Controllers\HomeController::class, 'third_party_payment']);

        /*----------------Route for p2p treading code added on 4thmar23 */
        Route::get('p2p-trading', [App\Http\Controllers\HomeController::class, 'p2p_trading']);
        Route::get('p2p-trading/btc', [App\Http\Controllers\HomeController::class, 'p2p_trading_BTC']);
        Route::get('p2p-trading/bmk', [App\Http\Controllers\HomeController::class, 'p2p_trading_bmk']);
        Route::get('p2p-trading/eth', [App\Http\Controllers\HomeController::class, 'p2p_trading_eth']);



        Route::get('p2p-trading/buy', [App\Http\Controllers\HomeController::class, 'p2p_trading_Buy']);

        // 	Route::get('p2p-trading/buydev', [App\Http\Controllers\HomeController::class, 'p2p_trading_Buydev']);
        Route::get('p2p-trading-dev/bmk', [App\Http\Controllers\HomeController::class, 'p2p_trading_bmk_dev']);
        Route::get('p2p-trading-dev', [App\Http\Controllers\HomeController::class, 'p2p_trading_dev']);
        Route::get('fetch-date-from-sql', [App\Http\Controllers\HomeController::class, 'fetchDateFromSQL']);

        /*--- Market---*/
        Route::get('markets', [App\Http\Controllers\HomeController::class, 'markets']);

        /*--- Trade---*/
        Route::get('convert', [App\Http\Controllers\HomeController::class, 'convert']);
        Route::get('classic', [App\Http\Controllers\HomeController::class, 'classic']);
        Route::get('advanced', [App\Http\Controllers\HomeController::class, 'advanced']);
        Route::get('margin', [App\Http\Controllers\HomeController::class, 'margin']);
        Route::get('p2p', [App\Http\Controllers\HomeController::class, 'p2p']);
        Route::get('strategy-trading', [App\Http\Controllers\HomeController::class, 'strategy_trading']);
        Route::get('swap-farming', [App\Http\Controllers\HomeController::class, 'swap_farming']);
        Route::get('fan-token', [App\Http\Controllers\HomeController::class, 'fan_token']);

        /*--- Derivatives---*/
        Route::get('wealthmark-futures-overview', [App\Http\Controllers\HomeController::class, 'wealthmark_futures_overview']);
        Route::get('responsible-trading', [App\Http\Controllers\HomeController::class, 'responsible_trading']);
        Route::get('coin-m-futures', [App\Http\Controllers\HomeController::class, 'coin_m_futures']);
        Route::get('vanilla-options', [App\Http\Controllers\HomeController::class, 'vanilla_options']);
        Route::get('leveraged-tokens', [App\Http\Controllers\HomeController::class, 'leveraged_tokens']);
        Route::get('battle', [App\Http\Controllers\HomeController::class, 'battle']);

        /*--- Finance---*/
        Route::get('wealthmark-visa-card', [App\Http\Controllers\HomeController::class, 'wealthmark_visa_card']);
        Route::get('crypto-loans', [App\Http\Controllers\HomeController::class, 'crypto_loans']);
        Route::get('wealthmark-pay', [App\Http\Controllers\HomeController::class, 'wealthmark_pay']);

        /*--- Nft---*/
        Route::get('nft', [App\Http\Controllers\HomeController::class, 'nft']);

        /*--- Earn---*/
        Route::get('wealthmark-earn', [App\Http\Controllers\HomeController::class, 'wealthmark_earn']);
        // 	Route::get('launchpad', [App\Http\Controllers\HomeController::class, 'launchpad']);
        Route::get('savings', [App\Http\Controllers\HomeController::class, 'savings']);
        Route::get('staking', [App\Http\Controllers\HomeController::class, 'staking']);
        Route::get('bmk-vault', [App\Http\Controllers\HomeController::class, 'bm_vault']);
        Route::get('dual-investment', [App\Http\Controllers\HomeController::class, 'dual_investment']);
        Route::get('liquidity-farming', [App\Http\Controllers\HomeController::class, 'liquidity_farming']);
        Route::get('auto-invest', [App\Http\Controllers\HomeController::class, 'auto_invest']);
        Route::get('wealthmark-pool', [App\Http\Controllers\HomeController::class, 'wealthmark_pool']);

        /*---------------- multimenu menu  ------------------*/
        Route::get('/exchange', [App\Http\Controllers\HomeController::class, 'exchange']);
        Route::get('/academy', [App\Http\Controllers\HomeController::class, 'academy']);
        Route::get('/vip-institutional-services', [App\Http\Controllers\HomeController::class, 'vip_institutional_services']);
        Route::get('/broker', [App\Http\Controllers\HomeController::class, 'broker']);
        Route::get('/cloud', [App\Http\Controllers\HomeController::class, 'cloud']);
        Route::get('/charity', [App\Http\Controllers\HomeController::class, 'charity']);
        Route::get('/dex', [App\Http\Controllers\HomeController::class, 'dex']);
        Route::get('/labs', [App\Http\Controllers\HomeController::class, 'labs']);
        Route::get('/launchpad', [App\Http\Controllers\HomeController::class, 'launchpad']);
        Route::get('/research', [App\Http\Controllers\HomeController::class, 'research']);
        Route::get('/gift-card', [App\Http\Controllers\HomeController::class, 'gift_card']);
        Route::get('/trust-wallet', [App\Http\Controllers\HomeController::class, 'trust_wallet']);

        /* ---- footer ------*/
        Route::get('/careers', [App\Http\Controllers\HomeController::class, 'careers']);
        Route::get('/press', [App\Http\Controllers\HomeController::class, 'press']);
        Route::get('/business-contacts', [App\Http\Controllers\HomeController::class, 'business_contacts']);
        Route::get('/community', [App\Http\Controllers\HomeController::class, 'community']);
        Route::get('/wealthmark-blog', [App\Http\Controllers\HomeController::class, 'wealthmark_blog']);
        Route::get('/terms', [App\Http\Controllers\HomeController::class, 'terms']);
        Route::get('/privacy', [App\Http\Controllers\HomeController::class, 'privacy']);
        Route::get('/announcements/', [App\Http\Controllers\HomeController::class, 'announcements']);
        Route::get('/announcements-topics/{slugs}', [App\Http\Controllers\HomeController::class, 'announcements_topics']);

        Route::get('/announcements-articles/{slugs}', [App\Http\Controllers\HomeController::class, 'announcements_articles']);
        Route::post('/search-announcements', [App\Http\Controllers\HomeController::class, 'search_announcements']);
        Route::get('/news', [App\Http\Controllers\HomeController::class, 'news']);
        Route::get('/notices', [App\Http\Controllers\HomeController::class, 'notices']);

        Route::get('/downloads', [App\Http\Controllers\HomeController::class, 'downloads']);
        Route::get('/desktop-application', [App\Http\Controllers\HomeController::class, 'desktop_application']);
        Route::get('/execution-solutions', [App\Http\Controllers\HomeController::class, 'execution_solutions']);
        Route::get('/referral-offers', [App\Http\Controllers\HomeController::class, 'referral_offers']);
        Route::get('/affiliate', [App\Http\Controllers\HomeController::class, 'affiliate']);
        Route::get('/bmkoin', [App\Http\Controllers\HomeController::class, 'bmkoin']);
        Route::get('/otc-trading', [App\Http\Controllers\HomeController::class, 'otc_trading']);
        Route::get('/listing-application', [App\Http\Controllers\HomeController::class, 'listing_application']);
        Route::get('/p2p-merchant-application', [App\Http\Controllers\HomeController::class, 'p2p_merchant_application']);
        Route::get('/historical-market-data', [App\Http\Controllers\HomeController::class, 'historical_market_data']);

        Route::get('/give-us-feedback', [App\Http\Controllers\HomeController::class, 'give_us_feedback']);
        Route::get('/support-center', [App\Http\Controllers\HomeController::class, 'support_center']);
        Route::get('/submit-request', [App\Http\Controllers\HomeController::class, 'submit_request']);
        Route::get('/api-documentation', [App\Http\Controllers\HomeController::class, 'api_documentation']);
        Route::get('/fees', [App\Http\Controllers\HomeController::class, 'fees']);
        Route::get('/trading-rules', [App\Http\Controllers\HomeController::class, 'trading_rules']);
        Route::get('/wealthmark-verify', [App\Http\Controllers\HomeController::class, 'wealthmark_verify']);
        Route::get('/law-enforcement-requests', [App\Http\Controllers\HomeController::class, 'law_enforcement_requests']);

        Route::get('/buy-bmkoin', [App\Http\Controllers\HomeController::class, 'buy_bmkoin']);
        Route::get('/buy-busd', [App\Http\Controllers\HomeController::class, 'buy_busd']);
        Route::get('/buy-bitcoin', [App\Http\Controllers\HomeController::class, 'buy_bitcoin']);
        Route::get('/buy-ethereum', [App\Http\Controllers\HomeController::class, 'buy_ethereum']);
        Route::get('/buy-litecoin', [App\Http\Controllers\HomeController::class, 'buy_litecoin']);
        Route::get('/buy-ripple', [App\Http\Controllers\HomeController::class, 'buy_ripple']);
        Route::get('/buy-bitcoin-cash', [App\Http\Controllers\HomeController::class, 'buy_bitcoin_cash']);
        Route::get('/buy-dogecoin', [App\Http\Controllers\HomeController::class, 'buy_dogecoin']);
        Route::get('/buy-defi', [App\Http\Controllers\HomeController::class, 'buy_defi']);
        Route::get('/buy-shib', [App\Http\Controllers\HomeController::class, 'buy_shib']);
        Route::get('/buy-tradable-altcoins', [App\Http\Controllers\HomeController::class, 'buy_tradable_altcoins']);
        Route::get('/chart-demo', [App\Http\Controllers\HomeController::class, 'chart_demo']);


        /* -----------------------------new website pages----------*/
        Route::get('/simple-earn', [App\Http\Controllers\HomeController::class, 'simple_earn']);
        Route::get('/wm-pool', [App\Http\Controllers\HomeController::class, 'wm_pool']);
        Route::get('/buy-sell-trade', [App\Http\Controllers\HomeController::class, 'buy_sell_crypto']);

        Route::get('/buy-bmk-coin', [App\Http\Controllers\HomeController::class, 'buy_bmk_coin']);
        Route::get('/activity-history', [App\Http\Controllers\HomeController::class, 'activity_history']);
        Route::get('/documentation', [App\Http\Controllers\HomeController::class, 'documentation']);
        Route::get('/404', [App\Http\Controllers\HomeController::class, 'not_found']);
        Route::get('/utility', [App\Http\Controllers\HomeController::class, 'utility']);
        Route::get('user/earn-history', [App\Http\Controllers\HomeController::class, 'earn_history']);
        Route::get('user/buy-crypto-history', [App\Http\Controllers\HomeController::class, 'buy_crypto_history']);
        Route::get('user/margin-order', [App\Http\Controllers\HomeController::class, 'margin_order']);
        Route::get('user/spot-order', [App\Http\Controllers\HomeController::class, 'spot_order']);
        Route::get('auto_investment_section', [App\Http\Controllers\HomeController::class, 'auto_investment_section']);
        Route::get('user/p2p-order', [App\Http\Controllers\ExpressOrderController::class, 'p2p_order']);
        Route::get('user/p2p-order/view-all', [App\Http\Controllers\ExpressOrderController::class, 'p2p_order']);
        Route::get('user/p2p-order/profit-loss-statement', [App\Http\Controllers\ExpressOrderController::class, 'p2p_order']);
        Route::get('video-section', [App\Http\Controllers\HomeController::class, 'video_section']);
        Route::get('notifications', [App\Http\Controllers\HomeController::class, 'notifications']);
        Route::get('/corporate', [App\Http\Controllers\HomeController::class, 'corporate']);
        Route::get('/wm-gold', [App\Http\Controllers\HomeController::class, 'wm_gold']);
        Route::get('/job-description', [App\Http\Controllers\HomeController::class, 'job_description']);
        Route::get('/express-page', [App\Http\Controllers\HomeController::class, 'express_page']);
        Route::get('/group-Page', [App\Http\Controllers\HomeController::class, 'group_Page']);
        Route::get('/block-Page', [App\Http\Controllers\HomeController::class, 'block_Page']);
        Route::get('/p2p-page', [App\Http\Controllers\HomeController::class, 'p2p_page']);
        Route::get('user/p2p-appeal-history', [App\Http\Controllers\HomeController::class, 'p2p_appeal_history'])->name('appeal-history');

        Route::get('user/express-order', [App\Http\Controllers\ExpressOrderController::class, 'p2p_order']);




        /* -----------------------------buyer seller activities pages ----------*/
        Route::post('/validate_giftcard', [App\Http\Controllers\HomeController::class, 'validate_giftcard']);
        Route::get('/buyer_sell_request', [App\Http\Controllers\HomeController::class, 'buyer_sell_request']);
        Route::post('/buyer_sell_request_accept', [App\Http\Controllers\HomeController::class, 'buyer_sell_request_accept']);
        Route::get('/buyer_sell_request_cancel', [App\Http\Controllers\HomeController::class, 'buyer_sell_request_cancel']);
        Route::post('/check-order', [App\Http\Controllers\HomeController::class, 'CheckOrder']);
        Route::post('/seller-check-order', [App\Http\Controllers\HomeController::class, 'sellerCheckOrder']);

        Route::get('user/other-giftcard-history', [HomeController::class, 'other_giftcard_history'])->name('other-giftcard-history');
        Route::get('user/digital-giftcard', [HomeController::class, 'digital_giftcard'])->name('digital-giftcard');
        Route::get('user/recurring-buy-history', [HomeController::class, 'recurring_buy_history'])->name('recurring-buy-history');




        // ---------------------------------------------------------------
        Route::post('/send_otp_by_secure_email_authenticator', [App\Http\Controllers\HomeController::class, 'send_otp_by_secure_email_authenticator']);
        Route::post('/send_otp_by_changedNew_email_authenticator', [App\Http\Controllers\HomeController::class, 'send_otp_by_changedNew_email_authenticator']);
        Route::post('/send_otp_by_changedNew_phone_authenticator', [App\Http\Controllers\HomeController::class, 'send_otp_by_changedNew_phone_authenticator']);
        Route::post('/change_newEmail_authentication', [App\Http\Controllers\HomeController::class, 'change_newEmail_authentication']);
        Route::post('/change_newPhone_authentication', [App\Http\Controllers\HomeController::class, 'change_newPhone_authentication']);
        Route::post('/verify_google_authenticator', [App\Http\Controllers\HomeController::class, 'verify_google_authenticator']);
        Route::post('/associate_secret_key', [App\Http\Controllers\HomeController::class, 'associate_secret_key']);
        Route::post('/success_google_authenticator', [App\Http\Controllers\HomeController::class, 'success_google_authenticator']);
        Route::post('/remove_action_google_authenticator', [App\Http\Controllers\HomeController::class, 'remove_action_google_authenticator']);
        Route::get('/user/security/{activity_name}', [App\Http\Controllers\HomeController::class, 'account_activity']);
        Route::get('/user/get_security_activity', [App\Http\Controllers\HomeController::class, 'get_security_activity']);
        Route::post('/user/get_security_activity_new', [App\Http\Controllers\HomeController::class, 'get_security_activity_new']);
        Route::post('/user/get_security_activity_new_withLimit', [App\Http\Controllers\HomeController::class, 'get_security_activity_new_withLimit']);
        Route::get('/user/disable-account', [App\Http\Controllers\HomeController::class, 'disable_account']);
        Route::get('/navigation', [App\Http\Controllers\HomeController::class, 'nav_dummy']);
        Route::get('users/seller-confirm-order', [App\Http\Controllers\HomeController::class, 'seller_confirm_order']);
        Route::get('/post-ads', [App\Http\Controllers\HomeController::class, 'postAdd'])->name('post-ads');
        Route::get('/my-ads', [App\Http\Controllers\HomeController::class, 'myAdd'])->name('my-ads');
        Route::get('advertiserDetail', [App\Http\Controllers\HomeController::class, 'advertiserDetailbyadvertiseId'])->name('advertiserDetail');


        /*---------------------End Website Pages -----------*/

        /*---------------------Express Order Pages -----------*/
        Route::get('/user/express-order/{id}', [App\Http\Controllers\ExpressOrderController::class, 'express_order'])->name('express_order');


        Route::get('/user/express-confirmed-order-buyer-info', [App\Http\Controllers\ExpressOrderController::class, 'express_confirmed_order_buyer_info'])->name('confirmedBuyerOrder');
        Route::get('user/express-confirmed-order-buyer-infoById/{id}', [App\Http\Controllers\ExpressOrderController::class, 'express_confirmed_order_buyer_infoById'])->name('confirmedBuyerOrderById');

        Route::get('/user/express-confirmed-order-seller-info', [App\Http\Controllers\ExpressOrderController::class, 'express_confirmed_order_seller_info'])->name('confirmedSellerOrder');
        Route::get('/user/express-confirmed-order-seller-infoById/{id}', [App\Http\Controllers\ExpressOrderController::class, 'express_confirmed_order_seller_infoById'])->name('confirmedSellerOrderById');
        Route::get('/user/get-pending-orders', [App\Http\Controllers\ExpressOrderController::class, 'getPendingOrders'])->name('getPendingOrders');
        Route::get('/express-buy-sell-trade', [App\Http\Controllers\ExpressOrderController::class, 'express_buy_sell_crypto']);



        /*---------------------End Express Order Pages -----------*/

        /*---------------------End Website Pages -----------*/


        Route::get('user/logout', [App\Http\Controllers\HomeController::class, 'logout']);
        Route::get('user/confirm-pay-method', [App\Http\Controllers\HomeController::class, 'payment_panel']);
        Route::get('user/confirmed-order-info', [App\Http\Controllers\HomeController::class, 'confirmed_order_info'])->name('confirmorder');
        Route::get('user/confirmed-order-info/{id}', [App\Http\Controllers\HomeController::class, 'confirmedOrderInfo'])->name('confirmedOrderInfo');
        Route::get('p2p-trading/buy/confirm-order-info', [App\Http\Controllers\HomeController::class, 'p2p_trading_buy_confirm_order_info'])->name('p2p-trading-buy');
        Route::get('users/seller-confirm-order/{id}', [App\Http\Controllers\HomeController::class, 'seller_confirm_confirmedOrderInfo'])->name('sellerconfirmedOrderInfo');
        Route::get('p2p-trading/buy/confirm-order-info/{id}', [App\Http\Controllers\HomeController::class, 'p2p_trading_buy_confirm_order_info_by_id']);
        Route::get('p2p-trading/buy/seller-confirm-order-info/{id}', [App\Http\Controllers\HomeController::class, 'p2p_trading_seller_confirm_order_info'])->name('p2p-trading-seller-confirm-order');


        // 	Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);
        /* register for business */
        // 	Route::get('/register-business', [App\Http\Controllers\HomeController::class, 'register_business']);


        // require __DIR__.'/auth.php';
    }
);



//Admin Route

Route::get('admin/login', [AdminController::class, 'admin_login']);
Route::get('admin/dashboard', [AdminController::class, 'admin_dashboard']);

//commented on 05032023
// Route::get('admin/manage-gift-card', [App\Http\Controllers\AdminController::class, 'manage_gift_card']);
// Route::post('admin/genertae-gift-card', [App\Http\Controllers\AdminController::class, 'generate_gift_card']);
// Route::post('admin/import-gift-card', [App\Http\Controllers\AdminController::class, 'import_gift_card']);
//commented on 05032023

Route::get('admin/manage-gift-card', [App\Http\Controllers\GiftcardController::class, 'manage_gift_card']);
Route::post('admin/manage-gift-card-filter', [App\Http\Controllers\GiftcardController::class, 'manage_gift_card_filter']);
Route::post('admin/gift-card-filter-with-limit', [App\Http\Controllers\GiftcardController::class, 'gift_card_filter_with_limit']);
Route::post('admin/user-filter-with-limit', [App\Http\Controllers\GiftcardController::class, 'user_filter_with_limit']);
Route::post('admin/filter-users', [App\Http\Controllers\GiftcardController::class, 'filter_users']);
Route::get('admin/user-role/{id}', [App\Http\Controllers\GiftcardController::class, 'get_UserRole_by_userId']);
Route::get('admin/role-users/{role_name}', [App\Http\Controllers\GiftcardController::class, 'get_Allusers_by_role']);


Route::post('admin/genertae-gift-card', [App\Http\Controllers\GiftcardController::class, 'generate_gift_card']);
Route::post('admin/import-gift-card', [App\Http\Controllers\GiftcardController::class, 'import_gift_card']);
Route::get('admin/currency-use-case', [App\Http\Controllers\GiftcardController::class, 'currency_use_case']);



Route::get('admin/manage-chat', [AdminController::class, 'manage_chat']);
Route::get('admin/manage-order', [AdminController::class, 'new_chat']);
// Route::get('admin/test5', [App\Http\Controllers\AdminController::class, 'test5']);

// Route::get('login', [App\Http\Controllers\AdminController::class, 'admin_login']);
// Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'admin_dashboard']);
// Route::get('manage-gift-card', [App\Http\Controllers\AdminController::class, 'manage_gift_card']);
// Route::post('genertae-gift-card', [App\Http\Controllers\AdminController::class, 'generate_gift_card']);
// Route::post('import-gift-card', [App\Http\Controllers\AdminController::class, 'import_gift_card']);
// Route::get('manage-chat', [App\Http\Controllers\AdminController::class, 'manage_chat']);
// Route::get('manage-order', [App\Http\Controllers\AdminController::class, 'manage_order']);


Route::group(
    ['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => ['setlocale', 'auth:web']],
    function () {
        // Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);
    }
);

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth']
], function () {
    Route::get('userRoleControle', [App\Http\Controllers\RoleController::class, 'userRoleControle']);
    Route::get('searchUserlist/{string}', [App\Http\Controllers\RoleController::class, 'searchUserlist']);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\Api\UserController::class);
    Route::resource('plans', App\Http\Controllers\PlanController::class);
});


Route::group(
    ['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => ['setlocale', 'auth:web']],
    function () {
        Route::get('user/payment/c2c/add/Paytm', [App\Http\Controllers\PaymentController::class, 'show_paytm']);
        Route::post('user/payment/c2c/add/Paytm', [App\Http\Controllers\PaymentController::class, 'Paytm']);
        Route::get('user/payment/c2c/add/IMPS', [App\Http\Controllers\PaymentController::class, 'show_Imps']);
        Route::post('user/payment/c2c/add/IMPS', [App\Http\Controllers\PaymentController::class, 'Imps']);
        Route::get('user/payment/c2c/add/UPI', [App\Http\Controllers\PaymentController::class, 'show_Upi']);
        Route::post('user/payment/c2c/add/UPI', [App\Http\Controllers\PaymentController::class, 'Upi']);

        Route::get('user/payment/c2c/add/Bank-Transfer-INDIA', [App\Http\Controllers\PaymentController::class, 'show_Bank_transfer_india']);
        Route::post('user/payment/c2c/add/Bank-Transfer-INDIA', [App\Http\Controllers\PaymentController::class, 'Bank_transfer_india']);

        Route::post('user/payment/c2c/delete/paymentMethods', [App\Http\Controllers\PaymentController::class, 'delete_paymentMethod']);
    }
);

// Route::middleware(['2fa'])->group(function () {
//   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     Route::get('/verify_google_authenticator', [App\Http\Controllers\HomeController::class, 'verify_google_authenticator'])->name('verify_google_authenticator');
//     Route::post('/2fa', function () {
//         return redirect(route('home'));
//     })->name('2fa');
// });

Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/googleLogin', 'handleGoogleCallback');
});

Route::controller(TwitterController::class)->group(function () {
    Route::get('auth/twitter', 'redirectToTwitter')->name('auth.twitter');
    Route::get('auth/twitter/callback', 'handleTwitterCallback');
});

Route::get('get-currencies/', [App\Http\Controllers\HomeController::class, 'get_currencies']);
//   Route::get('testcamera/', [App\Http\Controllers\HomeController::class, 'testcamera']);

// Route::get('/login/google', 'GoogleLoginController@redirect')->name('login.google-redirect');
// Route::get('/login/google/callback', 'GoogleLoginController@callback')->name('login.google-callback');

// routes for popup if user already loggedin
Route::get('LoggedinWithemail-confirm-redirection/', [App\Http\Controllers\HomeController::class, 'confirmed_ifLoggedinWithEmail_Rediection']);
Route::get('LoggedinWithphone-confirm-redirection/', [App\Http\Controllers\HomeController::class, 'confirmed_ifLoggedinWithPhone_Rediection']);


/* Routes for buyer and seller */

Route::post('fetch-user', [HomeController::class, 'fetch_user'])->name('fetch-user');
Route::get('update-last-activity', [HomeController::class, 'update_last_activity'])->name('update-last-activity');

Route::get('update-user-last-activity', [HomeController::class, 'update_user_last_activity'])->name('update-user-last-activity');
Route::get('check-user-online', [ChatController::class, 'check_user_online'])->name('check-user-online');

Route::post('insert-chat', [HomeController::class, 'insert_chat'])->name('insert-chat');

Route::post('fetch-user-chat-history', [HomeController::class, 'fetch_user_chat_history'])->name('fetch-user-chat-history');

Route::post('upload-image', [HomeController::class, 'uploadImage'])->name('upload-image');

Route::post('update-is-type-status', [HomeController::class, 'update_is_type_status'])->name('update-is-type-status');
Route::post('remove-chat', [HomeController::class, 'remove_chat'])->name('remove-chat');
Route::post('/buyer-confirmation-status', [HomeController::class, 'buyer_confirmation_status'])->name('buyer-confirmation-status');
Route::post('/seller-confirmation-status', [HomeController::class, 'seller_confirmation_status'])->name('seller-confirmation-status');

Route::post('/seller-transfer-confirmation-status', [HomeController::class, 'seller_transfer_confirmation_status'])->name('seller-transfer-confirmation-status');

Route::post('/request-crypto-transfer', [HomeController::class, 'request_crypto_transfer'])->name('request-crypto-transfer');
Route::post('/request-amount-transfer', [HomeController::class, 'request_amount_transfer'])->name('request-amount-transfer');

Route::post('/seller-ratings', [HomeController::class, 'seller_ratings'])->name('seller-ratings');
Route::post('/buyer-ratings', [HomeController::class, 'buyer_ratings'])->name('buyer-ratings');
Route::post('/tradeStatus', [HomeController::class, 'check_if_tradeStatus'])->name('check-tradeStatus');
Route::post('/ratingStatus', [HomeController::class, 'check_if_ratingStatus'])->name('check-ratingStatus');
//Route::post('/seller-check-order', [App\Http\Controllers\HomeController::class, 'sellerCheckOrder']);
Route::post('/delete-rating', [App\Http\Controllers\HomeController::class, 'delete_rating'])->name('deleteRating');
Route::post('user/popup-user-detail', [App\Http\Controllers\HomeController::class, 'popupUserDetail']);
Route::get('/cancel-order/{id}', [App\Http\Controllers\HomeController::class, 'cancelOrder'])->name('cancel-order');
Route::get('/check-order-status/{id}', [App\Http\Controllers\HomeController::class, 'checkOrderStatus'])->name('check-order-status');
Route::get('/seller-side-cancel-order/{id}', [App\Http\Controllers\HomeController::class, 'sellerSidecancleOrder'])->name('seller-side-cancel-order');
Route::post('/Check-notification', [App\Http\Controllers\HomeController::class, 'Check_notification'])->name('CheckNotification');
Route::post('/Check-seller-notification', [App\Http\Controllers\HomeController::class, 'CheckSellerNotification'])->name('CheckSellerNotification');

Route::post('user/set_notification_language', [App\Http\Controllers\HomeController::class, 'set_notification_language']);
Route::post('user/set_onSiteNotification', [App\Http\Controllers\HomeController::class, 'set_onSiteNotification']);
Route::post('user/set_emailmarketing_status', [App\Http\Controllers\HomeController::class, 'set_emailmarketing_status']);
Route::post('get-notification', [App\Http\Controllers\HomeController::class, 'getNotifiation'])->name('getNotifiation');
Route::post('get-latest-notification', [App\Http\Controllers\HomeController::class, 'getLatestNotifiation'])->name('getLatestNotifiation');

Route::get('/count-notification', [App\Http\Controllers\HomeController::class, 'countNotification'])->name('count-notification');
Route::post('get-notification-activity', [App\Http\Controllers\HomeController::class, 'getNotificationActivity'])->name('getNotificationActivity');
Route::post('/user/update-account-status', [App\Http\Controllers\HomeController::class, 'update_user_account_status']);



Route::get('get-ajax-notification', [App\Http\Controllers\HomeController::class, 'getAjaxNotifiation'])->name('getAjaxNotifiation');
Route::get('credit_amount_url', [App\Http\Controllers\WealthmarkCron::class, 'credit_amount_url']);
Route::post('getOrderbyId', [App\Http\Controllers\HomeController::class, 'getOrderbyId'])->name('getOrderbyId');
Route::post('getOrderDetailbyId', [App\Http\Controllers\HomeController::class, 'getOrderDetailbyId'])->name('getOrderDetailbyId');
Route::post('getAndUpdateOrderDetailbyId', [App\Http\Controllers\HomeController::class, 'getAndUpdateOrderDetailbyId'])->name('getAndUpdateOrderDetailbyId');

Route::post('get-available-coins-marketWallet', [App\Http\Controllers\HomeController::class, 'getTotalAvailableCoinsInMarketWallet'])->name('getTotalAvailableCoinsInMarketWallet');
Route::post('get-available-coins-selectedCurrency', [App\Http\Controllers\HomeController::class, 'getTotalAvailableCoinsInselectedCurrency'])->name('getTotalAvailableCoinsInselectedCurrency');

Route::post('getOrderDetails', [App\Http\Controllers\HomeController::class, 'getOrderDetails'])->name('getOrderDetails');
Route::post('getOrderDetailsbyAds', [App\Http\Controllers\HomeController::class, 'getOrderDetailsbyAds'])->name('getOrderDetailsbyAds');

Route::post('sellBmkPostById', [App\Http\Controllers\HomeController::class, 'sellBmkPostById'])->name('sellBmkPostById');
Route::get('order-export', [App\Http\Controllers\HomeController::class, 'orderExport'])->name('orderexport');
Route::post('get-view-all-p2p-orders', [App\Http\Controllers\HomeController::class, 'getviewallp2pOrders'])->name('getviewallp2pOrders');
Route::post('selected-order-export', [App\Http\Controllers\HomeController::class, 'selectedexportOrder'])->name('selectedexportOrder');
Route::get('get-selected-order-export', [App\Http\Controllers\HomeController::class, 'getselectedexportOrder'])->name('getselectedexportOrder');
Route::post('buyer_canceled_duetoseller', [App\Http\Controllers\HomeController::class, 'IfBuyerCanceledOrderDueToSeller'])->name('IfBuyerCanceledOrderDueToSeller');
Route::post('submit-post-ads', [App\Http\Controllers\HomeController::class, 'SubmitPostAds'])->name('SubmitPostAds');
Route::post('edit-post-ads', [App\Http\Controllers\HomeController::class, 'EditPostAds'])->name('EditPostAds');
Route::get('change-post-ads-status', [App\Http\Controllers\HomeController::class, 'ChangePostAdsStatus'])->name('ChangePostAdsStatus');
Route::get('ChangePostAdsStatusall', [App\Http\Controllers\HomeController::class, 'ChangePostAdsStatusall'])->name('ChangePostAdsStatusall');
Route::post('ads', [HomeController::class, 'adsPostdelete'])->name('post.delete');
Route::get('getOrderStatusByUserID', [App\Http\Controllers\TwitterController::class, 'getOrderStatusByUserID'])->name('getOrderStatusByUserID');
Route::get('getexpressOrderStatus', [App\Http\Controllers\TwitterController::class, 'getexpressOrderStatus'])->name('getexpressOrderStatus');
Route::post('validate-country-pay-conditions', [App\Http\Controllers\HomeController::class, 'validateCountrypayConditions'])->name('validateCountrypayConditions');
Route::post('getpaymentmethodByuserid', [App\Http\Controllers\ExpressOrderController::class, 'getpaymentmethodByuserid'])->name('getpaymentmethodByuserid');
Route::post('trade', [App\Http\Controllers\TwitterController::class, 'trade'])->name('trade');
Route::get('recheckpostAds', [App\Http\Controllers\TwitterController::class, 'recheckpostAds'])->name('recheckpostAds');
Route::post('expressOrderConfirmation', [App\Http\Controllers\ExpressOrderController::class, 'expressOrderConfirmation'])->name('expressOrderConfirmation');

Route::post('getpaymentMethodById', [App\Http\Controllers\HomeController::class, 'getpaymentMethodById'])->name('getpaymentMethodById');
Route::post('getPostbyId', [App\Http\Controllers\HomeController::class, 'getPostbyId'])->name('getPostbyId');
Route::get('loggedinDeviceInfo', [App\Http\Controllers\HomeController::class, 'loggedinDeviceInfo'])->name('loggedinDeviceInfo');
Route::get('getAddressDetailByPincode', [App\Http\Controllers\HomeController::class, 'getAddressDetailByPincode'])->name('getAddressDetailByPincode');
Route::post('checkOrderAcceptedorNot', [App\Http\Controllers\ExpressOrderController::class, 'checkOrderAcceptedorNot'])->name('checkOrderAcceptedorNot');
Route::post('edit-ads', [App\Http\Controllers\HomeController::class, 'editAds'])->name('edit-ads');

Route::post('checkpendingorders', [App\Http\Controllers\HomeController::class, 'checkpendingorders'])->name('checkpendingorders');
Route::post('getPaymentDetailBymethodId', [App\Http\Controllers\HomeController::class, 'getPaymentDetailBymethodId'])->name('getPaymentDetailBymethodId');

Route::Post('user/express-order', [App\Http\Controllers\ExpressOrderController::class, 'getExpress_Order'])->name('getExpress_Order');
Route::get('/express-buy-sell-trade-22052023', [App\Http\Controllers\ExpressOrderController::class, 'express_buy_sell_crypto_22052023']);

Route::Post('checkorderurl', [App\Http\Controllers\HomeController::class, 'checkorderurl'])->name('checkorderurl');
Route::post('test', [App\Http\Controllers\PaymentController::class, 'test'])->name('test');

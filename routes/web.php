<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\KycVerificationController;
use App\Http\Controllers\ExpressOrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StakingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\GiftcardController;
use App\Http\Controllers\Api\RegisterEntityTypeController;
use App\Http\Controllers\Api\EntityController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\WealthmarkAdminController;
use App\Http\Controllers\WealthmarkCronController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- Utility Routes ---
Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('event:clear');
    return "All caches were cleared";
})->name('clear.cache');

// --- Social Auth ---
Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/googleLogin', 'handleGoogleCallback');
});

Route::controller(TwitterController::class)->group(function () {
    Route::get('auth/twitter', 'redirectToTwitter')->name('auth.twitter');
    Route::get('auth/twitter/callback', 'handleTwitterCallback');
});

// --- Admin Section (Authenticated) ---
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('userRoleControle', [RoleController::class, 'userRoleControle']);
    Route::get('searchUserlist/{string}', [RoleController::class, 'searchUserlist']);
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('plans', PlanController::class);
});

// --- Admin Public/Unprotected/Mixed (Review needed but kept as is for compatibility) ---
Route::get('admin/login', [WealthmarkAdminController::class, 'admin_login']);
Route::get('admin/dashboard', [WealthmarkAdminController::class, 'admin_dashboard']);
Route::get('admin/manage-chat', [WealthmarkAdminController::class, 'manage_chat']);
Route::get('admin/manage-order', [WealthmarkAdminController::class, 'new_chat']);

Route::controller(GiftcardController::class)->prefix('admin')->group(function () {
    Route::get('manage-gift-card', 'manage_gift_card');
    Route::post('manage-gift-card-filter', 'manage_gift_card_filter');
    Route::post('gift-card-filter-with-limit', 'gift_card_filter_with_limit');
    Route::post('user-filter-with-limit', 'user_filter_with_limit');
    Route::post('filter-users', 'filter_users');
    Route::get('user-role/{id}', 'get_UserRole_by_userId');
    Route::get('role-users/{role_name}', 'get_Allusers_by_role');
    Route::post('genertae-gift-card', 'generate_gift_card');
    Route::post('import-gift-card', 'import_gift_card');
    Route::get('currency-use-case', 'currency_use_case');
    Route::get('fluctuate_wallet_coin', 'fluctuate_wallet_coin'); // Was outside prefix
});


// --- Main Localized Group ---
Route::group(
    ['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => ['setlocale']],
    function () {

        // --- AuthController Routes ---
        Route::controller(AuthController::class)->group(function () {
            // Authentication & Registration
            Route::get('/login', 'login');
            Route::get('/login/{msg}', 'login');
            Route::get('/check_login', 'check_login');
            Route::get('/register', 'register');
            Route::get('/register-person', 'register_person');
            Route::get('/register-business', 'register_business');
            Route::get('/register-business/{ref}', 'register_business');
            Route::get('/register-action', 'register_action');
            Route::get('/register-person/{ref}', 'register_person');
            Route::get('user/logout', 'logout');

            // Password Reset
            Route::get('/reset-password', 'reset_password');
            Route::get('/request_reset_password_otp', 'request_reset_password_otp');
            Route::post('verify_reset_pass_otp', 'verify_reset_pass_otp');
            Route::post('verify_old_user_reset_pass_otp', 'verify_old_user_reset_pass_otp');
            Route::post('submit_reset_pass', 'submit_reset_pass');
            Route::get('pass_success', 'pass_success');
            Route::get('request-reset-password', 'request_reset_password');
            Route::get('user/security', 'security');
            Route::get('user/password', 'password');
            Route::post('user/submit_change_pass', 'submit_change_pass');
            Route::post('user/submit_change_pass_otp', 'submit_change_pass_otp');
            Route::get('user/change_password_otp', 'change_password_otp');

            // OTP & 2FA
            Route::get('/request_potp', 'request_potp');
            Route::get('/request_eotp', 'request_eotp');
            Route::get('/request_otp', 'request_otp');
            Route::get('/request_login_phone_otp', 'request_login_phone_otp');
            Route::get('/request_login_email_otp', 'request_login_email_otp');
            Route::post('/verify_otp', 'verify_otp');
            Route::post('verify_email_otp', 'verify_email_otp');
            Route::post('verify_phone_otp', 'verify_phone_otp');
            Route::post('verify_Lphone_otp', 'verify_Lphone_otp');
            Route::post('verify_Lemail_otp', 'verify_Lemail_otp');
            Route::post('send_otp_by_secure_mail', 'send_otp_by_secure_mail');
            Route::post('send_otp_by_secure_phone', 'send_otp_by_secure_phone');
            Route::post('verify_enable_email', 'verify_enable_email');
            Route::post('send_otp_enable_secure_phone', 'send_otp_enable_secure_phone');
            Route::post('send_otp_enable_secure_mail', 'send_otp_enable_secure_mail');
            Route::post('verify_enable_phone', 'verify_enable_phone');
            Route::post('verifyOTP_beforeAddPayment', 'verifyOTP_beforeAddPayment');
            Route::get('user/enable-sms-authentication', 'enable_sms_authentication');
            Route::get('user/enable-email-authentication', 'enable_email_authentication');
            Route::get('enable-google-authenticator', 'enable_google_authenticator');
            Route::get('change-google-authenticator', 'change_google_authenticator');
            Route::get('remove-google-authenticator', 'remove_google_authenticator');
            Route::get('/change-email-authenticator', 'change_email_authenticator');
            Route::get('/change-sms-authenticator', 'change_sms_authenticator');
            Route::post('/send_otp_by_secure_email_authenticator', 'send_otp_by_secure_email_authenticator');
            Route::post('/send_otp_by_changedNew_email_authenticator', 'send_otp_by_changedNew_email_authenticator');
            Route::post('/send_otp_by_changedNew_phone_authenticator', 'send_otp_by_changedNew_phone_authenticator');
            Route::post('/change_newEmail_authentication', 'change_newEmail_authentication');
            Route::post('/change_newPhone_authentication', 'change_newPhone_authentication');

            // User Dashboard & Features
            Route::get('user/dashboard', 'dashboard');
            Route::get('user/identification', 'identification');
            Route::get('user/payment', 'payment');
            Route::get('user/referral', 'referral');
            Route::get('user/settings', 'settings');
            Route::get('user/api-management', 'api_management');
            Route::get('user/task-center', 'task_center');
            Route::get('user/market', 'market');
            Route::get('user/reward-center', 'reward_center');
            Route::get('user/overview', 'overview');
            Route::get('user/fiat-and-spot', 'fiat_and_spot');
            Route::get('user/funding', 'funding');
            Route::get('user/futures', 'futures');
            Route::get('user/earn', 'earn');
            Route::get('user/jex', 'jex');
            Route::get('user/wazirx', 'wazirx');
            Route::get('user/pexpay', 'pexpay');
            Route::get('user/tokocrypto', 'tokocrypto');
            Route::get('user/wealthmark_tr', 'wealthmark_tr');
            Route::get('user/coin-staking', 'staking_coin');
            Route::get('user/coin-staking-term-and-conditions', 'coin_staking_term_conditions');

            // APIs / KYC Check
            Route::get('/get_coin_record', 'get_coin_record');
            Route::get('/get_our_coin', 'get_our_coin');
            Route::get('/is-entity-verified/{id}', 'is_entity_verified');
            Route::get('/need-kyc', 'need_kyc');
        });

        // --- HomeController Routes ---
        Route::controller(HomeController::class)->group(function () {
            // Public Pages
            Route::get('/', 'index');
            Route::post('/upload_img', 'upload_img');
            Route::get('set_country', 'setCookie');
            Route::get('get_country', 'getCookie');
            Route::post('validate_giftcard', 'validate_giftcard');
            Route::get('/buyer_sell_request', 'buyer_sell_request');
            Route::post('/buyer_sell_request_accept', 'buyer_sell_request_accept');
            Route::get('/buyer_sell_request_cancel', 'buyer_sell_request_cancel');
            Route::post('/check-order', 'CheckOrder');
            Route::post('/seller-check-order', 'sellerCheckOrder');
            Route::get('user/other-giftcard-history', 'other_giftcard_history')->name('other-giftcard-history');
            Route::get('user/digital-giftcard', 'digital_giftcard')->name('digital-giftcard');
            Route::get('user/recurring-buy-history', 'recurring_buy_history')->name('recurring-buy-history');

            // P2P Trading (Legacy Wrappers/Stubs)
            Route::get('p2p-trading', 'p2p_trading');
            Route::get('p2p-trading/btc', 'p2p_trading_BTC');
            Route::get('p2p-trading/bmk', 'p2p_trading_bmk');
            Route::get('p2p-trading/eth', 'p2p_trading_eth');
            Route::get('p2p-trading/buy', 'p2p_trading_Buy');
            Route::get('p2p-trading-dev/bmk', 'p2p_trading_bmk_dev');
            Route::get('p2p-trading-dev', 'p2p_trading_dev');
            Route::get('fetch-date-from-sql', 'fetchDateFromSQL');
            Route::post('verify_otp_giftcard', 'verify_otp_giftcard');
            Route::post('buy_with_otp_giftcard', 'buy_with_otp_giftcard');
            Route::get('user/confirm-pay-method', 'payment_panel');
            Route::get('user/confirmed-order-info', 'confirmed_order_info')->name('confirmorder');
            Route::get('user/confirmed-order-info/{id}', 'confirmedOrderInfo')->name('confirmedOrderInfo');
            Route::get('p2p-trading/buy/confirm-order-info', 'p2p_trading_buy_confirm_order_info')->name('p2p-trading-buy');
            Route::get('users/seller-confirm-order/{id}', 'seller_confirm_confirmedOrderInfo')->name('sellerconfirmedOrderInfo');
            Route::get('p2p-trading/buy/confirm-order-info/{id}', 'p2p_trading_buy_confirm_order_info_by_id');
            Route::get('p2p-trading/buy/seller-confirm-order-info/{id}', 'p2p_trading_seller_confirm_order_info')->name('p2p-trading-seller-confirm-order');

            // Trading & Market
            Route::get('markets', 'markets');
            Route::get('convert', 'convert');
            Route::get('classic', 'classic');
            Route::get('advanced', 'advanced');
            Route::get('margin', 'margin');
            Route::get('p2p', 'p2p');
            Route::get('strategy-trading', 'strategy_trading');
            Route::get('swap-farming', 'swap_farming');
            Route::get('fan-token', 'fan_token');
            Route::get('wealthmark-futures-overview', 'wealthmark_futures_overview');
            Route::get('responsible-trading', 'responsible_trading');
            Route::get('coin-m-futures', 'coin_m_futures');
            Route::get('vanilla-options', 'vanilla_options');
            Route::get('leveraged-tokens', 'leveraged_tokens');
            Route::get('battle', 'battle');

            // Finance
            Route::get('card-deposite', 'card_deposite');
            Route::get('cash-balance', 'cash_balance');
            Route::get('third-party-payment', 'third_party_payment');
            Route::get('wealthmark-visa-card', 'wealthmark_visa_card');
            Route::get('crypto-loans', 'crypto_loans');
            Route::get('wealthmark-pay', 'wealthmark_pay');
            Route::get('nft', 'nft');
            Route::get('wealthmark-earn', 'wealthmark_earn');
            Route::get('savings', 'savings');
            Route::get('staking', 'staking');
            Route::get('bmk-vault', 'bm_vault');
            Route::get('dual-investment', 'dual_investment');
            Route::get('liquidity-farming', 'liquidity_farming');
            Route::get('auto-invest', 'auto_invest');
            Route::get('wealthmark-pool', 'wealthmark_pool');

            // Footer / Static
            Route::get('/exchange', 'exchange');
            Route::get('/academy', 'academy');
            Route::get('/vip-institutional-services', 'vip_institutional_services');
            Route::get('/broker', 'broker');
            Route::get('/cloud', 'cloud');
            Route::get('/charity', 'charity');
            Route::get('/dex', 'dex');
            Route::get('/labs', 'labs');
            Route::get('/launchpad', 'launchpad');
            Route::get('/research', 'research');
            Route::get('/gift-card', 'gift_card');
            Route::get('/trust-wallet', 'trust_wallet');
            Route::get('/careers', 'careers');
            Route::get('/press', 'press');
            Route::get('/business-contacts', 'business_contacts');
            Route::get('/community', 'community');
            Route::get('/wealthmark-blog', 'wealthmark_blog');
            Route::get('/terms', 'terms');
            Route::get('/privacy', 'privacy');
            Route::get('/announcements/', 'announcements');
            Route::get('/announcements-topics/{slugs}', 'announcements_topics');
            Route::get('/announcements-articles/{slugs}', 'announcements_articles');
            Route::post('/search-announcements', 'search_announcements');
            Route::get('/news', 'news');
            Route::get('/notices', 'notices');
            Route::get('/downloads', 'downloads');
            Route::get('/desktop-application', 'desktop_application');
            Route::get('/execution-solutions', 'execution_solutions');
            Route::get('/referral-offers', 'referral_offers');
            Route::get('/affiliate', 'affiliate');
            Route::get('/bmkoin', 'bmkoin');
            Route::get('/otc-trading', 'otc_trading');
            Route::get('/listing-application', 'listing_application');
            Route::get('/p2p-merchant-application', 'p2p_merchant_application');
            Route::get('/historical-market-data', 'historical_market_data');
            Route::get('/give-us-feedback', 'give_us_feedback');
            Route::get('/support-center', 'support_center');
            Route::get('/submit-request', 'submit_request');
            Route::get('/api-documentation', 'api_documentation');
            Route::get('/fees', 'fees');
            Route::get('/trading-rules', 'trading_rules');
            Route::get('/wealthmark-verify', 'wealthmark_verify');
            Route::get('/law-enforcement-requests', 'law_enforcement_requests');

            // Buy Pages
            Route::get('/buy-bmkoin', 'buy_bmkoin');
            Route::get('/buy-busd', 'buy_busd');
            Route::get('/buy-bitcoin', 'buy_bitcoin');
            Route::get('/buy-ethereum', 'buy_ethereum');
            Route::get('/buy-litecoin', 'buy_litecoin');
            Route::get('/buy-ripple', 'buy_ripple');
            Route::get('/buy-bitcoin-cash', 'buy_bitcoin_cash');
            Route::get('/buy-dogecoin', 'buy_dogecoin');
            Route::get('/buy-defi', 'buy_defi');
            Route::get('/buy-shib', 'buy_shib');
            Route::get('/buy-tradable-altcoins', 'buy_tradable_altcoins');
            Route::get('/chart-demo', 'chart_demo');

            // New Website Pages
            Route::get('/simple-earn', 'simple_earn');
            Route::get('/wm-pool', 'wm_pool');
            Route::get('/buy-sell-trade', 'buy_sell_crypto');
            Route::get('/buy-bmk-coin', 'buy_bmk_coin');
            Route::get('/activity-history', 'activity_history');
            Route::get('/documentation', 'documentation');
            Route::get('/404', 'not_found');
            Route::get('/utility', 'utility');
            Route::get('user/earn-history', 'earn_history');
            Route::get('user/buy-crypto-history', 'buy_crypto_history');
            Route::get('user/margin-order', 'margin_order');
            Route::get('user/spot-order', 'spot_order');
            Route::get('auto_investment_section', 'auto_investment_section');
            Route::get('video-section', 'video_section');
            Route::get('notifications', 'notifications');
            Route::get('/corporate', 'corporate');
            Route::get('/wm-gold', 'wm_gold');
            Route::get('/job-description', 'job_description');
            Route::get('/express-page', 'express_page');
            Route::get('/group-Page', 'group_Page');
            Route::get('/block-Page', 'block_Page');
            Route::get('/p2p-page', 'p2p_page');
            Route::get('user/p2p-appeal-history', 'p2p_appeal_history')->name('appeal-history');
            Route::get('user/failed-digilocker-details', 'failed_digilocker_details');
            Route::post('/decode-blob', 'decoeBlob');

            // API / Chat / Notifications / Profile Logic (Mixed)
            Route::post('fetch-user', 'fetch_user')->name('fetch-user');
            Route::get('update-last-activity', 'update_last_activity')->name('update-last-activity');
            Route::get('update-user-last-activity', 'update_user_last_activity')->name('update-user-last-activity');
            Route::post('insert-chat', 'insert_chat')->name('insert-chat');
            Route::post('fetch-user-chat-history', 'fetch_user_chat_history')->name('fetch-user-chat-history');
            Route::post('upload-image', 'uploadImage')->name('upload-image');
            Route::post('update-is-type-status', 'update_is_type_status')->name('update-is-type-status');
            Route::post('remove-chat', 'remove_chat')->name('remove-chat');
            Route::post('/buyer-confirmation-status', 'buyer_confirmation_status')->name('buyer-confirmation-status');
            Route::post('/seller-confirmation-status', 'seller_confirmation_status')->name('seller-confirmation-status');
            Route::post('/seller-transfer-confirmation-status', 'seller_transfer_confirmation_status')->name('seller-transfer-confirmation-status');
            Route::post('/request-crypto-transfer', 'request_crypto_transfer')->name('request-crypto-transfer');
            Route::post('/request-amount-transfer', 'request_amount_transfer')->name('request-amount-transfer');
            Route::post('/seller-ratings', 'seller_ratings')->name('seller-ratings');
            Route::post('/buyer-ratings', 'buyer_ratings')->name('buyer-ratings');
            Route::post('/tradeStatus', 'check_if_tradeStatus')->name('check-tradeStatus');
            Route::post('/ratingStatus', 'check_if_ratingStatus')->name('check-ratingStatus');
            Route::post('/delete-rating', 'delete_rating')->name('deleteRating');
            Route::post('user/popup-user-detail', 'popupUserDetail');
            Route::get('/cancel-order/{id}', 'cancelOrder')->name('cancel-order');
            Route::get('/check-order-status/{id}', 'checkOrderStatus')->name('check-order-status');
            Route::get('/seller-side-cancel-order/{id}', 'sellerSidecancleOrder')->name('seller-side-cancel-order');
            Route::post('/Check-notification', 'Check_notification')->name('CheckNotification');
            Route::post('/Check-seller-notification', 'CheckSellerNotification')->name('CheckSellerNotification');
            Route::post('user/set_notification_language', 'set_notification_language');
            Route::post('user/set_onSiteNotification', 'set_onSiteNotification');
            Route::post('user/set_emailmarketing_status', 'set_emailmarketing_status');
            Route::post('get-notification', 'getNotifiation')->name('getNotifiation');
            Route::post('get-latest-notification', 'getLatestNotifiation')->name('getLatestNotifiation');
            Route::get('/count-notification', 'countNotification')->name('count-notification');
            Route::post('get-notification-activity', 'getNotificationActivity')->name('getNotificationActivity');
            Route::post('/user/update-account-status', 'update_user_account_status');
            Route::get('get-ajax-notification', 'getAjaxNotifiation')->name('getAjaxNotifiation');
            Route::post('getOrderbyId', 'getOrderbyId')->name('getOrderbyId');
            Route::post('getOrderDetailbyId', 'getOrderDetailbyId')->name('getOrderDetailbyId');
            Route::post('getAndUpdateOrderDetailbyId', 'getAndUpdateOrderDetailbyId')->name('getAndUpdateOrderDetailbyId');
            Route::post('get-available-coins-marketWallet', 'getTotalAvailableCoinsInMarketWallet')->name('getTotalAvailableCoinsInMarketWallet');
            Route::post('get-available-coins-selectedCurrency', 'getTotalAvailableCoinsInselectedCurrency')->name('getTotalAvailableCoinsInselectedCurrency');
            Route::post('getOrderDetails', 'getOrderDetails')->name('getOrderDetails');
            Route::post('getOrderDetailsbyAds', 'getOrderDetailsbyAds')->name('getOrderDetailsbyAds');
            Route::post('sellBmkPostById', 'sellBmkPostById')->name('sellBmkPostById');
            Route::get('order-export', 'orderExport')->name('orderexport');
            Route::post('get-view-all-p2p-orders', 'getviewallp2pOrders')->name('getviewallp2pOrders');
            Route::post('selected-order-export', 'selectedexportOrder')->name('selectedexportOrder');
            Route::get('get-selected-order-export', 'getselectedexportOrder')->name('getselectedexportOrder');
            Route::post('buyer_canceled_duetoseller', 'IfBuyerCanceledOrderDueToSeller')->name('IfBuyerCanceledOrderDueToSeller');
            Route::post('submit-post-ads', 'SubmitPostAds')->name('SubmitPostAds');
            Route::post('edit-post-ads', 'EditPostAds')->name('EditPostAds');
            Route::get('change-post-ads-status', 'ChangePostAdsStatus')->name('ChangePostAdsStatus');
            Route::get('ChangePostAdsStatusall', 'ChangePostAdsStatusall')->name('ChangePostAdsStatusall');
            Route::post('ads', 'adsPostdelete')->name('post.delete');
            Route::post('validate-country-pay-conditions', 'validateCountrypayConditions')->name('validateCountrypayConditions');
            Route::post('getpaymentMethodById', 'getpaymentMethodById')->name('getpaymentMethodById');
            Route::post('getPostbyId', 'getPostbyId')->name('getPostbyId');
            Route::get('loggedinDeviceInfo', 'loggedinDeviceInfo')->name('loggedinDeviceInfo');
            Route::get('getAddressDetailByPincode', 'getAddressDetailByPincode')->name('getAddressDetailByPincode');
            Route::post('edit-ads', 'editAds')->name('edit-ads');
            Route::post('checkpendingorders', 'checkpendingorders')->name('checkpendingorders');
            Route::post('getPaymentDetailBymethodId', 'getPaymentDetailBymethodId')->name('getPaymentDetailBymethodId');
            Route::Post('checkorderurl', 'checkorderurl')->name('checkorderurl');
            Route::post('/verify_google_authenticator', 'verify_google_authenticator');
            Route::post('/associate_secret_key', 'associate_secret_key');
            Route::post('/success_google_authenticator', 'success_google_authenticator');
            Route::post('/remove_action_google_authenticator', 'remove_action_google_authenticator');
            Route::get('/user/security/{activity_name}', 'account_activity');
            Route::get('/user/get_security_activity', 'get_security_activity');
            Route::post('/user/get_security_activity_new', 'get_security_activity_new');
            Route::post('/user/get_security_activity_new_withLimit', 'get_security_activity_new_withLimit');
            Route::get('/user/disable-account', 'disable_account');
            Route::get('/navigation', 'nav_dummy');
            Route::get('users/seller-confirm-order', 'seller_confirm_order');
            Route::get('/post-ads', 'postAdd')->name('post-ads');
            Route::get('/my-ads', 'myAdd')->name('my-ads');
            Route::get('advertiserDetail', 'advertiserDetailbyadvertiseId')->name('advertiserDetail');
            Route::get('get-currencies/', 'get_currencies');
        });
        // --- ExpressOrderController Routes ---
        Route::controller(ExpressOrderController::class)->group(function () {
            Route::get('/user/express-order/{id}', 'express_order')->name('express_order');
            Route::get('/user/express-confirmed-order-buyer-info', 'express_confirmed_order_buyer_info')->name('confirmedBuyerOrder');
            Route::get('user/express-confirmed-order-buyer-infoById/{id}', 'express_confirmed_order_buyer_infoById')->name('confirmedBuyerOrderById');
            Route::get('/user/express-confirmed-order-seller-info', 'express_confirmed_order_seller_info')->name('confirmedSellerOrder');
            Route::get('/user/express-confirmed-order-seller-infoById/{id}', 'express_confirmed_order_seller_infoById')->name('confirmedSellerOrderById');
            Route::get('/user/get-pending-orders', 'getPendingOrders')->name('getPendingOrders');
            Route::get('/express-buy-sell-trade', 'express_buy_sell_crypto');
            Route::get('user/p2p-order', 'p2p_order');
            Route::get('user/p2p-order/view-all', 'p2p_order');
            Route::get('user/p2p-order/profit-loss-statement', 'p2p_order');
            Route::get('user/express-order', 'p2p_order');
            Route::post('getpaymentmethodByuserid', 'getpaymentmethodByuserid')->name('getpaymentmethodByuserid');
            Route::post('expressOrderConfirmation', 'expressOrderConfirmation')->name('expressOrderConfirmation');
            Route::post('checkOrderAcceptedorNot', 'checkOrderAcceptedorNot')->name('checkOrderAcceptedorNot');
            Route::Post('user/express-order', 'getExpress_Order')->name('getExpress_Order');
            Route::get('/express-buy-sell-trade-22052023', 'express_buy_sell_crypto_22052023');
        });

        // --- KycVerificationController Routes ---
        Route::controller(KycVerificationController::class)->group(function () {
            Route::get('user/KycApiLogin', 'KycApiLogin');
            Route::get('user/ApiLogin', 'CallKycApi');
            Route::get('user/identify', 'identify');
            Route::get('user/verifyDigilocker', 'verifyDigilocker');
            Route::get('user/getwayverifyDigilocker', 'getwayverifyDigilocker');
            Route::get('user/redirectdigilocker', 'redirectdigilocker');
            Route::get('user/callbackdigilocker', 'callbackdigilocker');
            Route::post('user/update-digilocker-aadhaarAndType', 'update_digilocker_aadhaarAndType');
            Route::get('user/read-identity-document', 'read_identity_document');
            Route::get('user/verifyFaceWithId', 'verifyFaceWithId');
            Route::get('user/verifyPan', 'verify_pan_card');
            Route::get('user/verifyPanNumber', 'verify_pan_number');
        });

        // --- Api\UserController Routes ---
        Route::controller(UserController::class)->group(function () {
            Route::get('/custom_read_mail_template', 'custom_read_mail_template');
            Route::post('save_personal_info', 'save_personal_info');
            Route::post('save_id_card_info', 'save_id_card_info');
            Route::post('save_selfie_info', 'save_selfie_info');
            Route::post('user/update_user_column', 'update_user_column');
        });

        // --- Api\EntityController Routes ---
        Route::controller(EntityController::class)->group(function () {
            Route::get('entity-enterprise', 'entity_enterprise');
            Route::get('entity-verification', 'verifyEntity');
            Route::get('entity-dashboard', 'entityDashboard');
            Route::get('/entityUpdate/{id}', 'update_entity');
            Route::get('/relatedPartiesUpdate/{id}', 'update_related_parties');
            Route::get('/businessDocumentUpdate/{id}', 'update_business_docs');
            Route::get('/entityProfile', 'entity_profile');
        });

        // --- RegisterEntityTypeController Routes ---
        Route::controller(RegisterEntityTypeController::class)->group(function () {
            Route::post('/create-entity', 'register');
            Route::get('/create-entity', 'register');
            Route::get('/delete-entity/{id}', 'delete');
        });

        // --- StakingController Routes ---
        Route::controller(StakingController::class)->group(function () {
            Route::post('user/submit-staking-record', 'submit_staking_record');
            Route::get('user/get_staking_coin_detail', 'get_staking_coin_detail');
            Route::get('user/get_coin_for_staking', 'get_coin_for_staking');
            Route::get('user/get_recurring_coin_detail', 'get_recurring_coin_detail');
            Route::post('user/genrate-staking-record-otp', 'genrate_staking_record_otp');
        });

        // --- PaymentController Routes ---
        Route::controller(PaymentController::class)->group(function () {
            Route::get('user/payment/c2c/add/Paytm', 'show_paytm');
            Route::post('user/payment/c2c/add/Paytm', 'Paytm');
            Route::get('user/payment/c2c/add/IMPS', 'show_Imps');
            Route::post('user/payment/c2c/add/IMPS', 'Imps');
            Route::get('user/payment/c2c/add/UPI', 'show_Upi');
            Route::post('user/payment/c2c/add/UPI', 'Upi');
            Route::get('user/payment/c2c/add/Bank-Transfer-INDIA', 'show_Bank_transfer_india');
            Route::post('user/payment/c2c/add/Bank-Transfer-INDIA', 'Bank_transfer_india');
            Route::post('user/payment/c2c/delete/paymentMethods', 'delete_paymentMethod');
            Route::post('test', 'test')->name('test');
        });

        // --- ChatController Routes (Non-admin) ---
        Route::get('check-user-online', [ChatController::class, 'check_user_online'])->name('check-user-online');

        // --- TwitterController Routes (Mixed usage in current file) ---
        Route::controller(TwitterController::class)->group(function () {
            Route::get('getOrderStatusByUserID', 'getOrderStatusByUserID')->name('getOrderStatusByUserID');
            Route::get('getexpressOrderStatus', 'getexpressOrderStatus')->name('getexpressOrderStatus');
            Route::post('trade', 'trade')->name('trade');
            Route::get('recheckpostAds', 'recheckpostAds')->name('recheckpostAds');
        });

        // --- Other ---
        Route::get('credit-amount-url', [WealthmarkCronController::class, 'creditAmountUrl'])->name('credit-amount-url');

        // --- Simple Views/Closures ---
        Route::get('/about-us', function () {
            return view('web.about-us');
        });
        Route::get('/register_business_process', function () {
            return view('auth.register_business_process');
        });
        Route::get('/camera_test', function () {
            return view('auth.camera-test');
        });
    }
);

<?php
function getClientIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$ipaddress = getClientIP();

function ip_details($ip)
{
    $json = @file_get_contents("https://ipinfo.io/{$ip}/json?token=ebaa850199a396");
    if ($json === false) {
        return [];
    }
    $details = json_decode($json, true);
    return is_array($details) ? $details : [];
}

$details = ip_details($ipaddress);

// Use null coalescing operator to avoid undefined array key
$country_code = $details['country'] ?? null;

$url = 'http://country.io/names.json';
$json = @file_get_contents($url);
$jo = $json ? json_decode($json) : null;

?>
<?php if(Cookie::get('country_name')=="" && $country_code && $jo && isset($jo->$country_code)): ?>
    <input type="hidden" id="country_code" value="<?php echo $jo->$country_code; ?>">
    <!--<span class="screen-darken"></span>-->
    <div class="select_country">
        <div class="div">
            <p>To see content specific to your location, we suggest <span class="country_name"><?php echo $jo->$country_code; ?>
                </span> as your preferred country/region. </p>
        </div>
        <div class="div">
            <a href="javascript:void(0)" class="contineu" id="set_country">Continue</a>
        </div>
        <div class="div">
            <a class="close" href="javascript:void(0)"> X</a>
        </div>
    </div>
<?php endif; ?>

<div class="download_mob_app d-none d-md-none bg-light-theme">
    <div class="app-down">
        <div alt="" class="app-down-img"></div>
        <div class="app-down-main">
            <div class="app-down-div">WEALTHMARK APP - COMING SOON!</div>
            <div class="app-down-div-1">Secure, fast and elegant.</div>
        </div>

        <a href="#" class="app-down-link">
            <svg viewBox="0 0 24 24" fill="none" class="app-down-link-icon">
                <path d="M19 20H5v2h14v-2zM13 14.5l4.6-4.7 1.5 1.4-7.1 7.1-7.1-7.1 1.4-1.4 4.7 4.7V2h2v12.5z"
                    fill="currentColor"></path>
            </svg>
        </a>
        <svg viewBox="0 0 24 24" fill="none" class="app-down-close">
            <path d="M13.4 12l6.6 6.6-1.4 1.4-6.6-6.6L5.4 20 4 18.6l6.6-6.6L4 5.4 5.4 4l6.6 6.6L18.6 4 20 5.4 13.4 12z"
                fill="currentColor"></path>
        </svg>
    </div>
</div>
<?php /**PATH D:\wealthMark\resources\views/template/top_header.blade.php ENDPATH**/ ?>
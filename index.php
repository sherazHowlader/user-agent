<?php
$agent = $_SERVER["HTTP_USER_AGENT"];

if (preg_match('/Trident\/\d+/', $agent)) {
    echo "You're using Internet Explorer";
} else if (preg_match('/Edg\/\d+/', $agent)) {
    echo "You're using Microsoft Edge";
} else if (preg_match('/Firefox[\/\s](\d+\.\d+)/', $agent)) {
    echo "You're using Firefox";
} else if (preg_match('/OPR[\/\s](\d+\.\d+)/', $agent)) {
    echo "You're using Opera";
} else if (preg_match('/Chrome[\/\s](\d+\.\d+)/', $agent)) {
    echo "You're using Chrome";
}


echo '<br>';
echo 'Your User Agent - ' . $agent;
echo '<br>';
echo '<br>';
// ====================================================
$ipaddress = file_get_contents("http://ipecho.net/plain");
$ipdat = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ipaddress));

$country = $ipdat->geoplugin_countryName;
echo  'Your Country - ' . $country;
echo '<br>';
echo  'Your Server Address - ' . $_SERVER['SERVER_ADDR'];
echo '<br>';
echo  'Your Remote Address - ' . $_SERVER['REMOTE_ADDR'];
echo '<br>';
echo  'Your Port - ' . $_SERVER['REMOTE_PORT'];
echo '<br>';
echo '<br>';
// ====================================================
$n = 198;
function getName($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    $common = 'QUFFLUhq';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $common . $randomString;
}

echo getName($n);

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$rss_url = 'https://newsletter.pukulenam.id/campaigns-rss?a=gMUkVEEzvMQh1VqoNTyvyUBkHbxXA2&i=1';
$api_endpoint = 'https://api.rss2json.com/v1/api.json?rss_url=';
$data = json_decode( file_get_contents($api_endpoint . urlencode($rss_url)) , true );

if($data['status'] == 'ok'){
    foreach ($data['items'] as $item) {
        //echo "{$item['link']} \r\n";
        $link = $item['link'];
        break;
    }
    
}
$url = $link;
header("Location: $url");  

?>
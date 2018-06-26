<?php

date_default_timezone_set('Asia/Karachi');

$yx = opendir('Bangash');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$timelineid = array(
'100009977767685',

);

$kingid=$timelineid[rand(0,count($timelineid)-1)];

$stat= json_decode(auto('https://graph.facebook.com/'.$kingid.'/feed?limit=02&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('timeline.txt','a');
fwrite($y,$x); fclose($y);

$react = array(
'LOVE',
'WOW',
'LIKE',

);

$reactiontype=$react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type='.$reactiontype.'&access_token='.$token.'&method=POST');

echo 'Sukses';

}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>
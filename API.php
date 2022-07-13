<?php
$userid = $_GET['id'];//get url data
?>
<?php
$url  = "https://inventory.roblox.com/v1/users/$userid/assets/collectibles?sortOrder=Asc&limit=100";//url to curl feel free to add cusor
$curl = curl_init($url);//send curl to get rap{
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);//}
$responseJson  = "$resp";
$responseArr   = json_decode($responseJson, true);
$add           = array_sum(array_column($responseArr['data'], 'recentAveragePrice'));//sumup rap with out cusor 
echo $add//print rpa
?>

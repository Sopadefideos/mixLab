<?php
/*
"access_token": "LHV8pp8rbJevG2kEp3vGmPTCmW4akTCT"

CLIENT ID
xpMmhJZyhusmVc7ZNG

CLIENT SECRET
QeseL3PSqP5A8gXN2GU7hZgjpHa2uZeQ

OPath_code = 2kZJ2b5ZTp
*/
/*
function curl($enlace){
  // Get cURL resource
  $curl = curl_init();
  // Set some options - we are passing in a useragent too here
  curl_setopt_array($curl, [
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => $enlace,
      CURLOPT_USERAGENT => 'Codular Sample cURL Request'
  ]);
  // Send the request & save response to $resp
  $resp = curl_exec($curl);
  return $resp;
}
*/
$artista = $_GET['nombre'];
$cadena = str_replace(" ","+",$artista);
$enlaceBusca = 'https://api.mixcloud.com/search/?q='.$cadena.'&type=cloudcast';

$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $enlaceBusca,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);

$arrayJson = json_decode($resp, true);
var_dump($arrayJson);

$solucionEnlaceCancion = $arrayJson['data'][0]['key'];
echo $solucionEnlaceCancion;
// Close request to clear up some resources
curl_close($curl);

$cadenaEmbed = str_replace("/","%2F",$solucionEnlaceCancion);
echo $cadenaEmbed;
$enlaceEmbed = 'https://www.mixcloud.com/oembed/?url=https%3A%2F%2Fwww.mixcloud.com'.$cadenaEmbed.'/&format=json'
echo $enlaceEmbed;
$arrayJsonEmbed = json_decode(curl($enlaceEmbed), true);
var_dump($arrayJsonEmbed);


?>

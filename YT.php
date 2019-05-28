<?php
//key=AIzaSyCsxN10g8Az8BSGNhMQGLwb14sFhJllnco

$artista = $_GET['nombre'];
$cadena = str_replace(" ","%2B",$artista);
$enlaceBusca = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=3&order=relevance&q='.$cadena.'&topicId=%2Fm%2F02lkt&type=video&key=AIzaSyCsxN10g8Az8BSGNhMQGLwb14sFhJllnco';

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
$videoID = $arrayJson['items'][0]['id']['videoId'];
$enlaceYTEmbed = 'https://www.youtube.com/embed/'.$videoID;

 ?>

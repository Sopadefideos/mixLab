<?php
//TOQUETEAR PARA EL WEB SCRAPING
require 'simple_html_dom.php';
//COGE DE LA URL LOS DATOS DEL FORMULARIO
$nombre=$_GET['nombre'];
$cadena = str_replace(" ","%20",$nombre);
$html2 = file_get_html('https://www.residentadvisor.net/search.aspx?searchstr='.$cadena);
//SI HAY ALGUN ARTIRSTA PILLA SU NOMBRE
$comprobarBusca = $html2->find('section.content');
foreach ($comprobarBusca as $contents) {
  if($contents->find('h1', 0)->plaintext == 'Your search returned 0 results.'){
    echo"<script>alert('El artista no existe.');window.location.href=\"index.php\"</script>";
  }
}
$contents = $html2->find('section.content.clearfix div.pb8 a');
if(empty($contents)){
  echo"<script>alert('Especifica mas sobre el artista.');window.location.href=\"index.php\"</script>";
}
$contenidoBusca1 = $html2->find('section.content.clearfix');
foreach ($contenidoBusca1 as $contents) {
  $dj = $contents->find('div.pb8 a', 0)->href;
}


//SE USA PARA LA IMG DESDE LA URL DEL ARTISTA
$contenidoBusca2 = $html2->find('section.content.clearfix');
foreach ($contenidoBusca2 as $contents) {
  $img = $contents->find('div.fl.col2 img',0)->attr;
  $imgDj = 'https://residentadvisor.net'.$img["data-cfsrc"];
}
//SACAR TEXTO DE LA BIOGRAFIA
$html1BIOGRAFIA = file_get_html('https://residentadvisor.net'.$dj.'/biography');
$contenidoBusca3 = $html1BIOGRAFIA->find('div.pr8.reading-line-height', 0);

?>

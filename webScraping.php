<!DOCTYPE HTML>
<?php
//TOQUETEAR PARA EL WEB SCRAPING
require 'simple_html_dom.php';

//COGE DE LA URL LOS DATOS DEL FORMULARIO
$nombre=$_GET['nombre'];
$cadena = str_replace(" ","%20",$nombre);

$html2 = file_get_html('https://www.residentadvisor.net/search.aspx?searchstr='.$cadena);

//SI HAY ALGUN ARTIRSTA PILLA SU NOMBRE
$contenidoBusca1 = $html2->find('section.content');
foreach ($contenidoBusca1 as $contents) {
  $dj = $contents->find('div.generic.music a', 0)->href;
}

//SE USA PARA LA IMG DESDE LA URL DEL ARTISTA
$contenidoBusca2 = $html2->find('section.content.clearfix');
foreach ($contenidoBusca2 as $contents) {
  $img = $contents->find('div.fl.col2 img',0)->attr;
  $imgDj = 'https://residentadvisor.net'.$img["data-cfsrc"];
}

//$HTML1 ES LA PAGINA DEL ARTISTA NO DEL BUSCADOR
$html1 = file_get_html('https://residentadvisor.net'.$dj);
foreach ($html1 as $artist) {

}


$html1BIOGRAFIA = file_get_html('https://residentadvisor.net'.$dj.'/biography');
$contenidoBusca3 = $html1BIOGRAFIA->find('div.pr8.reading-line-height', 0);

?>

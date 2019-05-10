<!DOCTYPE HTML>
<?php
    $nombre=$_GET['nombre'];
    $cadena = str_replace(" ","%20",$nombre);
    require 'webScraping.php';
    $html = file_get_html('https://www.residentadvisor.net/search.aspx?searchstr='.$cadena);
 ?>

<html lang="ES">
<head>
  <title>MixLab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/estilosMixLab.css">
</head>

<body>
  <!--BUSCADOR CON BOTON-->
  <nav class="navbar navbar-light navbar-expand-md sticky-top bg-light justify-content-md-center justify-content-start" style="padding: 0%;border-bottom: 2px solid green">
      <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="form-inline flex-row justify-content-md-center justify-content-start flex-nowrap" method="get">
            <input class="form-control mr-sm-2 text-success border border-success" type="search" placeholder="Fabrik" aria-label="Fabrik" name="nombre">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
      <div class="navbar-collapse collapse d-flex flex-row-reverse w-100" id="collapsingNavbar2">
          <a href="index.php" class="float-right"><img src="img/MixLablogo.png" class="logoTam float-right"></a>
      </div>
  </nav>

  <li style="background-color: #b7b7b7">
    <section>
      <span class="d-block p-2 text-white" style="background-color: #716d6d;">
        <div>
          <div class="card-header" style="background-color: #716d6d; border-bottom: 2px solid rgba(0, 0, 0, 255); font-size:3vw;">
            MixLab
          </div>
          <div class="card-body" style="background-color: #716d6d;" style="border-bottom: 2px solid rgba(0, 0, 0)">
            <img src="<?php echo $imgDj; ?>" alt="">
            <h5 class="card-title text-success" style="font-size:4vw;"><?php  echo ucwords($nombre); ?></h5>
            <div class="">
              <?php echo $contenidoBusca3; ?>
            </div>
          </div>
        </div>
      </span>
    </section>
  </li>

</body>
</html>

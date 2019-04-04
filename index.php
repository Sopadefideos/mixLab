<!DOCTYPE HTML>
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
  <!--CABEZERA-->
  <div>
    <a href="index.php"><img src="img/MixLablogo.png" class="logoTam"></a>
  </div>


  <!--BUSCADOR CON BOTON-->
  <div class="buscadorColor">
    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline" method="post">
          <input class="form-control mr-sm-2" type="search" placeholder="Fabrik" aria-label="Fabrik">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
  </div>

  <!--IMAGENES SLIDER-->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://media.watchthedj.com/djs/marcos-in-dub.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="http://growsoundmag.com/wp-content/uploads/2018/12/Richie-Hawting-1.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://i1.wp.com/hardgroupteam.com.ar/wp-content/uploads/2018/08/pan-pot.jpg?fit=1920%2C1080&ssl=1" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://i.pinimg.com/originals/3f/16/7b/3f167b889338148e60467905481b9a99.jpg" alt="Fourth slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://aquasella.com/wp-content/uploads/2019/02/nina-kraviz-1.jpg?x31048" alt="Fifth slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--INFO MIXLAB-->

  <li style="background-color: #b7b7b7">
    <section>
      <span class="d-block p-2 text-white" style="background-color: #716d6d;">
        <div>
          <div class="card-header" style="background-color: #716d6d; border-bottom: 2px solid rgba(0, 0, 0, 255); font-size:3vw;">
            MixLab
          </div>
          <div class="card-body" style="background-color: #716d6d;" style="border-bottom: 2px solid rgba(0, 0, 0)">
            <h5 class="card-title text-success" style="font-size:4vw;">Tu plataforma de musica electrónica</h5>
            <p class="card-text d-inline-flex p-2" style="margin-right: 50%; font-size:1.5vw;">
              Somos un equipo de expertos de musica electronica a tu alcance.
              Si sabes lo minimo ya sea un nombre, evento, sala o track, es hora
              que uses nuestro buscador para estar al tanto de todo lo que ocurre.
            </p>
          </div>
        </div>
      </span>
    </section>
  </li>


</body>
</html>

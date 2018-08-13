<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>House of Cut Men</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link rel="stylesheet" href="https://i.icomoon.io/public/temp/df3d07685f/UntitledProject/style.css">
  <!-- Place favicon.ico in the root directory -->

  <link rel="icon" href="img/icon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>

  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <!-- or -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <!-- AoS -->
  <link rel="stylesheet" href="css/aos.css" />

  <!-- Animate CSS-->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <!-- Background Change -->
  <style type="text/css">
<!--
.changebg {
  <?php $dayforbackground=date('N'); ?>
  <?php if ($dayforbackground==1) { ?>background-image:url(img/backLunes.png);<?php } ?>
  <?php if ($dayforbackground==2) { ?>background-image:url(img/backMartes.jpg);<?php } ?>
  <?php if ($dayforbackground==3) { ?>background-image:url(img/backMiercoles.jpg);<?php } ?>
  <?php if ($dayforbackground==4) { ?>background-image:url(img/backJueves.jpg);<?php } ?>
  <?php if ($dayforbackground==5) { ?>background-image:url(img/backViernes.jpg);<?php } ?>
  <?php if ($dayforbackground==6) { ?>background-image:url(img/backSabado.jpg);<?php } ?>
  <?php if ($dayforbackground==7) { ?>background-image:url(img/backDomingo.jpg);<?php } ?>
}
-->
</style>

  <link rel="stylesheet" type="text/css" href="css/styleMain.css">
</head>

<body data-spy="scroll" data-target="#navbar-example2" data-offset="0">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- HTML Site -->
  
<!-- NAVBAR -->

<nav class="navbar navbar-expand-md navbar-dark nav-style sticky-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto row">
      <div class="col-md-1"></div>
      <li class="nav-item col-md-2">
        <a class="nav-link active" href="#nosotros">Nosotros</a>
      </li>
      <li class="nav-item col-md-2">
        <a class="nav-link active" href="#horarios">Horarios</a>
      </li>
      <li class="nav-item col-md-2">
        <a class="nav-link active" href="#precios">Precios</a>
      </li>
      <li class="nav-item col-md-2 dropdown">
        <a id="navbarDropdown" class="nav-link active dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Sucursales</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#boedo">Boedo</a>
          <a class="dropdown-item" href="#vCrespo">Villa Crespo</a>
        </div>
      </li>
      <li class="nav-item col-md-2">
        <a class="nav-link active" href="#contactMain">Contacto</a>
      </li> 
      <div class="col-md-1"></div>
    </ul>
  </div>
</nav>


<!-- HEADER -->

<header class="mainHeader changebg">
  <div class="logoHeader" align="center">
  <div data-aos="zoom-out" data-aos-once="true" class="animated bounce delay-2s">
    <img src="img/logo.png" class="img-fluid">
  </div>
  </div>

  <div class="sloganHeader text-center" data-aos="zoom-in" data-aos-once="true">
    <h2>#VivíLaExperiencia</h2>
  </div>

  <div class="botonCont" align="center">
      <button type="button" class="btn btn-outline-light buttonHeader">Pedí tu turno</button>
  </div>

  <div id="sucursales" class="sucursMain container-fluid">
    <div class="sucBoedo container">
    <h3>Sucursal Boedo</h3>
    <p>Av. Independencia 3825</p>
    <a href="#boedo">Ver</a>
  </div> 
  <span class="separador"></span>
  <div class="sucVCrespo container"> 
    <h3>Sucursal Villa Crespo</h3>
    <p>Av. Lavalleja 619</p>
    <a href="#vCrespo">Ver</a>
  </div> 
  </div>
</header>

 
<div id="nosotros" class="separador2 container-fluid">
  <img src="img/tijera.png">
</div>


<section class="row">
  <article class="container col-md-2 titleNosotros" data-aos="fade-right">
    <h3>NOSOTROS</h3>
  </article>
  <article class="container col-md-4 pictureNosotros">
    <img src="img/nosotros.jpg" class="img-fluid">
  </article>
  <div class="container col-md-1"></div>
  <article class="container col-md-3 textNosotros">
    <h4>Nuestros clientes nos eligen!</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </article>
  <div class="container col-md-2"></div>
</section>


<div id="horarios" class="separador2 container-fluid">
  <img src="img/maquina.png">
</div>


<section class="row">
  <div class="container col-md-2 titleHorarios" data-aos="fade-left"><h3 id="horariosCopy">HORARIOS</h3></div>
   <article class="container col-md-3 textHorarios">
    <h4>Nuestros Horarios</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </article>
  <div class="container col-md-1"></div>
  <article class="container col-md-4 pictureHorarios">
    <img src="img/horarios.jpg" class="img-fluid">
  </article>
  <article class="container col-md-2 titleHorarios" data-aos="fade-left">
    <h3 id="horariosOrig">HORARIOS</h3>
  </article>
</section>


<div id="precios" class="separador2 container-fluid">
  <img src="img/tijera.png">
</div>


<section class="row">
  <article class="container col-md-2 titlePrecios" data-aos="fade-right">
    <h3>PRECIOS</h3>
  </article>
  <article class="container col-md-4 picturePrecios">
    <img src="img/precios.jpg" class="img-fluid">
  </article>
  <div class="container col-md-1"></div>
  <article class="container col-md-3 textPrecios">
    <h4>Lista de precios:</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </article>
  <div class="container col-md-2"></div>
</section>


<div id="clubAmigos" class="separador2 container-fluid">
  <img src="img/maquina.png">
</div>


<section id="boedo" class="row sucursDesc">
    <article class="col-md-6 boedoDesc">
      <div class="sucursDescT">
        <h3>Sucursal Boedo</h3>
        <p>(Avenida Independencia 3825)</p>
      </div>
      <div>
        <h4>Nuestro Staff:</h4>
      </div>
      <div class="row fotos">
        <div class="foto maxi"></div>
        <div class="foto kevin"></div>
        <div class="foto thony"></div>
      </div>
    </article>
    <div class="col-md-6"></div>
</section>

<section id="vCrespo" class="row sucursDesc">
    <div class="col-md-6"></div>
    <article class="col-md-6 crespoDesc">
      <div class="sucursDescT">
        <h3>Sucursal Villa Crespo</h3>
        <p>(Lavalleja 619)</p>
      </div>
      <div>
        <h4>Nuestro Staff:</h4>
      </div>
      <div class="row fotos2">
        <div class="foto maxi"></div>
        <div class="foto kevin"></div>
        <div class="foto thony"></div>
      </div>
    </article>
</section>

<!--<div class="clubDeAmigosSec"><img src="img/clubAmigos.jpg"></div>-->


<footer class="mainFooter row">
  <div class="col-md-6 footerCopy">
    <div class="logoFoot">
      <img src="img/logo.png" class="img-fluid">
    </div>
    <div class="copyright">
      <p>&copy; Copyright 2018. House of Cut Men.</p>
    </div>
  </div>
  <div id="contactMain" class="col-md-6 contactoForm">
    <h3>Contactanos:</h3>
      <form action="recibe.php" method="post" id="form2">
        <div class="camposForm">
          <input type="text" name="nombre" id="campoNombre" placeholder="Nombre" required>
        </div>

        <div class="camposForm">
          <input type="email" name="email" id="campoEmail" placeholder="Email" required>
        </div>

        <div class="camposForm">
          <input type="tel" name="telefono" id="campoTel" placeholder="Telefono">
        </div>        
        <div class="camposForm">
           <textarea name="consulta" placeholder="Consulta" required></textarea>
        </div>
        <input type="submit" value="Enviar"
        class="botonEnvio">   
      </form>
      <div id="mensaje"></div>
  </div>
</footer>

<!--
<button type="button" class="btn btn-secondary botonTurnoFix">Pedir Turno</button>
-->

  <!-- Scripts -->

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="js/plugins.js"></script>
    <!-- Smooth Scroll-->
  <script src="js/main.js"></script>
  <script src="js/jquery.smooth-scroll.min.js"></script>
  <script>
    $('a').smoothScroll();
  </script>

  <!-- AoS Script -->
  <script src="js/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script>
    //$(document).on("ready", function(){
    $(document).ready(function(){
      //Armar funcion para el envio - enviarDatos
      function enviarDatos(){
        $("form").on("submit", function(event){
          //Desactivar el evento por defalult (submit get)
          event.preventDefault();

          //Guardar variable con los datos a enviar
          var datos = $("form").serialize();
          console.log(datos);
          $.ajax({
            //metodo de envio
            "method":"POST",
            //valores a enviar
            "data":datos,
            //url del archivo que recibe
            "url":"recibe.php",
          //Devolucion de los datos
          }).done(function(respuesta){
            $("#mensaje").html(respuesta);
          });
        });
      }

      //Ejecutar enviarDatos()
      enviarDatos();
    });

  </script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>

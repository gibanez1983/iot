<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">

    <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <title>Sanatorio IOT</title>

    <!-- Archivo CSS Bootstrap 5 -->
    <link href="boostrap5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <!-- Archivo CSS Propio -->
    <link href="css/nav.css" rel="stylesheet">
     <link href="css/estilo.css" rel="stylesheet"> 
    <!-- Favicon -->
    <link rel="icon" href="imagenes/favicon.ico">

  </head>
  <body>
    <!-- Archivo JS Bootstrap 5 -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="boostrap5/js/bootstrap.bundle.min.js"></script>
      <main>

        <div class="container-fluid">
          <header>
            <?php
            require_once('header.html');
            ?>
          </header>
      </div>
      <div  class="cuerpo" >
          <?php
          require_once('routing.php');
          ?>
      </div>



      </main>
      <!-- Footer -->
       <footer class="footer mt-auto py-3 bg-light">
      <div class="container">
        <?php
          require_once('footer.html');
        ?>
      </div>
    </footer> 
    <!-- <script >
    $(function(){
          $('.navbar-nav li a').filter(function(){return this.href==location.href}).parent().addClass('activo').siblings().removeClass('activo')
          $('.navbar-nav li a').click(function(){
              $(this).parent().addClass('activo').siblings().removeClass('active')
          })
      })
    </script> -->
   
  </body>
</html>

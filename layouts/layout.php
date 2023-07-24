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

    <!-- Archivo CSS Propio -->
    <link href="css/estilo.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="imagenes/favicon.ico">

  </head>
  <body>
    <!-- Archivo JS Bootstrap 5 -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="boostrap5/js/bootstrap.bundle.min.js"></script>
      <main>

        <div class="container" >

          <!-- Header -->
          <header class="d-flex flex-wrap py-3 mb-5 border-bottom">
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


  </body>
</html>

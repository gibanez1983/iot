<!DOCTYPE html>
<html lang="es">
<head>
    <title>Sanatorio IOT</title>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---- Boostrap CSS -->
    <link href="css/boostrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

    <link rel="shortcut icon" href="imagenes/favicon.ico" />
</head>
<body>
    <header>
      <?php
      require_once('header.html');
      ?>
    </header>
    <section>
        <div  class="cuerpo" >
          <?php
          require_once('routing.php');
          ?>
        </div>
    </section>
    <footer>
      <?php require_once('footer.html'); ?>
    </footer>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>

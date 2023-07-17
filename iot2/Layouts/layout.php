 <?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Sanatorio IOT</title>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---- Boostrap CSS -->
    <link href="css/boostrap.min.css" rel="stylesheet">
    <link href="scss/estilo.css" rel="stylesheet">
    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/typeahead.js"></script>
    <script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <link href="./css/2fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="./js/fileinput.min.js" type="text/javascript"></script>
    <script src="./js/locales/es.js" type="text/javascript"></script>
    -->
    <link rel="shortcut icon" href="img/favicon.ico" />
</head>
<body>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-datepicker3.css">
    <script src="bootstrap/dist/js/bootstrap-datepicker.min.js"></script>
    <header>
      <?php
      require_once('header.php');
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
      <?php require_once('footer.php'); ?>
    </footer>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>

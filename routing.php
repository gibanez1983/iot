 <?php
  if(!isset($_GET['p'])) {
    $_GET['p'] ='';
  }

  if ($_GET['p']=='nosotros' ) {
    require_once('paginas/nosotros.html');
  }elseif ($_GET['p']=='serv_prest' ) {
    require_once('paginas/serv_prest.html');
  }elseif ($_GET['p']=='esp_med') {
    require_once('paginas/esp_med.html');
  }elseif ($_GET['p']=='med_lab') {
    require_once('paginas/med_lab.html');
  }elseif ($_GET['p']=='contacto') {
    require_once('paginas/contacto.html');
  }else{
    require_once('paginas/principal.html');
  }
?>

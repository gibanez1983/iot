 <?php
//session_start();

if(!isset($rta)) {
  $rta ='';
}
//$rta=comprueba_session();
if( $rta==0){
  if(!isset($_GET['p'])) {
    $_GET['p'] ='';
  }

  if ($_GET['p']=='nosotros' ) {
    require_once('paginas/nosotros.html');
  }elseif ($_GET['p']=='serv_prest' ) {
    require_once('paginas/serv_prest.php');
  }elseif ($_GET['p']=='esp_med') {
    require_once('paginas/esp_med.php');
  }elseif ($_GET['p']=='med_lab') {
    require_once('paginas/med_lab.php');
  }elseif ($_GET['p']=='contacto') {
    require_once('paginas/contacto.php');
  }
}
  require_once('paginas/principal.html');
?>

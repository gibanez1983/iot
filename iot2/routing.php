 <?php
//session_start();

if(!isset($rta)) {
  $rta ='';
}
//$rta=comprueba_session();
if( $rta==0){
  if(!isset($_GET['menu'])) {
    $_GET['menu'] ='';
  }
  if(!isset($_GET['sis'])) {
    $_GET['sis'] ='';
  }
  if ($_GET['menu']=='recibos' ) {
    require_once('recibos/recibos.php');
  }elseif ($_GET['menu']=='permiso_user' ) {
    require_once('opciones/usuarios_permisos.php');
  }elseif ($_GET['menu']=='menu_'.$_GET['sis'] ) {
    require_once('reportes/'.$_GET['sis'].'/menu_'.$_GET['sis'].'.php');
    require_once('reportes/'.$_GET['sis'].'/'.$_GET['menu'].'/'.$_GET['menu'].'.php');
  }
}
  require_once('principal.html');
?>

<?php
 if (! isset ($_SESSION)) { session_start (); }//session_start();

if(!isset($rta)) {
  $rta ='';
}
if(!isset($_GET['ini'])) {
  $_GET['ini'] ='';
}
if(!isset($_SESSION["id_usuario"])) {
  $_SESSION["id_usuario"] =0;
}

if($rta==1){
  session_destroy();
  require_once('Layouts/layout.php');
}else{
  if($_GET['ini']==999){
    session_destroy();
		require_once('Layouts/layout.php');
  }else{
    /*if($_SESSION["id_usuario"]>0){
        //require("./lib/conex.php");
        $_SESSION['permisos']='';
        $sql3="select descripcion_corta
        from oficinavirtual.menu as t1
        inner join oficinavirtual.menuxuser as t2 on t1.id_menu=t2.id_menu
        where id_user=".$_SESSION["id_usuario"];
        $result3 = pg_query($sql3);
        while ($row3 = pg_fetch_row($result3)) {
        $_SESSION['permisos'].=$row3[0].' ';
        }
        require_once('Layouts/layout.php');
      }else{*/
      session_destroy();
      require_once('Layouts/layout.php');
    }
  /*}*/
}
?>

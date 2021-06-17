<?php
require_once "../includes/class_user.php";
$user_sistema =new Deporte();
$resultado=$user_sistema->guardar_deporte
($_POST['deporte_user'],
$_POST['hora_user'],
$_POST['inhoraria_user'],
$_POST['profe_user'],
$_POST['cantestud_user']);
echo $resultado;
?>

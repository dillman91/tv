
<?php
include ("../model/accionesclass.php");
$acciones = new Acciones();

$estado = $_REQUEST['estado'];
$codigo = $_REQUEST['codigo'];
echo $estado;
echo "<br>";
echo $codigo;
$acciones->Actualizar($estado,$codigo);
header("Location: tablero.php");
?>



<?php
require 'coreapp/Conection.php';
$conn = new Conection();
$mysqli = $conn->conectar();

echo "Valor recogido:  ";
$primera=$_REQUEST['estado'];
echo $primera;
if($primera===1) {$busca=$mysqli->query('UPDATE campos SET activo=0'); echo"<script language='javascript'>window.location='prueba1.php'</script>;";}
else {$busca=$mysqli->query('UPDATE campos SET activo=1');echo"window.location='prueba1.php'";} }


?>


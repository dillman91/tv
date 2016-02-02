<?php

class Acciones
{
	private $conn;

	function __construct()
	{
		require_once("../coreapp/Conection.php");
		$conection = new Conection();
		$this->conn = $conection->Conectar();
		return $this->conn;
	}

	public function Actualizar($activo, $id)
	{
		$sql = "UPDATE campos SET activo = '$activo' WHERE campos.id = $id LIMIT 1;";
		$this->conn->query($sql) or die($mysqli->error());
	}

	public function ListadoSolicitudes()
	{
		$sql = "SELECT activo FROM campos";
		$data = $this->conn->query($sql);
		return $data;
	}
}

$acciones = new Acciones();
$data = $acciones->ListadoSolicitudes();

while ($fila = $data->fetch_assoc()) {
	echo $fila['activo']."<br>";
}
?>

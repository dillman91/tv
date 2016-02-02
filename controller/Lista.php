<?php 

function MostrarLista(){
	include ("../model/accionesclass.php");

	$acciones = new Acciones();
	$data = $acciones->ListadoSolicitudes();
	
	return $data;
}

 ?>
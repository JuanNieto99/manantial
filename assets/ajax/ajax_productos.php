<?php 
	include '../model/productos.php';
	empty($_POST["case"])?$case=NULL:$case=$_POST["case"];
	$retorno = array();
	switch ($case) {
		case 'productos_inicio':
		 	$lista = Modelproducto::lista();
		 	$data = array('retorno' =>$lista, 'mensaje'  =>array() ,'continuar' =>true );
		break;
		default:
			$data = array('retorno' =>'' , 'mensaje'  =>'' ,'continuar' =>false );
		break;
	}
	$retorno["iniciar"]=$data["continuar"] ;$retorno["mensaje"]=$data["mensaje"];$retorno["adjunto"]=$data["retorno"];
	echo json_encode( $retorno);
 ?>
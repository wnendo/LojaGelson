<?php
require_once("conecta.php");
function listaCategoria($conexao){
	$categorias = array();
	$query = "select * from categorias";
	$resultado = mysqli_query($conexao, $query);
	while($categoria = mysqli_fetch_assoc($resultado)){
		array_push($categorias, $categoria);
	}
	return $categorias;
}
?>
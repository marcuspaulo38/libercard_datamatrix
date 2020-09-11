<?php
	//chama o arquivo de conexão com o bd
	include("connect.php");

	 header("Access-Control-Allow-Origin: *");
	 header("Content-Type: application/json");
	
	$queryString = "SELECT Name FROM dados";
	
	//consulta sql
	$query = mysql_query($queryString) or die(mysql_error());
	
	//faz um looping e cria um array com os campos da consulta
	$paises = array();
	while($pais = mysql_fetch_assoc($query)) {
	    $paises[] = $pais["Name"];
	}
	
	echo json_encode($paises);
?>
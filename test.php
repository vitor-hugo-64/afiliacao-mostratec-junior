<?php

	
	$con = new PDO("mysql:host=172.16.0.2;dbname=MOSTRA_JUNIOR", "site", "sys22wep");

	$rowQuery = $con->prepare("SELECT * FROM M_CADASTRO");

	$rowQuery->execute();

	$datas = $rowQuery->fetchAll(PDO::FETCH_ASSOC);

	for ($i = 0; $i <= count($datas); $i++) { 
		echo $datas[$i]['C_NOME_INSTITUICAO'];
		echo "<br>";		
	}
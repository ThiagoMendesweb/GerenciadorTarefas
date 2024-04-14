<?php
	try{
		$conn =new pdo('mysql:host=192.168.3.246;dbname=test','root','root');
	}catch(PDOExeption $e){
		echo  "Erro ao se conectar''; Erro" . $e->geetMessage();
	}
?>
<?php

session_start();



if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] == 'POST')
{
	
	//capturamos variables
	$user = $_POST['usuario'];
	$pass = $_POST['clave'];



	$err = '';

	//validamos que los campos no esten vacios
	if(empty($user) || empty($pass)){
		$err .= '* Error de datos de acceso';
	}else{

		//le preguntamos al back por los datos mediante curl
    	$data = json_encode(['usuario' => $user, 'clave' => $pass]);
	  $url = 'http://localhost:8888/login';

		$ch = curl_init($url); 
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = json_decode(curl_exec($ch), true);
		curl_close($ch);
		
		//validamos que exista una respuesta
		//validamos datos

		//seteamos la clave con el hash para compararlas
		$claveHash = hash('sha512',$pass);
		
		if(count($result) > 0 && $result[0]['usuario'] == $user && $result[0]['clave'] == $claveHash){
			$_SESSION['usuario'] = $result;
            header('Location: dashboard.php');
		}else{
			$err .= '* Error de datos de acceso';
		}
	
	}
	
  


    
      
    
	
}



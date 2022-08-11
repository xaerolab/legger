<?php
	session_start();

	if(!isset($_SESSION['usuario'])) {
    header('Location: login.php');
	}
	

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--favicon-->
    <link rel="icon" href="./assets/img/dog.png" type="image/png">
    <!--bootstrap-->
    <link rel="stylesheet" href="./assets/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <!--mis estilos-->
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <!--titulo-->
    <title>Navidad Gabrica | Bienvenid@s</title>
</head>
<body>
    
    <nav class="navbar navbar-dark bg-primary">
		<a class="btn btn-success" href="./php/excel.php">Generar reporte excel</a>
		
	</nav>


    <!--contenedor principal-->
    <div class="container">
        <!--fila principal-->
        <div class="row">

        	
            
           

        </div>
    </div>
        
    
    
    
    
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
    <script src="./assets/sweetalert2-11.4.26/package/dist/sweetalert2.all.min.js"></script>
    <script src="./assets/js/functions.js"></script>
</body>
</html>
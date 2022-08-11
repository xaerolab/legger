<?php include 'php/login.php'; ?>

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
    
    <!--contenedor principal-->
    <div class="container">
        <!--fila principal-->
        <div class="row">
            
            <!--columna 02-->
            <div class="col-lg-4"></div>

            <div class="col-lg-4">
                <!--contenedor formulario-->
                <div id="form-container">

                                        
                    <span id="form-title">Inicie Sesion</span>

                    <!--formulario-->
                    <form class="mt-4 mb-4" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                        <div class="form-group mb-3">
                          <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                          
                        </div>

                        <div class="form-group mb-3">
                            <input type="password" class="form-control" name="clave" placeholder="Contraseña">
                            
                        </div>
                            
                        
                        <?php if (!empty($err)):?>
                                
                        <?php echo '<label class="form-label" style="color: #DA0101;">'.$err.'</label>'; ?>
                        
                        <?php endif ?>

                           
                           <button type="submit" class="btn btn-form mt-3" name="login">Iniciar</button>
                           
                        
                      </form>
                </div>
                
            </div>

            <div class="col-lg-4"></div>

        </div>
    </div>
        
    
    
    
    
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
    <script src="./assets/sweetalert2-11.4.26/package/dist/sweetalert2.all.min.js"></script>
    <script src="./assets/js/functions.js"></script>
</body>
</html>
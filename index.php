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
    <!--background texturas-->
    <img class="img-fluid" id="textures" src="./assets/img/textures.png" alt="">

    <!--contenedor principal-->
    <div class="container">
        <!--fila principal-->
        <div class="row">
            
            <!--columna 01-->
            <div class="col-lg-7">
                <img class="img-fluid" src="./assets/img/KV.png" alt="puppie">
            </div>

            <!--columna 02-->
            <div class="col-lg-5">
                <!--contenedor formulario-->
                <div id="form-container">

                    <!--circle badge-->
                    
                    <div class="circle">
                        <span class="circle__content">1.</span>
                    </div>
                    
                    <span id="form-title">Inscripción punto de venta</span>

                    <!--formulario-->
                    <form class="mt-4 mb-4">
                        <div class="form-group mb-3">
                          <input type="text" class="form-control" id="nombre" placeholder="Nombre del cliente">
                          <span id="errNombre" class="errForm"></span>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="nit" placeholder="NIT">
                            <span id="errNit" class="errForm"></span>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="punto" placeholder="Nombre del punto">
                            <span id="errPunto" class="errForm"></span>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="equipo" placeholder="Nombre del equipo">
                            <span id="errEquipo" class="errForm"></span>
                        </div>

                        <div class="form-group mb-3">
                            <select class="form-control" id="ciudad">
                                <option value="default" selected>Ciudad</option>
                                <option value="Bogota">Bogotá</option>
                                <option value="Cali">Cali</option>
                                <option value="Medellin">Medellín</option>
                                <option value="Santa Marta">Santa Marta</option>
                                <option value="Cartagena">Cartagena</option>
                            </select>
                            <span id="errCiudad" class="errForm"></span>
                        </div>
                        
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="promotor" placeholder="Promotor">
                            <span id="errPromotor" class="errForm"></span>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="rtc" placeholder="RTC">
                            <span id="errRtc" class="errForm"></span>
                        </div>

                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="capitan" placeholder="Capitan y/o usuario (solo minúsculas)">
                            <span id="errCapitan" class="errForm"></span>
                        </div>

                        
                        <div class="form-check mb-3">
                          <input type="checkbox" class="form-check-input" id="terminos">
                          <label class="form-check-label" for="terminos"><span id="texto-terminos">He leido y acepto las politicas de tratamiento de datos personales. Conoce terminos y condiciones.</span></label>
                          <span id="errTerminos" class="errForm"></span>
                        </div>

                           <button type="submit" class="btn btn-form" id="register">Siguiente</button>
                           <span id="loader"></span>
                        
                      </form>
                </div>
                
            </div>
        </div>
    </div>
        
    
    
    
    
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
    <script src="./assets/sweetalert2-11.4.26/package/dist/sweetalert2.all.min.js"></script>
    <script src="./assets/js/functions.js"></script>
</body>
</html>
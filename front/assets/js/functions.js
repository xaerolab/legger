$(document).ready(function(){
    console.log('Bienvenidos a esta landing!! 👽');
});

//validacion de formulario
$('#register').on('click',function(e){
    e.preventDefault();

    //validamos nombre
    nombre = $('#nombre').val();

    regexNombre = /^[a-zA-Záéíóúñ ]+$/;

	if(!nombre){
		errNombre = '* Campo requerido';
		$('#errNombre').html(errNombre);
	}else if(!regexNombre.test(nombre)){
		errNombre = '* Caracter no válido';
		$('#errNombre').html(errNombre);
	}else{
		errNombre = '';
		$('#errNombre').html(errNombre);
		nombre = $('#nombre').val();
	}

    //validamos nit
    nit = $('#nit').val();

    regexNit = /^[0-9]+$/;

    if(!nit){
		errNit = '* Campo requerido';
		$('#errNit').html(errNit);
	}else if(!regexNit.test(nit)){
		errNit = '* Caracter no válido';
		$('#errNit').html(errNit);
	}else{
		errNit = '';
		$('#errNit').html(errNit);
		nit = $('#nit').val();
	}

    //validamos nombre del punto
    punto = $('#punto').val();

    regexPunto = /^[a-zA-Záéíóúñ ]+$/;

	if(!punto){
		errPunto = '* Campo requerido';
		$('#errPunto').html(errPunto);
	}else if(!regexPunto.test(punto)){
		errPunto = '* Caracter no válido';
		$('#errPunto').html(errPunto);
	}else{
		errPunto = '';
		$('#errPunto').html(errPunto);
		punto = $('#punto').val();
	}

    //validamos equipo
    equipo = $('#equipo').val();

    regexEquipo = /^[a-zA-Záéíóúñ ]+$/;

	if(!equipo){
		errEquipo = '* Campo requerido';
		$('#errEquipo').html(errEquipo);
	}else if(!regexEquipo.test(equipo)){
		errEquipo = '* Caracter no válido';
		$('#errEquipo').html(errEquipo);
	}else{
		errEquipo = '';
		$('#errEquipo').html(errEquipo);
		equipo = $('#equipo').val();
	}

    //validamos ciudad
    ciudad = $('#ciudad').val();

    if(ciudad == 'default'){
        errCiudad = '* Selecciona ciudad';
        $('#errCiudad').html(errCiudad);
    }else{
        errCiudad = '';
        $('#errCiudad').html(errCiudad);
        ciudad = $('#ciudad').val();
    }

    //validamos promotor
    promotor = $('#promotor').val();

    regexPromotor = /^[a-zA-Záéíóúñ ]+$/;

	if(!promotor){
		errPromotor = '* Campo requerido';
		$('#errPromotor').html(errPromotor);
	}else if(!regexPromotor.test(promotor)){
		errPromotor = '* Caracter no válido';
		$('#errPromotor').html(errPromotor);
	}else{
		errPromotor = '';
		$('#errPromotor').html(errPromotor);
		promotor = $('#promotor').val();
	}

    //validamos rtc
    rtc = $('#rtc').val();

    regexRtc = /^[0-9]+$/;

    if(!rtc){
		errRtc = '* Campo requerido';
		$('#errRtc').html(errRtc);
	}else if(!regexRtc.test(rtc)){
		errRtc = '* Caracter no válido';
		$('#errRtc').html(errRtc);
	}else{
		errRtc = '';
		$('#errRtc').html(errRtc);
		rtc = $('#rtc').val();
	}

    //validamos capitan
    capitan = $('#capitan').val();

    regexCapitan = /^[a-z]+$/;

	if(!capitan){
		errCapitan = '* Campo requerido';
		$('#errCapitan').html(errCapitan);
	}else if(!regexCapitan.test(capitan)){
		errCapitan = '* Caracter no válido';
		$('#errCapitan').html(errCapitan);
	}else{
		errCapitan = '';
		$('#errCapitan').html(errCapitan);
		capitan = $('#capitan').val();
	}

    //validamos terminos
    terminos = $('#terminos').is(':checked');
    
    if(!terminos){
        errTerminos = '* Acepta los terminos';
        $('#errTerminos').html(errTerminos);
    }else{
        errTerminos = '';
        $('#errTerminos').html(errTerminos);
    }

    //si no hay errores en el formulario
    if(!errNombre && !errNit && !errPunto && !errEquipo && !errCiudad && !errPromotor && !errRtc && !errCapitan && !errTerminos){
        
        console.log(nombre, nit, punto, equipo, ciudad, promotor, rtc, capitan, terminos);
        
        

    }
    
    
});
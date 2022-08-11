$(document).ready(function(){
    console.log('Bienvenidos a esta landing!! 👽');
});

//validacion de formulario
$('#register').on('click',function(e){
    e.preventDefault();

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
    

});
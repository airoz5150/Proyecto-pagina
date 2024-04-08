
let formulario = document.getElementById('formulario'),
correo = formulario.correo,
contrasena=formulario.contrasena,
error = document.getElementById('error');

function validar() {
    limpiar()
	validarCorreo()
    validarContrasena()
	
}
function limpiar() {
	if (error.value==null) {
		error.style.display = 'none';
		error.innerHTML = '';
	}
}
function validarCorreo(){
    if (correo.value == '' || correo.value == null){
   error.style.display = 'block';
   error.innerHTML += '<li>completa el campo de "correo"</li>';
   console.log('completa el campo de "correo"');


   }
}


function validarContrasena(){
    if (contrasena.value == '' || contrasena.value == null){
   error.style.display = 'block';
   error.innerHTML += '<li>completa el campo de "contraseña"</li>';
   console.log('Por favor completa el campo de contraseña');
   }
}
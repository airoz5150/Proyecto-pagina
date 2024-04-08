
let formulario = document.getElementById('formulario'),
nombre = formulario.nombre,
apellidos = formulario.apellidos,
correo = formulario.correo,
direccion = formulario.direccion,
telefono = formulario.telefono,
rfc = formulario.rfc,
contrasena=formulario.contrasena,
terminos = formulario.terminos,
errorNombre = document.getElementById('errorNombre');
errorApellido = document.getElementById('errorApellido');
errorCorreo = document.getElementById('errorCorreo');
errorDireccion = document.getElementById('errorDireccion');
errorRFC = document.getElementById('errorRFC');
errorTelefono = document.getElementById('errorTelefono');

// function SoloLetras(e)
// {
// key = e.keyCode || e.which;
// tecla = String.fromCharCode(key).toString();
// letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnopqrstuvwxyzáéíóú";

// especiales = [8,13];
// tecla_especial = false
// for(let i in especiales) {
// if(key == especiales[i]){
//  tecla_especial = true;
//  break;
// }
// }

// if(letras.indexOf(tecla) == -1 && !tecla_especial)
// {
//  alert("Ingresar solo letras");
//  return false;
// }}

function validar() {
	limpiar()
	validarNombre()
	validarApellido()
	validarDireccion()
	validarTelefono()
	validarRFC()
	validarCorreo()
	validarTerminos()
	
}
function limpiar() {
	if (error.value==null) {
		error.style.display = 'none';
		error.innerHTML = '';
	}
	if (errorNombre.value==null) {
		errorNombre.style.display = 'none';
		errorNombre.innerHTML = '';
	}
	if (errorApellido.value==null) {
		errorApellido.style.display = 'none';
		errorApellido.innerHTML = '';
	}
	if (errorTelefono.value==null) {
		errorTelefono.style.display = 'none';
		errorTelefono.innerHTML = '';
	}
}




function validarNombre() {
	let SoloLetras = RegExp('^[A-Z/s]+$', 'i');
	if (nombre.value == '' || nombre.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>completa el campo de nombre</li>';
		console.log('completa el nombre');
		return false
	}
	else {if(!SoloLetras.test(nombre.value)){
		errorNombre.style.display = 'block';
		errorNombre.innerHTML += '<li>ingresa solo letras</li>';
		return false
	}}
	return true
}

function validarApellido() {
	let SoloLetras = RegExp('^[A-Za-z\s]+$', 'i');
	if (apellidos.value == '' || apellidos.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>completa el campo de apellidos</li>';
		console.log('completa el campo apellidos');
		return false
	}else {if(!SoloLetras.test(apellidos.value)){
		errorApellido.style.display = 'block';
		errorApellido.innerHTML += '<li>ingresa solo letras</li>';
		return false
	}}
	return true
}
function validarDireccion() {
	if (direccion.value == '' || direccion.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>completa el campo de direccion</li>';
	
	}
	return true
}
function validarTelefono() {
	let soloNumeros = RegExp('^[0-9]+$', 'i');
	if (telefono.value == '' || telefono.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor completa el campo de telefono</li>';
		return false
	}
	else {if(!soloNumeros.test(telefono.value)){
		errorTelefono.style.display = 'block';
		errorTelefono.innerHTML += '<li>ingresa numeros</li>';
		return false
	}}
	return true
}
function validarRFC() {
	if (rfc.value == '' || rfc.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>ingresa tu rfc</li>';
		console.log('completa el campo de rfc');
		return false
	}
	return true
}

function validarCorreo(){
	 if (correo.value == '' || correo.value == null){
	error.style.display = 'block';
	error.innerHTML += '<li>Por favor completa el campo de correo</li>';
	console.log('Por favor completa el correo');
	return false

	}
	return true
}

function validarTerminos() {
	if(!terminos.checked){
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor acepta los terminos y condiciones</li>';
		console.log('Por favor acepte los terminos');
		return false
	}
	return true
}	


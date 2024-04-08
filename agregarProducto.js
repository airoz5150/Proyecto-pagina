
let formulario = document.getElementById('formulario-productos'),
codigo = formulario.codigo,
descripcion = formulario.descripcion,
categoria = formulario.categoria,
cantidad=formulario.cantidad,
precio=formulario.precio
error = document.getElementById('error');

function validar() {
	limpiar()
	validarCodigo()
	validarDescripcion()
	validarCategoria()
	validarCantidad()
	validarPrecio
	
}
function limpiar() {
	if (error.value==null) {
		error.style.display = 'none';
		error.innerHTML = '';
	}
}



function validarCodigo() {
	if (codigo.value == '' || codigo.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>completa el campo de codigo</li>';
	
	
	}
}
function validarDescripcion() {
	if (descripcion.value == '' || descripcion.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>completa el campo de Descripcion</li>';
		
	
	}
}

function validarCategoria(){
	 if (precio.value == '' || precio.value == null){
	error.style.display = 'block';
	error.innerHTML += '<li>ingresa el precio del producto</li>';
	


	}
}

function validarCantidad() {
	if(cantidad.value == '' || cantidad.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingresa la cantidad</li>';
		
	}
}	

function validarPrecio() {
	if(precio.value == '' || precio.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>ingresa la cantidad</li>';
		
	}
}	


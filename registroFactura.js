let formulario = document.getElementById('formulario'),
fecha = formulario.fecha,
numFactura = formulario.numFactura,
razonSocial = formulario.razonSocial,
nomEmpresa=formulario.nomEmpresa,
direccion=formulario.ciudad
codigoPostal=formulario.codigoPostal
telefono=formulario.telefono
importe=formulario.importe
error = document.getElementById('error');
errornumFactura=document.getElementById('errorNumFactura');
errorTelefono = document.getElementById('errorTelefono');
errorImporte = document.getElementById('errorImporte');


function validar() {
	limpiar()
	validarfecha()
	validarnumFactura()
	validarrazonSocial()
	validarnomEmpresa()
	validardireccion()
    validarcodigoPostal()
    validarTelefono()
    validarimporte()
	
}
function limpiar() {
	if (error.value==null) {
		error.style.display = 'none';
		error.innerHTML = '';   
	}
    if(errornumFactura.value==null){
        errornumFactura.style.display = 'none';
		errornumFactura.innerHTML = '';
    }
}



function validarfecha() {
	if (fecha.value == '' || fecha.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>completa el campo de fecha</li>';
	
	
	}
}
function validarnumFactura() {
    let soloNumeros=RegExp('^[0-9]+$', 'i');
	if (numFactura.value == '' || numFactura.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>completa el campo de numero de factura</li>';
	}else{if (!soloNumeros.test(numFactura.value)){
        errornumFactura.style.display = 'block';
		errornumFactura.innerHTML += '<li>favor de ingresar solo numeros</li>';
    }} 
}

function validarrazonSocial(){
	 if (razonSocial.value == '' || razonSocial.value == null){
	error.style.display = 'block';
	error.innerHTML += '<li>ingresa el campo razon social</li>';
	


	}
}

function validarnomEmpresa() {
	if(nomEmpresa.value == '' || nomEmpresa.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>Por favor ingresa la nombre de la Empresa</li>';
		
	}
}	

function validardireccion() {
	if(direccion.value == '' || direccion.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>ingresa la direccion</li>';
		
	}
}	

function validarcodigoPostal() {
	if(codigoPostal.value == '' || codigoPostal.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>ingresa el codigo postal</li>';
		
	}
}	
function validarTelefono() {
    let soloNumeros=RegExp('^[0-9]+$', 'i');
	if(telefono.value == '' || telefono.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>ingresa el telefono de la empresa</li>';
		
	}else{if (!soloNumeros.test(telefono.value)){
        errorTelefono.style.display = 'block';
		errorTelefono.innerHTML += '<li>favor de ingresar solo numeros</li>';
    }} 
}	
function validarimporte() {
	if(importe.value == '' || importe.value == null){
		error.style.display = 'block';
		error.innerHTML += '<li>ingresa el importe a facturar</li>';
		
	}else{if (!soloNumeros.test(importe.value)){
        errorImporte.style.display = 'block';
		errorImporte.innerHTML += '<li>favor de ingresar solo numeros</li>';
    }} 
}


function validacion(){
	var nombre = document.getElementById("nombre").value;
	var	correo = document.getElementById("correo").value;
	var telefono = document.getElementById("telefono").value;
	var mensaje = document.getElementById("mensaje").value;


	if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) {
  		alert('[ERROR] El campo nombre, no puede quedar vacio');
  		return false;
	}
	else if(!(/\S+@\S+\.\S+/.test(correo)) ) {
  		alert('[ERROR] El campo correo, debe tener el formato abc@abc.com');
  		return false;
	}
	else if( !(/^\d{11}$/.test(telefono)) ) {
  		alert('[ERROR] El campo telefono, solo debe  tener 11 caractares numericos (04171234567)');
  		return false;
	}
	else if( mensaje == null || mensaje.length == 0 || /^\s+$/.test(mensaje) ) {
  		alert('[ERROR] El campo mensaje, no puede quedar vacio');
  		return false;
	}
	return true;

}
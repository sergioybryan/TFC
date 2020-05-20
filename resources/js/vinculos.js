function confirmarBorrar(nombre, id) {
	if (confirm("¿Quieres eliminar el siguiente producto: " + nombre + "?")) {
		window.location="/TFC/public/admin/productos/destroy/"+id+"/"+nombre;
	}
}

function confirmarAñadir() {
	if (confirm("¿Quieres añadir un nuevo producto?")) {
        window.location = "/TFC/public/admin/productos/create";
	}
}

function confirmarEditar(nombre, id) {
	if (confirm("¿Quieres editar el siguiente producto:  " + nombre + "?")) {
        window.location = "/TFC/public/admin/productos/"+id+"/edit";// + id
	}
}

function confirmarVolver() {
	if (confirm("¿Quieres volver a la pagina anterior?")) {
        window.location = "/TFC/public/admin/productos";// 
	}
}

function confirmarCancelar() {
	if (confirm("¿Quieres cancelar?")) {
        window.location = "/TFC/public/admin/productos";// 
	}
}

function mostrarCategorias($c) {
	switch($c) {
		case 'V':
			window.location = "/TFC/public/admin/productos/categoria/"+$c;// 

		  break;
		case "I":
			window.location = "/TFC/public/admin/productos/categoria/"+$c;// 
		  break;
		case "E":
			window.location = "/TFC/public/admin/productos/categoria/"+$c;// 
		  break;
		
		case "H":
			window.location = "/TFC/public/admin/productos/categoria/"+$c;// 
		  break;
		case "T":
			window.location = "/TFC/public/admin/productos/categoria/"+$c;// 
		  break;
		
		default:
		  alert("No existe la categoria seleccionada");
	  }
}
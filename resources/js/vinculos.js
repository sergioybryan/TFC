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

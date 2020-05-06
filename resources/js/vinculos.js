function confirmarBorrar(nombre, id) {
	if (confirm("¿Quieres eliminar el siguiente producto:  " + nombre + "?")) {
		window.location="/TFC/public/admin/productos/destroy/"+id;
	}
}

function confirmarAñadir() {
	if (confirm("¿Quieres añadir un nuevo producto?")) {
        window.location = "/TFC/public/admin/productos/create";
	}
}

function confirmarEditar(nombre, id) {
	if (confirm("¿Quieres editar el siguiente producto:  " + nombre + "?")) {
        window.location = "/TFC/public/admin/productos/"+id+"/edit"// + id
	}
}

function verUsuarios() {
	if (confirm("¿Quieres volver atrás?")) {
		document.location.href = "?orden=VerUsuarios";
	}
}

function volverInicio() {
	if (confirm("¿Quieres volver atrás?")) {
		document.location.href = "index.php?orden=Inicio";
	}
}

function cerrarSesion() {
	document.location.href = "index.php?orden=Cerrar";
}

function altaUsuario() {
	document.location.href = "?orden=Alta";
}

function alerta() {
	alert("Usuario creado");
}
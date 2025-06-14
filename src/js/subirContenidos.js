let subirContenidoBtn = document.getElementById("subirContenidosBtn");
let titulo = document.getElementById("titulo");
let autor = document.getElementById("autor");
let categoria = document.getElementById("categoria");
let tipo_contenido = document.getElementById("tipo_contenido");
let descripcion = document.getElementById("descripcion");
let archivo = document.getElementById("archivo");

subirContenidoBtn.addEventListener('click',()=>{
//if(validarFormulario(document.forms.item(1))) return;
	let data = new FormData(),i=0;
	
	
	data.append(titulo.name,titulo.value);
	data.append(autor.name,autor.value);
	data.append(categoria.name,categoria.value);
	data.append(tipo_contenido.name,tipo_contenido.value);
	data.append(descripcion.name,descripcion.value);
	data.append(subirContenidoBtn.name,subirContenidoBtn.value);
	data.append(archivo.name,archivo.files[0]);
	
	
	fetch('/contenido', {
			method: "POST",
			body: data
		})
	.then(res=>res.text())
	.then(dato => {
	alert(dato);
	
	})
	.catch(err=>alert(err));
});
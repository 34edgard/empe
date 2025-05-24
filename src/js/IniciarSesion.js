let iniciarSesion = document.getElementById('iniciarSesion');
let contrasenaLogin = document.getElementById('contrasenaLogin');
let emailLogin = document.getElementById('emailLogin');

iniciarSesion.addEventListener('click',()=>{
	if(validarFormulario([emailLogin,contrasenaLogin])) return;
	
	
	let formularioData = new FormData();
	 formularioData.append('contrasenaLogin',contrasenaLogin.value);
	 formularioData.append('emailLogin',emailLogin.value);
	fetch('/iniciarSesion', {
			method: "POST",
			body: formularioData
		})
	.then(res=>res.text())
	.then(data => {
	alert(data);
	if(data=="error")return;
	navigation.navigate('/inicio');
	})
	.catch(err=>alert(err));
});

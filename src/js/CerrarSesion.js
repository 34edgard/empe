
let CerrarSesion =()=>{
let s = new Solicitud('/iniciarSesion?cerrarSesion');
  s.get(function(res){
  alert(res);
 navigation.reload();
});
};



let CerrarSesion =()=>{
let s = new Solicitud('/iniciar/sesion?cerrarSesion');
  s.get(function(res){
  alert(res);
 navigation.reload();
});
};


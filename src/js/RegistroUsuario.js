let form = document.getElementById('registro-form');
form.addEventListener('input', ()=> {
  console.log('sssss');
  let opciones = [ {
    minLength: 4,
    maxLength: 10,
    requiredCharacters: "a-zA-Z",
    forbiddenCharacters: "!@#$%><1234567890"
  }, {
    minLength: 10,
    maxLength: 35,
    requiredCharacters: "a-zA-Z",
    forbiddenCharacters: "!#$%"
  }, {
    minLength: 8,
    maxLength: 25,
    requiredCharacters: "a-zA-Z",
    forbiddenCharacters: "'-`"
}];
  validarFormulario(document.forms.item('#registro-form'), opciones);
});
let validarFormulario = (inputs, opcion)=> {
  let valido = new Validador(),
  i = 0,
  vali = true;
  for (let input of inputs) {

    if (input.type == 'submit') {
      input.disabled = false;
      return;
    }
    console.log(input.disabled);
    vali = valido.validarCampo(input.value, opcion[i]);

    document.getElementById(input.id+'-mss').innerHTML = vali[1];
    if (!vali[0])return;
    i++;
  }

};
class Validador {
  // Método para validar un campo
  validarCampo(valor, opciones) {
    // Comprobando longitud mínima
    if (opciones.minLength && valor.length < opciones.minLength) {
      return [false,
        'no tiene la longitud mínima']; // Falló la validación
    }

    // Comprobando longitud máxima
    if (opciones.maxLength && valor.length > opciones.maxLength) {
      return [false,
        'exede la longitud maxima ']; // Falló la validación
    }

    // Comprobando si contiene algún carácter obligado
    if (opciones.requiredCharacters) {
      const regex = new RegExp(`[${opciones.requiredCharacters}]`);
      if (!regex.test(valor)) {
        return [false,
          'este campo debe contener estos caracteres '+opciones.requiredCharacters]; // Falló la validación
      }
    }

    // Comprobando si contiene caracteres prohibidos
    if (opciones.forbiddenCharacters) {
      const regex = new RegExp(`[${opciones.forbiddenCharacters}]`);
      if (regex.test(valor)) {
        return [false,
          'este campo no puede tener estos caracteres '+opciones.forbiddenCharacters]; // Falló la validación
      }
    }

    // Si todas las validaciones pasan
    return [true,
      'este campo es valido'];
  }
}

/* Ejemplo de uso
const validador = new Validador();

const campo1 = "ejemplo123";
const opciones1 = {
    minLength: 5,
    maxLength: 15,
    requiredCharacters: "123",
    forbiddenCharacters: "!@#$%"
};

const esValido1 = validador.validarCampo(campo1, opciones1);
console.log(esValido1 ? "Campo válido" : "Campo no válido"); // Campo válido

const campo2 = "invalid!!";
const opciones2 = {
    minLength: 5,
    maxLength: 10,
    requiredCharacters: "a-zA-Z",
    forbiddenCharacters: "!@#$%"
};

const esValido2 = validador.validarCampo(campo2, opciones2);
console.log(esValido2 ? "Campo válido" : "Campo no válido")
*/
// Campo no válido
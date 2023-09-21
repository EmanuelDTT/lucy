var btnAC = document.getElementById('actu');
btnAC.disabled = false;

const valida = {
  texto: /^[a-zA-Z\u00C0-\u017F\s]+$/,
  numero: /^[0-9]+$/,
  correo: /(\W|^)[\w.\-]{0,25}@(outlook|icloud|gmail)\.com(\W|$)/,
};

const formac = document.getElementById('formAC');
const entradAC = document.querySelectorAll('#formAC input');

let caja1 = true;
let caja2 = true;
let caja3 = true;

const validarCampo = (input) => {
  const tipoCampo = input.name;
  switch (tipoCampo) {
    case 'nombre':
      caja1 = valida.texto.test(input.value);
      document.getElementById('nombree').style.border = caja1 ? 'green solid 1px' : 'solid 1px red';
      break;
    case 'numero':
      caja2 = valida.numero.test(input.value);
      document.getElementById('number').style.border = caja2 ? 'green solid 1px' : 'solid 1px red';
      break;
    case 'email':
      caja3 = valida.correo.test(input.value);
      document.getElementById('e-mail').style.border = caja3 ? 'green solid 1px' : 'solid 1px red';
      break;
  }

  habilitar();
};

const habilitar = () => {
  btnAC.disabled = !caja1 || !caja2 || !caja3;
};

// Agregar los event listeners a los campos para validar en tiempo real
entradAC.forEach((input) => {
  input.addEventListener('input', () => validarCampo(input));
});

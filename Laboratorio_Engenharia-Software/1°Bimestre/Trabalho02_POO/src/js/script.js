import { aplicarMascaraTelefone } from './utils.js';

const radios = document.querySelectorAll('input[name="tipo"]');
const statusDiv = document.getElementById("radioStatus");
const cursoDiv = document.getElementById("curso");

// Máscaras com feedback visual
document.getElementById('foneFixo').addEventListener('input', function() {
  aplicarMascaraTelefone(this);
  validarTelefoneVisual(this, 'fixo');
});

document.getElementById('foneCel').addEventListener('input', function() {
  aplicarMascaraTelefone(this);
  validarTelefoneVisual(this, 'celular');
});

function validarTelefoneVisual(input, tipo) {
  const apenasNumeros = input.value.replace(/\D/g, '');
  const erroFixo = document.getElementById('erro-foneFixo');
  const erroCel = document.getElementById('erro-foneCel');
  
  if (tipo === 'fixo') {
    if (apenasNumeros.length === 10) {
      input.style.borderColor = '#28a745';
      if (erroFixo) erroFixo.style.display = 'none';
    } else if (input.value && apenasNumeros.length !== 10) {
      input.style.borderColor = '#dc3545';
      if (erroFixo) erroFixo.textContent = 'Telefone fixo: (99) 9999-9999';
    } else {
      input.style.borderColor = '#ccc';
    }
  } else {
    if (apenasNumeros.length === 11) {
      input.style.borderColor = '#28a745';
      if (erroCel) erroCel.style.display = 'none';
    } else if (input.value && apenasNumeros.length !== 11) {
      input.style.borderColor = '#dc3545';
      if (erroCel) erroCel.textContent = 'Celular: (99) 99999-9999';
    } else {
      input.style.borderColor = '#ccc';
    }
  }
}

radios.forEach((radio) => {
  radio.addEventListener("change", function () {
    if (this.value === "professor") {
      cursoDiv.innerHTML = `
        <section class='section-input'>
          <label for='area' class='input-title'>Área:</label>
          <input type='text' name='area' id='area' class='input-midie' placeholder='Digite sua área de atuação' required/>
        </section>
      `;

      statusDiv.innerHTML = `
        <section class='section-input'>
          <label for='lattes' class='input-title'>Lattes:</label>
          <input type='text' name='lattes' id='lattes' class='input-larg' placeholder='Digite aqui o endereço do seu Lattes' required/>
        </section>
      `;
    } else if (this.value === "aluno") {
      cursoDiv.innerHTML = `
        <section class='section-input'>
          <label for='cursoAluno' class='input-title'>Curso:</label>
          <input type='text' name='cursoAluno' id='cursoAluno' class='input-midie' placeholder='Digite seu curso' required/>
        </section>
      `;

      statusDiv.innerHTML = "";
    }
  });
});
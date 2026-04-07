import { Aluno } from "./class/Aluno.js";
import { Professor } from "./class/Professor.js";
import { validarCampoObrigatorio } from "./utils.js";

function configurarValidacao() {
  const radios = document.querySelectorAll('input[name="tipo"]');
  const mensagem = document.getElementById("mensagem");
  const form = document.querySelector('.forms');

  let objetoUsuario = null;

  function criarObjetoUsuario() {
    const selecionado = document.querySelector('input[name="tipo"]:checked');
    if (!selecionado) return null;

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const dataNasc = document.getElementById("dataNasc").value;
    const foneFixo = document.getElementById("foneFixo").value;
    const foneCel = document.getElementById("foneCel").value;
    const matricula = document.getElementById("matricula").value;

    if (selecionado.value === "professor") {
      const area = document.getElementById("area").value;
      const lattes = document.getElementById("lattes").value;
      return new Professor(name, email, dataNasc, foneFixo, foneCel, matricula, area, lattes);
    } else if (selecionado.value === "aluno") {
      const curso = document.getElementById("cursoAluno").value;
      return new Aluno(name, email, dataNasc, foneFixo, foneCel, matricula, curso);
    }
    return null;
  }

  function validarUsuario(usuario) {
    if (!usuario) return { valido: false, erros: ["Nenhum usuário selecionado"] };

    const erros = [];

    // Validações da classe base Pessoa
    if (!usuario.validarNome()) erros.push("Nome deve conter nome e sobrenome (apenas letras)");
    if (!usuario.validarEmail()) erros.push("Email inválido");
    if (!usuario.ValidarDataNascimento()) erros.push("Data de nascimento inválida");
    if (usuario.foneCe && !usuario.validarTelefone(usuario.foneCe)) erros.push("Telefone celular inválido");
    if (usuario.foneFixo && !usuario.validarTelefone(usuario.foneFixo)) erros.push("Telefone fixo inválido");

    // Validações específicas
    if (usuario instanceof Professor) {
      if (!usuario.area.trim()) erros.push("Área é obrigatória para professores");
      if (!usuario.lattes.trim()) erros.push("Lattes é obrigatório para professores");
      else if (!usuario.validarLattes()) erros.push("URL do Lattes inválida");
      if (!usuario.validarMatricula()) erros.push("Matrícula professor deve ter 5 dígitos");
    } else if (usuario instanceof Aluno) {
      if (!usuario.curso.trim()) erros.push("Curso é obrigatório para alunos");
      if (!usuario.validarMatricula()) erros.push("Matrícula aluno deve ter 10 dígitos");
    }

    return { valido: erros.length === 0, erros, usuario };
  }

  function atualizarMensagem() {
    const usuario = criarObjetoUsuario();
    const resultado = validarUsuario(usuario);
    
    mensagem.innerHTML = "";
    
    if (!usuario) {
      mensagem.innerHTML = "<p>Selecione o tipo de usuário</p>";
      return;
    }

    if (resultado.valido) {
      mensagem.innerHTML = `
        <div style="background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0;">
          <strong>✓ Dados válidos!</strong><br>
          <small>Objeto ${usuario instanceof Aluno ? 'Aluno' : 'Professor'} criado com sucesso.</small>
        </div>
      `;
      objetoUsuario = resultado.usuario;
      console.log("Objeto salvo:", objetoUsuario);
    } else {
      mensagem.innerHTML = `
        <div style="background: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 10px 0;">
          <strong>Erros encontrados:</strong><br>
          ${resultado.erros.map(erro => `<span>• ${erro}</span>`).join('<br>')}
        </div>
      `;
    }
  }

  // Event listeners
  radios.forEach((radio) => {
    radio.addEventListener("change", atualizarMensagem);
  });

  // Validação em tempo real nos inputs
  ['name', 'email', 'dataNasc', 'foneCel', 'matricula'].forEach(id => {
    document.getElementById(id).addEventListener('blur', () => atualizarMensagem());
  });

  // Submit do formulário
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    atualizarMensagem();
    
    const resultado = validarUsuario(criarObjetoUsuario());
    if (resultado.valido) {
      alert('Cadastro realizado com sucesso!\nDados salvos no objeto:\n' + JSON.stringify(resultado.usuario, null, 2));
    }
  });

  atualizarMensagem();
}

document.addEventListener("DOMContentLoaded", configurarValidacao);
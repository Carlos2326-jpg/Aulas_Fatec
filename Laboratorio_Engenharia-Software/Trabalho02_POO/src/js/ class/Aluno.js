import { Pessoa } from "./Pessoa.js";

export class Aluno extends Pessoa {
  constructor(name, email, dataNasc, foneFixo, foneCe, matricula, curso) {
    super(name, email, dataNasc, foneFixo, foneCe, matricula);
    this.curso = curso;
  }

  validarMatricula() {
    const apenasNumeros = this.matricula.replace(/\D/g, '');
    return apenasNumeros.length === 10;
  }
}
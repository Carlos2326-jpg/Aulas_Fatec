import { Pessoa } from "./Pessoa.js";

export class Professor extends Pessoa {
  constructor(name, email, dataNasc, foneFixo, foneCe, matricula, area, lattes) {
    super(name, email, dataNasc, foneFixo, foneCe, matricula);
    this.area = area;
    this.lattes = lattes;
  }

  validarMatricula() {
    const apenasNumeros = this.matricula.replace(/\D/g, '');
    return apenasNumeros.length === 5;
  }

  validarLattes() {
    return this.lattes.startsWith('http') && this.lattes.includes('lattes');
  }
}
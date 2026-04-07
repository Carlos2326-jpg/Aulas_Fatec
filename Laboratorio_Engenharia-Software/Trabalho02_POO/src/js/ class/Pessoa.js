export class Pessoa {
  constructor(name, email, dataNasc, foneFixo, foneCe, matricula) {
    this.name = name;
    this.email = email;
    this.dataNasc = dataNasc;
    this.foneFixo = foneFixo;
    this.foneCe = foneCe;
    this.matricula = matricula;
  }

  ValidarDataNascimento() {
    const data = new Date(this.dataNasc);
    const hoje = new Date();
    const idade = hoje.getFullYear() - data.getFullYear();
    
    // Verifica se já fez aniversário este ano
    const mesAtual = hoje.getMonth();
    const diaAtual = hoje.getDate();
    const mesNasc = data.getMonth();
    const diaNasc = data.getDate();
    
    if (mesAtual < mesNasc || (mesAtual === mesNasc && diaAtual < diaNasc)) {
      idade--;
    }
    
    return idade >= 0 && idade <= 120;
  }

  validarNome() {
    const regex = /^[A-Za-zÀ-Úà-ú\s]+$/;
    return regex.test(this.name) && this.name.trim().split(/\s+/).length >= 2;
  }

  validarEmail() {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(this.email);
  }

  validarTelefone(telefone) {
    const apenasNumeros = telefone.replace(/\D/g, '');
    return apenasNumeros.length >= 10;
  }
}
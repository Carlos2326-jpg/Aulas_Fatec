// Máscaras específicas para telefone
export function aplicarMascaraTelefone(input) {
  let valor = input.value.replace(/\D/g, '');
  
  // Máscara para CELULAR: (99) 99999-9999 (11 dígitos)
  if (valor.length > 11 || (valor.length === 11 && input.id === 'foneCel')) {
    valor = valor.replace(/(\d{2})(\d)/, '($1) $2');
    valor = valor.replace(/(\d{5})(\d)/, '$1-$2');
    valor = valor.replace(/(\d{5})(\d)/, '$1-$2');
    input.value = valor.substring(0, 16); // (99) 99999-9999
    return;
  }
  
  // Máscara para FIXO: (99) 9999-9999 (10 dígitos)
  valor = valor.replace(/(\d{2})(\d)/, '($1) $2');
  valor = valor.replace(/(\d{4})(\d)/, '$1-$2');
  valor = valor.replace(/(\d{4})(\d)/, '$1-$2');
  input.value = valor.substring(0, 14); // (99) 9999-9999
}

// Validação específica para cada tipo de telefone
export function validarTelefoneFixo(telefone) {
  const apenasNumeros = telefone.replace(/\D/g, '');
  return apenasNumeros.length === 10; // Fixo: 10 dígitos
}

export function validarTelefoneCelular(telefone) {
  const apenasNumeros = telefone.replace(/\D/g, '');
  return apenasNumeros.length === 11; // Celular: 11 dígitos
}
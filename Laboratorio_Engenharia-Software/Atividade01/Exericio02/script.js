const idade = prompt("Informe sua idade: ");
var ano = 2026;

if (idade != null) {
    let ano_nasc = ano - idade;
    alert(`você nasceu em: ${ano_nasc}`);
}
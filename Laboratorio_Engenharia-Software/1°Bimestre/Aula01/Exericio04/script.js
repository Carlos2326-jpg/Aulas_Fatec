const number1 = prompt("Informe um número: ");
const number2 = prompt("Informe um segundo número: ");

if (number1 == null && number2 == null) {
    alert("Informe dois numeros!");
} else {
    const media = (parseInt(number1) + parseInt(number2)) / 2;
    alert(`A média de ${number1} e ${number2} é ${media}`);
}
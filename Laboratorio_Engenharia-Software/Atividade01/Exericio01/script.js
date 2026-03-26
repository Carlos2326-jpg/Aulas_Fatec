const number = prompt("Informe um número: ");

if (number != undefined && number != null) {
    let mens = "Esse número é: "

    if (number < 0) {
        mens += "Negativo";
    } else {
        mens += "Positivo";
    }
    
    if (number % 2 == 0) {
        mens += "é Par"
    } else {
        mes += "é Impar";
    }

    alert(mens);
}
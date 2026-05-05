const div = document.getElementById("div");

// Valores
let contManValue = 0;
let contWomanValue = 0;

// Criar container principal
div.style.textAlign = "center";
div.style.fontFamily = "Arial";

// TOTAL
let totalBox = document.createElement("div");
totalBox.style.padding = "20px";
totalBox.style.borderRadius = "10px";
totalBox.style.margin = "40px";
totalBox.style.position = "relative";

let tituloTotal = document.createElement("p");
tituloTotal.innerHTML = "Total";
tituloTotal.style.fontSize = "34px";
tituloTotal.style.fontWeight = "bold";

let numeroTotal = document.createElement("p");
numeroTotal.innerHTML = contManValue + contWomanValue;
numeroTotal.style.fontSize = "48px";
numeroTotal.style.fontWeight = "bold";
numeroTotal.style.border = "1px solid black"
numeroTotal.style.padding = "5px 50px"
numeroTotal.style.margin = "10px 0";

let btnReset = document.createElement("button");
btnReset.innerHTML = "↻";
btnReset.style.fontSize = "30px"
btnReset.style.position = "absolute";
btnReset.style.top = "10px";
btnReset.style.right = "-50px";
btnReset.style.backgroundColor = "white";
btnReset.style.border = "none";
btnReset.style.borderRadius = "50%";
btnReset.style.width = "30px";
btnReset.style.height = "30px";
btnReset.style.cursor = "pointer";

totalBox.appendChild(tituloTotal);
totalBox.appendChild(numeroTotal);
totalBox.appendChild(btnReset);

// CONTAINER HOMENS E MULHERES
let grupo = document.createElement("div");
grupo.style.display = "flex";
grupo.style.gap = "20px";
grupo.style.justifyContent = "center";
grupo.style.margin = "20px";

// HOMENS
let cardHomem = document.createElement("div");
cardHomem.style.backgroundColor = "#f5f5f5";
cardHomem.style.padding = "20px";
cardHomem.style.borderRadius = "10px";
cardHomem.style.width = "150px";

let imgHomem = document.createElement("img");
imgHomem.src = "src/public/imagem/Homem-removebg-preview.png";
imgHomem.style.width = "60px";
imgHomem.style.height = "60px";

let tituloHomem = document.createElement("p");
tituloHomem.innerHTML = "Homens";
tituloHomem.style.fontSize = "20px";
tituloHomem.style.fontWeight = "bold";
tituloHomem.style.margin = "10px 0";

let numeroHomem = document.createElement("p");
numeroHomem.innerHTML = contManValue;
numeroHomem.style.fontSize = "36px";
numeroHomem.style.fontWeight = "bold";
numeroHomem.style.margin = "10px 0";
numeroHomem.style.border = "1px solid black";
numeroHomem.style.padding = "2px 10px";

let btnMaisHomem = document.createElement("button");
btnMaisHomem.innerHTML = "+";
btnMaisHomem.style.backgroundColor = "green";
btnMaisHomem.style.color = "white";
btnMaisHomem.style.border = "none";
btnMaisHomem.style.borderRadius = "50%";
btnMaisHomem.style.width = "40px";
btnMaisHomem.style.height = "40px";
btnMaisHomem.style.fontSize = "24px";
btnMaisHomem.style.margin = "5px";
btnMaisHomem.style.cursor = "pointer";

let btnMenosHomem = document.createElement("button");
btnMenosHomem.innerHTML = "-";
btnMenosHomem.style.backgroundColor = "red";
btnMenosHomem.style.color = "white";
btnMenosHomem.style.border = "none";
btnMenosHomem.style.borderRadius = "50%";
btnMenosHomem.style.width = "40px";
btnMenosHomem.style.height = "40px";
btnMenosHomem.style.fontSize = "24px";
btnMenosHomem.style.margin = "5px";
btnMenosHomem.style.cursor = "pointer";

cardHomem.appendChild(imgHomem);
cardHomem.appendChild(tituloHomem);
cardHomem.appendChild(numeroHomem);
cardHomem.appendChild(btnMaisHomem);
cardHomem.appendChild(btnMenosHomem);

// MULHERES
let cardMulher = document.createElement("div");
cardMulher.style.backgroundColor = "#f5f5f5";
cardMulher.style.padding = "20px";
cardMulher.style.borderRadius = "10px";
cardMulher.style.width = "150px";

let imgMulher = document.createElement("img");
imgMulher.src = "src/public/imagem/Mulher-removebg-preview.png";
imgMulher.style.width = "60px";

let tituloMulher = document.createElement("p");
tituloMulher.innerHTML = "Mulheres";
tituloMulher.style.fontSize = "20px";
tituloMulher.style.fontWeight = "bold";
tituloMulher.style.margin = "10px 0";

let numeroMulher = document.createElement("p");
numeroMulher.innerHTML = contWomanValue;
numeroMulher.style.fontSize = "36px";
numeroMulher.style.fontWeight = "bold";
numeroMulher.style.margin = "10px 0";
numeroMulher.style.border = "1px solid black";
numeroMulher.style.padding = "2px 10px";

let btnMaisMulher = document.createElement("button");
btnMaisMulher.innerHTML = "+";
btnMaisMulher.style.backgroundColor = "green";
btnMaisMulher.style.color = "white";
btnMaisMulher.style.border = "none";
btnMaisMulher.style.borderRadius = "50%";
btnMaisMulher.style.width = "40px";
btnMaisMulher.style.height = "40px";
btnMaisMulher.style.fontSize = "24px";
btnMaisMulher.style.margin = "5px";
btnMaisMulher.style.cursor = "pointer";

let btnMenosMulher = document.createElement("button");
btnMenosMulher.innerHTML = "-";
btnMenosMulher.style.backgroundColor = "red";
btnMenosMulher.style.color = "white";
btnMenosMulher.style.border = "none";
btnMenosMulher.style.borderRadius = "50%";
btnMenosMulher.style.width = "40px";
btnMenosMulher.style.height = "40px";
btnMenosMulher.style.fontSize = "24px";
btnMenosMulher.style.margin = "5px";
btnMenosMulher.style.cursor = "pointer";

cardMulher.appendChild(imgMulher);
cardMulher.appendChild(tituloMulher);
cardMulher.appendChild(numeroMulher);
cardMulher.appendChild(btnMaisMulher);
cardMulher.appendChild(btnMenosMulher);

grupo.appendChild(cardHomem);
grupo.appendChild(cardMulher);

// FUNÇÕES
function atualizarTotal() {
    let total = contManValue + contWomanValue;
    numeroTotal.innerHTML = total;
}

// Homem
btnMaisHomem.onclick = function () {
    contManValue++;
    numeroHomem.innerHTML = contManValue;
    atualizarTotal();
};

btnMenosHomem.onclick = function () {
    if (contManValue > 0) {
        contManValue--;
        numeroHomem.innerHTML = contManValue;
        atualizarTotal();
    }
};

// Mulher
btnMaisMulher.onclick = function () {
    contWomanValue++;
    numeroMulher.innerHTML = contWomanValue;
    atualizarTotal();
};

btnMenosMulher.onclick = function () {
    if (contWomanValue > 0) {
        contWomanValue--;
        numeroMulher.innerHTML = contWomanValue;
        atualizarTotal();
    }
};

// Reset
btnReset.onclick = function () {
    contManValue = 0;
    contWomanValue = 0;
    numeroHomem.innerHTML = 0;
    numeroMulher.innerHTML = 0;
    atualizarTotal();
};

// ADICIONAR TUDO NA TELA
div.appendChild(totalBox);
div.appendChild(grupo);
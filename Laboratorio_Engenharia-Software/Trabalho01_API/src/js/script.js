// Função assíncrona para buscar dados do CEP
async function buscarDadosCEP(cep) {
    try {
        // Remove caracteres não numéricos
        cep = cep.replace(/\D/g, '');

        // Verifica se o CEP tem 8 dígitos
        if (cep.length !== 8) {
            throw new Error("CEP deve ter 8 dígitos!");
        }

        // Faz a requisição para a API
        const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);

        // Verifica se a requisição foi bem sucedida
        if (!response.ok) {
            throw new Error(`Erro HTTP: ${response.status}`);
        }

        // Converte a resposta para JSON
        const data = await response.json();

        // Verifica se a API retornou erro (CEP inválido)
        if (data.erro) {
            throw new Error("CEP não encontrado!");
        }

        // Atualiza os elementos HTML com os dados retornados
        document.getElementById("localidade").innerHTML = `Cidade: ${data.localidade || "Não informado"} - ${data.uf || ""}`;
        document.getElementById("bairro").innerHTML = `Bairro: ${data.bairro || "Não informado"}`;
        document.getElementById("logradouro").innerHTML = `Rua/Avenida: ${data.logradouro || "Não informado"}`;

        // Log dos dados no console para debug
        console.log("Dados carregados com sucesso:", data);

        // Remove mensagem de erro se existir
        const existingError = document.querySelector(".error-message");
        if (existingError) existingError.remove();

    } catch (error) {
        // Tratamento de erros
        console.error("Erro ao buscar dados do CEP:", error);

        // Exibe mensagens de erro nos elementos HTML
        document.getElementById("localidade").innerHTML = "Cidade: Erro ao carregar";
        document.getElementById("bairro").innerHTML = "Bairro: Erro ao carregar";
        document.getElementById("logradouro").innerHTML = "Rua/Avenida: Erro ao carregar";

        // Remove mensagem de erro anterior se existir
        const existingError = document.querySelector(".error-message");
        if (existingError) existingError.remove();

        // Adiciona mensagem de erro específica
        const errorMessage = document.createElement("p");
        errorMessage.className = "error-message";
        errorMessage.textContent = `Erro: ${error.message}`;
        errorMessage.style.color = "red";
        errorMessage.style.marginTop = "10px";
        document.body.appendChild(errorMessage);
    }
}

// Função para lidar com a digitação do CEP
function handleCEPInput(event) {
    const cep = event.target.value;

    // Busca apenas quando o CEP tiver 8 dígitos
    if (cep.replace(/\D/g, '').length === 8) {
        buscarDadosCEP(cep);
    }
}

// Adiciona evento de input ao campo de CEP
document.addEventListener("DOMContentLoaded", () => {
    const cepInput = document.getElementById("cep");
    cepInput.addEventListener("input", handleCEPInput);

    // Opcional: Adicionar máscara ao CEP
    cepInput.addEventListener("input", function (e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 5) {
            value = value.replace(/^(\d{5})(\d)/, '$1-$2');
        }
        e.target.value = value;
    });
});
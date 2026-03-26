async function BuscarCep(cep) {
    const resp = await fetch(`https://viacep.com.br/ws?/${cep}/json`);
    const resu = await resu.json();

    return resu;
}

const execultar = async (cep) => {
    try {
        return await BuscarCep(cep);
    } catch (error) {
        return error;
    }
}
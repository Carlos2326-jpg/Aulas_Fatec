import { useState } from 'react';
import fotoMan from './imagem/homem-de-negocios.png'

function Homem({ contador, setContador }) {

  const Negativo = () => {
    if (contador > 0) {
      setContador(contador - 1);
    }
  };

  return (
    <section>
      <img src={fotoMan} className="foto" alt="Business man" />

      <h2 className='title'>Homems</h2>

      <article className='Bloco-botao'>
        <button onClick={() => setContador(contador + 1)} className='Incrementar'>+</button>
        <button onClick={Negativo} className='Decrementar'>-</button>
      </article>

      <article className='contador-individual'>
        {contador}
      </article>
    </section>
  )
}

export default Homem;
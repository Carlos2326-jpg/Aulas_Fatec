import { useState } from 'react';
import FotoWoman from './imagem/mulher-de-negocios.png';

function Mulher({ contador, setContador }) {

  const Negativo = () => {
    if (contador > 0) {
      setContador(contador - 1);
    }
  };

  return (
    <section>
      <img src={FotoWoman} className="foto" alt="Mulher de Negócios" />

      <h2 className='title'>Mulheres</h2>

      <article className='Bloco-botao'>
        <button onClick={() => setContador(contador + 1)} className='Incrementar'>+</button>
        <button onClick={Negativo} className='Decrementar'>-</button>
      </article>

      <article className='contador-individual'>
        {contador}
      </article>
    </section>
  );
}

export default Mulher;
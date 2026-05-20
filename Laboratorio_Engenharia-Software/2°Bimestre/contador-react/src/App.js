import { useState } from 'react';
import './App.css';
import Homem from './Homem';
import Mulher from './Mulher';

function App() {
  const [contadorHomem, setContadorHomem] = useState(0);
  const [contadorMulher, setContadorMulher] = useState(0);

  const totalPessoas = contadorHomem + contadorMulher;
  return (
    <section className='section'>
      <article className='ContradorTotal'>
        {totalPessoas}
      </article>

    <section className='Bloco'>
      <article>
        <Homem contador={contadorHomem} setContador={setContadorHomem}/>
      </article>

      <article>
        <Mulher contador={contadorMulher} setContador={setContadorMulher}/>
      </article>
    </section>
    </section>
  );
}

export default App;

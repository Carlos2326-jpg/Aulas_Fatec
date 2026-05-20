import { useEffect, useState } from "react";

function Letreiro() {
  const texto = "Conheça a Fatec";
  const [contador, setContador] = useState(0);

  useEffect(() => {
    const tempo = setInterval(() => {
      setContador((prev) => {
        if (prev < texto.length) {
          return prev + 1;
        } else {
          return 0;
        }
      });
    }, 200);

    return () => clearInterval(tempo);
  }, []);

  return (
    <p>
      {texto.slice(0, contador)}
    </p>
  );
}

export default Letreiro;
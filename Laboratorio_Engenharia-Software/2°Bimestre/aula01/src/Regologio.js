import { useState, useEffect } from "react";

function Regologio() {
  const [horas, setHoras] = useState(new Date().toLocaleTimeString());

  useEffect(() => {
    const timer = setInterval(() => {
      setHoras(new Date().toLocaleTimeString());
    }, 1000);

    return () => clearInterval(timer);
  }, []);

  return (
    <section>
      <h2>Hora Atual: </h2>
      <p>{horas}</p>
    </section>
  );
}

export default Regologio;
import { useEffect, useState } from 'react';
function App() {
 const [message, setMessage] = useState('');
 useEffect(() => {
 fetch('/api/RECUA')
 .then((response) => response.text())
 .then((data) => setMessage(data));
 }, []);
 return (
 <div>
 <h1>Frontend en React de Angel Cabrera Martos</h1>
 <p>Esta aplicación se conecta al backend de Symfony pidiéndole una respuesta</p>
 <p>Backend response: {message}</p>
 </div>
 );
}
export default App;
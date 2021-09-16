var btnSpeak = document.querySelector('#btnSpeak11');

speaks = [
  {
    "name": "Clarinha",
    "lang":"pt-BR"
  }
]

btnSpeak.addEventListener('click', () => {

  const msg = new SpeechSynthesisUtterance();
  msg.volume = 1; //define o volume do áudio (de 0 a 1)
  msg.rate = 1; // define a velocidade do áudio (0.1 a 1)
  msg.pitch = 1.5; // define o tom em que o áudio é falado ( de 0 a 2)
  msg.text = "Notou que pode ser realizado uma melhoria no local ? Algum treinamento, melhorar a sinalização, algo relacionado ? Se sim, descreva nesse campo" ;
  
  
  const voice = speaks[0];
  // console.log(`Voice: ${voice.name} and Lang: ${voice.lang}`);
  voice.voiceURI = voice.name; //voiceURI busca o servidor da voz escolhida, no caso, pt-BR defnido em voice.name
  msg.lang = voice.lang; // Define o idioma a ser utilizado para a fala, no caso, o que foi definido para voice.lang
  
  speechSynthesis.speak(msg); //executa a voz
  

});






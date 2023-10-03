//Script para mostrar a senha ao passaro mouse sobre o olho

const olho = document.getElementById("olho");
const senha = document.getElementById("senha");

olho.addEventListener("mouseover",mostrar);
olho.addEventListener("mouseout",esconder);

function mostrar() {
    senha.type = "text";
  }

  function esconder() {
    senha.type = "password";
  }

  //Fim do script para mostrar senha

  

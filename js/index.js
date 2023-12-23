
const meuBotao = document.getElementById("meuBotao");
  const meuForm = document.getElementById("meuForm");

  meuBotao.addEventListener("click", function (event) {
    
    event.preventDefault();

    window.location.href = "../html/index.html";
  }); 

/*------------------------------------------------------------*/
function validarTextarea() {
  var textarea = document.getElementById("mensagem");
  var minimoCaracteres = 20; 

  if (textarea.value.length < minimoCaracteres) {
      alert("A mensagem deve ter pelo menos " + minimoCaracteres + " caracteres.");
      return false; 
  }

  return true; 
}
/*-------------------------------------------------------------*/

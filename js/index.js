function mostrarSenha() {
    var inputPass = document.getElementById('senha')
    var btnShowPass = document.getElementById('btn-senha')

    if(inputPass.type === 'password'){
        inputPass.setAttribute('type','text')
        btnShowPass.classList.replace('bi-eye-fill','bi-eye-slash-fill')
    }
    else{
        inputPass.setAttribute('type','password')
        btnShowPass.classList.replace('bi-eye-slash-fill','bi-eye-fill')
    }
}

/*-------------------------------------------------------------------*/
const meuBotao = document.getElementById("meuBotao");
  const meuForm = document.getElementById("meuForm");

  // Adiciona um ouvinte de evento de clique ao botão
  meuBotao.addEventListener("click", function (event) {
    // Impede o comportamento padrão do formulário
    event.preventDefault();

    // Redireciona o usuário para a página desejada
    window.location.href = "../html/index.html";
  }); 

/*------------------------------------------------------------*/


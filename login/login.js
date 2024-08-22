const emailCorreto = "joaogustavo@gmail.com"
const senhaCorreta = "12345"

function login(){
    const email = document.getElementById("emailUsu").value;
    const senha = document.getElementById("senhaUsu").value;

    if(email === emailCorreto && senha === senhaCorreta){
        window.location.href = "tela-inicial.html"
    }
    else{
        alert("A senha ou email incorretos! Tente novamente!");
    }
}
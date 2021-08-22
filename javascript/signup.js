const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault(); // Impedindo o envio do formulário
}

continueBtn.onclick = ()=>{
    // Iniciando o Ajax
    let xhr = new XMLHttpRequest(); // Criando o objeto XML
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
      
    }
    xhr.send(formData);
}
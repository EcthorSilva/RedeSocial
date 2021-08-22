const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e)=>{
    e.preventDefault(); // Impedindo o envio do formulário
}

continueBtn.onclick = ()=>{
    // Iniciando o Ajax
    let xhr = new XMLHttpRequest(); // Criando o objeto XML
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          if(data === "success"){
            location.href="users.php"; // !!!!
          }else{
            errorText.style.display = "block";
            errorText.textContent = data;
          }
        }
      }
    }
    // enviar os dados do formulário através de ajax para php
    let formData = new FormData(form); // Criando um novo objeto FormData
    xhr.send(formData); // Enviando o form data para o php
}
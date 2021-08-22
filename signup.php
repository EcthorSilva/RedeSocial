<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rede Social | TCC Grupo 8</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  </head>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>Cadastre-se</header>
        <h1>É rápido e fácil!</h1>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>
          <div class="name-details">
            <div class="field input">
              <label></label>
              <input type="text" name="fname" placeholder="Nome" required>
            </div>
            <div class="field input">
              <label></label>
              <input type="text" name="lname" placeholder="Sobrenome" required>
            </div>
          </div>
          <div class="field input">
            <label></label>
            <input type="text" name="email" placeholder="Email" required>
          </div>
          <div class="field input">
            <label></label>
            <input type="password" name="password" placeholder="Nova senha" required id="password">
            <i class="fas fa-eye"></i>
          </div>

          <div class="field input">
            <label></label>
            <input type="password" name="password" placeholder="Confirme a senha" required id="confirm_password">
            <i class="fas fa-eye"></i>
          </div>

          <div class="field button">
            <input type="submit" name="submit" value="Cadastre-se">
          </div>
        </form>
        <div class="link">Já tem uma conta? <a href="index.html">Entre Aqui!</a></div>
      </section>
    </div>
    <script src="javascript/confirm-password.js"></script>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
  </body>
</html>
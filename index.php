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
            <section class="form login">
                <header>Rede Social</header>
                <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="error-text"></div>
                    <div class="field input">
                        <label></label>
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="field input">
                        <label></label>
                        <input type="password" name="password" placeholder="Senha" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                    <input type="submit" name="submit" value="Entrar">
                    </div>
                </form>
                <div class="link">Ainda não tem uma conta? <a href="signup.php">Cadastre-se</a></div>
            </section>
        </div>

        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/login.js"></script>
    </body>
</html>
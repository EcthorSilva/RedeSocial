<?php
    session_start();
    include_once "php/config.php";
    if(!isset($_SESSION['unique_id'])){
      header("location: index.php");
    }

    //aqui a sessão será configurada quando o usuário fizer login ou inscrição, 
    //se a sessão não for configurada, 
    //então redirecionaremos o usuário para a página de login
?>

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
            <section class="users">
                <header>
                    <div class="content">
                        <?php 
                            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                            if(mysqli_num_rows($sql) > 0){
                                $row = mysqli_fetch_assoc($sql);
                            }
                        ?>
                        <img src="php/images/<?php echo $row['img']; ?>" alt="">
                        <div class="details">
                            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
                            <p><?php echo $row['status']; ?></p>
                        </div>
                    </div>
                    <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
                </header>  
                </div>
            </section>
        </div>
    </body>
</html>
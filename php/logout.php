<?php
    session_start();
    if(isset($_SESSION['unique_id'])){ // se o usuário estiver logado, vá para esta página, caso contrário, vá para a página de login
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){ // se o LogoutID estiver definido
            $status = "Offline";
            // assim que o usuário fizer logout, atualizaremos esse status para offline
            // vamos atualizar novamente o status para online assim que ele estiver logado com sucesso
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../index.php");
            }
        }else{
            header("location: ../users.php");
        }
    }else{  
        header("location: ../index.php");
    }
?>
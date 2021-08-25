<?php
    session_start();
    include_once "./php/config.php";
    if(!isset($_SESSION['unique_id'])){
      header("location: index.php");
    }

    //aqui a sessão será configurada quando o usuário fizer login ou inscrição, 
    //se a sessão não for configurada, 
    //então redirecionaremos o usuário para a página de login
?>

<?php
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
    }
?>
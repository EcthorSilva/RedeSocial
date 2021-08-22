<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        // vamos verificar se o Email do usuário é válido ou não
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Se o Email for valido
            // vamos verificar se o Email já existe no banco de dados
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){ // Se o Email Já existir
                echo "$email - Já existe uma conta com este Email. Tente um Email diferente!";
            }else{
                // vamos verificar se o usuario adicionou um arquivo
                if(isset($_FILES['image'])){ // Se o arquivo foi adicionado
                    $img_name = $_FILES['image']['name']; // pega o nome do arquivo enviado
                    //$img_type = $_FILES['image']['type']; // pega o tipo do arquivo enviado
                    $tmp_name = $_FILES['image']['tmp_name']; // esse é um nome temporario para salvar o arquivo

                    // vamos exportar a imagem e obter sua extensão
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode); // aqui temos a extensão do arquivo enviado pelo usuario

                    $extensions = ["jpeg", "png", "jpg"]; // estas são algumas extensões validas para armazenarmos no array
                    if(in_array($img_ext, $extensions) === true){ // se o user enviar uma imagem com a extensão valida
                        $time = time(); // isso nos retornará o horario atual
                                        // precisamos deste tempo para que quando enviar um arquivo para nossa pasta, nós renomeamos o arquivo do usuário com a hora atual
                                        // então todo o arquivo de imagem terá um nome único
                        // agora vamos mover a foto do usuario para uma pasta particular
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)){ // se o usuario adicionar a imagem mova ela para a pasta com sucesso
                            $status = "Online"; // uma vez que o usuário se inscreveu, seu status ficará ativo
                            $ran_id = rand(time(), 100000000); // Criando um ID aleatorio para o usuario

                            // agora vamos adicionar todos os dados do usuario para a tabela
                            $encrypt_pass = md5($password);
                            $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')");
                            if($insert_query){
                                $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($select_sql2) > 0){
                                    $result = mysqli_fetch_assoc($select_sql2);
                                    $_SESSION['unique_id'] = $result['unique_id'];
                                    echo "success";
                                }else{
                                    echo "Este Email não existe.";
                                }
                            }else{
                                echo "Algo deu errado. Por favor, tente novamente!";
                            }
                        }
                    }else{
                        echo "Por favor, selecione uma imagem valida (jpeg, jpg ou png)!";
                    }
                }else{
                    echo "Por favor, selecione uma imagem para o seu perfil.";
                }
            }
        }else{
            echo "$email - Este não é um Email valido";
        }
    }else{
        echo "Todos os campos são obrigatórios!";
    }
?>
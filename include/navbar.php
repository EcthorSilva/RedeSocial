<?php include_once "include/header.php"?>

    <body>
        <nav>
            <div class="navbar">
                <div class="logo"><a href="feed.php">Rede Social</a></div>
                <div class="nav-links">
                    <ul class="links">
                        <li><a href="#">Notificações</a><i class='bx bxs-chevron-down'></i></li>
                        <li><a href="#">Opções</a><i class='bx bxs-chevron-down'></i></li>
                        <li><a href="users.php">Perfil</a></li>
                        <li><a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
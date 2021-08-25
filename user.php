<?php include_once "include/header.php"?>
<?php include_once "include/navbar.php"?>

    <body>
        <div class="me-wrapper">
            <div class="container">
                <section class="perfil-info">
                    <div style="max-width: 1280px;" class="container">
                        <div class="w30">
                            <h2 class="title"><?php echo $row['fname']. " " . $row['lname'] ?> </h2>
                            <div class="container-img">
                                <img src="php/images/<?php echo $row['img']; ?>" alt="perfil">
                            </div>
                            
                            <div class="lista-amigos">
                                <h3><i class="fas fa-users"></i> Amigos </h3>
                                <div class="img-single-amigo">
                                    <div class="img-single-amigo-wrapper"></div>
                                </div>
                                <div class="img-single-amigo">
                                    <div class="img-single-amigo-wrapper"></div>
                                </div>
                                <div class="img-single-amigo">
                                    <div class="img-single-amigo-wrapper"></div>
                                </div>
                                <div class="img-single-amigo">
                                    <div class="img-single-amigo-wrapper"></div>
                                </div>
                                <div class="img-single-amigo">
                                    <div class="img-single-amigo-wrapper"></div>
                                </div>
                                <div class="img-single-amigo">
                                    <div class="img-single-amigo-wrapper"></div>
                                </div>

                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </section>
        
                <section class="feed">
                    <div style="max-width: 1280px;" class="container">
                        <div class="w70">
                            <h2 class="title">No que esta pensando hoje?</h2>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>
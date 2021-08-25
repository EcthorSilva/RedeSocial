<?php include_once "include/header.php"?>
<?php include_once "include/navbar.php"?>

    <body>
    <div class="me-wrapper">
            <!-- Perfil Info -->
            <section class="perfil-info">
                <div style="max-width: 1280px;" class="container">
                    <div class="w30">
                        <h2 class="title"><?php echo $row['fname']. " " . $row['lname'] ?> </h2>
                        <div class="container-img">
                            <img src="php/images/<?php echo $row['img']; ?>" alt="perfil">
                        </div>

                        <div class="perfil-bio">
                            <h2 class="bio">Bio</h2>
                            <div class="container-img">
                            <span class="cont-bio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                        </div>
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
                        </div>
                    </div>
                </div>
            </section>
            <!-- Perfil Info - end-->
            
            <!-- tbox -->
            <section class="twee-box">
                <div class="w60">
                    <div class="wrapper-tbox" style="max-width: 1280px;">
                        <div class="input-box">
                            <div class="twee-area">
                                <span class="placeholder">O que está acontecendo?</span>
                                <div class="input editable" contenteditable="true" spellcheck="false"></div>
                                <div class="input reandonly" contenteditable="true" spellcheck="false"></div>
                            </div>
                            <div class="privacy">
                                <i class="fas fa-globe-americas"></i>
                                <span>Everyone can reply</span>
                            </div>
                        </div>
                        <div class="bottom">
                            <ul class="icons">
                                <li><i class="far uil-capture"></i></li>
                                <li><i class="far fa-file-image"></i></li>
                                <li><i class="far fa-map-marker-alt"></i></li>
                                <li><i class="far fa-grin"></i></li>
                                <li><i class="far fa-user"></i></li>
                            </ul>
                            <div class="content">
                                <span class="counter">100</span>
                                <button>Publicar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- tbox - end-->

            <!-- feed -->
            <section class="feed">
                <div class="pub-container" style="max-width: 1280px;">
                    <div class="w60">
                        <div class="pub-wrapper">
                            <div class="details">
                                <img src="php/images/1629872821torugo.png" alt="">
                                <h2 class="pub-name">Vitor</h2>
                                <p>Offline</p>
                            </div>
                            <h3 class="cont-pub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quo consectetur ut 
                                mollitia aliquam veritatis, laborum nisi dolorem, aliquid aspernatur quasi reiciendis? Iure 
                                odio dolores quibusdam incidunt iste exercitationem nisi.</h3>
                        </div>
                    </div>
                </div>
                <div class="pub-container" style="max-width: 1280px;">
                    <div class="w60">
                        <div class="pub-wrapper">
                            <div class="details">
                                <img href="" src="php/images/1629872916renan.png" alt="">
                                <h2 class="pub-name">Renan</h2>
                                <p>Online</p>
                            </div>
                            <h3 class="cont-pub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quo consectetur ut 
                                mollitia aliquam veritatis, laborum nisi dolorem, aliquid aspernatur quasi reiciendis? Iure 
                                odio dolores quibusdam incidunt iste exercitationem nisi.</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feed - end -->
        </div>
        <script src="/javascript/users.js"></script>
    </body>
</html>
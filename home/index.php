<?php include('config.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>

    <link href="<?php echo INCLUDE_PATH; ?>static/css/all.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>static/css/home.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,minha,home,">
    <meta name="description" content="Uma pagina simples do html">
    <meta charset="utf-8">

</head>

<body>

    <?php
    if (isset($_GET['url'])) {
        echo $_GET['url'];
    }

    ?>
    <header>
        <div class="center">

            <div class="logo left">Logomarca</div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>blog">Blog</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="mobile-button">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>blog">Blog</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>

    <section class="banner-principal">
        <div class="overlay"></div>

        <div class="center">
            <form>
                <h2>
                    Me mande seu email
                </h2>
                <input type="text" name="nome" required placeholder="seu nome" />
                <input type="email" name="email" required placeholder="seu email de envio" />
                <input type="submit" name="enviar" value="Enviar!" />
            </form>
        </div>
    </section>

    <section class="descricao">
        <div class="center">

            <div class="w50 left">
                <h1>
                    Minha descricao
                </h1>
                <p>
                    Donec velit mi, interdum non convallis eget, interdum id dolor. Ut dictum sodales orci placerat fringilla. Nulla turpis ex, imperdiet eu ligula a, porttitor blandit lacus. Nam in ultricies augue. Pellentesque ac ultrices nulla. Ut iaculis nec metus ac sodales. Sed faucibus nisi dolor, vel faucibus tellus mattis nec. Maecenas ultricies metus nec mi facilisis efficitur. Pellentesque eget ultricies lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pulvinar tincidunt neque, in tristique magna. Maecenas pharetra efficitur risus, et pharetra nunc pulvinar sed. Vivamus gravida, lectus vel imperdiet facilisis, sem ligula suscipit metus, id commodo risus nunc in odio. Quisque vehicula suscipit sem ut dapibus. Nam volutpat quam vitae nulla malesuada, nec condimentum ex varius. Sed eu magna commodo, mattis dui quis, pellentesque elit.
                </p>
                <p>
                    Sed pulvinar tincidunt neque, in tristique magna. Maecenas pharetra efficitur risus, et pharetra nunc pulvinar sed. Vivamus gravida, lectus vel imperdiet facilisis, sem ligula suscipit metus, id commodo risus nunc in odio. Quisque vehicula suscipit sem ut dapibus. Nam volutpat quam vitae nulla malesuada, nec condimentum ex varius. Sed eu magna commodo, mattis dui quis, pellentesque elit.
                </p>
            </div>



            <div class="w50 left">
                <img class="center" src="<?php echo INCLUDE_PATH; ?>images/photo.jpg">
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section class="conteudo">
        <div class="center">
            <h1 class="title">Conteudos</h1>
            <div class="w33 left box-conteudo">
                <h3><i class="fas fa-fish"></i></h3>
                <h3>peixe</h3>
                <p>Etiam euismod ultricies neque, quis imperdiet diam. Quisque porta est ac lacus eleifend, eget accumsan ipsum convallis.</p>
            </div>
            <div class="w33 left box-conteudo">
                <h3><i class="fas fa-dog"></i></h3>
                <h3>cachorro</h3>
                <p>Etiam euismod ultricies neque, quis imperdiet diam. Quisque porta est ac lacus eleifend, eget accumsan ipsum convallis.</p>
            </div>
            <div class="w33 left box-conteudo">
                <h3><i class="fas fa-cat"></i></h3>
                <h3>gato</h3>
                <p>Etiam euismod ultricies neque, quis imperdiet diam. Quisque porta est ac lacus eleifend, eget accumsan ipsum convallis.</p>
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section class="extras">
        <div class="center">

            <div class="w50 left extras-text">
                <h2 class="title">Extras</h2>
                <div class="extras-single">
                    <p class="extras-box-content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit"</p>
                    <p class="extras-subtitle">Lorem ipsum dolor</p>
                </div>
                <div class="extras-single">
                    <p class="extras-box-content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit"</p>
                    <p class="extras-subtitle">Lorem ipsum dolor</p>
                </div>
                <div class="extras-single">
                    <p class="extras-box-content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit"</p>
                    <p class="extras-subtitle">Lorem ipsum dolor</p>
                </div>
                <div class="extras-single">
                    <p class="extras-box-content">"Lorem ipsum dolor sit amet, consectetur adipiscing elit"</p>
                    <p class="extras-subtitle">Lorem ipsum dolor</p>
                </div>

            </div>


            <div class="w50 left extras-pointers">
                <h2 class="title">Pointers</h2>
                <div class="pointers">

                    <ul>
                        <li>
                            Nam eu egestas augue. Aliquam erat volutpat. Nam eu egestas augue. Aliquam erat volutpat. Nam eu egestas augue. Aliquam erat volutpat
                        </li>
                        <li>
                            Nam eu egestas augue. Aliquam erat volutpat. Nam eu egestas augue. Aliquam erat volutpat. Nam eu egestas augue. Aliquam erat volutpat
                        </li>
                        <li>
                            Nam eu egestas augue. Aliquam erat volutpat. Nam eu egestas augue. Aliquam erat volutpat. Nam eu egestas augue. Aliquam erat volutpat
                        </li>
                    </ul>

                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    <footer>
        <div class="center">
            <p>simple home</p>
        </div>
    </footer>

</body>
<script src="<?php echo INCLUDE_PATH; ?>static/js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>static/js/menu.js"></script>

</html>
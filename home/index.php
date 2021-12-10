<!DOCTYPE html>
<html>

<head>
    <title>Home</title>

    <link href="static/css/all.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link href="static/css/home.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,minha,home,">
    <meta name="description" content="Uma pagina simples do html">
    <meta charset="utf-8">

</head>

<body>
    <header>
        <div class="center">

            <div class="logo left">Logomarca</div>
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </nav>
            <div class= "clear"></div>
        </div>
    </header>

    <section class="banner-principal">.
        <div class="center">
            <form>
                <h1>
                    Me mande um email
                </h1>
                <input type="text" name="conteudo" required placeholder="Conteudo do email" />
                <input type="email" name="email" required placeholder="assunto" />
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
            </div>



            <div class="w50 left">
                <img src="images/photo.jpg">
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section class="Conteudo">
        <div class="center">
            <h2 class="title">Conteudos</h2>
            <div class="w33 left box-conteudo">
                <h3><i class="fas fa-fish"></i>icone1</h3>
                <h3>conteudo1</h3>
                <p>Etiam euismod ultricies neque, quis imperdiet diam. Quisque porta est ac lacus eleifend, eget accumsan ipsum convallis.</p>
            </div>
            <div class="w33 left box-conteudo">
                <h3><i class="fas fa-dog"></i>icone2</h3>
                <h3>conteudo2</h3>
                <p>Etiam euismod ultricies neque, quis imperdiet diam. Quisque porta est ac lacus eleifend, eget accumsan ipsum convallis.</p>
            </div>
            <div class="w33 left box-conteudo">
                <h3><i class="fas fa-cat"></i>icone3</h3>
                <h3>conteudo3</h3>
                <p>Etiam euismod ultricies neque, quis imperdiet diam. Quisque porta est ac lacus eleifend, eget accumsan ipsum convallis.</p>
            </div>
        </div>
    </section>

    <section class="extras">
        <div class="center">

            <div class="w50 left">
                <h2 class="title">Extras</h2>
                <div class="extras-single">
                    <p class="extras-box-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <p class="extras-subtitle">Lorem ipsum dolor</p>
                </div>
                <div class="extras-single">
                    <p class="extras-box-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <p class="extras-subtitle">Lorem ipsum dolor</p>
                </div>
                <div class="extras-single">
                    <p class="extras-box-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <p class="extras-subtitle">Lorem ipsum dolor</p>
                </div>
                <div class="extras-single">
                    <p class="extras-box-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <p class="extras-subtitle">Lorem ipsum dolor</p>
                </div>

            </div>


            <div class="w50 left">
                <h2 class="title">Pointers</h2>
                <div class="pointers">

                    <ul>
                        <li>
                            Nam eu egestas augue. Aliquam erat volutpat
                        </li>
                        <li>
                            Nam eu egestas augue. Aliquam erat volutpat
                        </li>
                        <li>
                            Nam eu egestas augue. Aliquam erat volutpat
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

</html>
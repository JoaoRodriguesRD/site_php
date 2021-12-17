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
    
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'principal';
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            include('pages/error-404.php');
        }
    ?>
    <footer  >
        <div class="center">
            <p>simple home</p>
        </div>
    </footer>

</body>
<script src="<?php echo INCLUDE_PATH; ?>static/js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>static/js/menu.js"></script>

</html>
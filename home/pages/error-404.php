<!DOCTYPE html>
<html>

<head>
    <title>Nao foi encontrado :(</title>

    <link href="<?php echo INCLUDE_PATH; ?>static/css/all.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>static/css/home.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,minha,home,">
    <meta name="description" content="Uma pagina simples do html">
    <meta charset="utf-8">

</head>

<body>
    <div class="center">
        <?php
        echo '<h2 >Error 404</h2>
        <p>Pagina ' . $url . '/ nao existe... :(</p>';
        echo '<a href=' . INCLUDE_PATH . '>Voltar</a>';
        ?>
    </div>
    <div style="position: fixed; width: 100%; bottom: 0;">
    
</body>

</html>
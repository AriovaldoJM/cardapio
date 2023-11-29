<!-- Base !-->
<?php
 $url =  explode('/', $_SERVER['PHP_SELF']);

 if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $diretorio = $url[1];
    $nome_arquivo = $url[2];
    $url2 = explode('.', $nome_arquivo);
    $base = "http://" . $_SERVER['HTTP_HOST'] . "/" . $diretorio . "/";
    $pagina = $url2[0];
} 


?>
<link rel="shortcut icon" type="image/x-icon" href="assets/favicon32.webp">
    <meta name="robots" content="follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="AMZ|MP - Agência de publicidade">
    <link href="https://amzmp.com.br/" rel="publisher" />
    <meta name="theme-color" content="#000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- Open Graph !-->
    <meta property="og:title" content="Blog BeOne Beauty: Dicas de expert para seu cabelo" />
    <meta property="og:url" content="https://blog.beonebeauty.com.br/" />
    <meta property="og:type" content="company" />
    <!-- <meta property="og:image" content="https://blog.beonebeauty.com.br/assets/favicon.webp" /> -->
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <!-- <meta property="og:site_name" content="BeOne Beauty" /> -->
    <meta property="og:description" content="Cabelo liso, cacheado, ondulado, crespo, natural, com química ou danificado? Saiba tudo sobre o seu tipo de cabelo e dicas de expert sobre tratamentos, tendências e cuidados personalizados." />
    <!-- Styles !-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@v2.8.0/dist/cookieconsent.css" />
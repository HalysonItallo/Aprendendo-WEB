<!doctype html>
<html lang="pt-BR">
    <head>
        <title>Apredizado de HTML,CSS,Jquerry em um login</title>
        <meta name="description" content="Eu viso com esse projeto desenvolver minhas habilidades na área de desenvolvimento WEB e melhorar com programador princilpamente em PHP, HTML, CSS, jQuery aumentando o meu conhecimentos sobre tais aplicações">
        <meta charset="utf-8">
        <link rel="manifest" href="/manifest.json">
        <link href="assets/css/css_ajuste.css" rel="stylesheet">
        <!--manifest ?? -->
        <link rel="manisfest" href="manifest.json">
        <!--( assets )-->
        <!--/Php/-->
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- serviceWorker on head -->
        <script>
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', function() {
                    navigator.serviceWorker.register('/php/sw.js').then(function(registration) {
                        // Registration was successful
                        console.log('ServiceWorker registration successful with scope: ', registration.scope);
                    }, function(err) {
                        // registration failed :(
                        console.log('ServiceWorker registration failed: ', err);
                    });
                });
            }
        </script>
    </head>

    <body id="main">
        <div id="login_form">
            <div>
                <img id="image" src="assets/imagens/padlock.png" alt=" ">
                <!--/Php/-->
            </div>
            <h1>Login</h1>
            <hr class="line">
            <form method="POST" id="form">
                Login: <input type="text" name="login" id="login"><br>
                Senha: <input type="password" name="senha" id="senha"><br>
                <button class="button" type="submit" name="btn_entrar" id="btn_login" style="vertical-align:middle"><span>Entrar</span></button>
            </form>
        </div>
        <script type="text/javascript" src="assets/js/login.js"></script>
        <!--( assets )-->

    </body>
</html>
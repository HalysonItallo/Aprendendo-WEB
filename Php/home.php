<?php
    require_once 'db_connect.php';
    session_start();
    $id = $_SESSION['id_usuario'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $result = mysqli_query($connect,$sql);
    $dados = mysqli_fetch_array($result);
    mysqli_close($connect);
    //Verificação
    if(!isset($_SESSION['logado'])) {
        header('Location: index.php');
    }
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title> Página Restrita </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link href="assets/css/css_ajuste.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <body id="main_home">
        <div class="nav-top">
            <button id="logout" type="button" style="vertical-align: middle" name="btn_sair">
                <span>Sair</span>
            </button>
        </div>

        <div id="div_home">
            <h1 id="h1_home"> Olá <?php echo $dados['nome'] . ' Cunha Pimentel';?> </h1>
        </div>
        <script type="text/javascript" src="assets/js/login.js"></script>
    </body>
</html>

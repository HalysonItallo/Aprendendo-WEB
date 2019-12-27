<?php
//conexão
require_once 'db_connect.php';
//session
session_start();
if(isset($_POST['btn_entrar'])) {
    $erros = array();
    $login = mysqli_escape_string($connect,$_POST['login']);
    $senha = mysqli_escape_string($connect,$_POST['senha']);
    if(empty($login) or empty($senha)) {
        echo "O campo login/senha precisa ser preenchido";
    } else {
        $senha = md5($senha);
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0) {
            $sql = "SELECT * FROM usuarios WHERE login = '$login' and senha ='$senha'";
            $result = mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) == 1) {
                $dados = mysqli_fetch_array($result);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                $data = mysqli_num_rows($result);
                echo json_encode('logado');
            } else {
                echo json_encode('senha incorreta');
            }
        } else if (mysqli_num_rows($result) == 0) {
            $sql = "SELECT * FROM usuarios WHERE senha ='$senha'";
            $result = mysqli_query($connect,$sql);
            if(mysqli_num_rows($result) == 0) {
                echo json_encode('usuario e senha icorretos');
            }
            else {
                echo json_encode('usuario incorreto');
            }
        }
    }
}
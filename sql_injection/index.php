<?php
  // if(!empty($_POST['user']) && !empty($_POST['password'])) { 
    $dsn = 'mysql:host=localhost;dbname=php_with_pdo';
    $db_user  = 'root';
    $db_password = '';
    
    try {
      $connection = new PDO($dsn, $db_user, $db_password);
      
      $query = 'select * from tb_users where ';
      $query .= ' email = :user';
      $query .= ' AND password = :password';
      
      $stmt = $connection->prepare($query);
      //Prepara a nossa query evitando o sql_injection
      $stmt->bindValue(':user', $_POST["user"]);
      $stmt->bindValue(':password', $_POST["password"]);
      
      $stmt->execute();
      
      $user = $stmt->fetch();
      
      echo '<pre>';
      print_r($user);
      echo '</pre>';
      
    } catch(PDOException $e) {
      echo'Error: '.$e->getCode().'Mensagem: '.$e->getMessage();
    }
  // }
?>

<html>
  <head>
    <meta charset ="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form method="post" action="index.php">
      <input type="text" placeholder="usuário" name="user">
      <br>
      <input type="password" placeholder="senha" name="password">
      <br>
      <button type="submit">Entrar</button>
    </form>
  </body>
</html>
  
  
  
  
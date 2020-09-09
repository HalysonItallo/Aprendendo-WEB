<?php
  $dsn = 'mysql:host=localhost;dbname=php_with_pdo';
  $user  = 'root';
  $password = '';
  
  try {
    $connection = new PDO($dsn, $user, $password);
    
    // *** Criar tabela ***
    // $query = '
    //   create table tb_users(
    //     id int not null primary key auto_increment,
    //     name varchar(50) not null,
    //     email varchar(100) not null,
    //     password varchar(32) not null
    //   )'; 
    // echo $connection -> exec($query);
    
    
    // *** Deletar dados do banco ***
    // $query = '
    //   delete from tb_users
    // ';
    // echo $connection -> exec($query);
    
    
    // *** Inserir dados no banco *** 
    // $query = '
    //   insert into tb_users( name, email, password ) values (
    //    "Halyson Itallo", "halyson@test.com", "1234" 
    //   )';  
    // $connection -> exec($query);
    
    $query  = '
      select * from tb_users
    ';
    
    //$stmt = $connection->query($query);
    // *** Indices associativos(Tem o nome da coluna da tabela) ***
    //$list_users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo($list[0]['name']);
    
    // *** Indices numerico(Tem o numero do indice da coluna da tabela) ***
    //$list = $stmt->fetchAll(PDO::FETCH_NUM);
    // echo($list[0][0]);
    
    // *** Objeto (O acesso por meio de um objeto recebendo um array de objetos) ***
    //$list = $stmt->fetchAll(PDO::FETCH_OBJ);
    //echo($list[0]->name);
     
    
    // *** Objeto (O acesso a um objeto apenas)
    // $list = $stmt->fetch(PDO::FETCH_OBJ);
    // echo($list->name);
    
    // foreach($list_users as $key => $value) {
    //   echo '<pre>';
    //   echo $value['name'];
    //   echo '</pre>';
    // };
    
    // *** Percorrer o resultados das nossas consultas ***
    // foreach($connection->query($query) as $key => $value) {
    //   print_r($value);
    //   echo '<hr>';
    // };
    
  } catch(PDOException $e) {
    echo'Error: '.$e->getCode().'Mensagem: '.$e->getMessage();
    // error
  }
  
  
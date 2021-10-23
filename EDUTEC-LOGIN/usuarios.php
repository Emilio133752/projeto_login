<?php

 class Usuario
 {
    //global variaveis
    public $msgErro = "";
    public function cadastrar($nome, $email, $senha){
      $conect = new PDO('mysql:host=localhost; dbname=login', 'root', 'root');
      $sql = $conect->prepare("SELECT id FROM login_usuarios WHERE email = :e");
      $sql->bindValue(":e", $email);
      $sql->execute();
      if($sql->rowCount() > 0 ){
        return false;
      }else{
        $conect = new PDO('mysql:host=localhost; dbname=login', 'root', 'root');
        $sql = $conect->prepare("INSERT INTO login_usuarios(nome, email, senha) VALUES (:n, :e, :s)");
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", $senha);
        $sql->execute();
        return true;
      }
    }
    public function logar($email, $senha){
      $conect = new PDO('mysql:host=localhost; dbname=login', 'root', '');
      $sql = $conect->prepare("SELECT id from login_usuarios WHERE email = :e AND senha = :s");
      $sql->bindValue(":e", $email);
      $sql->bindValue(":s", $senha);
      $sql->execute();
      if($sql->rowCount() > 0){
       $dado = $sql->fetch();
       session_start();
       $_SESSION['id'] = $dado['id'];
       return true;
      }else{
        return false; 
      }
    }
  }
?>
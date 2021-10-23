<?php
  require_once 'usuarios.php';
  $u = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>  
  <title>Astronomia - Registro</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./css/registro.css">
</head>
<body>
  <div class="bg-fundo">
    <div class="container">
      <div class="container-login">
        <h2 class="text-center">Registre-se</h2>
            <div class="container-form">
              <form method="POST">
                <input type="text" name="nome" id="nome" placeholder="Nome" maxlength="100">
                <img src="./imagens/icone-nome.svg" class="icone" alt="Icone Nome">
                <input type="text" name="email" id="email" placeholder="E-mail">
                <img src="./imagens/icone-email.svg" class="icone" alt="Icone Email">
                <input type="password" name="senha" id="senha" placeholder="Senha" minlength="6">
                <img src="./imagens/senha.svg" class="icone" alt="Icone Email">        
                <a href="login.php"><h2>Já tem um registro? Entrar</h2></a>    
                <button type="submit" id="btn">Registrar</button>
              </form> 

            </div>               
           <?php
      if(isset($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        if(!empty($nome) && !empty($email) && !empty($senha)){
          if($u->msgErro == ""){
            if($u->cadastrar($nome, $email, $senha)){
              echo '<div class="resultado">Cadastrado com sucesso</div>';
            }else{
              echo '<div class="resultado">Email já cadastrado</div>';
            }
          }else{  
            echo "<div class='resultado'>Erro: ".$u->msgErro. "</div>";
          }
        }else{
          echo "<div class='resultado'>Preencha todos os campos</div>";
        }
      }
    ?>               
      </div>
    </div>
    
  </body>
</html>
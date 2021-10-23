<?php
  require_once 'usuarios.php';
  $u = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>  
  <title>Astronomia - Login</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/login.css">
</head>
<body>           
  <div class="bg-fundo">
    <div class="container">
      <div class="container-login">
        <h2 class="text-center">Entrar</h2>
            <div class="container-form">
              <form method="POST">
                <input type="text" name="email" id="email" placeholder="E-mail">
                <img src="./imagens/icone-email.svg" class="icone" alt="Icone Email">
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <img src="./imagens/senha.svg" class="icone" alt="Icone Email">           
                <a href="registro.php"><h2>Não está registrado? Registre-se</h2></a>    
                <button type="submit" id="btn">Entrar</button>
              </form>        
            </div>                
        <div class="social">
            <ul>
              <li>
                <a href="#"><img src="./imagens/FACE.svg" alt="Facebook"></a>
                <a href="#"><img src="./imagens/INSTA.svg" alt="Instagram"></a>
                <a href="#"><img src="./imagens/TWIITER.svg" alt="Twitter"></a>
              </li>
            </ul>
        </div>
        <?php
          if(isset($_POST['email'])){
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            if(!empty($email) && !empty($senha)){
              if($u->msgErro == ""){
                  if($u->logar($email,$senha)){                    
                    if($_SESSION['id']){
                      header('Location:index.php');
                    }
                  }else{
                    echo '<div class="resultado">Email ou senha incorretos</div>';
                  }
                }else{
                  echo "<div class='resultado'>Erro: ".$u->msgErro. "</div>";
                }
            }else{
              echo '<div class="resultado">Preencha todos os campos</div>';
            }
          }
?>       
      </div>
    </div>
  </body>
</html>

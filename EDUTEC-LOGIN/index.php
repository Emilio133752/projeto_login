<?php
  session_start();
  if(!isset($_SESSION['id'])){
    header("location:login.php");
    exit;  
  }
  
  if(isset($_GET['sair'])){
    unset($_SESSION['id']);
    header("location:login.php");
  }    
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Astronomia</title>      
    <link rel="stylesheet" href="./css/style.css">    
  </head>
  <body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="./imagens/galaxy-content.png" width="60" height="40" class="img-fluid" alt=""></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white text-center" href="index.php#comeco">Começo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white text-center" href="#conteudos-content">Conteudos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white text-center" href="#curiosidades">Curiosidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white text-center" href="#sobre">Sobre</a>
            </li>
          </ul>
          <a class="nav-link text-center justify-content-center estilo-log" href="index.php?sair"><svg xmlns="http://www.w3.org/2000/svg" class="text-white justify-content-center " width="35" height="35" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
          <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg></a>
        </div>
      </div>
    </nav>

        <!-- Navbar fim  -->

    <!-- TEXTO IMAGEM PRINCIPAL  -->
    <main id="comeco">
      <div class="bg-fundo w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="grid-16">
            <h1>Astronomia</h1>
            </div>
            <div class="grid-16">
              <blockquote class="blockquote text-center text-white d-flex justify-content-center align-items-center sub-titulo ">
                <p>"a mais antiga das ciências"</p>
              </blockquote>
            </div>
          </div>
        </div>
      </div>        
  </main> 
    <!--CONTEUDOS-->
  <section class=" stlize-main">    
    
    <div class="contente text-center" id="conteudos-content">
      <h1 class="text-white size-center-text texto-central-conteudos" >CONTEUDOS</h1>
    </div>
    
    <div class="container-fluid">
      <div class="row d-flex align-items-center justify-content-center  ">
        <div class=" col-5 col-lg-5 styles-contents ">
          <a href="./pagOne/pagOne.html" class="pg-a">
            <div class="pg-arrumando d-flex justify-content-start ">            
              <img src="./imagens/imgOne.jfif" class="imagem rounded" alt="">
              <p class="text-paragrafo">   
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-center d-flex justify-content-center align-items-center"  width="40" height="40" fill="currentColor" class="bi bi-moon-stars" viewBox="0 0 16 16">
                  <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                  <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                </svg>
                Entenda a origem dos estudos astronômicos, por que eles surgiram e como ela se tornou o que é hoje.    
                </strong>
              </p>
            </div>
          </a>
        </div>

        <div class="col-5 col-lg-5 styles-contents styles-contents ">
          <a href="./Camadas/Camadas.html" class="pg-a">
            <div class="pg-arrumando d-flex justify-content-start">            
              <img src="./imagens/imgTwo.jfif" class="imagem rounded" alt="">
              <p class="text-paragrafo">  
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-center d-flex justify-content-center align-items-center"   width="40" height="40" fill="currentColor" class="bi bi-list-nested" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z"/>
                </svg>           
                Saiba quais são as camadas que compõem a atmosfera terrestre.             
                </p>
            </div>  
          </a>
        </div>

        <div class="col-5 col-lg-5 styles-contents styles-contents">
          <a href="./Movimento/Movimentos.html" class="pg-a">
            <div class="pg-arrumando d-flex justify-content-start">            
              <img src="./imagens/imgThree.jfif" class="imagem rounded" alt="">
              <p class="text-paragrafo">       
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-center d-flex justify-content-center align-items-center"  width="40" height="40" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                </svg>
                Entenda os movimentos de rotação e translação da terra da terra.</p>
            </div>
          </a>
        </div>

        <div class="col-5 col-lg-5 styles-contents styles-contents ">
          <a href="./Ferramentas/Ferramentas.html" class="pg-a">
            <div class="pg-arrumando d-flex justify-content-start">            
              <img src="./imagens/imgFour.jfif" class="imagem rounded" alt="">
              <p class="text-paragrafo">                
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-center d-flex justify-content-center align-items-center"  width="40" height="40" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                </svg>
                Veja as principais ferramentas usadas por profissionais no estudo da astronomia</p>
            </div>
          </a>
        </div>

        <div class="col-5 col-lg-5 styles-contents styles-contents ">
          <a href="./Teorias/Teorias.html" class="pg-a">
            <div class="pg-arrumando d-flex justify-content-start">            
              <img src="./imagens/imgFive.jfif" class="imagem rounded" alt="">
              <p class="text-paragrafo">       
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" class="svg-center d-flex justify-content-center align-items-center"  fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                  <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                </svg>
                Conheça as três principais teorias para a origem universo que vivemos</p>
            </div>
          </a>
        </div>

        <div class="col-5 col-lg-5 styles-contents styles-contents">
          <a href="./Figuras_Imp/Figuras_Imp.html" class="pg-a">
            <div class="pg-arrumando d-flex justify-content-start">            
              <img src="./imagens/imgSix.jfif" class="imagem rounded" alt="">
              <p class="text-paragrafo">       
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="svg-center d-flex justify-content-center align-items-center" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                </svg>
                Veja as principais figuras para o meio astronômico.</p>
            </div>
          </a>
        </div>

        <div class="col-5 col-lg-5 styles-contents styles-contents">
          <a href="./ImagensOne/Imagens.html" class="pg-a">
            <div class="pg-arrumando d-flex justify-content-start">            
              <img src="./imagens/imgSeven.jfif" class="imagem rounded" alt="">
              <p class="text-paragrafo">
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-center1 d-flex justify-content-center align-items-center"  width="40" height="40" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                  <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                  <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                </svg>
                Aqui estão as imagens feitas por nós, vocês também podem usá-las
              </p>
            </div>
          </a>
        </div>
        
        <div class="col-5 col-lg-5 styles-contents styles-contents">
          <a href="./Fenomenos/Fenomenos.html" class="pg-a">
            <div class="pg-arrumando d-flex justify-content-start">            
              <img src="./imagens/imgEight.jfif" class="imagem rounded" alt="">
              <p class="text-paragrafo">       
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="svg-center1 d-flex justify-content-center align-items-center" fill="currentColor" class="bi bi-cloud-sun" viewBox="0 0 16 16">
                  <path d="M7 8a3.5 3.5 0 0 1 3.5 3.555.5.5 0 0 0 .624.492A1.503 1.503 0 0 1 13 13.5a1.5 1.5 0 0 1-1.5 1.5H3a2 2 0 1 1 .1-3.998.5.5 0 0 0 .51-.375A3.502 3.502 0 0 1 7 8zm4.473 3a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5h-.027z"/>
                  <path d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0v-1zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129zm4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377zM14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                </svg>
                Fenômenos astronômicos:
                Conheça um pouco mais sobre os principais fenômenos astronômicos.</p>
            </div>
          </a>
        </div>


        
      </div>
    </div>
</section>

    <!--CURIOSIDADES-->
    <main class="stlize-main ">

      <div class="contente text-center">
        <h1 class="text-white size-center-text texto-central-conteudos" id="curiosidades" >CURIOSIDADES</h1>
      </div>

  <div class="col" style="padding-top: 3%;"></div>
  <div class="container">
    <div class="row">
    <div class="row">
      <div class="col"> </div>
      <div class="col-11" style="padding-bottom: 10%;">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Como uma estrela queima? </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body"> 
                <img src="./imagens/curiosidadeOne.png" class="img-fluid rounded centralizando-img"  alt="">
              <p class="p-3 ">
                Segundo os estudiosos, elas não possuem fogo comum, como estamos acostumados aqui na Terra. Trata-se de fusões termonucleares que ocorrem no interior do Sol e das estrelas, onde a matéria é convertida em energia.</p> </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Como funciona a velocidade da luz? </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body"> 
                <img src="./imagens/curiosidadeTwo.png" class="img-fluid rounded centralizando-img"  alt="">
              <p class="p-3 ">
                A luz viaja no vácuo a uma velocidade de cerca de 300 mil quilômetros por segundo. A lua está a cerca de 384 mil km da Terra, então, isto significa que a luz dela leva um pouquinho mais do que um segundo para chegar até os nossos olhos.
              </p> </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Podemos ver alguma estrela morta ainda “viva”? </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body"> 
                <img src="./imagens/curiosidadeThree.png" class="img-fluid rounded centralizando-img"  alt="">
              <p class="p-3 ">
                A luz da estrela mais próxima do Sol, chamada de Alfa Centauri, leva um pouco mais de quatro anos para chegar até nossos olhos! Porém, as estrelas têm um ciclo de vida, dessa forma, elas ‘nascem’, vivem e depois tem um fim.</p> </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Como funciona o ciclo de vida de uma estrela? </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body"> 
                  <img src="./imagens/curiosidadeFour.png" class="img-fluid rounded centralizando-img"  alt="">
                <p class="p-3 ">
                  Segundo estudos, uma estrela “nasce” a partir de enormes nuvens de gases e poeiras no espaço. Partes de nebulosas se juntam devido, principalmente, à força da gravidade e este material acaba se comprimindo tanto que, no interior, a pressão e a temperatura vão a milhões de graus, dando origem às fusões termonucleares, ou seja, fusões de matéria, transformando o Hidrogênio em Hélio.</p> </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> O que é um buraco negro? </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
              <div class="accordion-body"> 
                <img src="./imagens/curiosidadeFive.png" class="img-fluid rounded centralizando-img"  alt="">
              <p class="p-3 ">
                Basicamente, o buraco negro seria o resultado de uma estrela morta. Ele se forma quando uma estrela de grande massa (muito maior que a do Sol) termina seu período de fusões termonucleares, sendo vencida pela gravidade, cuja força puxou toda a matéria para um objeto de diâmetro que tende a zero.</p> </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> O termo “estrela cadente” é algo errado? </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
              <div class="accordion-body"> 
                <img src="./imagens/curiosidadeSix.png" class="img-fluid rounded centralizando-img"  alt="">
              <p class="p-3 ">
                Sim, é errado, o termo certo seria “Meteoro”. São rochas provenientes do espaço e que são atraídas pela gravidade da Terra. Ao caírem na atmosfera da Terra, ocorre um atrito violento com o ar, fazendo-os aquecer a milhares de graus e produzindo o brilho característico que lembra uma estrela.</p> </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"> Como é a cor do céu vista de outros planetas? </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
              <div class="accordion-body"> 
                <img src="./imagens/curiosidadeSeven.png" class="img-fluid rounded centralizando-img"  alt="">
              <p class="p-3 ">
                Cada planeta tem uma atmosfera diferente da Terra, alguns planetas nem tem atmosfera ou são bem rarefeitos, outros possuem uma atmosfera bem espessa, explicam estudos.                          
                Um exemplo é Marte, que tem uma atmosfera composta principalmente de gás carbônico, que torna o céu com uma aparência rosada e alaranjada e, em vez de o pôr do sol ser avermelhado, lá, o horizonte fica azulado.
                Outro exemplo é a atmosfera de Vênus, que também é composta principalmente de gás carbônico, mas é tão espessa que o efeito estufa de lá é bem intenso. Assim, o calor fica preso e a temperatura pode chegar a atingir quase 400 graus.
                </p> 
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"> Existe algum planeta em que chove diariamente? </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
              <div class="accordion-body"> 
                <img src="./imagens/curiosidadeEight.png" class="img-fluid rounded centralizando-img"  alt="">
              <p class="p-3 ">
                Um estudioso explica que segundo estudos isso pode acontecer nos planetas gigantes gasosos como: Júpiter, Saturno, Urano e Netuno.</p> </div>
            </div>
          </div>


          <div class="accordion-item">
            <h2 class="accordion-header" id="headingNine">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"> Qual a diferença dele para um planeta rochoso? </button>
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
              <div class="accordion-body"> 
                <img src="./imagens/curiosidadeNine.png" class="img-fluid rounded centralizando-img"  alt="">
              <p class="p-3 ">
                “Um planeta gasoso não é uma bola de gás, como o nome parece sugerir. Dentro dele existe um núcleo rochoso pequeno. Devido à força da gravidade, os gases são atraídos para o centro do planeta e, como se trata de uma quantidade muito grande de gases, então o planeta formado é grande”, esclarece o estudioso.
                Mas, conforme mergulhamos mais fundo no planeta, a pressão aumenta. Então, a certa altitude, o gás muda para o estado líquido e, mais fundo ainda, para o sólido, logo, o que um planeta gasoso menos possui é gás.
                        Os planetas rochosos, são como a Terra, com solo firme para pisar. São eles: Mercúrio, Vênus, Marte e a já citada Terra.
                </p> </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </main>

<div class="bg-cor">
  <div class="container d-flex justify-content-center">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link"  href="./Fenomenos/Fenomenos.html">
          <span aria-hidden="true">

            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
              <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
            </svg>      
            Anterior
          </span>
        </a></li>
        <li class="page-item active" aria-current="page"><a class="page-link" href="./index.html">1</a></li>
        <li class="page-item"><a class="page-link" href="./pagOne/pagOne.html">2</a></li>
        <li class="page-item"><a class="page-link" href="./Camadas/Camadas.html">3</a></li>
        <li class="page-item"><a class="page-link" href="./Movimento/Movimentos.html">4</a></li>
        <li class="page-item"><a class="page-link" href="./Teorias/Teorias.html">5</a></li>
        <li class="page-item"><a class="page-link" href="./Ferramentas/Ferramentas.html">6</a></li>
        <li class="page-item"><a class="page-link" href="./Figuras_Imp/Figuras_Imp.html">7</a></li>
        <li class="page-item"><a class="page-link" href="./ImagensOne/Imagens.html">8</a></li>
        <li class="page-item"><a class="page-link" href="./Fenomenos/Fenomenos.html">9</a></li>
        <li class="page-item"><a class="page-link" href="./pagOne/pagOne.html">
          <span aria-hidden="true">            Proximo
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
              <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg>

          </span>
        </a></li>
    </ul>
  </nav>
  </div>
</div>

  <footer class="sobre" id="sobre">
    <div class="container">
      <div class="row row-cols-3">
        <div class="col-4">
          <div class="one">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-bt" width="50" height="50" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
              <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
            </svg>
          </div>
          <div class="texto">
            <p>Desenvolvimento e Design por <br> 
              <strong> Emiilio Santos  </br></strong>
          </div>
        </div>
          <div class="col-4">
            <div class="one">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon-bt" width="50" height="50" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
              </svg>
            </div>
            <div class="texto">
              <p> Conteúdos sobre o tema por <br> 
                <strong> Murilo Kaue </br></strong>
                <strong> Emiilio Santos  </br></strong>
                <strong> Rafael Capovilla </br></strong>
                <strong> Guilherme </br></strong>
                <strong> Gustavo rocha </br></strong>
              </p>
            </div>
          </div>
          <div class="col-4">
            <div class="col">
              <div class="one">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-bt" width="50" height="50" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                  <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                </svg>
              </div>
              <div class="texto">
                <p> Ilustração e Design por <br> 
                  <strong> Murilo Kaue </br></strong>
                  <strong> Emiilio Santos  </br></strong>
                </p>
              </div>
            </div>
          </div>
      </div>
    </footer>
</body> 

<script src="js/bootstrap.bundle.min.js"></script>  
  <!--SCRIPT QUE DA COR QUANDO A PÁGINA DESCE-->
  <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 250) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>

</html>

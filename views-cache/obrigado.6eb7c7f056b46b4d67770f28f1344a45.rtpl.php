<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <title>Home</title>
<link rel="stylesheet" type="text/css" href="res/site/css/bootstrap.min.css">
<link rel="stylesheet" href="res/site/fontwn/css/font-awesome.min.css">

<link rel="stylesheet" href="res/site/estilo.css">

</head>

<body>

<header>
<!-- Inicio do Menu Head -->

<div class="col-sm-12"></div>


<nav class="navbar navbar-default navbar-fixed-top menu">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header logo">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">COMOZ</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" class="menus" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right menu-r">
        <li><a href="/">Home</a></li>
        <li><a href="#">Pacotes</a></li>
        <li><a href="#">Testemunhos</a></li>
        <li><a href="#">Team</a></li>
        <li><a href="#">Contacto</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>

<!-- Fim do Menu Head -->



<div class="container separacao">
  <div class="row">
  <div id="confirmacao">
    <div class="col-sm-12">
      <i class="fa fa-check-square-o" aria-hidden="true"></i><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
      <h2>Enviado com Sucesso!</h2>
      <h3>Está quase lá! Acesse a caixa de entrada do seu email.  <br>
        Onde irá encontrar um email igual a esse da imagem abaixo. Depois de confirmar todos os detalhes, clique no botão <strong>AZUL</strong> no Email para carregar a imagem do comprovativo.</h3>
        </div>
        <div class="col-sm-2"></div>
      <div class="row">
        <div class="email-v">
          <div class="col-sm-4">
            <img class="img-responsive" src="res/site/img/email1.png">
          </div>
          <div class="col-sm-4">
            <img class="img-responsive" src="res/site/img/email2.png">
            
          </div>
          <div class="col-sm-4">
            <img class="img-responsive" src="res/site/img/email3.png">
            
          </div>
          
        </div>
      </div>

      <button id="back">Voltar a Home</button>
    </div>
  </div>

</div>
</div>




<footer>
	<div class="container-fluid" id="rodape">
	<div class="row">
	<div class="container">
	<h4 align="center">SITE & TODOS DIREITOS RESERVADOS</h4>
	</div>
	</div>
	</div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="res/site/js/bootstrap.min.js"></script>
</body>

</html>
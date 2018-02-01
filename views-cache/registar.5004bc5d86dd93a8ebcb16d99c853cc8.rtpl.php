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

</header>

<!-- Fim do Menu Head -->


<div class="container separacao">
		<div class="row">
			<div class="col-sm-12"></div>

		</div>
		<div class="row">
			<div class="formulario-home">
				<div class="col-sm-12">
				<div class="col-sm-6">

				<h2 align="left">Dados Pessoais </h2>
				<hr>
					<form method="post" action="/pedido">
						<label>Nome <span>*</span></label><br>
						<input type="text" name="nome" placeholder="Seu Nome"><br>

						<label>Apelido</label><br>
						<input type="text" name="apelido" placeholder="Seu Apelido"><br>

						<label>BI <span>*</span></label><br>
						<input type="number" name="bi" placeholder="Seu BI"><br>
						<small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu BI ou outros dados com ninguém.</small><br>
						<div class="sexo_cidade">
						<div class="row">
						<div class="col-sm-6">
						<label>Cidade <span>*</span></label><br>
						<select name="cidade">

							<option>Maputo</option>
							<option>Matola</option>
							<option>Sofala</option>
							<option>Tete</option>
							<option>Beira</option>
							<option>Zambezia</option>
							<option>Gaza</option>
							<option>Quelimane</option>
							<option>Nampula</option>

						</select><br>
						</div>
						<div class="col-sm-6">
						<label>Sexo <span>*</span></label><br>
						<select name="sexo">

							<option>Masculino</option>
							<option>Femenino</option>
							<option>Outro</option>

						</select><br>

						</div>
						</div>

						</div>
						<div class="row">
						<div class="col-sm-12">
						<div class="alert alert-warning" role="alert">
  						<strong>Aviso!</strong> Todos os campos com <span>*</span> devem ser preenchidos obrigatoriamente.
  						</div><br>
						</div><br>
						</div>
				</div>
				<div class="col-sm-6">
					<h2 align="left">Dados para Contacto & PayPal </h2>
					<hr>
						<label>Email <span>*</span></label><br>
						<input type="email" name="email" placeholder="Seu Email"><br>
						<small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email ou outros dados com ninguém.</small><br>

						<label>Telefone Celular </label><br>
						<input type="tel" size="12" name="celular" placeholder="Exemplo +258841234567"><br>

						<label>Valor em USD <span>*</span></label><br>
						<input type="number" name="usd" placeholder="Montante"><br>

						<label>Paypal Email <span>*</span></label><br>
						<input type="email" name="pmail" placeholder="Seu Email do Paypal"><br>

						<input type="submit" value="Enviar" name=" Enviar">
				</div>

					</form>
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
 <script type="text/javascript" src="http://suporte.mozcoach.com/php/app.php?widget-init.js"></script>
</body>

</html>
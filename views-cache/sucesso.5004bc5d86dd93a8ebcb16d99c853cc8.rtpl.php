<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="stylesheet" type="text/css" href="http://<?php echo htmlspecialchars( $dominio, ENT_COMPAT, 'UTF-8', FALSE ); ?>/res/site/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://<?php echo htmlspecialchars( $dominio, ENT_COMPAT, 'UTF-8', FALSE ); ?>/res/site/fontwn/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://<?php echo htmlspecialchars( $dominio, ENT_COMPAT, 'UTF-8', FALSE ); ?>/res/site/estilo.css">
 <script type="text/javascript" src="http://suporte.mozcoach.com/php/app.php?widget-init.js"></script>


	<title>Sucesso</title>


	<style>
		
		section.obrigado{

			margin-top:45px;
		}

		section.obrigado img{

			display: block;
			margin: 0 auto;
			margin-top: 15px;
		}

		section.obrigado h3{

			text-align: center;
			font-size: 25px;
			color: black;
			text-transform: uppercase;
		}

		.navbar-default.menu{

			background-color: rgb(25, 23, 23)!important;
		}

	</style>


</head>
<body>

<header>
<!-- Inicio do Menu Head -->

<nav class="navbar navbar-default menu">
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

    

  </div><!-- /.container-fluid -->
</nav>

</header>

<section class="obrigado">

	<div class="container">

		<div class="row">

			<div class="col-sm-3"></div>

			<div class="col-sm-6">

	<img class="img-responsive" src="http://<?php echo htmlspecialchars( $dominio, ENT_COMPAT, 'UTF-8', FALSE ); ?>/res/site/img/cool.gif">

			</div>

			<div class="col-sm-3"></div>

		</div>

		<div class="row">

			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				
				<h3>Seu Comprovativo Foi Enviado Com SUCESSO!!</h3>
				<br>
				<h4 align="center">Por Favor, Aguarde um Email do Sistema! com mais Informações</h4>

			</div>
			<div class="col-sm-4"></div>

	

</section>

</body>
</html>
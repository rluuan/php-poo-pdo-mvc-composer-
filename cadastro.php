<?php 
	require_once ("vendor/autoload.php");
?>	
<html>
	<head>
		<title>SISTEMA DE LOGIN</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
		<link rel="stylesheet" href="_css/login.css">
		<script src="_js/login.js"></script>
	</head>
	<body>
		<div class="mdl-layout mdl-js-layout mdl-color--grey-100">
			<main class="mdl-layout__content">
				<h1 class="text-center">Página de Login</h1>
				<div class="mdl-card mdl-shadow--6dp" style="padding: 10px">
					<div class="mdl-card__title mdl-color--primary mdl-color-text--white">
						<h2 class="mdl-card__title-text">Login</h2>
					</div>
					<form action="envialogin.php" method="POST" id="form1index">
						<input type="hidden" name="flagVrfTipoBotao" id="id_flagVrfTipoBotao">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" name="txtName" type="text" id="sample3">
							<label class="mdl-textfield__label" for="sample3">Login...</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="txtPass" id="sample3">
							<label class="mdl-textfield__label"  for="sample3">Senha...</label>
						</div>
					<div class="mdl-card__actions mdl-card--border" style="text-align: center">
						<span onclick="cadastrar()" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
							Cadastrar
						</span>
					</div>
					</form>
					<div id="p2" style="margin-top: 5px" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
				</div>
			</main>
		</div>

	</body>
</html>

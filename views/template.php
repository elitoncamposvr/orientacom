<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Painel de Controle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/fonts/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/main.css" />
	<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery-3.4.0.min.js"></script>
</head>

<body class="flex flex-col">
	<header>
		<div class="header-container">
			<div class="logo w-24 font-semibold text-lg">
				ORIENTACOM
			</div>
			<div class="menu">
				<a class="menu-link" href="<?php echo BASE_URL; ?>">Home</a>
				<a class="menu-link" href="<?php echo BASE_URL; ?>workorder">Ordem de Serviço</a>
				<a class="menu-link" href="<?php echo BASE_URL; ?>settings">Configurações</a>
			</div>
			<div class="menu-logout">
				<a href="<?php echo BASE_URL; ?>login/logout">Sair</a>
			</div>
		</div>
	</header>

	<main>
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</main>
</body>

</html>
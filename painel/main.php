<?php 

	if($_SESSION['login'] == false) {
		header('Location: http://localhost/php/ProjetosPraticos/projeto_landing-page/painel/');
	}
	if(isset($_GET['logout'])) {
		Painel::logout();
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Painel de controle</title>
	  	<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
		<script src="https://kit.fontawesome.com/84ffe3cdd8.js" crossorigin="anonymous"></script>
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico">
	</head>
	<body>
		<div class="menu">
			<div class="menu-wrapper">
				<div class="box-usuario">
					<?php if($_SESSION['img'] == '') { ?>
						<div class="avatar-usuario">
							<i class="fa fa-user"></i>
						</div><!--avatar-usuario-->
					<?php } else { ?>
						<div class="imagem-usuario">
							<img src="<?php echo INCLUDE_PATH_PAINEL; ?>uploads/<?php echo $_SESSION['img']; ?>">
						</div><!--avatar-usuario-->
					<?php } ?>
					<div class="nome-usuario">
						<p><?php echo $_SESSION['nome']; ?></p>
						<p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
					</div><!--nome-usuario-->
				</div><!--box-usuario-->
				<div class="items-menu">
					<h2>Cadastro</h2>
					<a href="<?php echo INCLUDE_PATH_PAINEL; ?>cadastrar-depoimento">Cadastrar Depoimento</a>
					<a href="">Cadastrar Serviço</a>
					<a href="">Cadastrar Slides</a>
					<h2>Gestão</h2>
					<a href="">Listar Depoimento</a>
					<a href="">Listar Serviço</a>
					<a href="">Listar Slides</a>
					<h2>Administração de painel</h2>
					<a href="">Editar Usuário</a>
					<a href="">Editar Usuário</a>
					<h2>Configuração Geral</h2>
					<a href="">Editar</a>
				</div><!--items-menu-->
			</div><!--menu-wrapper-->
		</div><!--menu-->
		<header>
			<div class="center">
				<div class="menu-btn">
					<i class="fa fa-bars"></i>
				</div><!--menu-btn-->
				<div class="logout">
					<a href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout"><i class="fa fa-window-close"></i> <span>Sair</span></a>
					<a href="<?php echo INCLUDE_PATH_PAINEL; ?>"><i class="fa fa-home"></i> <span>Página inicial</span></a>
				</div><!--logout-->
			</div><!--center-->
		</header>
		<div class="clear"></div><!--clear-->
		<div class="content">

			<?php 

				Painel::carregarPagina();

			?>

		</div><!--content-->
		<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo INCLUDE_PATH_PAINEL; ?>js/main.js"></script>
	</body>
</html>
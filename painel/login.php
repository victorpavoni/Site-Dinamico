<style type="text/css">
	body {
		background-color: #212121;
	}
</style>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
	<script src="https://kit.fontawesome.com/84ffe3cdd8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico">
    <title>Portifolio / Login</title>
</head>
<body>
	<div class="box-login">
		<?php 

			if(isset($_POST['acao'])) {
				$user = $_POST['user'];
				$password = $_POST['password'];
				$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
				$sql->execute(array($user,$password));
				if($sql->rowCount() == 1) {
					$info = $sql->fetch();
					$_SESSION['login'] = true;
					$_SESSION['user'] = $user;
					$_SESSION['password'] = $password;
					$_SESSION['cargo'] = $info['cargo'];
					$_SESSION['img'] = $info['img'];
					$_SESSION['nome'] = $info['nome'];
					header("location: http://localhost/php/ProjetosPraticos/projeto_landing-page/painel/");
					die("");
				} else {
					echo '<div class="erro-box"><i class="fas fa-times"></i> &nbsp; Usuario ou senha incorretos!</div>';
				}
			}

		?>
		<h2>Efetue o login:</h2>
		<form method="post">
			<input type="text" name="user" placeholder="Login..." required>
			<input type="password" name="password" placeholder="Senha..." required>
			<input type="submit" name="acao" value="Logar" required>
		</form>
	</div><!--box-login-->
</body>
</html>
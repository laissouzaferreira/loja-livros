<!doctype html>
<html lang="pt-PT">
	<head>
		<meta charset="utf-8">
		<title>Livraria Ler Bem</title>
		<link href="css/estilos.css" rel="stylesheet">
	</head>
	<body>
	
		<?php require_once("inc/cabecalho.php"); ?>
		
		<section>
		
			<?php require_once("inc/menu.php"); ?>
			
			
			<article>
				
				<h2>Login</h2>
				
				<form action="processa-login.php" method="post">
					<p>
						<label for="user">Username:</label>
						<input type="text" name="user" id="user" required>
					</p>
					
					<p>
						<label for="pass">Password:</label>
						<input type="password" name="pass" id="pass" required>
					</p>
					
					<input type="submit" name="login" value="Entrar">
				</form>
			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>
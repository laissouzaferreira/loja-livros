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
				
				<h2>Processa Login</h2>
				
				<?php 
					if(isset($_POST["login"])){
						$user = $_POST["user"];
						$pass = md5($_POST["pass"]);

						//estabelecer ligação base de dados
						require_once("inc/basedados.php");
						
						//efetuar a consulta
						$resultadoConsulta = mysqli_query($ligacaoBD,
						 "	
						 	SELECT *
						 	FROM tb_utilizadores
						 	WHERE username='$user' AND password='$pass'
						 ");	
						 
						 //contar numero de linhas devolvidas pela SQL
						 $nrLinhas = mysqli_num_rows($resultadoConsulta);
						
						if($nrLinhas == 1){
							@session_start();
							$_SESSION["utilizador"]["username"] = $user;
							$_SESSION["utilizador"]["lang"] = "pt_PT";
							
							//confirmar sucesso e reencaminhar para home
							echo "<script>
								alert('Autenticado com sucesso!');
								window.location = 'index.php';
							</script>";
						}else{
							echo "<p>Dados de Acesso Inválidos!</p>";
						}
						
					}
				?>

			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>
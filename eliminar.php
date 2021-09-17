<?php require_once("inc/acesso-restrito.php"); ?>

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
				
				<h2>Gerir Livros</h2>
				<?php 
					//mostrar Todos os livros existentes na base de dados
					require_once("inc/basedados.php");
					
                    $nome = $_GET["nome"];

                    //eliminar bolo cujo ID é o passado na URL
                    mysqli_query($ligacaoBD, "DELETE FROM tb_livros WHERE id=$nome");

                    //voltar página anterior
                    echo "<script>window.location = 'gerir-livros.php'</script>";
				?>
				

			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>
<!doctype html>
<html lang="pt-PT">
	<head>
		<meta charset="utf-8">
		<title>Pastelaria Bolos e Bolachas</title>
		<link href="css/estilos.css" rel="stylesheet">
	</head>
	<body>
	
		<?php require_once("inc/cabecalho.php"); ?>
		
		<section>
			
			<?php require_once("inc/menu.php"); ?>
			
			
			<article>
				
				<h2>Resultado da Pesquisa</h2>

				<?php 
                    $termo = $_POST["termo"];
					//mostrar Todos os bolos existentes na base de dados
					require_once("inc/basedados.php");
					
					//executar consulta e guardar registos devolvidos
					$listaRegistos =
						mysqli_query($ligacaoBD, "
                        SELECT * FROM tb_livros
                        WHERE nome LIKE '%$termo%' OR autor LIKE '%$termo%'
                        ORDER BY id DESC");

					while($linha = mysqli_fetch_assoc($listaRegistos)){
						echo "<h3 style='color: green;'>".$linha["nome"].
						"</h3>";
						echo "<img src='".$linha["foto"]."' alt=''>";
						echo "<hr>";
					}

					
				?>

			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>
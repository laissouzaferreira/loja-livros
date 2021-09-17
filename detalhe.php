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
				
				<h2>Detalhe</h2>

				<?php 
                    //recuperar valor da QueryString livro
                    $nome = $_GET["livros"];

                    //mostrar Todos os bolos existentes na base de dados
					require_once("inc/basedados.php");
					
					//executar consulta e guardar registos devolvidos
					$listaRegistos =
						mysqli_query($ligacaoBD, "
                        SELECT * FROM tb_livros
                        WHERE id = $nome");

					while($linha = mysqli_fetch_assoc($listaRegistos)){
						echo "<h3 style='color: green;'>".$linha["nome"]."</h3>";
						echo "<img src='".$linha["imagem"]."' alt=''>"; // imagem
                        echo "<p>Autor: ".$linha["autor"]." kg</p>";
                        echo"<p>Sinopse:</p><pre>".$linha["sinopse"]."</pre>";
                        

						echo "<hr>"; 
					}

					
				?>

			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>
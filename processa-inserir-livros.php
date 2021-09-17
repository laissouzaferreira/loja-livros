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
				
				<h2>Processa Inserir Livros</h2>
				<?php 
					if(isset($_POST["inserir"])){
						echo "<pre>";
						var_dump($_FILES);
						echo "</pre>";
						
						$nome = $_POST["nome"];
						$autor = $_POST["autor"];
						$sinopse = $_POST["sinopse"];
						$imagem = $_POST["imagem"];
																		
						echo "<h3>Dados Recebidos</h3>";
						echo "<p>Nome do Livro: $nome</p>";
						echo "<p>Autor do Livro: $autor</p>";
						echo "<p>Sinopse: $sinopse</p>";
						echo "<p>Imagem: $imagem</p>";
						echo "<p style='background-color: $cor ;'>Cor</p>";
						
						//carregar ficheiro
						$destino = "./upload/";
						$nomeOriginal = uniqid()."_".$_FILES["imagem"]["name"];
						$caminho = $destino.$nomeOriginal;
						
						//mover ficheiro carregado da pasta temporária para destino
						move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho);
						
						//ver foto carregada
						echo "<img src='$caminho' alt='' >";

						//guardar informações na base de dados
						require_once("inc/basedados.php");

						$sql = "INSERT INTO tb_livros(nome, autor, sinopse, imagem) 
						VALUES('$nome', '$autor', '$sinopse', '$caminho')";

						//executar query na base de dados
						mysqli_query($ligacaoBD, $sql);

						//voltar página de inserir bolo
						echo "<script>window.location = 'inserir-livros.php'</script>";
					}
				?>
			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>
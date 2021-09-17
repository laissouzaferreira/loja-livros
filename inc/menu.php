<?php @session_start(); ?>

<nav>
	<ul>
		<li><a href='index.php'>Home</a></li>
		
		<?php
		
			if(!isset($_SESSION["utilizador"])){
				echo "<li><a href='login.php'>Login</a></li>";
			
			}else{			
				echo "<li><a href='terminar-sessao.php'>Terminar Sessão</a></li>
					<li><a href='inserir-livros.php'>Inserir Livros</a></li>";
			}
		?>
		
		<li><a href='livros.php'>Livros</a></li>
		
	</ul>
</nav>
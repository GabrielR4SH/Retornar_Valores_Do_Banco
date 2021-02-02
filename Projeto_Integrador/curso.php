<!DOCTYPE html>
<html>
<head>
	<title>Projeto Integrador</title>
  <meta charset="utf-8">
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&display=swap" rel="stylesheet">
</head>
<body>

	<header>
			<div class="container">
				<h1>Projeto Integrador</h1>
				<h2 style="color: white;">Professra: Viviane</h2>

				

			

			</div>
<div class="lilas">
<nav id="menu" class="pull-right">
					<ul>
            <li><a href="index.html">Inicio</a></li>
							<li><a href="curso.php">Cursos</a></li>
							<li><a href="professor.php">Professores</a></li>
							<li><a href="cadastro.php">Cadastrar-se</a></li>

							
						</ul>
					</nav>
				</div>

			
			
	</header>

<div class="course"> 
	<br>
	<h1>Veja nossa avaliação</h1>
	
	<svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
</div>
<div class="meio">
	<br>
	<br>

	<table border="5px;">
			<tr>
				<td>Curso</td>
				<td>Descrição</td>
				
			</tr>
			<tr>
				<?php 
				
				include('class/conexao.php');
				
				$selecionar = mysqli_query($conn, "SELECT * FROM cursos");
				while ($campo = mysqli_fetch_array($selecionar)){?>
					<tr>
						<td><?=$campo["nome_curso"]?></td>
						<td><?=$campo["descr"]?></td>
						
					</tr>
					
				<?php  }
				

?>


				
			</tr>
			
	</table>

</div>

</body>
</html>
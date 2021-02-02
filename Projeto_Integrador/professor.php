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
<div class="meio">
	<table border="8px;">
		<tr>
			<td>Nome do Professor</td>
			<td>Curso do Professor</td>
		</tr>
<?php 
	include('class/conexao.php');
	$selecionar = mysqli_query($conn, "SELECT * FROM professores");
	while ($campo = mysqli_fetch_array($selecionar)){?>
		<tr>
			<td><?=$campo["nome"];?></td>
			<td><?=$campo["curso"];?></td>
		</tr>
<?php }
?>
	</table>
</div>
</div>
</body>
</html>
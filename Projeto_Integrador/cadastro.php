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
			<div class="container">

	
<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nome</label>
     <input type="text" class="form-control" name="nome" 
     method="GET" action="cadastro.php" placeholder="Não deixe esse campo vazio" required maxlength="25" value="Gabriel">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Curso</label>
   <input type="text" class="form-control" name="curso" method="GET" action="cadastro.php"
   placeholder="Não deixe esse campo vazio" required maxlength="25">
    </div>
    <br>
  </div>
 <br>
  <button class="btn btn-primary" type="submit">Cadastrar-se</button>
  
</form>
<br><br>

<h1 class="cad">
	Numero de Matriculados:..
</h1>
<br><br>
<div class="meio">
	<table border="8px;">
		<tr>
			<td>Nome do Aluno</td>
			<td>Curso do Aluno</td>
		</tr>
<?php 
include('class/conexao.php');


$nome = $_GET["nome"];


$curso = $_GET["curso"];

if (isset($_GET["nome"]) and isset($_GET["curso"])) {
	


$sql = "INSERT INTO `matriculados` (`nome`, `curso`)
VALUES('$nome','$curso')";


mysqli_query($conn,$sql);

      $selecionar = mysqli_query($conn, "SELECT * from matriculados");
      while ($campo = mysqli_fetch_array($selecionar)){?>
		<tr>
			<td><?=$campo["nome"];?></td>
			<td><?=$campo["curso"];?></td>
		</tr>
		</div>
<?php }

$del = "DELETE FROM `matriculados` WHERE `nome`,`curso` = `$nome`,`$curso`";

mysqli_query($conn,$del);

?>

<form>
<div class="form-group">
    <label for="exampleFormControlSelect1">Nomes já cadastrados:</label>

    <select class="form-control" style="width: 30%;">
      <option> </option>
    <?php 
    $sel = mysqli_query($conn,"select nome from matriculados");
    while($row = mysqli_fetch_assoc($sel)){
    	echo "<option>".$row['nome']."</option>";
    	    }
      }

     else {
     	echo "Defina o nome, voce precisa definir o nome para tirar o erro";
     } 
      ?>
    </select>
  
 </form>

 

</body>
</html>


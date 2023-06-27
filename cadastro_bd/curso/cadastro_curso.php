<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo curso</h1>
		<form action="insercao_curso.php" 
		      method="GET">
			<label for="id_curso">
			Nome:
			</label>
			<input type="text" name="curso" id="id_curso">
			<br>
            <label for="nr_carga_horaria">
			Carga Horária:
			</label>
			<input type="number" name="carga_horaria" id="nr_carga_horaria">
			<br>
			<label for="dt_inicio">
			Data de início:
			</label>
			<input type="datetime-local" name="inicio" id="dt_inicio">
			<br>
			<?php
                          include_once "../inc/conectabd.inc.php";
                        ?>
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>
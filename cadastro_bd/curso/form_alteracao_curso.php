<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
 include "../inc/conectabd.inc.php";
 include "../inc/funcoes.inc.php";
 
 $id = $_GET["id"];
 $al = recupera_curso($id);
?>

<html>
	<head>
	  <title>Alteração de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
		<h1>Atualizar curso</h1>
		<form action="alteracao_curso.php" 
		      method="GET">
                    <input type="hidden" name="id_curso" value="<?php echo $al["id_curso"];?>">
			<label for="id_curso">
			Nome:
			</label>
			<input type="text" name="ds_curso" id="id_curso" value="<?php echo $al["ds_curso"];?>">
			<br>
			<label for="nr_carga_horaria">
			Carga Horária:
			</label>
			<input type="number" name="nr_carga_horaria" id="nr_carga_horaria" value="<?php echo $al["nr_carga_horaria"];?>">
			<br>
			<label for="dt_inicio">
			Data de início:
			</label>
			<input type="datetime-local" name="dt_inicio" id="dt_inicio" value="<?php echo $al["dt_inicio"];?>">
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>
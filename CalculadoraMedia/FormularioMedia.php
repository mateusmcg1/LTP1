<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
     <form action="" method="POST">
    <div class="container" style="margin-top:50px;">
    <label>Nome:</label> <br>
    <input style="max-width:100px;" class="form-control" type="text" name="nome"><br>
    <label>Nota 1:</label> <br>
    <input style="max-width:100px;" class="form-control" type="text" name="nota1"><br>

    <label>Nota 2:</label> <br>
    <input style="max-width:100px;" class="form-control" type="text" name="nota2"><br>
    <label>
        <input class="btn btn-danger" type="submit" name="operacao" value="calcular">
    </label>
    </div>

     </form>
     <?php
      require_once('calculadoracontro.php');  
     ?>
</body>
</html>
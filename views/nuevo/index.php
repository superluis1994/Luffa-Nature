<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require "views/header.php"; ?>
     <div class="main">
        <h2>NUEVO</h2>
     </div>
     <form action="<?php echo constant('URL'); ?>/nuevo/registrarAlumno" method="post">
        <p>
            <label for="matricula">Matricula</label>
            <input type="text" name="matricula" id="matricula">
        </p>
        <p>
            <label for="nombre">nombre</label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <p>
            <label for="apellido">apellido</label>
            <input type="text" name="apellido" id="apellido">
        </p>
        <p>
  
            <input type="submit" >
        </p>
     </form>

    <?php require "views/footer.php"; ?>


</body>
</html>
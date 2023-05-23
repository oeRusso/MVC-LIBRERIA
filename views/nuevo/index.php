<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/default.css"> -->
    <!-- <link rel="stylesheet" href="../../public/default.css"> -->
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php' ?>

    <div id="main">
        <h1 class="center">Seccion de nuevo</h1>

        <div class="center"><?php echo $this->mensaje;?></div>

        <form action="<?php echo constant('URL')?>nuevo/registrarAlumno" method="POST">

            <p>
                <label for="matricula">Matricula</label><br>
                <input type="text" name="matricula" id="" required>
            </p>

            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" id="" required>
            </p>

            <p>
                <label for="categoria">Categoria</label><br>
                <input type="text" name="categoria" id="" required>
            </p>

            <p>
                <label for="autor">Autor</label><br>
                <input type="text" name="autor" id="" required>
            </p>

            <p>
                <input type="submit" value="Registrar Nuevo Libro">
            </p>
        </form>
    </div>
    <?php require 'views/footer.php' ?>
</body>
</html>
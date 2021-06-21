<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_singup.css">
    <title>Modificar</title>
</head>
<body>
    <p class="texto">Modificar</p>
    <div class="Registro"> 
        <form action="cargar.php?c=Usuarios&a=actualizar" id="nuevo" name="nuevo" method="POST">
            
            <input type="hidden" id="id" name="id" value="<?php echo $data["usuarios"]["id"];?>">

            <span class="fontawesome-user"></span><input type="text" required placeholder="Nombre de usuario" id="nombre" name="nombre"
            autocomplete="off" value="<?php echo $data["usuarios"]["namee"];?>">  

            <span class="fontawesome-user"></span><input type="text" required placeholder="Apellido de usuario" id="apellido" name="apellido"
            autocomplete="off" value="<?php echo $data["usuarios"]["email"];?>">

            <span class="fontawesome-envelope-alt"></span><input type="text" id="email" required placeholder="Correo" id="email" name="email"
            autocomplete="off" value="<?php echo $data["usuarios"]["email"];?>">

            <input type="submit" value="Actualizar" title="Actualiza tu cuenta tu cuenta">
        </form>
        <a href="cargar.php"><input type="submit" value="Volver" title="Volver"></a> 
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_singup.css">
    <title>Registro</title>
</head>

<body>
    <p class="texto">Registro</p>
    <div class="Registro">
        <form method="post" action="cargar.php?c=Usuarios&a=guarda">

            <span class="fontawesome-user"></span><input type="text" required placeholder="Nombre de usuario" id="nombre" name="nombre"
                autocomplete="off">
            <span class="fontawesome-user"></span><input type="text" required placeholder="Apellido de usuario" id="apellido" name="apellido"
            autocomplete="off">
            <span class="fontawesome-envelope-alt"></span><input type="text" id="email" required placeholder="Correo" id="email" name="email"
                autocomplete="off">
            <span class="fontawesome-user"></span><input type="text" required placeholder="usuario" id="usuario" name="usuario"
            autocomplete="off">
            <span class="fontawesome-lock"></span><input type="password" id="contrasena" name="contrasena" required
                placeholder="Contraseña" autocomplete="off">
            <input type="submit" value="Registrar" title="Registra tu cuenta">
        </form>  
        <a href="index.php"><input type="submit" value="Volver" title="Volver"></a> 
    </div>          
</body>

</html>
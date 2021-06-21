<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_login.css">
    <script src="https://kit.fontawesome.com/b1c0cf9b24.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/main.js"></script>
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <main> 
        <div class="container">
            <form action="login.php" method="POST">
                <div class="inputs">
                    <p> 
                        <input type="text" id="user_name" name="user_name" placeholder="Usuario"></i> 
                    </p>
                    <p>
                        <input type="password" id="passwoord" name="passwoord" placeholder="Contraseña">
                    </p>
                </div>
                <button>Ingresar</button>
            </form>
            <button class="registro"><a href="cargar.php?c=Usuarios&a=nuevo">Registrarme</a></button>
            <div class="logo">
                <img src="assets/img/login.png" alt="">
            </div>
        </div>
    </main>
</body>
</html>
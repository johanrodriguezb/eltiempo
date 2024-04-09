<?php
$usuario = $_POST['user_name'];
$clave = $_POST['passwoord'];

$conexioon = mysqli_connect("localhost", "root", "Johan12345*", "timeproyect");
$consulta = "SELECT * FROM users WHERE user_name='$usuario' and passwoord= '$clave'";
$resultado = mysqli_query($conexioon, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {

    $sql = "SELECT id, namee, last_name, email, user_name, passwoord, name_rol, name_status from users inner join rol on id_roll = id_rol inner join count_status on id_statusss = id_statuss where user_name = '$usuario'";
    $resultado = mysqli_query($conexioon, $sql);
    $fila = $resultado->fetch_assoc();
    session_start();
    $_SESSION['usuario'] = $fila['namee'];
    $_SESSION['rol'] = $fila['name_rol'];
    $_SESSION['verifica'] = true;
    header("location:home.php");
} else {
    echo "contraseña o usuario incorrecto";
}

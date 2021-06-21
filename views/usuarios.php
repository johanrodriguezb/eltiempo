<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_tables.css">
    <script src="https://kit.fontawesome.com/b1c0cf9b24.js" crossorigin="anonymous"></script>
    <title>Datos</title>
</head>
<body>
    <button><a href="home.php"><i class="fas fa-arrow-left"></i></a></button>
    <table>
        <thead>
            <tr id='titulo'>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Correo</td>
                <td>Usuario</td>
                <td colspan="2">Acciones</td>
            </tr>
        </thead>
        <tbody>     
            <?php foreach($data["usuarios"] as $dato) 
                {
                    echo "<tr>";
                    echo "<td>".$dato["id"]."</td>";
                    echo "<td>".$dato["namee"]."</td>";
                    echo "<td>".$dato["last_name"]."</td>";
                    echo "<td>".$dato["email"]."</td>";
                    echo "<td>".$dato["user_name"]."</td>";
                    echo "<td title='modificar'><a href='cargar.php?c=Usuarios&a=modificar&id=".$dato["id"]."'><i class='fas fa-pencil-alt'></i></a></td>";
					echo "<td title='inhabilitar'><a href='cargar.php?c=Usuarios&a=eliminar&id=".$dato["id"]."'><i class='fas fa-user-times'></i></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>    
</body>
</html>
<?php 
    require 'api.php';
    session_start();
	if (!$_SESSION['verifica']) {
		header("Location:index.php");
	}
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/b1c0cf9b24.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/main.js"></script>
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    <title>the time</title>
</head>
<body>
    <header> 
            <h1>el tiempo</h1>
            <a href="cerrar.php">
            <button class="close" title="cerrar sesion">
            <i class="fas fa-power-off"></i>
            </button>
            </a>
    </header>
    <section class="barraprincipal">
        <div class="username">
            <?php echo $_SESSION['usuario'];?>
        </div>
        <?php
            if ($_SESSION['rol'] == 'admin') {	
        ?>
        <a href="cargar.php">
        <button class="useradmin" title="Administrador">
        <i class="fas fa-user"></i>
        </button>
        </a>
        <?php } ?>
        <a href="enviar.php">
        <button class="send" title="enviar correos">
        <i class="far fa-envelope"></i>
        </button> 
        </a>  
        <img src="assets/img/dom.png" alt="icono">
        <P><?php echo intval($bogota[3]); ?> ºC</P>
        <p><?php echo $bogota[2]; ?></p>
        <p><?php echo $ubicacion; ?></p>
        <p><?php echo $ciudad; ?></p>
    </section>
    <section class="paises">
        <nav id="nav">
            <ul class="pestanas">
                <li><a href="#pais1">Colombia</a></li>
                <li><a href="#pais2">España</a></li>
                <li><a href="#pais3">Alemania</a></li>
                <li><a href="#pais4">Portugal</a></li>
                <li><a href="#pais5">Chile</a></li>
            </ul>
        </nav>
        <section id="climas">
            <article id="pais1">
                <div class="cajaclima">
                    <p><?php echo $popayan[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo $popayan[1]; ?>.png" alt="clima">
                    <p><?php echo $popayan[2]; ?></p>
                    <p>temperatura: <?php echo intval($popayan[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval($popayan[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval($popayan[5]); ?> ºC</p>
                    <p>Humedad: <?php echo $popayan[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo  $barranquilla[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $barranquilla[1]; ?>.png" alt="clima">
                    <p><?php echo  $barranquilla[2]; ?></p>
                    <p>temperatura: <?php echo intval( $barranquilla[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $barranquilla[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $barranquilla[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $barranquilla[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $medellin[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $medellin[1]; ?>.png" alt="clima">
                    <p><?php echo  $medellin[2]; ?></p>
                    <p>temperatura: <?php echo intval( $medellin[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $medellin[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $medellin[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $medellin[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $bucaramanga[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $bucaramanga[1]; ?>.png" alt="clima">
                    <p><?php echo  $bucaramanga[2]; ?></p>
                    <p>temperatura: <?php echo intval( $bucaramanga[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $bucaramanga[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $bucaramanga[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $bucaramanga[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $valledupar[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $valledupar[1]; ?>.png" alt="clima">
                    <p><?php echo  $valledupar[2]; ?></p>
                    <p>temperatura: <?php echo intval( $valledupar[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $valledupar[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $valledupar[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $valledupar[6]; ?>%</p>
                </div>
            </article>
            <!--...............................................................................................................-->
            <article id="pais2">
            <div class="cajaclima">
                    <p><?php echo $madrid[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $madrid[1]; ?>.png" alt="clima">
                    <p><?php echo  $madrid[2]; ?></p>
                    <p>temperatura: <?php echo intval( $madrid[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $madrid[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $madrid[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $madrid[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $sevilla[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $sevilla[1]; ?>.png" alt="clima">
                    <p><?php echo  $sevilla[2]; ?></p>
                    <p>temperatura: <?php echo intval( $sevilla[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $sevilla[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $sevilla[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $sevilla[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $barcelona[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $barcelona[1]; ?>.png" alt="clima">
                    <p><?php echo  $barcelona[2]; ?></p>
                    <p>temperatura: <?php echo intval( $barcelona[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $barcelona[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $barcelona[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $barcelona[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $zaragoza[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $zaragoza[1]; ?>.png" alt="clima">
                    <p><?php echo  $zaragoza[2]; ?></p>
                    <p>temperatura: <?php echo intval( $zaragoza[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $zaragoza[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $zaragoza[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $zaragoza[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $valencia[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $valencia[1]; ?>.png" alt="clima">
                    <p><?php echo  $valencia[2]; ?></p>
                    <p>temperatura: <?php echo intval( $valencia[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $valencia[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $valencia[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $valencia[6]; ?>%</p>
                </div>
            </article>
            <!--...............................................................................................................-->
            <article id="pais3">
                <div class="cajaclima">
                    <p><?php echo $berlin[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $berlin[1]; ?>.png" alt="clima">
                    <p><?php echo  $berlin[2]; ?></p>
                    <p>temperatura: <?php echo intval( $berlin[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $berlin[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $berlin[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $berlin[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $hamburgo[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $hamburgo[1]; ?>.png" alt="clima">
                    <p><?php echo  $hamburgo[2]; ?></p>
                    <p>temperatura: <?php echo intval( $hamburgo[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $hamburgo[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $hamburgo[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $hamburgo[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $munich[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $munich[1]; ?>.png" alt="clima">
                    <p><?php echo  $munich[2]; ?></p>
                    <p>temperatura: <?php echo intval( $munich[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $munich[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $munich[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $munich[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $dresden[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $dresden[1]; ?>.png" alt="clima">
                    <p><?php echo  $dresden[2]; ?></p>
                    <p>temperatura: <?php echo intval( $dresden[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $dresden[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $dresden[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $dresden[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $leipzig[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $leipzig[1]; ?>.png" alt="clima">
                    <p><?php echo  $leipzig[2]; ?></p>
                    <p>temperatura: <?php echo intval( $leipzig[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $leipzig[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $leipzig[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $leipzig[6]; ?>%</p>
                </div>
            </article>
            <!--...............................................................................................................-->
            <article id="pais4">
                <div class="cajaclima">
                    <p><?php echo $lisboa[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $lisboa[1]; ?>.png" alt="clima">
                    <p><?php echo  $lisboa[2]; ?></p>
                    <p>temperatura: <?php echo intval( $lisboa[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $lisboa[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $lisboa[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $lisboa[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $porto[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $porto[1]; ?>.png" alt="clima">
                    <p><?php echo  $porto[2]; ?></p>
                    <p>temperatura: <?php echo intval( $porto[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $porto[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $porto[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $porto[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $braga[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $braga[1]; ?>.png" alt="clima">
                    <p><?php echo  $braga[2]; ?></p>
                    <p>temperatura: <?php echo intval( $braga[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $braga[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $braga[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $braga[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $faro[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $faro[1]; ?>.png" alt="clima">
                    <p><?php echo  $faro[2]; ?></p>
                    <p>temperatura: <?php echo intval( $faro[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $faro[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $faro[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $faro[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $coimbra[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $coimbra[1]; ?>.png" alt="clima">
                    <p><?php echo  $coimbra[2]; ?></p>
                    <p>temperatura: <?php echo intval( $coimbra[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $coimbra[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $coimbra[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $coimbra[6]; ?>%</p>
                </div>
            </article>
            <!--...............................................................................................................-->
            <article id="pais5">
                <div class="cajaclima">
                    <p><?php echo $santiago[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $santiago[1]; ?>.png" alt="clima">
                    <p><?php echo  $santiago[2]; ?></p>
                    <p>temperatura: <?php echo intval( $santiago[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $santiago[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $santiago[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $santiago[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $rancagua[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $rancagua[1]; ?>.png" alt="clima">
                    <p><?php echo  $rancagua[2]; ?></p>
                    <p>temperatura: <?php echo intval( $rancagua[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $rancagua[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $rancagua[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $rancagua[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $temuco[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $temuco[1]; ?>.png" alt="clima">
                    <p><?php echo  $temuco[2]; ?></p>
                    <p>temperatura: <?php echo intval( $temuco[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $temuco[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $temuco[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $temuco[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $antofagasta[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $antofagasta[1]; ?>.png" alt="clima">
                    <p><?php echo  $antofagasta[2]; ?></p>
                    <p>temperatura: <?php echo intval( $antofagasta[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $antofagasta[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $antofagasta[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $antofagasta[6]; ?>%</p>
                </div>
                <div class="cajaclima">
                    <p><?php echo $pucon[0];?></p>
                    <img src="http://openweathermap.org/img/wn/<?php echo  $pucon[1]; ?>.png" alt="clima">
                    <p><?php echo  $pucon[2]; ?></p>
                    <p>temperatura: <?php echo intval( $pucon[3]); ?> ºC</p>
                    <p>temperatura minima:<?php echo intval( $pucon[4]); ?> ºC</p>
                    <p>temperatura maxima:<?php echo intval( $pucon[5]); ?> ºC</p>
                    <p>Humedad: <?php echo  $pucon[6]; ?>%</p>
                </div>
            </article>
        </section>
    </section>
    <div class="clearfix"></div>
    <footer>
        Creado por &copy;Johan Steven Rodriguez
    </footer>
</body>
</html>
<?php
    date_default_timezone_set('america/bogota');
    $ciudad =  date_default_timezone_get();	
    function fechaC(){
        $mes = array("","Enero", 
                      "Febrero", 
                      "Marzo", 
                      "Abril", 
                      "Mayo", 
                      "Junio", 
                      "Julio", 
                      "Agosto", 
                      "Septiembre", 
                      "Octubre", 
                      "Noviembre", 
                      "Diciembre");
        return date('d')." de ". $mes[date('n')] . " de " . date('Y');
    }
    $ubicacion = fechaC();
    //COLOMBIA
    $bogota = country("3688689");
    $popayan = country("3671916");
    $barranquilla = country("3689147");
    $medellin = country("3674962");
    $bucaramanga = country("3688465");
    $valledupar = country("3666304");
    //ESPAÑA
    $madrid = country("3117735");
    $sevilla = country("2510911");
    $barcelona = country("3128760");
    $zaragoza = country("3104324");
    $valencia = country("2509951");
    //ALEMANIA
    $berlin = country("2950159");
    $hamburgo = country("2911298");
    $munich = country("2867714");
    $dresden = country("2935022");
    $leipzig = country("6548737");
    //PORTUGAL
    $lisboa = country("2267057");
    $porto = country("2735941");
    $braga = country("2742032");
    $faro = country("2268339");
    $coimbra = country("2740637");
    //CHILE
    $santiago = country("3871336");
    $rancagua = country("3873775");
    $temuco = country("3870011");
    $antofagasta = country("3899539");
    $pucon = country("3875070");

    $boyaca = country("3666608");
    $guaymaral = country("3732964");
    
    function country($id)
    {
        $url = "http://api.openweathermap.org/data/2.5/weather?id=".$id."&appid=49379b134f31dc7343ac3c30e896fc50&lang=es&units=metric";
        $json = file_get_contents($url);
        $data = json_decode($json,true);
    
        $name = $data["name"];
        $icon = $data["weather"][0]["icon"];
        $description = $data["weather"][0]["description"];
        $temp = $data["main"]["temp"];
        $min_temp = $data["main"]["temp_min"];
        $max_temp = $data["main"]["temp_max"];
        $humidity = $data["main"]["humidity"];

        $var = array($name,$icon, $description,$temp, $min_temp, $max_temp, $humidity);
        return $var;
    }

?>
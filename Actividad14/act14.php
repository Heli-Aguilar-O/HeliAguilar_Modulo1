<?php

    date_default_timezone_set("America/Mexico_City");

    $selec = (isset($_POST["selec"]) && $_POST["selec"] != "") ?$_POST["selec"] : "No especifico";

    $dia = (isset($_POST["dia"]) && $_POST["dia"] != "") ?$_POST["dia"] : "No especifico";
    $mes = (isset($_POST["mes"]) && $_POST["mes"] != "") ?$_POST["mes"] : "No especifico";
    $año = (isset($_POST["año"]) && $_POST["año"] != "") ?$_POST["año"] : "No especifico";
    // fecha 1
    $añito = date("Y");
    $añito = $añito+1;
    $fecha_dada= "$añito/$mes/$dia";
    // fecha actual
    $fecha_actual= date("Y/m/d");

    function dias_pasados($fecha_inicial,$fecha_final)
    {
        $dias = (strtotime($fecha_inicial)-strtotime($fecha_final))/86400;
        $dias = abs($dias); $dias = floor($dias);
        echo "Días que faltan para tu cumpleaños: $dias";
        return $dias;
    }

    function horas_pasados($fecha_inicial,$fecha_final)
    {
        $dias = (strtotime($fecha_inicial)-strtotime($fecha_final))/86400;
        $dias = abs($dias); $dias = floor($dias);
        $horas = ($dias*24);
        echo "<br>Horas que faltan para tu cumpleaños: $horas";
        return $horas;
    }

    function minutos_pasados($fecha_inicial,$fecha_final)
    {
        $dias = (strtotime($fecha_inicial)-strtotime($fecha_final))/86400;
        $dias = abs($dias); $dias = floor($dias);
        $minutos = ($dias*1440);
        echo "<br>Minutos que faltan para tu cumpleaños: $minutos";
        return $minutos;
    }

/////////////////////////////////////////////////////////////////////////////
    $tiempo = (isset($_POST["tiempo"]) && $_POST["tiempo"] != "") ?$_POST["tiempo"] : "No especifico";

    function cambiohorario_1()
    { 
        $tiempo = (isset($_POST["tiempo"]) && $_POST["tiempo"] != "") ?$_POST["tiempo"] : "No especifico";
        
        $tiempo = DateTime::createFromFormat('H:i', $tiempo);
        echo ("Tiempo en la cuiudad de México: ");
        echo $tiempo->format('H:i');
        $tiempo->modify('+1 hours'); 
        $tiempo->modify('+00 minute'); 
        $tiempo->modify('+00 second');
        echo (" | Tiempo en Nueva York: "); 
        echo $tiempo->format('H:i');
        echo ("<br>");

    }

    function cambiohorario_2()
    { 
        $tiempo = (isset($_POST["tiempo"]) && $_POST["tiempo"] != "") ?$_POST["tiempo"] : "No especifico";
        
        $tiempo = DateTime::createFromFormat('H:i', $tiempo);
        echo ("Tiempo en la cuiudad de México: ");
        echo $tiempo->format('H:i');
        $tiempo->modify('+2 hours'); 
        $tiempo->modify('+00 minute'); 
        $tiempo->modify('+00 second'); 
        echo (" | Tiempo en Sao Paolo: "); 
        echo $tiempo->format('H:i');
        echo ("<br>");
    }

    function cambiohorario_3()
    { 
        $tiempo = (isset($_POST["tiempo"]) && $_POST["tiempo"] != "") ?$_POST["tiempo"] : "No especifico";
        
        $tiempo = DateTime::createFromFormat('H:i', $tiempo);
        echo ("Tiempo en la cuiudad de México: ");
        echo $tiempo->format('H:i');
        $tiempo->modify('+7 hours'); 
        $tiempo->modify('+00 minute'); 
        $tiempo->modify('+00 second'); 
        echo (" | Tiempo en Madrid: "); 
        echo $tiempo->format('H:i');
        echo ("<br>");
    }

    function cambiohorario_4()
    { 
        $tiempo = (isset($_POST["tiempo"]) && $_POST["tiempo"] != "") ?$_POST["tiempo"] : "No especifico";
        
        $tiempo = DateTime::createFromFormat('H:i', $tiempo);
        echo ("Tiempo en la cuiudad de México: ");
        echo $tiempo->format('H:i');
        $tiempo->modify('+7 hours'); 
        $tiempo->modify('+00 minute'); 
        $tiempo->modify('+00 second'); 
        echo (" | Tiempo en Paris: "); 
        echo $tiempo->format('H:i');
        echo ("<br>");
    }

    function cambiohorario_5()
    { 
        $tiempo = (isset($_POST["tiempo"]) && $_POST["tiempo"] != "") ?$_POST["tiempo"] : "No especifico";
        
        $tiempo = DateTime::createFromFormat('H:i', $tiempo);
        echo ("Tiempo en la cuiudad de México: ");
        echo $tiempo->format('H:i');
        $tiempo->modify('+7 hours'); 
        $tiempo->modify('+00 minute'); 
        $tiempo->modify('+00 second'); 
        echo (" | Tiempo en Roma: "); 
        echo $tiempo->format('H:i');
        echo ("<br>");
    }

    function cambiohorario_6()
    { 
        $tiempo = (isset($_POST["tiempo"]) && $_POST["tiempo"] != "") ?$_POST["tiempo"] : "No especifico";
        
        $tiempo = DateTime::createFromFormat('H:i', $tiempo);
        echo ("Tiempo en la cuiudad de México: ");
        echo $tiempo->format('H:i');
        $tiempo->modify('+8 hours'); 
        $tiempo->modify('+00 minute'); 
        $tiempo->modify('+00 second'); 
        echo (" | Tiempo en Atenas: "); 
        echo $tiempo->format('H:i');
        echo ("<br>");
    }

    function cambiohorario_7()
    { 
        $tiempo = (isset($_POST["tiempo"]) && $_POST["tiempo"] != "") ?$_POST["tiempo"] : "No especifico";
        
        $tiempo = DateTime::createFromFormat('H:i', $tiempo);
        echo ("Tiempo en la cuiudad de México: ");
        echo $tiempo->format('H:i');
        $tiempo->modify('+13 hours'); 
        $tiempo->modify('+00 minute'); 
        $tiempo->modify('+00 second'); 
        echo (" | Tiempo en Beijin: "); 
        echo $tiempo->format('H:i');
        echo ("<br>");
    }

    function cambiohorario_8()
    { 
        $tiempo = (isset($_POST["tiempo"]) && $_POST["tiempo"] != "") ?$_POST["tiempo"] : "No especifico";
        
        $tiempo = DateTime::createFromFormat('H:i', $tiempo);
        echo ("Tiempo en la cuiudad de México: ");
        echo $tiempo->format('H:i');
        $tiempo->modify('+14 hours'); 
        $tiempo->modify('+00 minute'); 
        $tiempo->modify('+00 second'); 
        echo (" | Tiempo en Tokio: "); 
        echo $tiempo->format('H:i');
        echo ("<br>");
    }




    if ($selec == 1)
    {
        echo "<form method='post' action='act14.php'>
        <fieldset style=width: 500px>
            <legend><strong><u>Reloj Mundial</u></strong></legend>
                <p><strong></strong></p>
                <label>Ingrese la hora deseada <strong>(Hora local CDMX)</strong>:
                    <input type='time' name='tiempo' required>
                </label>
                <br>
                <p>¿Qué quieres consultar?</p>
                
                <table border='0'>
                <tbody>
                <tr>
                    <td>Nueva York:</td>
                    <td><input type='checkbox' name='box' value='1'></td>                
                    <td>Sao Paolo:</td>
                    <td><input type='checkbox' name='box2' value='2'></td>
                </tr>

                <tr>
                    <td>Madrid:</td>
                    <td><input type='checkbox' name='box3' value='3'></td>                
                    <td>Paris:</td>
                    <td><input type='checkbox' name='box4' value='4'></td>
                </tr>

                <tr>
                    <td>Roma:</td>
                    <td><input type='checkbox' name='box5' value='5'></td>                
                    <td>Atenas:</td>
                    <td><input type='checkbox' name='box6' value='6'></td>
                </tr>

                <tr>
                    <td>Beijin:</td>
                    <td><input type='checkbox' name='box7' value='7'></td>                
                    <td>Tokio:</td>
                    <td><input type='checkbox' name='box8' value='8'></td>
                </tr>
            </tbody>
            </table>
                <br>
                <input type=Submit name=Seleccionar value=Seleccionar>
                <input type=Reset name=Limpiar value=Limpiar>
        </fieldset>
    </form>";  
    }

    if ($selec == 2)
    {
        echo "<form method='post' action='act14.php'>
                <fieldset style=width: 500px>
                    <legend><strong><u>Calcula cumpleaños</u></strong></legend>
                        <p><strong>Ingrese la fecha de nacimiento</strong></p>
                        <label>Día:
                            <input type='number' name='dia' min='1' max='31' required>
                        </label>
                        <label>Mes:
                            <input type='number' name='mes' min='1' max='12' required>
                        </label>
                        <label>Año:
                            <input type='number' name='año' min='1900' max='2021' required>
                        </label>
                        <br>
                        <p>¿Qué quieres consultar?</p>
                        
                        <label>Días para próximo cumpleaños:
                            <input type='checkbox' name='check' value='1'>
                        </label>
                        <br>
                        <label>Horas para próximo cumpleaños:
                            <input type='checkbox' name='check2' value='2'>
                        </label>
                        <br>
                        <label>Minutos para próximo cumpleaños:
                            <input type='checkbox' name='check3' value='3'>
                        </label>
                        <br><br>
                        <input type=Submit name=Seleccionar value=Seleccionar>
                        <input type=Reset name=Limpiar value=Limpiar>
                </fieldset>
            </form>";  
    }

    $check = (isset($_POST["check"]) && $_POST["check"] != "") ?$_POST["check"] : "No especifico";
    $check2 = (isset($_POST["check2"]) && $_POST["check2"] != "") ?$_POST["check2"] : "No especifico";
    $check3 = (isset($_POST["check3"]) && $_POST["check3"] != "") ?$_POST["check3"] : "No especifico";

    if($check == 1)
    {
       dias_pasados($fecha_dada,$fecha_actual);
    }
    if($check2 == 2)
    {
        horas_pasados($fecha_dada,$fecha_actual);
    }
    if($check3 == 3)
    {
        minutos_pasados($fecha_dada,$fecha_actual);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////
    $box = (isset($_POST["box"]) && $_POST["box"] != "") ?$_POST["box"] : "No especifico";
    $box2 = (isset($_POST["box2"]) && $_POST["box2"] != "") ?$_POST["box2"] : "No especifico";
    $box3 = (isset($_POST["box3"]) && $_POST["box3"] != "") ?$_POST["box3"] : "No especifico";
    $box4 = (isset($_POST["box4"]) && $_POST["box4"] != "") ?$_POST["box4"] : "No especifico";
    $box5 = (isset($_POST["box5"]) && $_POST["box5"] != "") ?$_POST["box5"] : "No especifico";
    $box6 = (isset($_POST["box6"]) && $_POST["box6"] != "") ?$_POST["box6"] : "No especifico";
    $box7 = (isset($_POST["box7"]) && $_POST["box7"] != "") ?$_POST["box7"] : "No especifico";
    $box8 = (isset($_POST["box8"]) && $_POST["box8"] != "") ?$_POST["box8"] : "No especifico";

    if($box == 1)
    {
        cambiohorario_1();
    }

    if($box2 == 2)
    {
        cambiohorario_2();
    }

    if($box3 == 3)
    {
        cambiohorario_3();
    }

    if($box4 == 4)
    {
        cambiohorario_4();
    }

    if($box5 == 5)
    {
        cambiohorario_5();
    }

    if($box6 == 6)
    {
        cambiohorario_6();
    }

    if($box7 == 7)
    {
        cambiohorario_7();
    }

    if($box8 == 8)
    {
        cambiohorario_8();
    }



?>
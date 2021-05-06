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
        echo "Horas que faltan para tu cumpleaños: $horas";
        return $horas;
    }

    function minutos_pasados($fecha_inicial,$fecha_final)
    {
        $dias = (strtotime($fecha_inicial)-strtotime($fecha_final))/86400;
        $dias = abs($dias); $dias = floor($dias);
        $minutos = ($dias*1440);
        echo "Minutos que faltan para tu cumpleaños: $minutos";
        return $minutos;
    }

    function diashoras_pasados($fecha_inicial,$fecha_final)
    {
        $dias = (strtotime($fecha_inicial)-strtotime($fecha_final))/86400;
        $dias = abs($dias); $dias = floor($dias);
        $horas = ($dias*24);
        echo "Días que faltan para tu cumpleaños: $dias";
        echo "<br>Horas que faltan para tu cumpleaños: $horas";
    }

    function diasminutos_pasados($fecha_inicial,$fecha_final)
    {
        $dias = (strtotime($fecha_inicial)-strtotime($fecha_final))/86400;
        $dias = abs($dias); $dias = floor($dias);
        $minutos = ($dias*1440);
        echo "Días que faltan para tu cumpleaños: $dias";
        echo "<br>Minutos que faltan para tu cumpleaños: $minutos";
    }
    
    function horasminutos_pasados($fecha_inicial,$fecha_final)
    {
        $dias = (strtotime($fecha_inicial)-strtotime($fecha_final))/86400;
        $dias = abs($dias); $dias = floor($dias);
        $minutos = ($dias*1440);
        $horas = ($dias*24);
        echo "Horas que faltan para tu cumpleaños: $horas";
        echo "<br>Minutos que faltan para tu cumpleaños: $minutos";
    }

    function horasminutosdias_pasados($fecha_inicial,$fecha_final)
    {
        $dias = (strtotime($fecha_inicial)-strtotime($fecha_final))/86400;
        $dias = abs($dias); $dias = floor($dias);
        $minutos = ($dias*1440);
        $horas = ($dias*24);
        echo "Días que faltan para tu cumpleaños: $dias";
        echo "<br>Horas que faltan para tu cumpleaños: $horas";
        echo "<br>Minutos que faltan para tu cumpleaños: $minutos";
    }

    if ($selec == 1)
    {
        echo "<form action=act14.php method=post>
            <fieldset style=width: 500px>
                <legend><strong><u>App 2 en 1</u></strong></legend>
                    <p><strong>Seleccione la aplicación que desee ejecutar:</strong></p>
                    <label>Reloj mundial
                        <input type=radio name=selec value=1>
                    </label>
                    <br>
                    <label>Calculadora de cumpleaños
                        <input type=radio name=selec value=2>
                    </label>
                    <br><br>
    
                    <input type=Submit name=Seleccionar value=Seleccionar>
                    <input type=Reset name=Limpiar value=Limpiar>
            </fieldset>
        </form>";
    }

    if ($selec == 2)
    {
        echo "<form method=post action=act14.php>
                <fieldset style=width: 500px>
                    <legend><strong><u>Calcula cumpleaños</u></strong></legend>
                        <p><strong>Ingrese la fecha de nacimiento</strong></p>
                        <label>Día:
                            <input type=number name=dia min=1 max=31 required>
                        </label>
                        <label>Mes:
                            <input type=number name=mes min=1 max=12 required>
                        </label>
                        <label>Año:
                            <input type=number name=año min=1900 max=2021 required>
                        </label>
                        <br>
                        <p>¿Qué quieres consultar?</p>
                        
                        <label>Días para próximo cumpleaños:
                            <input type=checkbox name=check value=1>
                        </label>
                        <br>
                        <label>Horas para próximo cumpleaños:
                            <input type=checkbox name=check value=2>
                        </label>
                        <br>
                        <label>Minutos para próximo cumpleaños:
                            <input type=checkbox name=check value=3>
                        </label>
                        <br><br>
                        <input type=Submit name=Seleccionar value=Seleccionar>
                        <input type=Reset name=Limpiar value=Limpiar>
                </fieldset>
            </form>";  
    }

    $check = (isset($_POST["check"]) && $_POST["check"] != "") ?$_POST["check"] : "No especifico";

    if($check == 1 && $check == 2)
    {
        diashoras_pasados($fecha_dada,$fecha_actual);
    }
    if($check == 2 && $check == 3)
    {
        horasminutos_pasados($fecha_dada, $fecha_actual);
    }
    if($check == 1 && $check == 3)
    {
        diasminutos_pasados($fecha_dada,$fecha_actual);
    }
    if($check == 1 && $check == 3 && $check == 2)
    {
        horasminutosdias_pasados($fecha_dada, $fecha_actual);
    }
    if($check == 1)
    {
        dias_pasados($fecha_dada,$fecha_actual);
    }
    if($check == 2)
    {
        horas_pasados($fecha_dada,$fecha_actual);
    }
    if($check == 3)
    {
        minutos_pasados($fecha_dada,$fecha_actual);
    }

    /*switch ($check)
    {
        case 1:
            dias_pasados($fecha_dada,$fecha_actual);
            break;
        case 2:
            horas_pasados($fecha_dada,$fecha_actual);
            break;
        case 3:
            minutos_pasados($fecha_dada,$fecha_actual);
            break;
        case 1 && 2:
            diashoras_pasados($fecha_dada,$fecha_actual);
            break;
        case 1 && 3:
            diasminutos_pasados($fecha_dada,$fecha_actual);
            break;
        case 2 && 3:
            horasminutos_pasados($fecha_dada, $fecha_actual);
            break;
        case 2 && 3 && 1:
            horasminutosdias_pasados($fecha_dada, $fecha_actual);
            break;
        default:
            echo "no me mandaste nada :(";
            break;
        
    }*/

    


?>
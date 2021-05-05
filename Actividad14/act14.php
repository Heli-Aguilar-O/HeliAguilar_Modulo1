<?php

    $selec = (isset($_POST["selec"]) && $_POST["selec"] != "") ?$_POST["selec"] : "No especifico";
    
    switch ($selec)
    {
        case "a":

            

        case "b":

            function cumpledif()
            {
                $dia=$_POST["day"];
                $mes=$_POST["month"];
                $anio=$_POST["year"];
                $fecharecibida = "$anio/$mes/$dia";
                $fechaactual = localtime(time());
                $segundos = $fecharecibida - $fechaactual; //Son el numero de segundos que hay entre las dos fechas
                $dias = $segundos/(3600*24); //Lo divido por los segundos que tiene una hora, por las 24 horas del dia
                //$dias = round($dias); //La division puede no ser exacta, redondeo.
                echo "Faltan ".$dias." dias";
            }


            echo "<form action= method=post  target=_self>
            <fieldset style=width: 500px>
                <legend><strong><u>Calcula cumpleaños</u></strong></legend>
                    <br>
                    <label>Ingrese su fecha de nacimiento
                        <input type=date name=selec value=a>
                    </label>
                    <br>
                    <label>Calculadora de cumpleaños
                        <input type=radio name=selecc value=b>
                    </label>
                    <br><br>
    
                    <input type=Submit name=Seleccionar value=Seleccionar>
                    <input type=Reset name=Limpiar value=Limpiar>
            </fieldset>"


    }

?>
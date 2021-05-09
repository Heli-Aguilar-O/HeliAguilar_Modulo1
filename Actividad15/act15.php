<?php

    $año = (isset($_POST["año"]) && $_POST["año"] != "") ?$_POST["año"] : "No especifico";
    $nobra = (isset($_POST["nobra"]) && $_POST["nobra"] != "") ?$_POST["nobra"] : "No especifico";
    $nautor = (isset($_POST["nautor"]) && $_POST["nautor"] != "") ?$_POST["nautor"] : "No especifico";

    $añogd= $año;
    $nobragd= $nobra;
    $nautorgd= $nautor;

    if(isset($_FILES['archivo']))
    {
        $arch= $_FILES['archivo']['tmp_name'];
        $name= $_FILES['archivo']['name'];
        rename($arch, "statics/$nobra.$nautor.$año.".pathinfo($name,PATHINFO_EXTENSION));
        echo "<strong><u>TU IMÁGEN SE SUBIÓ CORRECTAMENTE A LA GALERÍA</u></strong>";
        echo "<form method='post' action='./act15.php'>
                <br>
                <input type='submit' name='Ver galería' value='Ver galería'>
                <input type='hidden' name='año' value='$año'>
                <input type='hidden' name='nobra' value='$nobra'>
                <input type='hidden' name='nautor' value='$nautor'>
            </form>";
    }
    else
    {
        $ruta_carpeta = "./statics";
        $carpeta = opendir($ruta_carpeta);
        $archivos = array();
        $hayArchivos = true;

        while($hayArchivos)
        {
            $archivo = readdir($carpeta);

            if($archivo !== false)
            {
                if($archivo != "." && $archivo != "..")
                {
                    $ext = pathinfo($archivo, PATHINFO_EXTENSION);
                    array_push($archivos, $archivo);
                }
            }

            else
            {
                $hayArchivos = false;
            }
        }

        if ($archivos == NUll)
        {
            echo "<h1>No hay nada por aquí, gustas subir una nueva obra?</h1>";
            echo "<form method='post' action='./act15.html'>
            <br>
            <input type='submit' name='Añadir una obra' value='Añadir una obra'>
        </form>";
        }
        else
        {
            echo "<h1>IMÁGENES EN LA GALERÍA DE ARTE</h1>";
            foreach($archivos as $key => $value)
            {
                list($obra, $autor, $anio, $exten) = explode(".", $value);
                echo "<table border='1'>
                    <tbody>
                        <tr>
                            <td><img src='./statics/".$value."' height='100'></td>    
                            <td>Nombre de la Pintura: $obra<br>Nombre del Autor: $autor<br>Año de Creación: $anio</td>     
                        </tr>
                    </tbody>
                </table>";
            }

            echo "<form method='post' action='./act15.html'>
                    <br>
                    <input type='submit' name='Añadir una nueva obra' value='Añadir una nueva obra'>
                </form>";
        }
        closedir($carpeta);
    }
?>
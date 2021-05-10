<?php
    session_start();
    if(isset($_SESSION["nombre"]) && isset($_SESSION["apepat"]) && isset($_SESSION["apemat"]) && isset($_SESSION["grupo"]) && isset($_SESSION["mail"]) && isset($_SESSION["psword"]))
    {
        header("location: ./index.php");
    }
    else
    {
        echo "<form action='./index.php' method='post'>
                <label>Nombre:
                    <input type='text' name='nombre' required>
                </label>
                <br><br>
                <label>Apellido Paterno:
                    <input type='text' name='apepat' required>
                </label>
                <br><br>
                <label>Apellido Materno:
                    <input type='text' name='apemat' required>
                </label>
                <br><br>
                <label>Grupo:
                    <input type='number' name='grupo' min='400' max'680' required>
                </label>
                <br><br>
                <label>Correo:
                    <input type='email' name='mail' required>
                </label>
                <br><br>
                <label>Contraseña:
                    <input type='password' name='psword' required>
                </label>
                <br><br>
                    <input type='submit' value='Enviar'>
                </form>";
    }


?>
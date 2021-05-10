<?php
    function cierreses()
    {
        session_unset();
        session_destroy();
    }

    session_start();
    if(isset($_SESSION["nombre"]) && isset($_SESSION["apepat"]) && isset($_SESSION["apemat"]) && isset($_SESSION["grupo"]) && isset($_SESSION["mail"]) && isset($_SESSION["psword"]))
    {
        echo "<h1>Ya accediste a la sesión anteriormente</h1><br>";
        echo "<table border='1'>
                <tbody>
                <tr>
                    <td>$_SESSION[nombre]</td>
                    <td>$_SESSION[apepat]</td>                
                    <td>$_SESSION[apemat]</td>
                </tr>

                <tr>
                    <td><strong><u>Nombre</u></strong></</td>
                    <td><strong><u>Apellido Paterno</u></strong></td>                
                    <td><strong><u>Apellido Materno</u></strong></</td>
                </tr>

                <tr>
                    <td colspan='3'><strong><u>Grupo</u>: </strong>$_SESSION[grupo]</td>
                </tr>

                <tr>
                    <td colspan='3'><strong><u>Correo</u>: </strong>$_SESSION[mail]</td>
                </tr>
            </tbody>
            </table>
            <form action='./index.php' method='post'>
                <input type='button' name='nombre' value=cierreses();>
            </form>";
    }
    elseif(isset($_POST["nombre"]) && isset($_POST["apepat"]) && isset($_POST["apemat"]) && isset($_POST["grupo"]) && isset($_POST["mail"]) && isset($_POST["psword"]))
    {   
        echo "<h1>Bienvenido a su primer inicio de sesión</h1><br>";
        echo "<table border='1'>
                <tbody>
                <tr>
                    <td>$_POST[nombre]</td>
                    <td>$_POST[apepat]</td>                
                    <td>$_POST[apemat]</td>
                </tr>

                <tr>
                    <td><strong><u>Nombre</u></strong></</td>
                    <td><strong><u>Apellido Paterno</u></strong></td>                
                    <td><strong><u>Apellido Materno</u></strong></</td>
                </tr>

                <tr>
                    <td colspan='3'><strong><u>Grupo</u>: </strong>$_POST[grupo]</td>
                </tr>

                <tr>
                    <td colspan='3'><strong><u>Correo</u>: </strong>$_POST[mail]</td>
                </tr>
            </tbody>
            </table>
            <br>
            <form action='./index.php' method='post'>
                <input type='button' name='nombre' value=cierreses();>
            </form>";

            $_SESSION["nombre"] = $_POST["nombre"];
            $_SESSION["apepat"] = $_POST["apepat"];
            $_SESSION["apemat"] = $_POST["apemat"];
            $_SESSION["grupo"] = $_POST["grupo"];
            $_SESSION["mail"] = $_POST["mail"];
    }
    else{
        header ("location: ./index.php");
    }
?>
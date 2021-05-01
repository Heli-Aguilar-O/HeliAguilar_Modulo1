<?php
    $nom = (isset($_POST["Nom"]) && $_POST["Nom"] != "") ?$_POST["Nom"] : "No especifico";
    $ApP = (isset($_POST["ApP"]) && $_POST["ApP"] != "") ?$_POST["ApP"] : "No especifico";
    $ApM = (isset($_POST["ApM"]) && $_POST["ApM"] != "") ?$_POST["ApM"] : "No especifico";
    $email = (isset($_POST["email"]) && $_POST["email"] != "") ?$_POST["email"] : "No especifico";
    $tel = (isset($_POST["tel"]) && $_POST["tel"] != "") ?$_POST["tel"] : "No especifico";
    $cel = (isset($_POST["cel"]) && $_POST["cel"] != "") ?$_POST["cel"] : "No especifico";
    $sexo = (isset($_POST["sexo"]) && $_POST["sexo"] != "") ?$_POST["sexo"] : "No especifico";
    $edad = (isset($_POST["edad"]) && $_POST["edad"] != "") ?$_POST["edad"] : "No especifico";
    $op1 = (isset($_POST["op1"]) && $_POST["op1"] != "") ?$_POST["op1"] : "No especifico";
    $op2 = (isset($_POST["op2"]) && $_POST["op2"] != "") ?$_POST["op2"] : "No especifico";

    echo "<table border='1'>
            <thead>
                <tr>
                    <th colspan=6><stong>Solicitud de ingreso a la universidad</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$ApP</td>
                    <td>$ApM</td>
                    <td colspan=2>$nom</td>
                </tr>
                <tr>
                    <td><strong><u>Apellido paterno</u></strong></td>
                    <td><strong><u>Apellido materno</u></strong></td>
                    <td colspan=2><strong><u>Nombre(s)</u></strong></td>
                </tr>
                <tr>
                    <td>$email</td>
                    <td>$tel</td>
                    <td colspan=2>$cel</td>
                </tr>
                <tr>
                    <td><strong><u>Correo electrónico</u></strong></td>
                    <td><strong><u>Telefono</u></strong></td>
                    <td colspan=2><strong><u>Celular</u></strong></td>
                </tr>
                <tr>
                    <td><strong><u>Sexo:</u></strong></td>
                    <td>$sexo</td>
                    <td><strong><u>Edad</u></strong></td>
                    <td>$edad</td>
                </tr>
                <tr>
                    <td colspan=2><strong><u>Primera Opción:</u></strong></td>
                    <td colspan=2>$op1</td>
                </tr>
                <tr>
                    <td colspan=2><strong><u>Segunda Opción:</u></strong></td>
                    <td colspan=2>$op2</td>
                </tr>
            </tbody>
    </table>";

?>
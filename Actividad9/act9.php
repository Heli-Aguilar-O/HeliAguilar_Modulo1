<?php 
     
$numero = (isset($_POST["numero"]) && $_POST["numero"] != "") ?$_POST["numero"] : "No especifico";
$numero = $numero/2;

echo "<table border = 1>";
 
for ($a=1; $a <= $numero; $a++) {
    echo "<tr>";
    for ($i=1; $i <=$numero; $i++) { 
        echo "<td> <img src= ./blanco.jpg widht=50 height=50> </td>";
        echo "<td> <img src= ./negro.jpg widht=50 height=50> </td>";
    }
    echo "</tr>";
    for ($i=1; $i <=$numero; $i++) { 
        echo "<td> <img src= ./negro.jpg widht=50 height=50> </td>";
        echo "<td> <img src= ./blanco.jpg widht=50 height=50> </td>";
    }
 
}
echo "</table>";
 ?> 
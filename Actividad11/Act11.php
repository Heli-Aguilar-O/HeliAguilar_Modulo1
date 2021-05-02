<?php

    $uno = (isset($_POST["uno"]) && $_POST["uno"] != "") ?$_POST["uno"] : "No especifico";
    $dos = (isset($_POST["dos"]) && $_POST["dos"] != "") ?$_POST["dos"] : "No especifico";
    $tres = (isset($_POST["tres"]) && $_POST["tres"] != "") ?$_POST["tres"] : "No especifico";
    $cuatro = (isset($_POST["cuatro"]) && $_POST["cuatro"] != "") ?$_POST["cuatro"] : "No especifico";
    $cinco = (isset($_POST["cinco"]) && $_POST["cinco"] != "") ?$_POST["cinco"] : "No especifico";
    $seis = (isset($_POST["seis"]) && $_POST["seis"] != "") ?$_POST["seis"] : "No especifico";
    $siete = (isset($_POST["siete"]) && $_POST["siete"] != "") ?$_POST["siete"] : "No especifico";
    $ocho = (isset($_POST["ocho"]) && $_POST["ocho"] != "") ?$_POST["ocho"] : "No especifico";
    $nueve = (isset($_POST["nueve"]) && $_POST["nueve"] != "") ?$_POST["nueve"] : "No especifico";
    $diez = (isset($_POST["diez"]) && $_POST["diez"] != "") ?$_POST["diez"] : "No especifico";

    //Algoritmo ultramega complicado de pensar que me tomó tres horas en decifrar que básicamente cuenta el número de veces que se repite una letra específica dentro del valor de cada variable 
    $respuestas = array("$uno","$dos","$tres","$cuatro","$cinco","$seis","$siete","$ocho","$nueve","$diez"); //respuestas es un array que almacena los valores de cada respuesta que se dió en el html
    $str = ", " . implode(", ",$respuestas) . ","; //variable con nombre genérico que emieza con "," para poder concatenar correctamente las comas de la variable respuestas.Lo que hace el implode es añadir todos los valores de respuestas con su respectiva separación, pero Dios es dificil calcular esto
    $counta = substr_count($str, " a,"); //variable con nombre en inglés para sonar más mamón. substr_count analiza cuantas "a" en este caso específico existen en str

    //Algoritmo ultramega complicado de pensar que me tomó tres horas en decifrar que básicamente cuenta el número de veces que se repite una letra específica dentro del valor de cada variable 
    $respuestas = array("$uno","$dos","$tres","$cuatro","$cinco","$seis","$siete","$ocho","$nueve","$diez"); //respuestas es un array que almacena los valores de cada respuesta que se dió en el html
    $str = ", " . implode(", ",$respuestas) . ","; //variable con nombre genérico que emieza con "," para poder concatenar correctamente las comas de la variable respuestas.Lo que hace el implode es añadir todos los valores de respuestas con su respectiva separación, pero Dios es dificil calcular esto
    $countb = substr_count($str, " b,"); //variable con nombre en inglés para sonar más mamón. substr_count analiza cuantas "b" en este caso específico existen en str


    //Algoritmo ultramega complicado de pensar que me tomó tres horas en decifrar que básicamente cuenta el número de veces que se repite una letra específica dentro del valor de cada variable 
    $respuestas = array("$uno","$dos","$tres","$cuatro","$cinco","$seis","$siete","$ocho","$nueve","$diez"); //respuestas es un array que almacena los valores de cada respuesta que se dió en el html
    $str = ", " . implode(", ",$respuestas) . ","; //variable con nombre genérico que emieza con "," para poder concatenar correctamente las comas de la variable respuestas.Lo que hace el implode es añadir todos los valores de respuestas con su respectiva separación, pero Dios es dificil calcular esto
    $countc = substr_count($str, " c,"); //variable con nombre en inglés para sonar más mamón. substr_count analiza cuantas "c" en este caso específico existen en str
    
    //Algoritmo ultramega complicado de pensar que me tomó tres horas en decifrar que básicamente cuenta el número de veces que se repite una letra específica dentro del valor de cada variable 
    $respuestas = array("$uno","$dos","$tres","$cuatro","$cinco","$seis","$siete","$ocho","$nueve","$diez"); //respuestas es un array que almacena los valores de cada respuesta que se dió en el html
    $str = ", " . implode(", ",$respuestas) . ","; //variable con nombre genérico que emieza con "," para poder concatenar correctamente las comas de la variable respuestas.Lo que hace el implode es añadir todos los valores de respuestas con su respectiva separación, pero Dios es dificil calcular esto
    $countd = substr_count($str, " d,"); //variable con nombre en inglés para sonar más mamón. substr_count analiza cuantas "d" en este caso específico existen en str
    
    //Aquí empiezan las condicionales

    if($counta>=7)
    {
        echo "Eres un taco al pastor";
    }

    elseif($countb>=7)
    {
        echo "Eres un taco de suadero";
    }

    elseif($countc>=7)
    {
        echo "Eres un taco de barbacoa";
    }

    elseif($countd>=7)
    {
        echo "Eres un taco de lagunero";
    }

    elseif($counta == $countb)
    {
        echo "Eres un taco campechano";
    }

    elseif($countb == $countc)
    {
        echo "Eres un taco de carnitas";
    }

    elseif($countc == $countd)
    {
        echo "Eres un taco bell";
    }

    elseif($counta == $countd)
    {
        echo "Eres un taco light";
    }

    elseif($counta == $countc)
    {
        echo "Eres un taco placero";
    }

    elseif($countb == $countd)
    {
        echo "Eres un taco de mixiote";
    }

    else
    {
        echo "Eres un taco de sal";
    }



    //echo $str."<br>";
    //echo $counta;

?>
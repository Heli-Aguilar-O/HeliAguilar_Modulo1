<?php

    //Observaciones generales: las funciones se ven bonitas pero son difíciles, sintetizan programación y se pueden utilizar como variables.
    //En la traducción de texto a morse, sale un error, me quemo yo solito por que sé que ustedes lo van a ver; no me molesta la calificación pero me gustaría saber por que pasa.
    //Si se introduce un caracter no correspondiente, sale un error, ¿Eso cuenta como el reto extra :D?
    //Lección aprendida, si ya sirve no le muevas.
    //Hay varias maneras de abordar este traductor, pero me decidí por unificarlas en varias funciones, 

    $tipo = (isset($_POST["tipo"]) && $_POST["tipo"] != "") ?$_POST["tipo"] : "No especifico";
    $texto = (isset($_POST["texto"]) && $_POST["texto"] != "") ?$_POST["texto"] : "No especifico";

    $morse = [
        "&nbsp&nbsp&nbsp", ".-", "-...", "-.-.", "-..",
        ".", "..-.", "--.", "....", "..",
        ".---", "-.-", ".-..", "--", "-.",
        "---", ".--.", "--.-", ".-.", "...",
        "-", "..-", "...-", ".--", "-..-",
        "-.--", "--..", "-----", ".----", "..---",
        "...--", "....-", ".....", "-....", "--...",
        "---..", "----.", ".-.-.-", "--..--", "---...",
        "..--..", ".----.", "-....-", "-..-.", ".--.-.",
        "-...-", ".-..-.", "-.-.--",];

        $ascii = ["/&nbsp", "A", "B", "C", "D",
        "E", "F", "G", "H", "I",
        "J", "K", "L", "M", "N",
        "O", "P", "Q", "R", "S",
        "T", "U", "V", "W", "X",
        "Y", "Z", "0", "1", "2",
        "3", "4", "5", "6", "7",
        "8", "9", ".", ",", ":",
        "?", "'", "-", "/", "@",
        "=", "\"", "!",];
    
    /* Explicación de la función morseindex: se almacenan de nuevo los string con el código morse y el ascii con el fin de que no salga un error. 
    $NODEMORSE sirve para contar la cantidad de valores en el string morse. 
    EL ciclo condicional for toma a la variable x, la compara a ser menor al número de valores de morse y la incrementa en uno.
    Posteriormente se compara con strcmp entre morse con el número del valor de x como posición de cadena y la variable código
    si idénticos a cero y en caso positivo, me retorna el valor de x como posición de morse.*/ 
    function morseindex($codigo)
    {
        $morse = [
            "&nbsp&nbsp&nbsp", ".-", "-...", "-.-.", "-..",
            ".", "..-.", "--.", "....", "..",
            ".---", "-.-", ".-..", "--", "-.",
            "---", ".--.", "--.-", ".-.", "...",
            "-", "..-", "...-", ".--", "-..-",
            "-.--", "--..", "-----", ".----", "..---",
            "...--", "....-", ".....", "-....", "--...",
            "---..", "----.", ".-.-.-", "--..--", "---...",
            "..--..", ".----.", "-....-", "-..-.", ".--.-.",
            "-...-", ".-..-.", "-.-.--",];

        $ascii = ["/&nbsp", "A", "B", "C", "D",
            "E", "F", "G", "H", "I",
            "J", "K", "L", "M", "N",
            "O", "P", "Q", "R", "S",
            "T", "U", "V", "W", "X",
            "Y", "Z", "0", "1", "2",
            "3", "4", "5", "6", "7",
            "8", "9", ".", ",", ":",
            "?", "'", "-", "/", "@",
            "=", "\"", "!",];
        
        $NODEMORSE = count($morse);

        for ($x = 0; $x < $NODEMORSE; $x++) {
            if (strcmp($morse[$x], $codigo) === 0) {
                return $x;
            }
        }
        return -1;
    }

    /* Explicación de la función asciiindex: se almacenan de nuevo los string con el código morse y el ascii con el fin de que no salga un error. 
    $NODEMORSE sirve para contar la cantidad de valores en el string morse. 
    EL ciclo condicional for toma a la variable x, la compara a ser menor al número de valores de morse y la incrementa en uno.
    Posteriormente se compara con strcmp entre ascii con el número del valor de x como posición de cadena y la variable signo
    si idénticos a cero y en caso positivo, me retorna el valor de x como posición de ascii.*/ 

    function asciiindex($signo) 
    {
        $cadenaTemporal = "$signo";

    
        $morse = [
        "&nbsp", ".-", "-...", "-.-.", "-..",
        ".", "..-.", "--.", "....", "..",
        ".---", "-.-", ".-..", "--", "-.",
        "---", ".--.", "--.-", ".-.", "...",
        "-", "..-", "...-", ".--", "-..-",
        "-.--", "--..", "-----", ".----", "..---",
        "...--", "....-", ".....", "-....", "--...",
        "---..", "----.", ".-.-.-", "--..--", "---...",
        "..--..", ".----.", "-....-", "-..-.", ".--.-.",
        "-...-", ".-..-.", "-.-.--",];

        $ascii = [" ", "A", "B", "C", "D",
        "E", "F", "G", "H", "I",
        "J", "K", "L", "M", "N",
        "O", "P", "Q", "R", "S",
        "T", "U", "V", "W", "X",
        "Y", "Z", "0", "1", "2",
        "3", "4", "5", "6", "7",
        "8", "9", ".", ",", ":",
        "?", "'", "-", "/", "@",
        "=", "\"", "!",];

        $NODEMORSE = count($morse);
        for ($x = 0; $x < $NODEMORSE; $x++) {
            if (strcmp($ascii[$x], $cadenaTemporal) === 0) {
                return $x;
            }
        }
        return -1;
    }

    /*Explicación de la función codif morse. Su objetivo es codificar texto introducido a morse.
    se repite la string morse y ascii para evitar errores.
    se repite el input desde html hasta el recibimiento en php con POST de la variable texto.
    se establece el valor de i.
    Mientras la posición del caracter del texto introducido tenga el valor de i:
    Se convierte el caracter del texto introducido a mayúsculas dando como resultado la var textomayus
    Se llama a la función asciiindex y se le da como parámetro la var textomayus.
    a la string morse se le asigna como posición el valor de indice y se crea la variable codigoMorse.
    se imprime el valor de codigoMorse con un espacio entre caracter y caracter.
    se incrementa en 1 la variable i.
    Hasta que acabe la cantidad de caracteres de i, se repite el ciclo.*/
    function codifmorse() {
        
        $morse = [
        "&nbsp", ".-", "-...", "-.-.", "-..",
        ".", "..-.", "--.", "....", "..",
        ".---", "-.-", ".-..", "--", "-.",
        "---", ".--.", "--.-", ".-.", "...",
        "-", "..-", "...-", ".--", "-..-",
        "-.--", "--..", "-----", ".----", "..---",
        "...--", "....-", ".....", "-....", "--...",
        "---..", "----.", ".-.-.-", "--..--", "---...",
        "..--..", ".----.", "-....-", "-..-.", ".--.-.",
        "-...-", ".-..-.", "-.-.--",];
    
        $ascii = [" ", "A", "B", "C", "D",
                     "E", "F", "G", "H", "I",
                     "J", "K", "L", "M", "N",
                     "O", "P", "Q", "R", "S",
                     "T", "U", "V", "W", "X",
                     "Y", "Z", "0", "1", "2",
                     "3", "4", "5", "6", "7",
                     "8", "9", ".", ",", ":",
                     "?", "'", "-", "/", "@",
                     "=", "\"", "!",];

        $texto = (isset($_POST["texto"]) && $_POST["texto"] != "") ?$_POST["texto"] : "No especifico";
        $i = 0;
        
        while($texto[$i])
        {
            // Convertir a mayúscula porque tenemos equivalencias solo para mayúsculas
            // y Morse no especifica minúscula
            $textomayus = strtoupper($texto[$i]);
            $indice = asciiindex($textomayus);
            $codigoMorse = $morse[$indice];
            printf("%s ", $codigoMorse);
            $i++;
        }
     return -1;
    }

    /*Explicación de la función decodifmorse. Su objetivo es decodificar morse introducido a texto.
    se repite la string morse y ascii para evitar errores.
    se repite el input desde html hasta el recibimiento en php con POST de la variable texto.
    se establece como limitante un espacio y se añade a la variable limitante.
    strtok divide la cadena introducida en varias "fichas" y se establece como separador el valor de limitante creando la variable fichita.
    Si fichita no es igual a falso:
    Mientras fichita no sea igual a falso: 
    se llama a la función morseindex y se le asigna como parámetro el valor de fichita craendo la variable index.
    a la string ascii se le asigna como posición el valor de index y se crea la var ascii1
    se imprime el valor de ascii1
    a fichita se le vuelve asignar strtok y se establece el límite de nuevo.*/

    function decodifmorse() {

            $ascii = ["/&nbsp", "A", "B", "C", "D",
            "E", "F", "G", "H", "I",
            "J", "K", "L", "M", "N",
            "O", "P", "Q", "R", "S",
            "T", "U", "V", "W", "X",
            "Y", "Z", "0", "1", "2",
            "3", "4", "5", "6", "7",
            "8", "9", ".", ",", ":",
            "?", "'", "-", "/", "@",
            "=", "\"", "!",];

            $morse = ["&nbsp&nbsp&nbsp", ".-", "-...", "-.-.", "-..",
            ".", "..-.", "--.", "....", "..",
            ".---", "-.-", ".-..", "--", "-.",
            "---", ".--.", "--.-", ".-.", "...",
            "-", "..-", "...-", ".--", "-..-",
            "-.--", "--..", "-----", ".----", "..---",
            "...--", "....-", ".....", "-....", "--...",
            "---..", "----.", ".-.-.-", "--..--", "---...",
            "..--..", ".----.", "-....-", "-..-.", ".--.-.",
            "-...-", ".-..-.", "-.-.--",];
        
        $texto = (isset($_POST["texto"]) && $_POST["texto"] != "") ?$_POST["texto"] : "No especifico";
        
        $limitante = " ";
        $fichita = strtok($texto, $limitante);
        if ($fichita != FALSE) {
            while ($fichita != FALSE) {
                $index = morseindex($fichita);
                $ascii1 = $ascii[$index];
                printf("%s", $ascii1);
                $fichita = strtok($limitante);
            }
        }
    }

    // finalmente se analiza cual caso se quiere traducir y se llama a la función correspondiente.
    if ($tipo == "a")
    {
        codifmorse();
    }

    if ($tipo == "b")
    {
        decodifmorse();
    }


?>
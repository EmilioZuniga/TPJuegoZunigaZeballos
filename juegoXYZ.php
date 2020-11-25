
<?php
/******************************************
*Completar:
* NOMBRE Y APELLIDOS - LEGAJOS
* EMILIO ZUÑIGA - FAI 2272
* ALEJANDRO ZEBALLOS - FAI 611
******************************************/
/** 1
* genera un arreglo de palabras para jugar
* @return array
*/
function cargarPalabras(){
  $coleccionPalabras = array();
  $coleccionPalabras[0]= array("palabra"=> "papa" , "pista" => "se cultiva bajo tierra", "puntosPalabra"=>7);
  $coleccionPalabras[1]= array("palabra"=> "hepatitis" , "pista" => "enfermedad que inflama el higado", "puntosPalabra"=> 7);
  $coleccionPalabras[2]= array("palabra"=> "volkswagen" , "pista" => "marca de vehiculo", "puntosPalabra"=> 10);
  $coleccionPalabras[3]= array("palabra"=> "bicicleta" , "pista" => "tiene dos ruedas", "puntosPalabra"=> 10);
  $coleccionPalabras[4]= array("palabra"=> "olla" , "pista" => "se usa para cocinar", "puntosPalabra"=> 7);
  $coleccionPalabras[5]= array("palabra"=> "celular" , "pista" => "tiene pantalla tactil", "puntosPalabra"=> 9);
  $coleccionPalabras[6]= array("palabra"=> "planta" , "pista" => "genera oxigeno", "puntosPalabra"=> 8);
  $coleccionPalabras[7]= array("palabra"=> "parlante" , "pista" => "reproduce sonidos", "puntosPalabra"=> 10);
  $coleccionPalabras[8]= array("palabra"=> "elefante" , "pista" => "el mamifero terestre mas grande", "puntosPalabra"=> 10);
  
    return $coleccionPalabras;
}

/** 2
 * Genera un arreglo que almacena los puntajes de partidas anteriores
 * @return array
 */
function cargarJuegos(){
	$coleccionJuegos = array();
	$coleccionJuegos[0] = array("puntos"=> 0, "indicePalabra" => 1);
	$coleccionJuegos[1] = array("puntos"=> 10,"indicePalabra" => 2);
    $coleccionJuegos[2] = array("puntos"=> 0, "indicePalabra" => 1);
    $coleccionJuegos[3] = array("puntos"=> 8, "indicePalabra" => 0);
    $coleccionJuegos[4] = array("puntos"=> 0, "indicePalabra" => 5);
    $coleccionJuegos[5] = array("puntos"=> 11, "indicePalabra" => 7);
    $coleccionJuegos[6] = array("puntos"=> 9, "indicePalabra" => 4);
    $coleccionJuegos[7] = array("puntos"=> 10, "indicePalabra" => 8);
    $coleccionJuegos[8] = array("puntos"=> 0, "indicePalabra" => 6);
    
    return $coleccionJuegos;
}

/** 3
* a partir de la palabra genera un arreglo para determinar si sus letras fueron o no descubiertas
* @param string $palabra
* @return array
*/
function dividirPalabraEnLetras($palabra){
    for ($i = 0; $i < strlen($palabra); $i++){
        $coleccionLetras[$i] = 
        ["letra" => $palabra[$i], 
        "descubierta" => false];
    }
    return $coleccionLetras;  
}

/** 4
* muestra y obtiene una opcion de menú ***válida***
* @return int
*/
function seleccionarOpcion(){
    echo "--------------------------------------------------------------\n";
    echo "\n ( 1 ) Jugar con una palabra aleatoria"; 
    echo "\n ( 2 ) Jugar con una palabra elegida";
    echo "\n ( 3 ) Aregar una palabra al listado"; 
    echo "\n ( 4 ) Mostrar la información ompleta de un numero de juego";
    echo "\n ( 5 ) Mostrar la información completa del primer juego con mas puntaje";
    echo "\n ( 6 ) Mostrar la información completa del primer juego que supere un puntaje indicado por el usuario";
    echo "\n ( 7 ) Mostrar la lista de palabras ordenadas por puntaje";
    echo "\n ( 8 ) Salir";
    echo "Indique la opción valida: ";
    $opcion = trim(fgets (STDIN));
    if ($opcion < 1 || $opcion > 8){
        echo "\n Indique la opción valida: ";
    }
    return $opcion;
}

/** 5
* Determina si una palabra existe en el arreglo de palabras
* @param array $coleccionPalabras
* @param string $palabra
* @return boolean
*/
function existePalabra($coleccionPalabras,$palabra){
    $i=0;
    $cantPal = count($coleccionPalabras);
    $existe = false;
    while($i<$cantPal && !$existe){
        $existe = $coleccionPalabras[$i]["palabra"] == $palabra;
        $i++;
    }
    
    return $existe;
}


/** 6
* Determina si una letra existe en el arreglo de letras
* @param array $coleccionLetras
* @param string $letra
* @return boolean
*/
function existeLetra($coleccionLetras, $letra){
    
    for ($i = 0; $i <count($coleccionLetras); $i++){
        if ($letra == $coleccionLetras[$i]["letra"]){
            $coleccionLetras[$i] = ["descubierta" => true];
            $letraValida = true;
           }
        }
    return $letraValida;
}

/** 7
* Solicita los datos correspondientes a un elemento de la coleccion de palabras: palabra, pista y puntaje. 
* Internamente la función también verifica que la palabra ingresada por el usuario no exista en la colección de palabras.
* @param array $coleccionPalabras
* @return array  colección de palabras modificada con la nueva palabra.
*/
function cargarNuevaPalabra($coleccionPalabras){
    do{ 
        echo "--------------------------------------------------------------\n";
        echo "\nIngrese la palabra: ";
        $palabraNueva = trim(fgets(STDIN));
        $existePalabra = existePalabra($coleccionPalabras,$palabraNueva); 
            if ($existePalabra == true){
                echo "\nLa palabra ya existe";
            }
        }while ($existePalabra == true);

    $nuevoIndice = count($coleccionPalabras) + 1;
    $coleccionPalabras[$nuevoIndice] = ["palabra" => $palabraNueva];

    echo "\nIngrese pista: ";
    $pistaNueva = trim(fgets(STDIN));
    $coleccionPalabras[$nuevoIndice] = ["pista" => $pistaNueva];

    echo "\nIngrese puntaje: ";
    $puntajeNuevo = trim(fgets(STDIN));
    $coleccionPalabras[$nuevoIndice] = ["puntosPalabras" => $puntajeNuevo];

    return $coleccionPalabras;
}


/** 8
* Esta función obtiene un índice aleatorio. 
* @param int $min, $max
* @return int
*/
function indiceAleatorioEntre($min,$max){
    $i = rand($min,$max); // /*>>> documente qué hace la función rand según el manual php.net en internet <<<*/
    return $i;
}

/** 9
* solicitar un valor entre min y max
* @param int $min
* @param int $max
* @return int
*/
function solicitarIndiceEntre($min,$max){ 
    do{
        echo "--------------------------------------------------------------\n";
        echo "\nSeleccione un valor entre $min y $max: ";
        $i = trim(fgets(STDIN));
    }while(!($i>=$min && $i<=$max));
    
    return $i;
}



/** 10
* Determinar si la palabra fue descubierta, es decir, todas las letras fueron descubiertas
* @param array $coleccionLetras
* @return boolean
*/
function palabraDescubierta($coleccionLetras){
    $canttidadLetras = count($coleccionLetras);
    $i = 0;
    $letraCorrecta = true;
    while($i < $canttidadLetras && $letraCorrecta == true){
        $letraCorrecta = $coleccionLetras[$i]["descubierta"] == true; 
        $i++;
    }
    return $letraCorrecta;
    
}

/** 11
* Se solicita una letra al usuario
* @param
* @return string $letra
*/
function solicitarLetra(){
    $letraCorrecta = false;
    do{
        echo "--------------------------------------------------------------\n";
        echo "Ingrese una letra: ";
        $letra = strtolower(trim(fgets(STDIN)));
        if(strlen($letra)!=1){
            echo "\nDebe ingresar 1 letra!";
        }else{
            $letraCorrecta = true;
        }
        
    }while(!$letraCorrecta);
    
    return $letra;
}

/** 12
* Descubre todas las letras de la colección de letras iguales a la letra ingresada.
* Devuelve la coleccionLetras modificada, con las letras descubiertas
* @param array $coleccionLetras
* @param string $letra
* @return array colección de letras modificada.
*/
function destaparLetra($coleccionLetras, $letra){
    $i = 0;
    do{
       if ($letra == $coleccionLetras[$i]["letra"]){
           $coleccionLetras[$i] = ["decubierta" => true];
       }
       $i++;
    }
    while ($i < count($coleccionLetras));
    
    return $coleccionLetras;
}

/** 13
* obtiene la palabra con las letras descubiertas y * (asterisco) en las letras no descubiertas. Ejemplo: he**t*t*s
* @param array $coleccionLetras
* @return string  Ejemplo: "he**t*t*s"
*/
function stringLetrasDescubiertas($coleccionLetras){
    for ($i = 0; $i < count($coleccionLetras); $i++){
        if ($coleccionLetras[$i]["descubierta"] == true){
            $pal[$i] = $coleccionLetras[$i]["letra"]; 
        }else{
            $pal[$i] = "*";
        }
   }
    return $pal;
}


/** 14
* Desarrolla el juego y retorna el puntaje obtenido
* Si descubre la palabra se suma el puntaje de la palabra más la cantidad de intentos que quedaron
* Si no descubre la palabra el puntaje es 0.
* @param array $coleccionPalabras
* @param int $indicePalabra
* @param int $cantIntentos
* @return int puntaje obtenido
*/
function jugar($coleccionPalabras, $indicePalabra, $cantIntentos){
    $pal = $coleccionPalabras[$indicePalabra]["palabra"];
    $coleccionLetras = dividirPalabraEnLetras($pal);
    //print_r($coleccionLetras);
    $puntaje = 0;
    $palabraFueDescubierta = false;

    
    do{
        echo "--------------------------------------------------------------\n";
        echo "\nPista: ",$coleccionPalabras[$indicePalabra]["pista"];
        echo "\nIngrese una letra: ";
        $letraIngresada = trim(fgets(STDIN));

        $letraExiste = existeLetra($coleccionLetras, $letraIngresada);

        if ($letraExiste == false){

            $cantIntentos = ($cantIntentos - 1);
            echo "\nLa letra ",$letraIngresada," NO peretenece a la palabra. Quedan ",$cantIntentos," Intentos.";

        }else{

            echo "\nLa letra ",$letraIngresada," PERTENECE a la palabra";

            $coleccionLetras = destaparletra($coleccionLetras, $letraIngresada);
            $letraDescubierta = stringLetrasDescubiertas($coleccionLetras);

            echo "\nPalabra a Descubrir: ",$letraDescubierta;

        }

        $palabraFueDescubierta = palabraDescubierta($coleccionLetras);

    }while (!$palabraFueDescubrierta && $cantIntentos > 0);
     
    
    //solicitar letras mientras haya intentos y la palabra no haya sido descubierta:
    
    if($palabraFueDescubierta){

        $puntaje = $coleccionPalabras[$indicePalabra]["puntos palabra"] + $cantIntentos;

        echo "\n¡¡¡¡¡¡GANASTE ".$puntaje." puntos!!!!!!\n";
    }else{
        echo "\n¡¡¡¡¡¡AHORCADO AHORCADO!!!!!!\n";
    }
    
    return $puntaje;
}

/** 15
* Agrega un nuevo juego al arreglo de juegos
* @param array $coleccionJuegos
* @param int $ptos
* @param int $indicePalabra
* @return array coleccion de juegos modificada
*/
function agregarJuego($coleccionJuegos,$puntos,$indicePalabra){
    $coleccionJuegos[] = array("puntos"=> $puntos, "indicePalabra" => $indicePalabra);    
    return $coleccionJuegos;
}

/** 16
* Muestra los datos completos de un registro en la colección de palabras
* @param array $coleccionPalabras
* @param int $indicePalabra
*/
function mostrarPalabra($coleccionPalabras,$indicePalabra){
    //$coleccionPalabras[0]= array("palabra"=> "papa" , "pista" => "se cultiva bajo tierra", "puntosPalabra"=>7);
    
    echo "\npalabra: ",$coleccionPalabras[$indicePalabra]["palabra"];
    echo "\npista: ",$coleccionPalabras[$indicePalabra]["Pista"];
    echo "\npuntosPalabra: ",$coleccionPalabras[$indicePalabra]["puntosPalabra"];
}


/** 17
* Muestra los datos completos de un juego
* @param array $coleccionJuegos
* @param array $coleccionPalabras
* @param int $indiceJuego
*/
function mostrarJuego($coleccionJuegos,$coleccionPalabras,$indiceJuego){
    //array("puntos"=> 8, "indicePalabra" => 1)
    echo "\n\n";
    echo "<-<-< Juego ".$indiceJuego." >->->\n";
    echo "  Puntos ganados: ".$coleccionJuegos[$indiceJuego]["puntos"]."\n";
    echo "  Información de la palabra:\n";
    mostrarPalabra($coleccionPalabras,$coleccionJuegos[$indiceJuego]["indicePalabra"]);
    echo "\n";
}



/** 18
* Obtiene el inice de la partida con mayor puntaje
* @param array $coleccionJuegos
*/
function indiceMayorPuntaje($coleccionJuegos){

    $indiceMayorPuntaje = 0;

    for ($i = 0; $i < count($coleccionJuegos); $i++){
        if ($mayorPuntaje < $coleccionJuegos[$i]["puntos"]){
            $mayorPuntaje = $coleccionJuegos[$i]["puntos"];
            $indiceMayorPuntaje = $i;
        }
    }

    echo "\n\n";
    echo "<-<-< Juego ".($indiceMayorPuntaje + 1)." >->->\n";
    echo "  Puntos ganados: ".$coleccionJuegos[$indiceMayorPuntaje]["puntos"]."\n";
    echo "  Información de la palabra:\n";
    mostrarPalabra($coleccionPalabras,$coleccionJuegos[$indiceMayorPuntaje]["indicePalabra"]);
    echo "\n";
}



/** 19
* Obtiene el inice de la primer partida que supere el puntaje ingresado por parametros.
* Si no existe la función debe retornar -1
* @param array $coleccionJuegos
* @param int $puntajeIngresado
*/
function superaPuntaje($coleccionJuegos, $puntajeIngresado){
    $i = 0;
    $indiceSuperado = 0;

    while($i < count($coleccionJuegos) && $puntajeIngresado > $coleccionJuegos[$i]["puntos"]){
        $indiceSuperado = $i + 1;
        $i++;
    }

    if ($puntajeIngresado < $coleccionJuegos[$indiceSuperado]["puntos"]){

        echo "\n\n";
    echo "<-<-< Juego ".($indiceSuperado + 1)." >->->\n";
    echo "  Puntos ganados: ".$coleccionJuegos[$indiceSuperado]["puntos"]."\n";
    echo "  Información de la palabra:\n";
    mostrarPalabra($coleccionPalabras,$coleccionJuegos[$indiceSuperado]["indicePalabra"]);
    echo "\n";

    }else{
        echo "\n-1";
    }

}



/** 20
* Muestra la colección de palabras en orden alfabetico
* @param $coleccionPalabras
*/



/******************************************/
/************** PROGRAMA PRINCIAL *********/
/******************************************/
define("CANT_INTENTOS", 6); //Constante en php para cantidad de intentos que tendrá el jugador para adivinar la palabra.

do{
    $opcion = seleccionarOpcion();
    switch ($opcion) {
    case 1:
        $indicePalabra = indiceAleatorioEntre(0, count($coleccionPalabras));
        jugar($coleccionPalabras, $indicePalabra, CANT_INTENTOS);

        break;
    case 2: //Jugar con una palabra elegida

        break;
    case 3: //Agregar una palabra al listado

        break;
    case 4: //Mostrar la información completa de un número de juego

        break;
    case 5: //Mostrar la información completa del primer juego con más puntaje

        break;
    case 6: //Mostrar la información completa del primer juego que supere un puntaje indicado por el usuario

        break;
    case 7: //Mostrar la lista de palabras ordenada por orden alfabetico

        break;
    }
}while($opcion != 8);

?>

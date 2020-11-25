
<?php
/******************************************
*Completar:
* NOMBRE Y APELLIDOS - LEGAJOS
******************************************/




/**
* genera un arreglo de palabras para jugar
* @return array
*/
function cargarPalabras(){
  $coleccionPalabras = array();
  $coleccionPalabras[0]= array("palabra"=> "papa" , "pista" => "se cultiva bajo tierra", "puntosPalabra"=>7);
  $coleccionPalabras[1]= array("palabra"=> "hepatitis" , "pista" => "enfermedad que inflama el higado", "puntosPalabra"=> 7);
  $coleccionPalabras[2]= array("palabra"=> "volkswagen" , "pista" => "marca de vehiculo", "puntosPalabra"=> 10);
  
  /*>>> Agregar al menos 4 palabras más <<<*/
  
  return $coleccionPalabras;
}

/**
* /*>>> completar comentario <<<*/
* 
*/
function cargarJuegos(){
	$coleccionJuegos = array();
	$coleccionJuegos[0] = array("puntos"=> 0, "indicePalabra" => 1);
	$coleccionJuegos[1] = array("puntos"=> 10,"indicePalabra" => 2);
    $coleccionJuegos[2] = array("puntos"=> 0, "indicePalabra" => 1);
    $coleccionJuegos[3] = array("puntos"=> 8, "indicePalabra" => 0);
    
    /*>>> Agregar al menos 3 juegos realizados más <<<*/
    
    return $coleccionJuegos;
}

/**
* a partir de la palabra genera un arreglo para determinar si sus letras fueron o no descubiertas
* @param string $palabra
* @return array
*/
function dividirPalabraEnLetras($palabra){
    
    /*>>> Completar para generar la estructura de datos b) indicada en el enunciado. 
          recuerde que los string pueden ser recorridos como los arreglos.  <<<*/
    
}

/**
* muestra y obtiene una opcion de menú ***válida***
* @return int
*/
function seleccionarOpcion(){
    echo "--------------------------------------------------------------\n";
    echo "\n ( 1 ) Jugar con una palabra aleatoria"; 
    
    /*>>> Completar el menu <<<*/
    
    /*>>> Además controlar que la opción elegida es válida. Puede que el usuario se equivoque al elegir una opción <<<*/
    
    echo "--------------------------------------------------------------\n";
    return $opcion;
}

/**
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


/**
* Determina si una letra existe en el arreglo de letras
* @param array $coleccionLetras
* @param string $letra
* @return boolean
*/
function existeLetra(/*>>> Completar parámetros <<<*/ ){
    
    /*>>> Completar cuerpo de la función <<<*/

}

/**
* Solicita los datos correspondientes a un elemento de la coleccion de palabras: palabra, pista y puntaje. 
* Internamente la función también verifica que la palabra ingresada por el usuario no exista en la colección de palabras.
* @param array $coleccionPalabras
* @return array  colección de palabras modificada con la nueva palabra.
*/
/*>>> Completar la interfaz y cuerpo de la función. Debe respetar la documentación <<<*/


/**
* Obtener indice aleatorio
* /*>>> Completar documentacion <<<*/
*/
function indiceAleatorioEntre($min,$max){
    $i = rand($min,$max); // /*>>> documente qué hace la función rand según el manual php.net en internet <<<*/
    return $i;
}

/**
* solicitar un valor entre min y max
* @param int $min
* @param int $max
* @return int
*/
function solicitarIndiceEntre($min,$max){ 
    do{
        echo "Seleccione un valor entre $min y $max: ";
        $i = trim(fgets(STDIN));
    }while(!($i>=$min && $i<=$max));
    
    return $i;
}



/**
* Determinar si la palabra fue descubierta, es decir, todas las letras fueron descubiertas
* @param array $coleccionLetras
* @return boolean
*/
function palabraDescubierta($coleccionLetras){
    
    /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
}

/**
* /*>>> Completar documentacion <<<*/
*/
function solicitarLetra(){
    $letraCorrecta = false;
    do{
        echo "Ingrese una letra: ";
        $letra = strtolower(trim(fgets(STDIN)));
        if(strlen($letra)!=1){
            echo "Debe ingresar 1 letra!\n";
        }else{
            $letraCorrecta = true;
        }
        
    }while(!$letraCorrecta);
    
    return $letra;
}

/**
* Descubre todas las letras de la colección de letras iguales a la letra ingresada.
* Devuelve la coleccionLetras modificada, con las letras descubiertas
* @param array $coleccionLetras
* @param string $letra
* @return array colección de letras modificada.
*/
function destaparLetra($coleccionLetras, $letra){
    
    /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
}

/**
* obtiene la palabra con las letras descubiertas y * (asterisco) en las letras no descubiertas. Ejemplo: he**t*t*s
* @param array $coleccionLetras
* @return string  Ejemplo: "he**t*t*s"
*/
function stringLetrasDescubiertas($coleccionLetras){
    $pal = "";
    
    /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
    
    return $pal;
}


/**
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
    
    
    /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
    
    //Mostrar pista:
    
    //solicitar letras mientras haya intentos y la palabra no haya sido descubierta:
    
    If($palabraFueDescubierta){
        //obtener puntaje:
        
        echo "\n¡¡¡¡¡¡GANASTE ".$puntaje." puntos!!!!!!\n";
    }else{
        echo "\n¡¡¡¡¡¡AHORCADO AHORCADO!!!!!!\n";
    }
    
    return $puntaje;
}

/**
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

/**
* Muestra los datos completos de un registro en la colección de palabras
* @param array $coleccionPalabras
* @param int $indicePalabra
*/
function mostrarPalabra($coleccionPalabras,$indicePalabra){
    //$coleccionPalabras[0]= array("palabra"=> "papa" , "pista" => "se cultiva bajo tierra", "puntosPalabra"=>7);
    
    /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
}


/**
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


/*>>> Implementar las funciones necesarias para la opcion 5 del menú <<<*/

/*>>> Implementar las funciones necesarias para la opcion 6 del menú <<<*/

/*>>> Implementar las funciones necesarias para la opcion 7 del menú <<<*/




/******************************************/
/************** PROGRAMA PRINCIAL *********/
/******************************************/
define("CANT_INTENTOS", 6); //Constante en php para cantidad de intentos que tendrá el jugador para adivinar la palabra.

do{
    $opcion = seleccionarOpcion();
    switch ($opcion) {
    case 1: //Jugar con una palabra aleatoria

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

=======
<?php
/******************************************
*Completar:
* NOMBRE Y APELLIDOS - LEGAJOS
Emilio Zuñiga - FAI 2272
Alejandro Isaias Zeballos - FAI 611 
******************************************/

/**
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

/**
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

/**
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

/**
* muestra y obtiene una opcion de menú ***válida***
* @return int
*/
function seleccionarOpcion(){

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

/**
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
    /*$i = 0;
    $cantLetras = count($coleccionLetras);
    $letraValida = false;
    while ($i < $cantLetras && !$letraValida){
        $letraValida = $coleccionLetras[$i]["letra"] == $letra;
        $i = $i++; */
    
    for ($i = 0; $i <count($coleccionLetras); $i++){
        if ($letra == $coleccionLetras[$i]["letra"]){
            $coleccionLetras[$i] = ["descubierta" => true];
            $letraValida = true;
           }
        }
    /*if ($letraValida == true){
        $coleccionLetras[$i] = ["descubierta" => true];
    }*/
return $letraValida;
}

/**
* Solicita los datos correspondientes a un elemento de la coleccion de palabras: palabra, pista y puntaje. 
* Internamente la función también verifica que la palabra ingresada por el usuario no exista en la colección de palabras.
* @param array $coleccionPalabras
* @return array  colección de palabras modificada con la nueva palabra.
*/
function cargarNuevaPalabra($coleccionPalabras){
    do{ 
    echo "\n Ingrese la palabra: ";
    $palabraNueva = trim(fgets(STDIN));
    $existePalabra = existePalabra($coleccionPalabras,$palabraNueva); 
        if ($existePalabra == true){
            echo "La palabra ya existe";
        }
    }while ($existePalabra == true);

    $nuevoIndice = count($coleccionPalabras) + 1;
    $coleccionPalabras[$nuevoIndice] = ["palabra" => $palabraNueva];

    echo "\n Ingrese pista: ";
    $pistaNueva = trim(fgets(STDIN));
    $coleccionPalabras[$nuevoIndice] = ["pista" => $pistaNueva];

    echo "\n Ingrese puntaje: ";
    $puntajeNuevo = trim(fgets(STDIN));
    $coleccionPalabras[$nuevoIndice] = ["puntosPalabras" => $puntajeNuevo];

return $coleccionPalabras;
}

/**
* Esta función obtiene un índice aleatorio. 
* @param int $min, $max
* @return int
*/
function indiceAleatorioEntre($min,$max){
    $i = rand($min,$max); // /*La función rand permite obtener un numero aleotorio entre un valor minimo y maximo*/
    return $i;
}

/**
* solicitar un valor entre min y max
* @param int $min
* @param int $max
* @return int
*/
function solicitarIndiceEntre($min,$max){ 
    do{
        echo "Seleccione un valor entre $min y $max: ";
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

/**
*11
* Se solicita una letra al usuario
* @param
* @return string $letra
*/

function solicitarLetra(){
    $letraCorrecta = false;
    do{
        echo "Ingrese una letra: ";
        $letra = strtolower(trim(fgets(STDIN)));
        if(strlen($letra)!=1){
            echo "Debe ingresar 1 letra!\n";
        }else{
            $letraCorrecta = true;
        }
        
    }while(!$letraCorrecta);
    
    return $letra;
}

/**
* 12
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

    /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
}

/**
* 13 
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


/**
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
    
    
    /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
    
    //Mostrar pista:
    
    //solicitar letras mientras haya intentos y la palabra no haya sido descubierta:
    
    If($palabraFueDescubierta){
        //obtener puntaje:
        
        echo "\n¡¡¡¡¡¡GANASTE ".$puntaje." puntos!!!!!!\n";
    }else{
        echo "\n¡¡¡¡¡¡AHORCADO AHORCADO!!!!!!\n";
    }
    
    return $puntaje;
}

/**
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

/**
* Muestra los datos completos de un registro en la colección de palabras
* @param array $coleccionPalabras
* @param int $indicePalabra
*/
function mostrarPalabra($coleccionPalabras,$indicePalabra){
    //$coleccionPalabras[0]= array("palabra"=> "papa" , "pista" => "se cultiva bajo tierra", "puntosPalabra"=>7);
    
    /*>>> Completar el cuerpo de la función, respetando lo indicado en la documentacion <<<*/
}


/**
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


/*>>> Implementar las funciones necesarias para la opcion 5 del menú <<<*/

/*>>> Implementar las funciones necesarias para la opcion 6 del menú <<<*/

/*>>> Implementar las funciones necesarias para la opcion 7 del menú <<<*/




/******************************************/
/************** PROGRAMA PRINCIAL *********/
/******************************************/
define("CANT_INTENTOS", 6); //Constante en php para cantidad de intentos que tendrá el jugador para adivinar la palabra.

do{
    $opcion = seleccionarOpcion();
    switch ($opcion) {
    case 1: //Jugar con una palabra aleatoria

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

//cambios de franco
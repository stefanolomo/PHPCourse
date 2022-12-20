<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
$nombre = "Alfonso";
$apellido = "Perez";

echo "<p>Hola, me llamo $nombre $apellido</p>";

//! Listas
$personas = [
	"S" => 16,
	"RetaxMaster" => 26,
	"MS" => 25,
];
//var_dump($personas);
//print_r($personas);

//! Variables y constantes
$numero = 12312; //? Variable

const H = "Something"; //? Forma correcta de definir constantes

//! Tipos de datos
//* Tipos de datos
//* En programación tenemos varios tipos de datos, los más conocidos son:
//*
//* Numéricos:
//* 	Integer: Número sin decimales.
//* 	Float: Número con punto flotante o punto decimal.
//* 	Double: Decimales con valores más precisos, con más decimales que float.
//* Cadenas de caracteres:
//* 	Char: Un solo una letra o un simbolo.
//* 	String: Una cadena de caracteres.
//* Booleanos:
//* 	Bool: Verdadero o falso.
//* Sin valor:
//* 	Null: No hay valor.
//* 	Undefined: Hay una variable pero no tiene ningun valor.
//*
//* PHP tiene un [tipado débil], no necesita que se defina de forma explicita el tipo de dato ya que lo deduce por si mismo.

//! [Casting]: Se usa para convertir un tipo de dato a otro
//* Se puede acceder a esta utilidad anteponiendo el tipo de dato entre paréntesis antes de un valor o una variable al momento de la asignación o inicialización.
//* Las siguientes definiciones ayudan a forzar el cambio de tipos en PHP:
//* (array) forzado al tipo arreglo
//* (bool) forzado al tipo booleano
//* (boolean) forzado al tipo booleano
//* (double) forzado al tipo ‘punto flotante’
//* (float) forzado al tipo ‘punto flotante’
//* (int) forzado al tipo entero
//* (integer) forzado al tipo entero
//* (object) forzado al tipo objeto
//* (string) forzado al tipo ‘cadena de texto’

//$numero = "5";
//var_dump($numero); //? Es un [String]

//echo "<br>";
////* Trasformamos el String a Integer

//$numero = (int) $numero;
//var_dump($numero); //? Ahora es un [Integer]

//! Operadores Lógicos
# Variables abajo
//$gatos_felinos = true;
//$gatos_tienen_4_patas = true;
//$gatos_aves = false;
//$gatos_tienen_4_patas = true;
////? Operador [And]
//var_dump($gatos_tienen_4_patas && $gatos_felinos);
////? Operador [Or]
//var_dump($gatos_aves || $gatos_felinos);
////? Operador [Not]
//var_dump(!$gatos_tienen_4_patas)

//! Operadores Aritméticos
//* Adición ⇒ +
//* Sustracción ⇒ -
//* Multiplicación ⇒ *
//* División ⇒ /
//* Modulo ⇒ % ⇒ Se usa para conocer el residuo de una división ⇒ $a % $b
//* Potenciación ⇒ ** ⇒ $a ** $b
//* Identidad ⇒ Sirve para convertir un string a un int o float, según sea el caso ⇒ + ⇒ +$a
//* Negación ⇒ Convierte un numero positivo a negativo ⇒ -$a

//! Operadores Relacionales
//* ==	Igual a --> devuelve 'true' si $a es igual a $b después de la manipulación de tipos. $a == $b
//* ===	Idéntico a --> devuelve 'true' si $a es igual a $b, y son del mismo tipo. $a === $b
//* !=	Diferente de --> devuelve 'true' si $a no es igual a $b después de la manipulación de tipos. $a != $b
//* <>	Diferente de --> devuelve 'true' si $a no es igual a $b después de la manipulación de tipos. $a <> $b
//* !==	No idéntico a --> devuelve 'true' si $a no es igual a $b, o si no son del mismo tipo. $a !== $b 
//* >	Mayor que --> devuelve 'true' si $a es estrictamente mayor que $b. $a > $b
//* >=	Mayor o igual que --> devuelve 'true' si $a es estrictamente mayor o igual que $b. $a >= $b
//* <	Menor que --> devuelve 'true' si $a es estrictamente menor que $b. $a < $b
//* <=	Menor o igual que --> devuelve 'true' si $a es estrictamente menor o igual que $b. $a <= $b
//* <=>	Nave espacial --> Evalúa si un número es menor que, igual a o mayor que otro, dando como resultados -1, 0 o 1 respectivamente. $a <=> $b
//* ??	Fusión de null --> echo $edad_juanito ?? edad_pepito ==> Si la edad de Juanito no esta definida, usa la edad de pepito

//! Otros Operadores
//* 
//? Operador de Asignación, =
//* 
//? Operador de Incremento, +=
//* 
//? $contador = 1;
//*
//? $contador = $ contador + 1;
//*
//? $contador += 1;
//*
//? $contador++; /Sirve para incrementar de 1 en 1
//* 
//? Operador, -=
//* 	Resta el numero que pongas a un lado
//* 
//? Operador, *=
//* 	Multiplica por el numero que pongas a un lado
//* 
//? Operador, /=
//* 	Divide entre el numero que pongas a un lado
//* 
//? Operador de Concatenación, .=
//* 	$nombre = "Carlos";
//* 	$nombre .= " " . "Santana";
//* 	echo $nombre;
//* 	Salida: Carlos Santana
//
//! Primer Programa
echo "<code>Este va a ser mi primer programa</code> \n";
$segundos = readline("Tiempo en segundos --> ");

$horas = (int) ($segundos / 3600);
$segundos = (int) ($segundos % 3600);
$minutos = (int) ($segundos / 60);
$segundos = (int) ($segundos % 60);
echo "Son $horas hora/s, $minutos minuto/s y $segundos segundo/s \n";
?>
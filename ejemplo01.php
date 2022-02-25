<?php
# PHP: Pre Processor Hypertext
// Es un lenguaje de programación.
// https://www.php.net
/*
Requiere de la instalación de APACHE, el
cual se puede obtener de 
- XAMPP
https://www.apachefriends.org/es/index.html
- APPSERV
- WAMP
*/

# Declaración de variables
/*
PHP es un lenguaje de programación, cuya declaración de variables es de tipo dinámico.
Al darse la primera asignación a la variables,
está asume el tipo de dato del valor asignado.
*/
$nombre = "JOSE PEREZ"; # Variable alfanumérica
$edad = 27; # Variable numérica de tipo entero
$estatura = 1.71; # Variable numérica decimal
$estudiante = true; # Variable Lógica

echo "<h1>Contenido de variables</h1>";
#Acceso al contenido de variable
#       +-- comentario
#       |     +-- operador de concatenación
#       |     |   +-- variable
#       |     |   |       +-- etiqueta html
#       v     v   v       v 
echo "nombre:".$nombre."<br>";
echo "edad:".$edad."<br>";
echo "estatura:".$estatura."<br>";
echo "¿estudiante?:".$estudiante."<br>";

#Ejecución del programa, depende de colocar
#en la url del navegador, la siguiente ruta:
#localhost/PHP_NIVEL1_20210531
#
#Teniendo en cuenta, que APACHE de estar corriendo
?>
<h1>Uso de la función var_dump()</h1>
<?php
echo "nombre:<br>";
echo var_dump($nombre)."<br>";
echo "edad:<br>";
echo var_dump($edad)."<br>";
echo "estatura:<br>";
echo var_dump($estatura)."<br>";
echo "¿estudiante?:<br>";
echo var_dump($estudiante)."<br>";

#Operadores relacionales y operadores lógicos
/*
>, <, >=, <=, !=, ==
*/
#Operadores Lógicos 
/*
CONJUNCIÓN (AND) : &&
DISYUNCIÓN (OR)  : ||
NEGACIÓN (NOT)   : !
*/

#ENTRADAS DE DATOS $_GET['variable']
#                  $_POST['variable']
/*
Llamador por método $_GET, requiere de que en la
url, se coloquen los siguientes argumentos:
                       +-- GET
                       |  +-- variables
                       |  |     +-- valor 
                       |  |     |   +-- separador de variables
                       v  v     v   v   ...   
localhost/ejemplo01.php?nombre=PEDRO&apellido="RIVAS"
*/

if (isset($_GET['nombre']) && isset($_GET['apellido'])){
	$nombre1 = $_GET['nombre'];
	$apellido1 = $_GET['apellido'];
	echo "<h1>Variables recibidas desde la URL</h1>";
	echo $nombre1."<br>";
	echo $apellido1."<br>";
}else{
	echo "<h2>No se recibieron variables a través de la url</h2>";
}

# Estructuras condicionales
echo "<h2>Condicionales</h2>";
$maximo = 100;
$valor  = 0;
if (isset($_GET['valor'])){
	$valor = $_GET['valor'];
	if ($valor > $maximo){
		echo "<b>El valor recibido es mayor que el máximo</b>".$valor."<br>";
	}else{
		echo "<i>Máximo es el mayor valor:</i>".$maximo."<br>";
	}
}else{
	echo "<u>No se ha recibido valor</u><br>";
}


# Estructuras condicionales de selección multiple
echo "<h2>Seleccíón Múltiple</h2>";
$lenguaje = "";
if (isset($_GET['lenguaje'])){
	$lenguaje = $_GET['lenguaje'];
	switch ($lenguaje) {
		case 'PHP':
			echo "Pre Processor Hypertext<br>";
			break;
		case 'JS':
			echo "Javascript<br>";
			break;
		default:
			echo "No se tiene información del lenguaje<br>";
			break;
	}
}else{
	echo "<u>No se ha recibido lenguaje</u><br>";
}
?>
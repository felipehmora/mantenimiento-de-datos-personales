<?php 
/*
while

do while

for
*/
/*
Producir la serie Fibonacci a partir de 2 números
dados y la cantidad de elementos a producir.
n1
| +--n2
| |
v v
3,4,7,11,18,29,47,76,123,199

1 2 3 4  5  6  7  8  9   10 <- n
*/ 
echo "<h1>Ciclo While (Serie Fibonacci)</h1>";
$n1 = 3;
$n2 = 4;
$n  = 10;
$suma = 0;
$i = 2;
echo $n1."<br>";
echo $n2."<br>";
while ($i < 10) {
	$suma = $n1 + $n2;
	echo $suma."<br>";
	$n1 = $n2;
	$n2 = $suma;
	$i = $i + 1;
}

echo "<hr>";
echo "<h1>Ciclo Do While (Serie Fibonacci)</h1>";
$n1 = 3;
$n2 = 4;
$n = 10;
$suma = 0;
$i = 2;
echo $n1."<br>";
echo $n2."<br>";
do {
	$suma = $n1 + $n2;
	echo $suma."<br>";
	$n1 = $n2;
	$n2 = $suma;
	$i = $i + 1;
} while ($i < $n);

echo "<hr>";
echo "<h1>Ciclo For (Serie Fibonacci)</h1>";
$n1 = 3;
$n2 = 4;
$n  = 10;
echo $n1."<br>";
echo $n2."<br>";
for ($i=2; $i < $n; $i++) { 
	$suma = $n1 + $n2;
	echo $suma."<br>";
	$n1 = $n2;
	$n2 = $suma;
}
?>
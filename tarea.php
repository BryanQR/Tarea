<?php
echo("1. calcular la suma de los n primeros números impares");
echo "<br><br>";
$sum=0;
$n1=10;
for($i=1;$i<=$n1;$i++)
        {
            if($i % 2!=0)
            $sum=$sum+$i;            
        }
echo $sum;
echo "<br><br>";
echo("2.Mostrarlos ordenados de mayor a menor ");
$arreglo = array(97,46,86);
rsort($arreglo);
echo "<br><br>";
var_export($arreglo);
echo "<br><br>";
echo("3.- declarar un número entre 0 y 9.999 y decir cuantas cifras tiene.");
$numero =10000;
$n = 0;
do{
	$numero = floor($numero / 10);
	$n = $n + 1;
} while ($numero > 0);
echo "<br><br>";
echo " Tu numero tiene " . $n . " digitos";
echo "<br><br>";
echo("4. Impresion de numeros ");
for($i=1;$i<=15;$i++){
echo "->$i";
}
$suma=0;
echo "<br><br>";
echo(" Suma total ");
for($i=0;$i<15;$i++){
$suma=$suma+$i;
}
echo $suma;


?>




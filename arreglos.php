<?php
$semana = [
  'Lunes',
  'Martes',
  'Miercoles',
  'Jueves',
  'Viernes',
  'Sabado',
  'Domingo',  
];

var_dump($semana);
echo "<br/>".$semana[0];
echo"<br/>".$semana[10];

$planetas = [];
$planetas[] = 'Mercurio';
$planetas[] = 'Venus';
$planetas[] = 'Tierra';
$planetas[] = 'Marte';
$planetas[] = 'Jupiter';
$planetas[] = 'Saturno';
$planetas[] = 'Urano';
$planetas[] = 'Neptuno';
echo count($planetas);//3
var_dump($planetas);

foreach ($planetas as $astro){
  echo "<br>". $astro . "<br>";
}
?>
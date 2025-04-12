<?php
declare(strict_types=1);

$S1= $_GET['1'];
$S2 = $_GET['1'];
for (int $i = $S1; $i <= $S2; i ++)
  if (SummDig($i % 1000) == SummDig($i / 1000))
    echo($i);


function SummDig(int $num): int
{
  $Sum = 0;
  $i = 1;
  while($num != 0){
    Sum = Sum + ($num % 10) * $i;
    $num = $num / 10;
    $i *= 10;
  }
}
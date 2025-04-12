<?php
declare(strict_types=1);

//$text = $_GET['text'];
$text = "*aabb*cc*****";
if (empty($text)) {
    exit('Empty input!');
}

# Необходимо написать функцию удаления лишних символов из строки
function removeExtraSymbols(string $text): string
{
 $result = "";
 $IsExtra = false;
    for ($i = 0; $i < strlen($text); $i++){
     if ($text[$i] == '*'){
      if(!$IsExtra){
        $result = $result . '*'; 
        $IsExtra = true;
      }
     }
     else{
      $IsExtra = false;
      $result = $result . $text[$i];
     }
    }
    return $result;
}

$stringWithoutExtraSymbols = removeExtraSymbols($text);
echo('String without extra symbols: ' . $stringWithoutExtraSymbols);
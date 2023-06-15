<?php 


$elem = 10;
for ($i=[];count($i) <= 10 ; $elem++) { 
  
  array_push($i, $elem);


   if (!is_int($elem / 2)) {
 echo "$elem é um número primo <br>";
  }
}

echo print_r($i) . "<br>";
echo $i[10] . "<br>";
?>
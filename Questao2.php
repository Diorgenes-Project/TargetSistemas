<?php

echo "Entre com uma palavra";
$string = fgets(STDIN); 

$num = 0;
$aux = strlen($string);

for ($i = 0; $i < $aux; $i++) {
    if ($string[$i] == 'a' || $string[$i] == 'A') {
        $num++;
    }
}

echo "A letra 'a' aparece $num vezes na string informada.\n";
?>
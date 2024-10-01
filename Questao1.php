<?php
$a = 0;
$b = 1;

echo "Informe um numero: ";
$num = (int)fgets(STDIN);

if ($num == 0 || $num == 1) {
    echo " $num pertence a Fibonacci.\n";
} else {
    while ($b < $num) {
        $aux = $b;
        $b = $a + $b;
        $a = $aux;
    }

    if ($b == $num) {
        echo "$num pertence a Fibonacci.\n";
    } else {
        echo "$num não pertence a Fibonacci.\n";
    }
}
?>
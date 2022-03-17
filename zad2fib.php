<?php
function fib($n){
$nr1 = 0;
$nr2 = 1;
$i = 0;
while ($i < $n){
echo ' '.$nr1;
$nr3 = $nr2 + $nr1;
$nr1 = $nr2;
$nr2 = $nr3;
$i = $i + 1;
}

}

$n = 120;
fib($n);
?>

<?php
function fib($n) 
{
    if ($n <= 1) {
        return $n;
    }
    return fib($n - 1) + fib($n - 2);  
}

$number = 10;
echo "Fibonacci series up to $number terms: ";

for ($i = 0; $i < $number; $i++) {
    echo fib($i) . " ";  
}
echo "<br>";
?>

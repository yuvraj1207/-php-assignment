<?php
function f1()
{
    echo "Hello PHP!";
}
$fun = 'f1'; 
$fun();  

function f2($name)
{
    echo "<br>How are you, $name?";
}

function f3($callback, $name)
{
    if (is_callable($callback)) 
	{
        $callback($name); 
    } 
	else 
	{
        echo "Invalid function callback!";
    }
}
f3('f2', "<br> I'm fine!"); 
?>

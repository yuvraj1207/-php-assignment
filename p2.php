<?php
    function fact($n)  
    {
        if ($n <= 1)
            return 1;
        else 
            return $n * fact($n - 1);
    }
    
    echo  "factorial is = "fact(5);  
?>

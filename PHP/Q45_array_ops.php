<?php

    $cars = array("Volvo", "BMW", "Toyota");
    $colors = array("Red", "Green", "Blue", "Yellow");
    $age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
    sort($cars);
    
    $clength = count($cars);
    for($x = 0; $x < $clength; $x++)
    {
        echo $cars[$x] . "<br>";
    }

    rsort($colors);
    print_r($cars);

    asort($age);
    print_r($age);
  
    print_r(arsort($age));

    print_r(ksort($age));

    print_r(krsort($age));

echo"<br>This code is executed by Geetika!";
?>
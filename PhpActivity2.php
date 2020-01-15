<?php

    // For number 1.
    function sumOfNum($first,$second)
    {
        return $first + $second;
    }
    
    //For number 2.
    function dataInArray($country)
    {
        print_r($country);
    }
    
    //For number 3.
    function multidimensionalArray($multidimensionalArr)
    {
        print_r($multidimensionalArr);

    }

    //For number 4.
    function associativeArray($grade)
    {
        foreach($grade as $grades => $grado)
        {
            echo "Your grade in " . $grades ." is " . $grado . "<br>";
        }
    }
    
    //For number 5.
    function addExistingArray($menu, $data)
    {
        array_push($menu,$data);

    //For number 6.
        // foreach($menu as $menus)
        // {
            // echo $menus . "<br>";
        // }//
        print_r($menu);
    }


?>

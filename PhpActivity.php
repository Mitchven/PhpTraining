<?php

// echo " -------------- PHP EXERCISE -------------- ";

// echo "<br>1.)  ";
// for($i = 1 ; $i <= 15 ; $i++){
//     echo $i . "  ----   ";
// }

// echo "<br> 2.) ";
// for($i = 1 ; $i <= 15 ; $i++){
//     if ($i % 2 == 0){
//         echo $i . "  ----   ";
//     }
// }
// echo "<br>Divisible by 3: ";
// for($i = 1 ; $i <= 15 ; $i++){
//     if ($i % 3 == 0){
//         echo $i . "  ----   ";
//     }
// }
// echo "<br>Divisible by 5: ";
// for($i = 1 ; $i <= 15 ; $i++){
//     if ($i % 5 == 0){
//         echo $i . "  ----   ";
//     }
// }

// function divisibleNum(){
//     for($i = 1 ; $i <= 15 ; $i++){
//         if ($i % 2 == 0){
//             echo "Divisible by 2: " . $i . "  ,  ";
//         } else if ($i % 3 == 0){
//             echo "Divisible by 3: " . $i . "  ,  ";
//         }else if ($i % 5 == 0){
//             echo "Divisible by 5: " . $i . "  ,  ";
//         }
//     }
    
// }
// echo divisibleNum();
// function divisiblebyNum(){
//     $i = 1;
//     while($i != 16){
//         if($i % 2 == 0){
//         echo $i;
//         }else if ($i % 3 == 0){
//             echo $i;
//         } else if ($i % 5 == 0){
//             echo $i;
//         }
//         $i++;
//     }
// }
//     echo divisiblebyNum();
    // function divisiblebyNum(){
    //     $i = 1;
    //     while($i != 16){
    //         if($i % 2 == 0){
    //         echo $i;
    //         }else if ($i % 3 == 0){
    //             echo $i;
    //         } else if ($i % 5 == 0){
    //             echo $i;
    //         }
    //         $i++;
    //     }
    // }
    //     echo divisiblebyNum();
    // for($i = 1 ; $i <= 15 ; $i++){
    //     if ($i % 2 == 0){
    //         echo "Divisible by 2: " . $i . "  ,  ";
    //     } else if ($i % 3 == 0){
    //         echo "Divisible by 3: " . $i . "  ,  ";
    //     }else if ($i % 5 == 0){
    //         echo "Divisible by 5: " . $i . "  ,  ";
    //     }
    // }
    

// function isDivisible($count){
//     echo "Divisible by $count <br>";
//     for($i = 1 ; $i <= 15 ; $i++){
//         if ($i % $count == 0){
//             echo $i . "<br>";
//         }
//     }
// }
// isDivisible(2);
// isDivisible(3);
// isDivisible(5);

// echo "<br> 3.)<br>";
// for($i = 1; $i <= 7; $i++){
//     for($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo("<br>");
// }

//using built-in method in PHP
// for($i = 1; $i <= 7; $i++){
// echo str_repeat("*", $i);
// echo "<br>";
// }

echo "1.)<br>";
$color = array('white','green','red','blue','black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: 
    the $color[2] carpet, 
    the $color[1] lawn, 
    the $color[0] house, 
    the leaden sky. 
    The new president and his first lady.
- Richard M. Nixon";

echo "<br>2.)<br>";
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", "France" => "Paris", 
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
"Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", 
"Sweden"=>"Stockholm", "United Kingdom"=>"London", 
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
"Czech Republic"=>"Prague", "Estonia"=>"Tallin", 
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta",
 "Austria" => "Vienna", "Poland"=>"Warsaw") ;
 foreach($ceu as $ceus => $ceus_capital){
    echo "The capital of ". $ceus ." is " . $ceus_capital . "<br>";
 }

echo "<br>3.) <br>";
$x = array(1, 2, 3, 4, 5);
array_splice($x,1,2);
print_r($x);
?>
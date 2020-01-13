<?php

echo " -------------- PHP EXERCISE -------------- ";

echo "<br>1.)  ";
for($i = 1 ; $i <= 15 ; $i++){
    echo $i . "  ----   ";
}

echo "<br> 2.)  Divisible by 2: ";
for($i = 1 ; $i <= 15 ; $i++){
    if ($i % 2 == 0){
        echo $i . "  ----   ";
    }
}
echo "<br>Divisible by 3: ";
for($i = 1 ; $i <= 15 ; $i++){
    if ($i % 3 == 0){
        echo $i . "  ----   ";
    }
}
echo "<br>Divisible by 5: ";
for($i = 1 ; $i <= 15 ; $i++){
    if ($i % 5 == 0){
        echo $i . "  ----   ";
    }
}

echo "<br> 3.)<br>";
for($i = 1; $i <= 7; $i++){
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo("<br>");
}

?>
<?php

//Error Handling
// $denominator = 0;

// if ($denominator != 0){
//     echo 2/ $denominator;
// }else{
//     echo "cannot divide by zero (0)";
// }

// function my_error_handler($error_no, $error_msg)
// {
//     echo "Opps, something is not right";
//     echo "<br>Error number: [$error_no]";
//     echo "<br>Error Description: [$error_msg]";
// }
// set_error_handler("my_error_handler");
// echo (5/0);

function checkNum($number){
    if($number>1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}
// checkNum(0);

try {
    checkNum(2);
    //if the exception is thrown
    echo 'If you see this, the number is 1 or below';
}catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
}


?>
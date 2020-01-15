<?php
    // session_start();
    // session_destroy(); 

    // if( isset($_SESSION['counter'])){
    //     $_SESSION['counter'] +=1;
    // }else{
    //     $_SESSION['counter']=1;
    // }

    // $msg = "You have visited this page" . $_SESSION['counter'];
    // $msg .= "in this session.";

    // echo $msg;

     

    // session_start();
    // $_SESSION['tens'] = 10;

    // if( isset($_SESSION['tens'])){
    //     $_SESSION['tens'] +=10;
    // }else{
    //     $_SESSION['tens'] = 10;
    // }

    // $msg = "You have visited this page" . $_SESSION['tens'];
    // $msg .= "in this session.";


    // echo $_SESSION['tens']."<br>";
    // echo $msg;
    // unset($_SESSION['tens']);

    // session_abort();
// include("Function.php");

// $classtest = new test();
// echo $classtest->test2();

// function addFive($num){
//     $num += 5;
// }

// $orignum = 10;
// addFive($orignum);

// echo "Original Value is $orignum <br />";

//Dynamic function call
// function sayHello($name){
//     echo "Hello " . $name .  "<br />";
// }

// $function_holder = "sayHello";
// $function_holder("Mars");


//COOKIES

// if(isset($_COOKIE['username'])){
//     setcookie('username',"Mars",time()+30*24*60*60);
// }else{
//     setcookie('username', "Gamboa",time()+30*24*60*60);
// }
// echo $_COOKIE['username'];

class PNTraining{

//constructor
    public function _construct(){
        echo 'The class" ' . _CLASS_ . ' " was initialized"';
    }

    public function test(){
        echo 'The class"' . _CLASS_ . '" " is tested "';
    }
}

$obj = new PNTraining;
echo $obj->test();

?>
<?php
    
    // echo "I'm Php.";
    // echo gettype(null);

    //Defining Object
    // class greeting{

    //     public $str = "Hello world!";

    //     //methods
    //     function show_greeting($name){

    //         $test = " I am ". $name;
    //         //ang dot kay maoy mo concatenate
    //         return $test;
    //         // return $this->str;
    //     }
    //     function show_greeting1(){
    //         return $this->str;
    //     }
    // }

    // $message = new greeting;
    // // var_dump($message);
    // var_dump($message->show_greeting('Mars'));



    //Defining constants
    //ang constants kay dili na ma redefine
    // define('test',"test");

    // $test = 'exam';

    // echo 'Thank you for answering the ' . test;
    // echo 'Thank you for answering the ' . $test;




    //String
    // var_dump('Char');
    // echo '<br>char lang';

    // $name='Mars';

    // echo "<br>$name is my nickname";



    //Condition/Decision-making
    //id conditioning
    // $num = 10;

    // if($num <= 9){
    //     echo "I am less than or equal to 9";
    // }else{
    //     echo 'I am not.';
    // }
        
    // $num = 10;

    // echo $num <= 10 ? 'Yes' : 'No';

    //switch case
    // $month = "Feb";

    // switch ($month){
    //     case "Jan":
    //         echo "January";
    //         break;
    //     case "Feb":
    //         echo "February";
    //         break;
    //     case "Mar":
    //         echo "March";
    //         break;
    //     default:
    //         echo "Does not exist.";
    //         break;
    // }


    //array a collection of multiple value
    //3 Types of Array
    //associative = named indexes 
    //multidimensional = array containing one or more arrays 
    //numeric = mogamit sa numeric index pag access sa value or store data
    

    // $variable = [];
    // $variable_name[0] = 'value';
    // $variable_name = array(0 => 'value');
    // $variable_name = [0 => 'value'];

    // var_dump($variable_name)


    
    $movie[0]='Mars';
    $movie[1]='Aliñabon';
    $movie[2]='Carizon';
    $movie[3]='Mabuting';
    $movie[4]='Gamboa';

    //for-loop
    // for($x = 0 ; $x < count($movie); $x++){
    //     echo $movie[$x]."<br>";
    // }

    //foreach loop
    // foreach($movie as $movies) {
    //     echo $movies . "<br>";
    // }

    //while loop
    // $x = 0;
    // while($x < count($movie)){
    //     echo $movie[$x] . "<br>";
    //     $x++;
    // }

    //do while
    // $x = 0;
    // do {
    //     echo $movie[$x] . "<br>";
    //     $x++;
    // } while ($x < count($movie));

    // print_r($movie);
    // echo '<br>';
    // var_dump($movie);

        //numeric
    // $movie2 = array(
    //     0 => "MMG",
    //     1=> "Mars",
    //     2=>'Michael',
    // );
    // //mag add sa array
    // array_push($movie2, 'added');
    // //magdelete
    // // unset($movie2[0]);
    // array_splice($movie2,1,3,"test");
    // print_r($movie2);

    //associative
    // $persons = array ("ako" => "Umaasa","siya" => "Walang Pake");
    // print_r($persons["ako"]);

    // $film = array(
    //     "comedy" => array(
    //         0 => "Pink Panther",
    //         1 => "John English"
    //     ),
    //     "Kdrama" => array(
    //         0 => "Legend of the Blue Sea",
    //         1 => "Descendants of the Sun"
    //     ),
    // );

    // print_r($film["Kdrama"][0]);


    //Multidimensional

?>
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
<?php

// $servername = "localhost";
// $username = "root";
// $password = "";

// //Create connection
// $conn = new mysqli($servername, $username, $password);

// //Check connection
// if($conn->connect_error){
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

// $link = mysqli_connect("localhost","root","","pntraining");

// echo $link;
// if($link == false){
//     die
// }
?>
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
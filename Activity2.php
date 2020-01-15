<?php
    echo "<hr><br>Activity No. 2 <br>1.) <hr>";

    class Student{
        //constructor
        private $name;
        private $age;
        private $course;

        public function __construct($name, $age, $course){
            $this->name = $name;
            $this->age = $age;
            $this->course = $course;
        }

        public function getName(){
            return $this->name;
        }

        public function getAge(){
            return $this->age;
        }

        public function getCourse(){
            return $this->course;
        }
    }
        $student = new Student("Mars",20,"CCT");
        echo "I'm " . $student->getName() . " " . $student->getAge() . ". My course is " . $student->getCourse() . ".";



        echo "<br>2.) ";
        function storage($name,$email){
            $browser = array ('Firefox','Chrome','Internet Explorer','Safari','Opera');
            $_SESSION["name"] = $name;
            $_SESSION["email"] = $email;
            $_SESSION["browser"] = $browser[1];
            echo 'Name:  ' . $_SESSION["name"] . ' <br>Email:  ' . $_SESSION["email"] . '<br>Browser: ' .$_SESSION["browser"] = $browser[1];
        }
        storage("Mars","carizon.mars@gmail.com");


        echo "<br>3.) ";
        $marks1 = array(360,310,310,330,313,375,456,111,256);
        $marks2 = array(350,340,356,330,321);
        $marks3 = array(630,340,570,635,434,255,298);

        $maximum = max(max($marks1), max($marks2), max($marks3));
        $minimum = min(min($marks1),min($marks2),min($marks3));

        echo "Maximum: " . $maximum;
        echo "<br>Minimum: " . $minimum;

?>


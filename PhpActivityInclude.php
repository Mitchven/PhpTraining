<?php
include "PhpActivity2.php";
echo "-------------------PHP Exercise-------------------";
echo "<hr>";
//For number 2
$country = array("Philippines","Singapore","France","Dubai");

//For number 3
$multidimensionalArr = array(
    "food" => "Go","Glow","Grow", "section"=> array(
    "sectionA" => array("Michael","Mars","Melvin","Mitch","Ma.Lodelyn"),
    "sectionB" => array("Silvestre","Allan","Noel","Niko","Ronelo")),
    "ph_presidents" => array("Ferdinand Marcos","Fidel Ramos","Rodrigo Duterte")
    );

//For number 4
$grade = array("Java" => 2, "Webdev" => 1.5, "SDElective" => 2);

//For number 5 and 6
$menu = array("Lechon","Nilaga","Sinigang","Utan Bisaya");

echo "1.) ";
echo sumOfNum(10,20);
echo "<hr>2.) ";
print_r(dataInArray($country));
echo "<hr>3.) ";
echo multidimensionalArray($multidimensionalArr);
echo "<hr>4.) ";
echo associativeArray($grade);
echo "<hr>5. and 6.) ";
print_r(addExistingArray($menu,"Meat Ball"));
?>
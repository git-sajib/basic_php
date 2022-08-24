<?php
// if....else

// $age = 20;
// if($age >= 18)
// echo "Perfect";
// else
// echo "Your age is not enough to eligible";

// $color = "yellow";
// if($color=="blue")
// print "color is: blue";
// else
// print "color is: not blue";

// if...elseif...else

// $color = "red";
// if($color=="blue")
// print "Color is: blue";
// elseif($color=="yellow")
// print "Color is: yellow";
// else
// print "Color is undefined!";

// while loop

// $t_counter = 2;
// while ($t_counter <= 100) {
//     print "This ticket no is: $t_counter <br> ";
//     $t_counter++;
// }

// do while loop
// do {
//     print "Available ticket no is: $t_counter <br>";
//     $t_counter++ ;
// } while ($t_counter <= 50);

// for($t_counter=10; $t_counter<=30; $t_counter++){
//     print "Selling ticket no is: $t_counter <br>";
// }

// foreach---> array {key : value}
$department = ['IT','Mechanical','Electrical','Civil'];
foreach($department as $value){
    print"$value<br>";
}

print"<br>";

$persons = array(
    'Sajib' => 25,
    'Galib' => 24,
    'Preetom' => 26,
    'Nazib' => 23,
);
foreach($persons as $key => $value){
    print "Name: $key, Age: $value<br>";
}



?>
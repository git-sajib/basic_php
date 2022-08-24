<?php

/*
function

1. function with no return
2. function with arguments
3. function with default argumet value
4. function with returning values
5. function with referenced argument

*/

//  1. function with no return (Ex.)
function message(){
    print "This is a function with no return type <br>";
}
message(); //call the function



//  2. function with arguments (Ex.)
function fullName($firstName, $lastName){
    print $firstName." ".$lastName."<br>";
}
fullName("Samiul Islam", " Sajib");



//  3. function with default argumet value (Ex.)
function fullNameIs($fullName= "Farhan Sadik Galib"){
    print "Mr. $fullName <br>";
};
fullNameIs("Overrride Name");



//  4. function with returning values (Ex.)
function fullNameAre($firstName,$lastName){
    return $firstName." ".$lastName."<br>";
}
print fullNameAre("Mr", "Anas");

//  return type declaration
function addNumbers(int $x=0, int $y=6) :int{
    return $x*$y;
}
print addNumbers(5);

print"<br>";
 


//  5. function with referenced argument (Ex.)
function countTest (&$countVal){
$countVal +=50;
}
$intNum = 40;
countTest($intNum);
echo $intNum;

print"<br>";


//  6. Custom function (Ex.)
function calculator($do="sum", int $var1, int $var2){
    if($do == "sum")
    return $var1+$var2;

    elseif($do == "sub")
    return $var1-$var2;

    elseif($do == "mul")
    return $var1*$var2;

    elseif($do == "div")
    return $var1/$var2;
}
print calculator("sum", 6, 5);

?> 
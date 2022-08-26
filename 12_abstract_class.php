<?php
/* abstract class*/

// parent class
abstract class Car {
    public $name;

    /**
     * @param $name
     */
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro() : string;
}

// child class
class Audi extends Car {
    public $made_in;

    public function intro() : string {
        return "Choose $this->made_in quantity! I'm an $this->name!";
}

    public function myOwnMethod(){
        return "This is my own method!";
}
}
$audi = new Audi('Audi');
$audi->made_in = 'Saudi';
print_r($audi);
echo '<br>';
echo $audi->intro();
echo '<br>';
echo $audi->myOwnMethod();


?>
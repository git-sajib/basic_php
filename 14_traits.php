<?php
// traits

trait madeInChina{
    public function showMessage(){
        echo "This car comes from China factory";
}
}

trait madeInUSA{
    public function showInfo(){
        echo "This car comes from USA factory";
    }
}

trait madeInUAE{
    public function declareInfo(){
        echo "This car comes from UAE factory";
    }
}

class Car{
    use madeInChina, madeInUSA, madeInUAE;
    public $name;

    public function __construct($brand){
        $this->name = $brand;
    }
}

$myCar = new Car('Toyota');
print_r($myCar); echo '<br><br>';
$myCar->showMessage();
echo '<br>';
$myCar->showInfo();
echo '<br>';
$myCar->declareInfo();
?>
<?php
/*static methods*/
class Vehicle{
    protected static function getVehicleType(){
        return "Car";
    }
}

class Cars extends Vehicle{
    public $vehicle_type;

    public function __construct(){
        $this->vehicle_type = parent::getVehicleType();
    }
}

$myCar = new Cars;
print_r($myCar);
echo '<br>';
echo $myCar->vehicle_type;
echo '<br>';

/*static properties*/
class Pi{
    public static $value = 3.1416;
    public function staticValue(){
        return self::$value;
    }
}
$pi = new Pi;
echo $pi->staticValue();

?>
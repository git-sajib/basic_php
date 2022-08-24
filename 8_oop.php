<?php
class Cars{
    /* properties */
    public $name;
    public $color;
    private $secret_engine; 

    /* constructor */
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    /* destructor */
    function __destruct(){
        echo "The car is {$this->name} & the color is {$this->color}.<br>";
    }

    /* method -- getter & setter */
    function set_name($brand_name){
        $this->name = $brand_name;
    }

    function get_name(){
        return $this->name;
    }

    function set_color($car_color){
        $this->color = $car_color;
    }

    function get_color(){
        return $this->color;
    }
}
    /* 1st object */

    $car_object = new Cars("Honda", "White");
    print_r($car_object);
    print_r($car_object instanceof Cars);

    // $car_object->set_name('Toyota');
    $car_object->set_color('Red');
     
    // print_r ($car_object);

    $myCarBrand = $car_object->get_name();
    $myCarColor = $car_object->get_color();

    echo '<br>';

    echo $myCarBrand.', '.$myCarColor;

    echo '<br><br>';

    /* 2nd object */

    $second_car = new Cars('BMW','Blue');
    print_r($second_car);
    echo $second_car instanceof Cars;
    // $second_car -> set_name('Ferrari');
    // $second_car -> set_color('Black');
    // echo '<br>';
    // print_r($second_car);
    $m2_car_brand = $second_car -> get_name();
    $m2_car_color = $second_car -> get_color();
    echo '<br>';
    echo $m2_car_brand.', '.$m2_car_color;
    echo '<br><br>';


?>
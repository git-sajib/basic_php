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
        echo "The car is {$this->name} & the color is {$this->color}.<br> & the engine is {$this->secret_engine}";
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

    /* private access modifier */
    private function set_engine($engine){
        $this->secret_engine = $engine;
    }

    private function get_engine(){
        return $this->secret_engine;
    }

}
    /* 1st object */

    $car_object = new Cars("Honda", "White");
    print_r($car_object);
    print_r($car_object instanceof Cars);
    // $car_object->name = 'Mercedez'; //Ex. access through class "property".
    // $car_object->set_name('Mercedez'); //Ex. access through setter "method".
    // $car_object->color='Yellow'; //Ex. access through class "property".
    // $car_object->set_color('Violet'); //Ex. access through setter "method".
    // $car_object->secret_engine ='BN0940399'; //Ex. access through class "property".
     $car_object->set_engine('BN0940399'); //Ex. access through setter "method".
    echo '<br><br>';
    print_r ($car_object);
    print_r($car_object instanceof Cars);
    $myCarBrand = $car_object->get_name();
    $myCarColor = $car_object->get_color();
    // $myCarEngine = $car_object->get_engine();
    echo '<br><br>';
    echo $myCarBrand.', '.$myCarColor.', '.$myCarEngine;
    echo '<br><br>';
    
    ?>
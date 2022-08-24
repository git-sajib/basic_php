<?php
    /*inheritance*/

class Cars{
    /* properties */
    public $name;
    public $color;

    /* constructor */
    /**
     * @param $name
     * @param $color
     */
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    /* method -- getter & setter */
    public function set_name($brand_name){
        $this->name = $brand_name;
    }

    public function get_name(){
        return $this->name;
    }

    public function set_color($car_color){
        $this->color = $car_color;
    }

    public function get_color(){
        return $this->color;
    }
}

class Toyota extends Cars{    
    public $secret_engine;

    public function set_engine($engine){
        $this->secret_engine = $engine;
    }

    public function get_specs($name, $color){
        echo "This is $name car which is $color and its Engine number isff #$this->secret_engine";
}
}

$myCar = new Toyota('Toyota', 'Red');  
print_r($myCar); echo '<br><br>';
$myCar->set_engine('BN025252157425');
$myCar->set_color('Black');
print_r($myCar); echo '<br><br>';
$myCar->get_specs($myCar->get_name(), $myCar->get_color());

?>
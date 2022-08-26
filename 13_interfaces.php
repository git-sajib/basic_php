<?php
    /* Interface definition */
interface Cars{
    public function intro();
}
    /*Class definition */
class BMW implements Cars{
    public $secret_engine;

    public function __construct($engine){
        $this->secret_engine = $engine;
    }

    public function intro(){
        echo "This is BMW car with engine: $this->secret_engine";
    }
}
$bmw = new BMW('BM25486325');
print_r($bmw);
echo '<br>';
$bmw->intro();
?>
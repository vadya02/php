<?php 
namespace Rockets;

class BaseRocket{

    public float $m;
    public float $w;
    public float $p;
    public function ignit(){
        echo "Pакета полетела";

    }
    public function __construct(float $m=10000, float $p = 2000.2){
        $this->m = $m;
        $this->p = $p;
        echo "+++ ctor" . __CLASS__;
    }

    public function __toString()    {
        return "Rocket: " . $this->p . ", m=" . $this->m;
    }

    

}
<?php

namespace Rockets;

class HeavyRocket extends BaseRocket{

    public int $subEngines;
    public function __construct(float $m=10000, float $p = 2000.2, int $subEngines =4){
        parent::__construct($m,$p);
        echo "+++ ctor" . __CLASS__;
    }

}
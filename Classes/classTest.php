<?php 
   
    require("Core/a.class.php");
    //require("Core/a2.class.php");
    use \Core\data\A;  
    use \Core\data as cd;  
    $a = new A("hello");
    
    echo $a->getData() . "\n";
     echo "Version " . A::VERSION . "\n";
     echo "Object a: " . (new A(0)) . "\n";
     echo "Counter: " . $a->getCounter() . "\n";

    //hook test
    echo $a -> v;
    $a->c = 10; 
    $a->call(1,2,3);

    $b = $a;
    $b->setData(1);
    echo $a. "\n";
    $a->__clone();







?>
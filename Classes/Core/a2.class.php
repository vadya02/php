<?php 
namespace Core\data;
    class A {
        private $data;
        const VERSION = 1.01;
        private static $counter = 0;

        public function __construct($data){
            $this-> data = $data;
            static::$counter++;
            echo "++++ ctor ", __CLASS__ . "\n";

        }
        public function getData(){
            return $this->data;
        }
        public static function getCounter(){
            return static::$counter;
        }

        public function setData($data){
            $this -> data = $data;
        }

        public function __destruct(){
            static::$counter--;
            echo "--- dtor ", __CLASS__ . "\n";
            
        }

        public function __toString(){
            return "Calss: " . __CLASS__ .
                ", data = " . $this->data .
                ", version: " . static::VERSION; 

        }
    }

?>
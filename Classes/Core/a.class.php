<?php 
 namespace Core\data;
    class A {
        private $data;
        const VERSION = 1.01;
        private static $counter = 0;
        private $id = 35135153151;

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

        

        public function __toString(){
            return "Calss: " . __CLASS__ .
                ", data = " . $this->data .
                ", version: " . static::VERSION; 

        }

        //hooks
        public function __get($name){
            echo "get undefined " . $name;

        }
        public function __set($name, $value){
            echo "set " . $name . "to value" . $value; 
            
        }
        public function __call($name, $arguments){
            echo "function $name " . $arguments ;
        }
        public function __clone(){
            echo "clone call" ."\n" ;
        }
        //serialize
        public function __sleep(){
            echo "__sleep called" . "\n";
            return ("data" );
        }
        public function __wakeup(){
            echo "wakeup called" . "\n";
            $this -> id =0;
        }

        public function __destruct(){
            static::$counter--;
            echo "--- dtor ", __CLASS__ . "\n";
            
        }
    }


?>
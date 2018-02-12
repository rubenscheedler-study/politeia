<?php
    class Employee {
        public $id;
        public $function_id;
        public $function;
        
        public static function Create($id, $function_id, $function) {
            $e = new Employee();
            $e->id = $id;
            $e->function_id = $function_id;
            $e->function = $function;
            return $e;
        }
    }
?>
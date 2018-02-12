<?php
    require_once("connector.php");
    require_once("employee.php");
    
    class User {
        public $id;
        public $username;
        public $party;
        public $employees;
        
        public static function Create($connection, $id) {
            $user = new User();
            //get direct properties
            $sql = "SELECT * FROM `users` WHERE id = $id";
            $result = $connection->query($sql);
            
            foreach($result as $row) {
                $user->id = $row["id"];
                $user->username = $row["username"];
                $user->party = $row["party"];
            }
            //get employees //TODO only if needed
            $sql = "SELECT * FROM `user_employee_functions` LEFT JOIN `employee_functions` ON user_employee_functions.function_id = employee_functions.id WHERE user_employee_functions.user_id = $id";
            $resultEmployees = $connection->query($sql);
            
            $user->employees = array();
            if (is_array($resultEmployees) || is_object($resultEmployees))
            {
                foreach ($resultEmployees as $emprow) {
                    $newEmployee = new Employee();
                    $newEmployee->id = (int) $emprow["employee_id"];
                    $newEmployee->function_id = (int) $emprow["function_id"];
                    $newEmployee->function = $emprow["name"];
                    $user->employees[$newEmployee->id] = $newEmployee;
                }
            }
            return $user;
        }
        
        public static function SaveEmployees($connection, $id, $employees) {
            
        }
    }
?>
<?php
    class StateSubject {
        public $id;
        public $subject;
        public $score;
        
        public static function GetAllForUser($connection, $userId) {
            $stateSubjects = array();

            $sql = "SELECT * FROM `user_state_subjects` LEFT JOIN `state_subjects` ON user_state_subjects.subject_id = state_subjects.id WHERE user_id = $userId";
            $result = $connection->query($sql);
            
            foreach($result as $row) {
                $s = new StateSubject();
                $s->id = $row["id"];
                $s->subject = $row["subject"];
                $s->score = $row["score"];
                $stateSubjects[$s->id] = $s;
            }
            
            return $stateSubjects;
        }
    }
?>
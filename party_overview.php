<?php
    class Party {
        public $id;
        public $name;
        public $values;
    }
    
    class PartyValue {
        public $party_id;
        public $value_id;
        public $value;
        public $score;
    }
    
    $host_db = 'localhost';
    $name_db = 'politeia';
    $user_db = 'root';
    $pass_db = '';

    $parties = array();
    
    try {
      // Connecting using the PDO object.
      $connection = new PDO("mysql:host=$host_db; dbname=$name_db", $user_db, $pass_db);

      // 1) get parties
      $sql = "SELECT * FROM `parties` ORDER BY name";
      $result = $connection->query($sql);
      
      
      // Iterating over the data and printing it.
      foreach($result as $row) {
          $currentParty = new Party();
          $currentParty->id = $row['id'];
          $currentParty->name = $row['name'];
          $currentParty->values = array();

          $parties[$currentParty->id] = $currentParty;
          //echo "P:" . $parties[$currentParty->id] . "<BR/>";
      }
      
      // 2) get party values
      $sql1 = "SELECT * FROM `party_values` LEFT JOIN `values` ON party_values.value_id = values.id ORDER BY party_id";
      $result1 = $connection->query($sql1);

      // Iterating over the data and printing it.
      foreach($result1 as $row) {
          $currentPartyValue = new PartyValue();
          $currentPartyValue->party_id = $row['party_id'];
          $currentPartyValue->value_id = $row['value_id'];
          $currentPartyValue->value = $row['name'];
          $currentPartyValue->score = $row['score'];
          
          array_push($parties[$currentPartyValue->party_id]->values, $currentPartyValue);
      }
      // Closing the connection.
      $connection = null;
    }
    // Catching it if something went wrong.
    catch(PDOException $e) {
      echo $e->getMessage();
    }
    
    //render parties
    foreach ($parties as $party) {
            $party_html = "";
            $party_html .= "<div class='party'><span class='party_name'>".$party->name."</span>";
            foreach ($party->values as $partyValue) {
                $party_html .= "<div class='party_value'><span class='party_value_name'>" . $partyValue->value . "</span><div class='party_value_bar_wrapper'><div class='party_value_bar' data-score=".$partyValue->score."></div></div></div>"; 
            }
            $party_html .= "</div>";
            echo $party_html;
    }
?>
<?php

require 'connection.php';

class Ranking extends Database{

    public function rankUser(){
        $sql = "SELECT user.user_name, COUNT(display_img) as totalpics, SUM(display.display_vote) as totalvote FROM display JOIN user on display.display_user_id = user.user_id GROUP BY display_user_id ORDER BY SUM(display.display_vote) DESC LIMIT 10";
        $result = $this->conn->query($sql);
        $rows = array();
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }

}

?>
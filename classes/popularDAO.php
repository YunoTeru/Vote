<?php

require 'connection.php';

class Popular extends Database{

    public function addDisplay($display_name, $display_user, $display_img, $tmp_file_name, $directory){
        $extension = pathinfo($display_img, PATHINFO_EXTENSION);
        $array_extensions = array('png', 'jpg', 'jpeg', 'gif', 'JPG');

        if(in_array($extension, $array_extensions)){
            // this will check if the extension is in the list of accepted file extensions
            $new_directory = $directory.$display_img;
            if(move_uploaded_file($tmp_file_name, $new_directory)){
                $sql = "INSERT INTO display (display_name, display_user, display_img) VALUES ('$display_name', '$display_user', '$new_directory')";
                $result = $this->conn->query($sql);
                return "Successfully Uploaded";
            }else{
                return $result = "Error in uploading the file";
            }
        }else{
            return $result = "Error! Unsupported file extension!";
        }
    }

    public function getAllDisplay(){
        $sql = "SELECT * FROM display JOIN user ON display.display_user_id = user.user_id  WHERE display_vote > 19 ORDER BY display_vote DESC";
        $result = $this->conn->query($sql);
        $rows = array();
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }

    public function retrieveALLUser(){
        $sql = "SELECT * FROM user WHERE user_status = 'A'";
        $result = $this->conn->query($sql);
        $rows = array();     
        while ($row=$result->fetch_assoc()){
        $rows[] = $row;
        }
        return $rows;
    }

    public function updateVote($display_id){
        $sql = "UPDATE display SET display_vote = display_vote + 1 WHERE display_id = $display_id";
        $result = $this->conn->query($sql);
    }

}

?>
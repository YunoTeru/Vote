<?php

require 'connection.php';

class Display extends Database{

    public function addDisplay($display_name, $display_user, $display_img, $tmp_file_name, $directory){
        //this will get the file extension of the uploaded file
        $extension = pathinfo($display_img, PATHINFO_EXTENSION);
        $array_extensions = array('png', 'jpg', 'jpeg', 'gif', 'JPG');

        if(in_array($extension, $array_extensions)){
            $new_directory = $directory.$display_img;
            if(move_uploaded_file($tmp_file_name, $new_directory)){
                $sql = "INSERT INTO display (display_name, display_user_id, display_img) VALUES ('$display_name', '$display_user', '$new_directory')";
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
        $sql = "SELECT * FROM display";
        $result = $this->conn->query($sql);
        $rows = array();
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
}


?>
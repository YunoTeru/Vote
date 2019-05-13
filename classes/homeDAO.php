<?php

require 'connection.php';

class Display extends Database{

    public function addDisplay($display_name, $display_user, $display_img, $tmp_file_name, $directory){
        //this will get the file extension of the uploaded file
        $extension = pathinfo($display_img, PATHINFO_EXTENSION);
        //apple.png
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
        $sql = "SELECT * FROM display";
        $result = $this->conn->query($sql);
        $rows = array();
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
}

class UserAccessObject extends Database{

    public function registerUser($user_name, $user_email, $user_password){
        $sql = "INSERT INTO user(user_name, user_email, user_password)  VALUES ('$user_name', '$user_email', '$user_password')";
        $result = $this->conn->query($sql);   
        return $result;
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
    
    public function retrieveSingleUser($id){
        $sql = "SELECT * FROM user WHERE user_id = '$id'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function updateUser($user_name, $user_email, $user_password){
        $sql = "UPDATE user SET user_name = '$user_name', user_email = '$user_email',
                user_password = '$user_password') 
                WHERE user_id = '$user_id'";
        $result = $this->conn->query($sql);
        return $result;

    }
    
    public function deleteUser($user_id){
        $sql = "UPDATE user SET user_status = 'D' WHERE user_id = '$user_id'";
        $result = $this->conn->query($sql); 
        return $result;
    }
    
    public function login($email, $password){
        $sql = "SELECT * FROM user
                WHERE user_email = '$email' AND user_password = '$password'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

   

}

?>
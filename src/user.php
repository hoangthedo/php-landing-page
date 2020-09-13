<?php

class User
{
    private $dbConn;

    private $ds;

    function __construct()
    {  
        global $db;
        $this->ds = $db;
    }

    function validateUser()
    {
        $valid = true;
        $errorMessage = array();
        foreach ($_POST as $key => $value) {
            if (empty($_POST[$key])) {
                $valid = false;
            }
        }
        
        if($valid == true) {
            // Password Matching Validation
            if ($_POST['password'] != $_POST['confirm_password']) {
                $errorMessage[] = 'Mật khẩu không khớp.';
                $valid = false;
            }
            
            // Email Validation
            if (! isset($error_message)) {
                if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $errorMessage[] = "Email không hợp lệ";
                    $valid = false;
                }
            }
            
            // Validation to check if Terms and Conditions are accepted
            if (! isset($error_message)) {
                if (! isset($_POST["terms"])) {
                    $errorMessage[] = "Bạn cần đồng ý với điều khoản.";
                    $valid = false;
                }
            }
        }
        else {
            $errorMessage[] = "Tất cả các trường đều bắt buộc.";
        }
        
        if ($valid == false) {
            return $errorMessage;
        }
        return;
    }

    function isUserExists($email)
    {
        $query = "select * FROM users WHERE email = ?";
        $paramType = "s";
        $paramArray = array($email);
        $UserCount = $this->ds->numRows($query, $paramType, $paramArray);
        
        return $UserCount;
    }

    function getUser($email){
        $query = "select * FROM users WHERE email = ?";
        $paramType = "s";
        $paramArray = array($email);
        $user = $this->ds->select($query, $paramType, $paramArray);
        return $user[0];
    }

    function checkLogin($email, $password){
        $query = "select * FROM users WHERE email = ? and password = ?";
        $passwordHash = md5($password);
        $paramType = "ss";
        $paramArray = array($email, $passwordHash);
        $UserCount = $this->ds->numRows($query, $paramType, $paramArray);
        return $UserCount;
    }

    function insertUserRecord($full_name, $password, $email, $address, $birthday, $gender, $phone)
    {
        $passwordHash = md5($password);
        $query = "INSERT INTO users email, gender, address, phone, birthday) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $paramType = "sssssis";
        $paramArray = array(
            $full_name,
            $passwordHash,
            $email,
            $gender,
            $address,
            $phone,
            $birthday
        );
        $insertId = $this->ds->insert($query, $paramType, $paramArray);
        return $insertId;
    }

    function getAllUser(){
        $query = "select * FROM users";
        $users = $this->ds->select($query);
        return $users;
    }

    function destroy($id){
        $query = "DELETE FROM users WHERE id=?";
        $this->ds->execute($query, "s", [$id]);
    }

    function getUserId($id){
        $query = "select * FROM users WHERE id = ?;";
        $paramType = "i";
        $paramArray = array($id);
        $user = $this->ds->select($query, $paramType, $paramArray);
        return $user;
    }

    function updateUser($id, $full_name, $email, $address, $birthday, $gender, $phone){
        $query = "UPDATE users
        SET full_name = ?, email = ?, address = ?, birthday = ?, gender = ?, phone = ?
        WHERE id=".$id.";";
        $paramType = "ssssis";
        $paramArray = array(
            $full_name,
            $email,
            $address,
            $birthday,
            $gender,
            $phone
        );
        $this->ds->execute($query, $paramType, $paramArray);
    }
}
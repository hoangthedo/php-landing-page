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
                $errorMessage[] = 'Passwords should be same.';
                $valid = false;
            }
            
            // Email Validation
            if (! isset($error_message)) {
                if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $errorMessage[] = "Invalid email address.";
                    $valid = false;
                }
            }
            
            // Validation to check if Terms and Conditions are accepted
            if (! isset($error_message)) {
                if (! isset($_POST["terms"])) {
                    $errorMessage[] = "Accept terms and conditions.";
                    $valid = false;
                }
            }
        }
        else {
            $errorMessage[] = "All fields are required.";
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
        $query = "INSERT INTO users (full_name, password, email, gender, address, phone, birthday) VALUES (?, ?, ?, ?, ?, ?, ?)";
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
}
<?php
require_once 'db/db.php';
function create_db(){
    $db = new Db();
    $db->execute("CREATE TABLE IF NOT EXISTS users (
        id int(8) NOT NULL AUTO_INCREMENT,
        user_name varchar(255) NOT NULL,
        first_name varchar(255) NOT NULL,
        last_name varchar(255) NOT NULL,
        password varchar(25) NOT NULL,
        email varchar(55) NOT NULL,
        gender varchar(20) NOT NULL,
        PRIMARY KEY (id)
      );");
    
}
create_db();
?>
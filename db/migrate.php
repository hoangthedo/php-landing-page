<?php
require_once 'db/db.php';
function create_db(){
    $db = new Db();

    $db->execute("CREATE TABLE IF NOT EXISTS users (
        id int(8) NOT NULL AUTO_INCREMENT,
        full_name TEXT NOT NULL,
        password TEXT NOT NULL,
        email varchar(55) NOT NULL,
        gender varchar(20) NOT NULL,
        address varchar(255) NOT NULL,
        phone int(20) NOT NULL,
        birthday varchar(255) NOT NULL,
        PRIMARY KEY (id)
      );");
    $db->execute("ALTER TABLE users CONVERT TO CHARACTER SET utf8 COLLATE
    utf8_unicode_ci;");
}
create_db();
?>
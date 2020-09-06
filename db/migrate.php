<?php
require_once 'db/db.php';
function create_db(){
    $db = new Db();
    $admin = array(
      'admin',
      md5('admin'),
      'admin',
      'Male',
      'address',
      '0123456789',
      '',
      'admin'
  );
    $db->execute("CREATE TABLE IF NOT EXISTS users (
        id int(8) NOT NULL AUTO_INCREMENT,
        full_name TEXT NOT NULL,
        password TEXT NOT NULL,
        email varchar(55) NOT NULL,
        gender varchar(20) NOT NULL,
        address varchar(255) NOT NULL,
        phone int(20) NOT NULL,
        birthday varchar(255) NOT NULL,
        role varchar(55),
        PRIMARY KEY (id)
      );");
    $db->execute("CREATE TABLE IF NOT EXISTS products (
      id int(8) NOT NULL AUTO_INCREMENT,
      name TEXT NOT NULL,
      url_img TEXT NOT NULL,
      price varchar(55) NOT NULL,
      PRIMARY KEY (id)
    );");

    $db->insert("INSERT INTO users (full_name, password, email, gender, address, phone, birthday, role) 
      VALUES (?, ?, ?, ?, ?, ?, ?, ?)", "sssssiss", $admin);
    
    $db->execute("ALTER TABLE users CONVERT TO CHARACTER SET utf8 COLLATE
    utf8_unicode_ci;");
}
create_db();
?>
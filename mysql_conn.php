<?php 

define("DB_HOST","127.0.0.1");
define("DB_USER","root");
define("DB_PASS","");

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS);

if(!$conn){
    die("Connection Failed!");
}

$DB_NAME = 'cpe-advising-system';

$selected_db = mysqli_select_db($conn, $DB_NAME);

if(!$selected_db){
    die('Database Not Found!');
}

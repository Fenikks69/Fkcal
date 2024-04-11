<?php
require "Validator.php";
require "Database.php";

$config = require ("config.php");
$db = new Database($config);

$query = "SELECT * FROM fruits";
$params = [];


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

if(!Validator::string($_POST["fruit_name"], min: 2, max: 50)) {
        $errors["fruit_name"] = "name cannot be less than 2 letters or longer than 50 letters";
}
    
if(!Validator::number($_POST["calories"], min: 1, max: INF)) {
        $errors["calories"] = "calories cannot be negative or 0 or letters";
}

if(empty($errors)) {
    
  $query = "INSERT INTO fruits (fruit_name, calories)
    VALUES (:fruit_name, :calories);";
  $params = [
      ":fruit_name" => $_POST["fruit_name"], 
      ":calories" => $_POST["calories"]
];

$db -> execute($query, $params);
  header("Location: /");
      die();
    }
}




$page_title = "create a fruit";
require "views/fruits/create.view.php";
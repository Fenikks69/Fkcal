<?php
// Dabūt datus no datu bāzes un izvadīt tos HTML
$config = require "config.php";
require "Database.php";


$db = new Database($config);

$query_string = "SELECT * FROM fruits";
$params = [];
if (isset($_GET["calories"]) && $_GET["calories"] != "") {
  // .= paņem iepriekšējo vērtību un pieliek WHERE klāt 
  $query_string .= " WHERE calories=:calories";
  $params[":calories"] = $_GET["calories"];
} 

$posts = $db->execute($query_string, $params)->fetchAll();


$page_title = "";

require "views/fruits/index.view.php";

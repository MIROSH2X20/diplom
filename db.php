<?php 
$dbhost = "localhost";
$dbname = "diplom_bd";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);



function get_cards_all(){

  global $db;
  $cards = $db->query("SELECT * FROM person");
  return $cards;

}

function get_menu_items_all(){

  global $db;
  $menu_items = $db->query("SELECT * FROM menu");
  return $menu_items;

}





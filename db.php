<?php 
$dbhost = "localhost";
$dbname = "diplom_bd";
$username = "root";
$password = "root";

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


function get_article_by_id($id){

  global $db;
  $articles = $db->query("SELECT * FROM articles WHERE id = $id");
  foreach ($articles as $article) {
    return $article;
  }

}




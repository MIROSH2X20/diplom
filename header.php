<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  
</head>

<body >
  <header>
    
        
          <div class="header__menu">
          <div class="header__logo"> <a href="index.php"><img src="img/world.png" alt=""></a></div>
            <ul>
              
              <?php 
              $menu_items = get_menu_items_all();
              foreach ($menu_items as $menu_item): ?>


              <li><a href="<?php echo $menu_item["href"] ?>"><?php echo $menu_item["menu_item"] ?></a></li>
              
              <?php endforeach; ?>
            </ul>
          </div>
        
      
    
  </header>
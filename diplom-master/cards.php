<section class="peoples">
<div class="peoples__title">Доска почета</div>
<div class="people__cards">


<?php 
  $cards = get_cards_all();
  foreach ($cards as $card): ?>

    <div class="people__card">
      <img src="img/<?php echo $card["img"] ?>" alt="">
      <div class="people__name" style="font-size:15px;"><?php echo $card["name"] ?></div>
      <div class="btn">
      <a href="<?php echo $card["href"] ?>">Биография</a>
      </div>
    </div>
    
  <?php endforeach; ?>



  
    
   
  </div>
</section>
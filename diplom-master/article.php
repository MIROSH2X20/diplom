
<?php 
$article = get_article_by_id($_GET['id']);

?>

<section class="article">
  <div class="wrapper">
<div class="article__title matovoye-steklo"><?php echo $article["title"]?></div>
<div class="statya__img">
  <img src="img/<?php echo $article["img"]?>" alt="">
</div>
<div class="article__text matovoye-steklo">
  <?php echo $article["text"]?>
</div>


</div>
</div>
</section>
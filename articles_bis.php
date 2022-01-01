<?php
require_once './includes/data.php';
require_once './includes/constantes.php';




?>


<?php include("eder.php"); ?>

<body>
    <?php
    require_once './menus/navigation.php';
    

    ?>
    <div class= "container py-5">
    
    <h1>Article</h1>
    <div class= "card-group">
    <?php
   
foreach($articles as $article){ 
?>
   <div class="card" style="width: 18rem;">
 <a href="/blog01/articles_detail_bis.php?article=<?=$article['id']?>"><img src="<?= $urlPaysages.$article['image']?>" class="card-img-top" alt="Photo de paysage"></a>
  <div class="card-body">
    <h5 class="card-title"><a href="/blog01/articles_detail_bis.php?article=<?=$article['id']?>"></a><?=$article["titre"]?></h5>
    <p class="card-text"><?=$article["resume"]?></p>
   
  </div>
</div>


    <?php
 
}
    
    ?>
</div>
    <!-- Boostrap Js -->
    <script>src="/Blog01/js/bootstrap.bundle.min.js"</script>
</body>
</html>
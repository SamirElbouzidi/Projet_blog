<?php
    require_once './includes/data.php';
    require_once './includes/constantes.php';


      



?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap css-->
    <link rel="stylesheet" href="/Blog01/css/bootstrap.min.css">
    <title>Mon Blog</title>
</head>
<body>
    <?php
        require_once './menus/navigation.php';
            

    ?>
<div class= "container py-5">
                
<h1>Auteurs</h1>
<div class="card-group">
<?php
foreach($auteurs as $auteurs01){

?>

<div class="card border m-3"  style= "max-width: 16rem; min-width: 10rem">
<a href="/Blog01/auteur_detail.php?reference=<?=$auteurs01["id"]?>"><img src="<?=$urlAvatars. $auteurs01['avatar']?>" class="card-img-top" alt="photo avatar"></a>
<div class="card-body">
<h5 class="card-title"><a href="/Blog01/auteur_detail.php?reference=<?=$auteurs01["id"]?>"><?= $auteurs01["nom"]?> <?= $auteurs01["prenom"]?></a></h5>
 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
</div>
                    
                
</div>
<?php

    }
    ?>
       
                    
           
    
    <!-- Boostrap Js -->
    <script src="/Blog01/js/bootstrap.bundle.min.js"></script>
</body>
</html>
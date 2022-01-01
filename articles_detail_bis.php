<?php
require_once './includes/data.php';
require_once './includes/constantes.php';


$articleId = $_GET['article'];

$articleChoisi = $articles[$articleId];

$auteurId = $articleChoisi['auteurId'];
$auteur = $auteurs[$auteurId];


$paragraphes = $articleChoisi['paragraphe'];


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Boostrap css-->
     <link rel="stylesheet" href="/Blog01/css/bootstrap.min.css">
    <title>Home</title>
</head>


<body>
    <?php
    require_once './menus/navigation.php';
   

    ?>
    <div class= "container py-5">
    
    <h1><?=$articleChoisi['titre']?></h1>
    <div>
        <p>Par <a href="/Blog01/auteur_detail.php?reference=<?=$auteur["id"]?>">
                 <?= $auteur['nom']?> <?= $auteur['prenom']?>
                </a>
        </p>
        <p>
            publié le <?= date_format($articleChoisi['createdAt'], 'd/m/Y') ?>
        </p>
    </div class="my-5">
     <div>
    <img src="<?=$urlPaysages. $articleChoisi['image']?>" alt="photo de l'article">
    </div>
    <?php
        foreach($paragraphes as $p){

     ?>
        <div>
            <h2><?=$p["sous titre"]?></h2>
            <p><?=$p["contenu"]?></p>
        </div>
    <?php
    
        }
    ?>

</div>
    <!-- Boostrap Js -->
    <script>src="/Blog01/js/bootstrap.bundle.min.js"</script>
</body>
</html>
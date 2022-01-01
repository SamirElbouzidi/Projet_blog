<?php
require_once './includes/data.php';
require_once './includes/constantes.php';

$auteurId = $_GET['reference'];
$auteurChoisi = $auteurs[$auteurId];




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
    
    <h1>Fiche auteur</h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?=$urlAvatars. $auteurChoisi['avatar']?>" class="img-fluid rounded-start" alt="avatar d'un auteur">
                    </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $auteurChoisi["nom"]." ".$auteurChoisi["prenom"]?></h5>
                            <p class="card-text"> date de naissance : <?= date_format($auteurChoisi["Naissance"], 'd/m/Y') ?> </p>
                            <p class="card-text"><?= $auteurChoisi["infos"]?></p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>

    <!-- Boostrap Js -->
    <script>src="/Blog01/js/bootstrap.bundle.min.js"</script>
</body>
</html>
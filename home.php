<!-- index.php -->
<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <h1>Site de recettes</h1>
        <!-- inclusion des variables et fonctions -->
      
        <!-- inclusion de l'entête du site -->
        
        <?php include_once('header.php'); ?>
        <?php include_once('login.php'); ?>
        
        
        
        
        
        <?php foreach ($recipes as $recipe) : ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <!-- <i><?php echo display_author($recipe['author'], $users); ?></i> -->
            </article>
        <?php endforeach ?>
    </div>

    <!-- inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>
</body>

</html>
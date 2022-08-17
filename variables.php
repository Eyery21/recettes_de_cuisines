<?php
try
{
	// On se connecte à MySQL
	$mysqlClient = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM recipes';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

if(isset($_GET['limit']) && is_numeric($_GET['limit'])) {
    $limit = (int) $_GET['limit'];
} else {
    $limit = 100;
}

// On affiche chaque recette une à une
foreach ($recipes as $recipe) {
?>
    <p><?php echo $recipe['title']; ?></p>
    <p><?php echo $recipe['recipe']; ?></p>
    <p><?php echo $recipe['author']; ?></p>

<?php
}
?>
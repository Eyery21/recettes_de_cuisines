<?php

// function users(array $user) : array
// {

// }


// afficher les recettes

// afficher l'auteur des recettes
function display_author(string $authorEmail, array $users) : string
{
    for ($i = 0; $i < count($users); $i++) {
        $author = $users[$i];
        if ($authorEmail === $author['email']) {
            return $author['full_name'] . '(' . $author['age'] . ' ans)';
        }
    }
}
// récupère les recettes
function get_recipes(array $recipes, int $limit) : array
{
    $valid_recipes = [];
    $counter = 0;

    foreach($recipes as $recipe) {
        if ($counter == $limit) {
            return $valid_recipes;
        }

        if ($recipe['is_enabled']) {
            $valid_recipes[] = $recipe;
            $counter++;
        }
    }

    return $valid_recipes;
}

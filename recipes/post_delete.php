<?php
session_start();

include_once('./../config/mysql.php');
include_once('./../config/user.php');
include_once('./../variables.php');

$postData = $_POST;

if (!isset($postData['id']))
{
	echo('Il faut un identifiant valide pour supprimer une recette.');
    return;
}	

$id = $postData['id'];

$deleteRecipeStatement = $mysqlClient->prepare('DELETE FROM recipes WHERE recipe_id = :id');
$deleteRecipeStatement->execute([
    'id' => $id,
])or die(print_r($mysqlClient->errorInfo()));

header('Location: '.$rootUrl.'Concevez-votre-site-web-avec-PHP-MySQL/P4/P4C6/home.php');
?>

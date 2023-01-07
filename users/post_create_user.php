<?php
session_start();

include_once('./../config/mysql.php');
include_once('./../config/user.php');
include_once('./../variables.php');

$postData = $_POST;

if (
    !isset($postData['full_name'])
    || !isset($postData['email'])
    || !isset($postData['password'])
    || !isset($postData['age'])
    )
{
	echo('tout les champs sont obligatoire.');
    return;
}	

$full_name = $postData['full_name'];
$email = $postData['email'];
$password = $postData['password'];
$age = $postData['age'];

$createaccount = $mysqlClient->prepare('INSERT INTO users(full_name, email, password, age) 
VALUES (:full_name, :email, :password, :age)');
$createaccount->execute([
    'full_name' => $full_name,
    'email' => $email,
    'password' => $password,
    'age' => $age,
])or die(print_r($mysqlClient->errorInfo()));

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Création de recette</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php include_once($rootPath.'/header.php'); ?>
        <h1>Compte créer avec succès !</h1>
        
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title"><?php echo($full_name); ?></h5>
                <p class="card-text"><b>Email</b> : <?php echo($email); ?></p>
                <p class="card-text"><b>Âge</b> : <?php echo strip_tags($age); ?></p>
            </div>
        </div>
    </div>
    <?php include_once($rootPath.'/footer.php'); ?>
</body>
</html>

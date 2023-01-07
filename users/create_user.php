<?php session_start();
    include_once('./../config/mysql.php');
    include_once('./../config/user.php');
    include_once('./../variables.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Ajout de recette</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php include_once($rootPath.'/header.php'); ?>
        <h1>Créer votre compte</h1>
        <form action="<?php echo($rootUrl . 'Concevez-votre-site-web-avec-PHP-MySQL/P4/P4C6/users/post_create_user.php'); ?>" method="POST">
            <div class="mb-3">
                <label for="full_name" class="form-label">Votre nom</label>
                <input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="full_name-help">
                <div id="full_name-help" class="form-text">Ou votre pseudo !</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Votre email</label>
                <input class="form-control" id="email" name="email"></input>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Votre mot de passe (8 charactère minimun !) </label>
                <input type="password" id="password" name="password"
                minlength="8" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Votre âge</label>
                <input class="form-control" id="age" name="age"></input>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
    </div>

    <?php include_once($rootPath.'/footer.php'); ?>
</body>
</html>
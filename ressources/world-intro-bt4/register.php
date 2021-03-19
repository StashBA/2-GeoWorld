<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<?php  require_once 'header.php'; ?>
<body>
    <form action ="connect-db.php" method="POST">
        <fieldset>
            <legend>Inscription</legend>
            <div>
                <label>Nom</label>
                <input type="text" name="nom"> <br>
                <label>prénom</label>
                <input type="text" name="prénom"> <br>
                <label>email</label>
                <input type="text" name="email"> <br>
                <label>Mot de passe</label>
                <input type="password" name="mdp"> <br>

                <input type="submit" name="envoi" value="Envoyer">
            </div>
        </fieldset>
    </form>
</body>
</html>

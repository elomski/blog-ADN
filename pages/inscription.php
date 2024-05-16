<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <?php
        require_once '../includes/menu.php';
    ?>
    <div class="signin">
        <form action="">
            <label for="">Adresse Email</label>
            <input type="email" name="email" id="email" placeholder="saisir" required>

            <label for="">nom d'utilisateur</label>
            <input type="email" name="email" id="email" placeholder="saisir" required>
            
            <label for="">nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="saisir le nom d'utilisateur ou le pseudonyme ici" minlength="5" maxlength="20" required>

            <label for="password">mot de passe</label>
            <input type="password" name="password"  placeholder="saisir votre mot de passe ici" minlength="8" maxlength="20" required>
            
            <label for="password">Confirmation de mot de passe</label>
            <input type="password" name="comfirmation" id="confirmation" placeholder="confirmation de mot de passe" minlength="8" maxlength="20" required>

            <button type="submit">S'inscrire</button>

            <p>Deja un compte? Connetez vous en cliquant <a href="/pages/connexion.php? "></a></p>
        </form>
    </div>
</body>
</html>
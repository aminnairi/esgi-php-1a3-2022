<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <body>
        <form method="POST" action="/esgi-php-1a3-2022/base-de-donnees/login.php">
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required autofocus>
                <?php ?>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Connexion</button>
        </form>
    </body>
</html>

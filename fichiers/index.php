<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <body>
        <?php if (isset($_SESSION["error"])): ?>
            <h2>Erreur</h2>
            <p><?php echo $_SESSION["error"]; ?></p>
            <form>
                <button type="submit">Réessayer</button>
            </form>
            <p><?php unset($_SESSION["error"]); ?></p>
        <?php else: ?>
            <form method="POST" action="http://localhost/esgi-php-1a3-2022/fichiers/file-handler.php" enctype="multipart/form-data">
                <input type="file" name="picture[]">
                <input type="file" name="picture[]">
                <button type="submit">Envoyer</button>
            </form>
        <?php endif; ?>
    </body>
</html>

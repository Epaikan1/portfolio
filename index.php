<?php 
$page_title = "Veille";
$prefix = "../"; // On rajoute ../ devant le chemin pour importer les fichiers du dossier supérieur
include($prefix."_header.php");

if (!extension_loaded('pdo')) {
    echo "<div class='alert alert-danger' role='alert'>L'extension PHP 'PDO' n'est pas activée sur ce serveur.</div>";
}

// On prépare la connexion à la base de données SQL
try {
    $pdo = new PDO("mysql:host=".$DB_HOST.";dbname=".$DB_DATABASE.";charset=utf8", $DB_USERNAME, $DB_PASSWORD);
} catch (Exception $e) {
    echo "<div class='alert alert-danger' role='alert'>Erreur de connexion à la base de données.</div>";
}
?>

<h1>Veille</h1>
<p>
    Ici le contenu HTML de la page de veille.
    Voici un <a href="<?=$prefix?>index.php">lien</a> vers la page d'accueil.
</p>

<?php
include($prefix."_footer.php");
?>

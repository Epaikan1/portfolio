<?php
include("settings/base.php");

// On calcule automatiquement combien de "../" à mettre devant les chemins de fichier ou devant les liens HTML
//$prefix = str_repeat("../", (substr_count($_SERVER["SCRIPT_NAME"], "/") - 1));
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Métadonnées -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="<?=$PORTFOLIO_NAME?>">
        <link rel="shortcut icon" href="<?=$prefix?>assets/favicon.png">

        <!-- CSS externe -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <!-- CSS interne -->
        <link rel="stylesheet" href="<?=$prefix?>assets/style.css">

        <title><?=$page_title?> - Portfolio</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                <div class="container">
                    <a class="navbar-brand" href="<?=$prefix?>">
                        <?=$PORTFOLIO_NAME?>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#websiteMenu" aria-controls="websiteMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="websiteMenu">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link <?=($menu_active== 'accueil') ? 'active' : ''?>" href="<?=$prefix?>index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?=($menu_active== 'entreprise') ? 'active' : ''?>" href="<?=$prefix?>entreprise.php">Entreprise</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?=($menu_active== 'projets') ? 'active' : ''?>" href="<?=$prefix?>projets/">Projets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?=($menu_active== 'veille') ? 'active' : ''?>" href="<?=$prefix?>veille/">Veille</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="container">

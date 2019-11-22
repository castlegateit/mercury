<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= defined('PAGE_TITLE') ? PAGE_TITLE : SITE_TITLE ?></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= defined('PAGE_DESCRIPTION') ? PAGE_DESCRIPTION : SITE_DESCRIPTION ?>">

        <link rel="icon" href="/dist/images/icon.png">
        <link rel="stylesheet" href="/dist/css/style.min.css">
    </head>

    <body>
        <div class="<?= ATLAS_PREFIX ?>header">
            <h1 class="<?= ATLAS_PREFIX ?>header__title">
                <a href="/" class="<?= ATLAS_PREFIX ?>header__title-link">
                    <?= SITE_TITLE ?>
                </a>
            </h1>

            <div class="<?= ATLAS_PREFIX ?>header__nav">
                <ul class="<?= ATLAS_PREFIX ?>header__nav-list <?= ATLAS_PREFIX ?>header__nav-list--level-1">
                    <li class="<?= ATLAS_PREFIX ?>header__nav-item <?= ATLAS_PREFIX ?>header__nav-item--level-1">
                        <a href="/" class="<?= ATLAS_PREFIX ?>header__nav-link <?= ATLAS_PREFIX ?>header__nav-link--level-1">Home</a>
                    </li>

                    <li class="<?= ATLAS_PREFIX ?>header__nav-item <?= ATLAS_PREFIX ?>header__nav-item--level-1">
                        <a href="/about.php" class="<?= ATLAS_PREFIX ?>header__nav-link <?= ATLAS_PREFIX ?>header__nav-link--level-1">About</a>
                    </li>

                    <li class="<?= ATLAS_PREFIX ?>header__nav-item <?= ATLAS_PREFIX ?>header__nav-item--level-1">
                        <a href="/contact.php" class="<?= ATLAS_PREFIX ?>header__nav-link <?= ATLAS_PREFIX ?>header__nav-link--level-1">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

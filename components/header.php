<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= defined('PAGE_TITLE') ? PAGE_TITLE : SITE_TITLE ?></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?= defined('PAGE_DESCRIPTION') ? PAGE_DESCRIPTION : SITE_DESCRIPTION ?>">

        <link rel="stylesheet" href="/dist/css/style.min.css">
    </head>

    <body>
        <div class="mercury-header">
            <h1 class="mercury-header__title">
                <a href="/" class="mercury-header__title-link">
                    <?= SITE_TITLE ?>
                </a>
            </h1>

            <div class="mercury-header__nav">
                <ul class="mercury-header__nav-list mercury-header__nav-list--level-1">
                    <li class="mercury-header__nav-item mercury-header__nav-item--level-1">
                        <a href="/" class="mercury-header__nav-link mercury-header__nav-link--level-1">Home</a>
                    </li>

                    <li class="mercury-header__nav-item mercury-header__nav-item--level-1">
                        <a href="/about.php" class="mercury-header__nav-link mercury-header__nav-link--level-1">About</a>
                    </li>

                    <li class="mercury-header__nav-item mercury-header__nav-item--level-1">
                        <a href="/contact.php" class="mercury-header__nav-link mercury-header__nav-link--level-1">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

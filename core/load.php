<?php

// Request URL.
$request = $_SERVER['REQUEST_URI'];

// Parse request URL path.
$path = pathinfo($request);
$slash = '/';

// Sanitize request URL to canonical URL and corresponding file path.
$canonical = rtrim($path['dirname'], $slash) . $slash;
$file = rtrim($path['dirname'], $slash) . $slash . $path['filename'] . '.php';

// Append file to canonical directory path.
if ($path['filename']) {
    $canonical .= $path['filename'] . $slash;
}

// Strip index.* from canonical home page path.
if ($path['dirname'] == $slash && $path['filename'] == 'index') {
    $canonical = $slash;
}

// Home page request corresponds to index.php file.
if ($request == $slash) {
    $file = '/index.php';
}

// Prepend full path to file path.
$pages = MERCURY_PATH . '/pages';
$file = $pages . $file;

// Does the page exist?
if (!is_file($file)) {
    $file_404 = $pages . '/404.php';

    // Send response code.
    http_response_code(404);

    // Show error page?
    if (is_file($file_404)) {
        include $file_404;
    }

    exit;
}

// Page exists. Redirect to canonical URL?
if ($request != $canonical) {
    http_response_code(301);
    header('Location: ' . $canonical);

    exit;
}

// Show requested page.
include $file;

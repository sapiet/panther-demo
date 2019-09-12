<?php

require_once __DIR__.'/vendor/autoload.php';

const SCREENSHOT_FILENAME = 'screen.png';

if (file_exists(SCREENSHOT_FILENAME)) {
    unlink(SCREENSHOT_FILENAME);
}

$client = \Symfony\Component\Panther\Client::createChromeClient();
$client->request('GET', 'https://www.grafikart.fr');
$client->clickLink('Tutoriels');
$client->takeScreenshot(SCREENSHOT_FILENAME);

?>
<html>
    <head>
        <title>Panther demo</title>
        <style>
            html, body {
                padding: 0;
                margin: 0;
            }
            img {
                display: block;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <img src="screen.png" alt=":(">
    </body>
</html>

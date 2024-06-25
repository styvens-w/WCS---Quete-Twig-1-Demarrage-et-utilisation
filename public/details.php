<?php
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

require_once __DIR__ . '/../config/twig.php';

$name = 'Wilder';

try {

    echo $twig->render('details.html.twig', ['name' => $name]);

} catch (LoaderError|RuntimeError|SyntaxError $e) {

    echo 'Error: ' . $e->getMessage();

}

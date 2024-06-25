<?php
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

require_once __DIR__ . '/../config/twig.php';

$products = ['guitare', 'bass', 'banjo', 'cithare', 'lyre', 'harpe'];

try {

    echo $twig->render('products.html.twig', compact('products'));

} catch (LoaderError|RuntimeError|SyntaxError $e) {

    echo 'Error: ' . $e->getMessage();

}
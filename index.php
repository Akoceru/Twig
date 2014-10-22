<?php
/**
 * Created by PhpStorm.
 * User: axel
 * Date: 21/10/2014
 * Time: 17:45
 */
require __DIR__.'/vendor/autoload.php';

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views',

]);


$article  = [
    'name' => 'zefefefe',
    'content' => 'dsqfjsi',


];

$twig = new Twig_Environment($loader,[
    //'cache' => null,
    ]);
echo $twig->render('article.html.twig', [
'article' => $article,
]);
<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Anagram.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig.html');
    });

    $app->get("/view_anagrams", function() use ($app) {
        $my_Anagram = new Anagram;
        $your_anagrams = $my_Anagram->anagramFinder($_GET['word'], $_GET['list']);
        return $app['twig']->render('view.twig.html', array('result' => $your_anagrams));
    });

    return $app;
 ?>

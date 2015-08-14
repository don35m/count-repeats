<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/RepeatCounter.php';

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //Routes

    $app->get("/", function() use ($app){
        return $app['twig']->render('count.html.twig');

    });

    $app->get("/results", function() use ($app) {
        //Get info from form
        $new_search= new RepeatCounter;
        $count = $new_search->countRepeats($_GET['word'], $_GET['phrase']);
        return $app ['twig']->render('results.html.twig', array('count' => $count));
    });
    
    return $app;
?>

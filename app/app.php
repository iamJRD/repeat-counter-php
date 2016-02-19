<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";


    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("home.html.twig");
    });

    $app->get("/results", function() use ($app) {
        $new_RepeatCounter = new RepeatCounter($_GET["input_string"], $_GET["input_check_repeat"]);
        $result = $new_RepeatCounter->countRepeats($_GET["input_string"], $_GET["input_check_repeat"]);

        return $app["twig"]->render("results.html.twig", array("results" => $result, "originalString" => $_GET["input_string"], "originalCheckRepeat" => $_GET["input_check_repeat"]));
    });

    return $app;
?>

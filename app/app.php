<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    session_start();
    
    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("home.html.twig");
    });

    $app->post("/results", function() use ($app) {
        $new_RepeatCounter = new RepeatCounter($_POST["input_string"], $_POST["input_check_repeat"]);
        $result = $new_RepeatCounter->countRepeats($_POST["input_string"], $_POST["input_check_repeat"]);

        return $app["twig"]->render("results.html.twig", array("results" => $result, "originalString" => $_POST["input_string"], "originalCheckRepeat" => $_POST["input_check_repeat"]));
    });

    return $app;
?>

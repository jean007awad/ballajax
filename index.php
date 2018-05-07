<?php

require_once "./vendor/autoload.php";

use htl3r\ajaxball\ball;

$ball[] = new ball("Fußball", 40.5,"Gummi");
$ball[] = new ball("Basketball", 60, "Plastik");


foreach ($ball as $balls){

        $myBall[] = ["name" => $balls->getName(),
                     "durchmesser" => $balls->getDurchmesser(),
                        "material" => $balls->getMaterial()];

}


$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getTemplatePaths();

$paths->setTemplatePathAndFilename(__DIR__ . '/Templates/BallListe.html');

$view->assignMultiple(
    array(
        "Balls" => $myBall
    )
);

$output = $view->render();

echo $output;
?>
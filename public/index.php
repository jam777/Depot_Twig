<?php 

//Charge automatiquement toutes les libraires twig (*.php de vendor)attention de ne peut oublier les namespaces
require '../vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('../src/View');
$twig = new \Twig\Environment($loader , array(
      'cache' => false));


$products=[

		'Fruit'=>"imgFruit.jpg",
		'Legume'=>"imgLegume.jpg",
		'Viande'=>"imgViande.jpg",
		'Poisson'=>"imgPoisson.jpg",
		'Boisson'=>"imgBoisson.jpg",

];


echo $twig->render('index.html.twig',['products'=>$products]); 


?>
 
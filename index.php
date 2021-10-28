<?php

require_once 'Bicycle.php';
require_once 'Cars.php';
require_once 'Vehicle.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'Highway.php';
require_once 'Motorway.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


// PARTIE EXCEPTION//

$car4 = new Cars ("violet", 4, "fuel");

try{
    $car4->start();
} catch (Exception $e) {
    $car4->getParkBrake() === "Le frein à main est serré";
    echo "Exception received  : ". $e->getMessage() . "n";
    $car4->setParkBrake()=== false;
} finally {
    echo "Ma voiture roule comme un donut";
}


// PARTIE ABSTRACTION // 
$car3 = new Cars ("orange", 4);
$bike2 = new Bicycle ("vert", 2);
$truck3 = new Vehicle ("jaune", 4);
$skateboard = new Skateboard ("noir", 4);

$pedestrianWay = new PedestrianWay();

var_dump("Au tout début " .($pedestrianWay->getCurrentVehicles()));

var_dump("tentative d'ajout de voiture (doit échouer)");
$pedestrianWay->addVehicle($car3);
var_dump($pedestrianWay->getCurrentVehicles());

var_dump("tentative d'ajout de bike (doit réussir");
$pedestrianWay->addVehicle($bike2);
var_dump($pedestrianWay->getCurrentVehicles);



/** OBJET BIKE  */



//Je donne des propriétés à ma classe depuis l'extérieur 
$bike = new Bicycle('blue', 15, 1, 2);
var_dump($bike); 



 // Exemple du vélo $bike qui avance et ensuite freine 
     echo $bike->forward();
     echo '<br> Vitesse du vélo bike : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
     echo $bike->brake();
     echo '<br> Vitesse du vélo bike: ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
     echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
    $rockrider = new Bicycle('yellow', 10, 2, 3);
    var_dump($rockrider);

// Exemple du vélo $rockrider qui avance et ensuite freine 
    echo $rockrider->forward();
    echo '<br> Vitesse du vélo rockrider: ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
    echo $rockrider->brake();
    echo '<br> Vitesse du vélo rockrider : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
    echo $rockrider->brake();


// Instanciation d'un nouvel objet $tornado
     $tornado = new Bicycle('black', 8, 1, 1);



// Exemple du vélo $tornado qui avance et ensuite freine 
    echo $tornado->forward();
    echo '<br> Vitesse du vélo rockrider: ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
    echo $tornado->brake();
    echo '<br> Vitesse du vélo rockrider : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
    echo $tornado->brake();



 /* OBJET CARS */ 
 require_once 'Cars.php';
 var_dump(Cars::ALLOWED_ENERGIES);

// Instanciation d'un nouvel objet $car1
 $car1 = new Cars('Blue', 5, 'electric');

// Exemple de car $car1 qui avance et ensuite freine 
    echo $car1->start();
    echo $car1->forward();
    echo '<br> Vitesse du Cars1 : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car1->brake();
    echo '<br> Vitesse du Cars1 : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car1->brake();

// Instanciation d'un nouvel objet $car2
    $car2 = new Cars('Yellow', 4, 'fuel');


// Exemple de car $car1 qui avance et ensuite freine 
        echo $car2->start();
        echo $car2->forward();
        echo '<br> Vitesse du Cars2 : ' . $car2->getCurrentSpeed() . 'km/h' . '<br>';
        echo $car2->brake();
        echo '<br> Vitesse du Cars2 : ' . $car2->getCurrentSpeed() . 'km/h' . '<br>';
        echo $car2->brake();
        

/* OBJET TRUCK */

// Instanciation d'un nouvel objet Truck
$truck1 = new Truck('red', 3, 'fuel', 25);

// Exemple de Truck $truck1 qui avance et ensuite freine 
echo $truck1->start();
echo $truck1->forward();
echo '<br> Vitesse du Truck1 : ' . $truck1->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck1->brake();
echo '<br> Vitesse du Truck1 : ' . $truck1->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck1->brake();

// Instanciation d'un nouvel objet Truck
$truck2 = new Truck('red', 3, 'fuel', 25);

// Exemple de Truck $truck1 qui avance et ensuite freine 
echo $truck2->start();
echo $truck2->forward();
echo '<br> Vitesse du Truck1 : ' . $truck2->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck2->brake();
echo '<br> Vitesse du Truck1 : ' . $truck2->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck2->brake();





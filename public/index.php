<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Lion('lion');
$lion->name = 'lion';
$lion->pawNumber = 4;
$lion->carnivorous = true;
$lion->size = 70;
$lion->threatenedLevel = 'VU';

$parrot = new Parrot('parrot');
$parrot->name = 'parrot';
$parrot->pawNumber = 2;
$parrot->size = 30;

$elephant = new Elephant('elephant');
$elephant->name = 'elephant';
$elephant->pawNumber = 4;
$elephant->threatenedLevel = 'LC';

$animals = [$lion, $parrot, $elephant];

// $lion->name = 'lion';
var_dump($lion);
echo $lion->name;

echo $lion->getSize() 

$lion->setSize(70);
/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>
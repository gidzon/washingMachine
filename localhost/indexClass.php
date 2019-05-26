<?php

include 'ClassProduct.php';
include 'ClassHomeAppliances.php';

$lg = new washingMachine();
$lg->getCharacteristics('панасоник', 5000, 'базовая', '3 литра');

<?php
require_once __DIR__ . '/vendor/autoload.php';

use RobertoCarlos\LearningDesdignPatternAdapter\Adapters\Plug2PinosAdapter;
use RobertoCarlos\LearningDesdignPatternAdapter\Classes\Plug3Pinos;
use RobertoCarlos\LearningDesdignPatternAdapter\Classes\Tomada2Pinos;

$tomada2pinos = new Tomada2Pinos();
$plug3pinos = new Plug3Pinos();

$plug3pinos->run();
$tomada2pinos->conectar(new Plug2PinosAdapter($plug3pinos));
$tomada2pinos->testar();

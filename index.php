<?php
header("Content-Type: application/json");
require 'Alunno.php';

$alunno1 = new Alunno();
$alunno1->setName('Fabio');
$alunno1->setSurname('Zavataro');
$alunno1->setEta(20);

$alunno2 = new Alunno();
$alunno2->setName('Davide');
$alunno2->setSurname('Susini');
$alunno2->setEta(21);

$alunno3 = new Alunno();
$alunno3->setName('Matteo');
$alunno3->setSurname('Ciardi');
$alunno3->setEta(19);

$alunni = array($alunno1, $alunno2, $alunno3);

$my_json = json_encode($alunni);
echo $my_json;

?>

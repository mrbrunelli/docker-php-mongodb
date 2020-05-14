<?php

$manager = new \MongoDB\Driver\Manager("mongodb://mrb-mongodb");

$query = new \MongoDB\Driver\Query([]);

$cursor = $manager->executeQuery('raiz.academicos', $query);

foreach ($cursor as $c) {
    echo $c->nome . "<br>";
    echo $c->idade . "<br>";
}

<?php

$manager = new \MongoDB\Driver\Manager("mongodb://mrb-mongodb");

$up = new \MongoDB\Driver\BulkWrite;


$up->update(['nome' => 'Matheus'], ['$set' => ['nome' => 'Zé da Silva']]);

$manager->executeBulkWrite('raiz.academicos', $up);

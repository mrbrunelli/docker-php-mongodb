<?php

$manager = new \MongoDB\Driver\Manager("mongodb://mrb-mongodb");

$db = new \MongoDB\Driver\BulkWrite;

$db->insert(['nome' => 'Matheus', 'idade' => 25]);

$manager->executeBulkWrite('raiz.academicos', $db);

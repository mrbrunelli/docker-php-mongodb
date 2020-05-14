<?php

$manager = new \MongoDB\Driver\Manager("mongodb://mrb-mongodb");

$bw = new \MongoDB\Driver\BulkWrite;

$filter = ['nome' => 'Matheus'];

$bw->delete($filter);

$manager->executeBulkWrite('raiz.academicos', $bw);

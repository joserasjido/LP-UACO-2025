<?php

use app\core\model\dto\CategoriaDto;

require_once '../../app/core/model/dto/base/InterfaceDto.php';
require_once '../../app/core/model/dto/CategoriaDto.php';

$peticionCliente = '{"id": 45, "nombre": "Juguetes"}';
$data = json_decode($peticionCliente, true);

$categoria = new CategoriaDto($data);
print_r($categoria->toArray());
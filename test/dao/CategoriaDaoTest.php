<?php

require_once '../../app/core/models/dao/base/InterfaceDao.php';
require_once '../../app/core/models/dao/base/BaseDao.php';
require_once '../../app/core/models/dao/CategoriaDao.php';
require_once "../../app/config/DBConfig.php";
require_once "../../app/libs/database/Connection.php";
require_once '../../app/core/models/dto/base/InterfaceDto.php';
require_once '../../app/core/models/dto/CategoriaDto.php';

use app\libs\database\Connection;
use app\core\models\dto\CategoriaDto;
use app\core\models\dao\CategoriaDao;
try{
    $data = ["id" => 0, "nombre" => "remeras"];
    $dto = new CategoriaDto($data);

    $dao = new CategoriaDao(Connection::get());
    $dao->save($dto->toArray());
    
}
catch(\PDOException $ex){
    echo "Error database => " . $ex->getMessage();
}
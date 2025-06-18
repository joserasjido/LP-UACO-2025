<?php

namespace app\core\services;

use app\core\models\dao\CategoriaDao;
use app\core\models\dto\base\InterfaceDto;
use app\core\models\dto\CategoriaDto;
use app\core\services\base\InterfaceService;
use app\libs\database\Connection;

final class CategoriaService implements InterfaceService{
    
    public function load(int $id): InterfaceDto{
        return new CategoriaDto();
    }

    public function save(InterfaceDto $dto): void{
        $this->validate($dto);
        $data = $dto->toArray();
        unset($data["id"]);
        $dao = new CategoriaDao(Connection::get());
        $dao->save($data);
    }

    public function update(InterfaceDto $dto): void{

    }

    public function delete(InterfaceDto $dto): void{

    }

    public function list(array $filters): array{
        return [];
    }

    private function validate(CategoriaDto $dto): void{
        if($dto->getNombre() == ""){
            throw new \Exception("<p>El <strong>nombre</strong> de la categoría es obligatorio.</p>");
        }
    }

}
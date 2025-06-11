<?php

namespace app\core\models\dao;

use app\core\models\dao\base\BaseDao;
use app\core\models\dao\base\InterfaceDao;

final class CategoriaDao extends BaseDao implements InterfaceDao{

    public function __construct(\PDO $connection){
        parent::__construct($connection, "categorias");
    }

    public function load(int $id): array{
        return ["dato" => "prueba"];
    }

    public function save(array $data): void{
        $sql = "INSERT INTO {$this->table} VALUES(DEFAULT, :nombre)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            "nombre" => $data["nombre"]
        ]);
    }

    public function update(array $data): void{

    }

    public function delete(int $id): void{

    }

    public function list(array $filters): array{
        return [];
    }

    public function suggestive(array $filters): array{
        return [];
    }

    public function foundRows(): int{
        return 0;
    }

    public function getLastInsertId(): int{
        return 0;
    }

}
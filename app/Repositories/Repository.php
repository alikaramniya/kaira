<?php declare(strict_types=1);

namespace App\Repositories;

use App\Contracts\ModelInterface;
use Monolog\Logger;
use Psr\Container\ContainerInterface;

abstract class Repository
{
    abstract public function model(): string;

    private ModelInterface $model;

    private string $table;

    public function __construct(
        ContainerInterface $container,
        private readonly Logger $log
    ) {
        $this->model = $container->get($this->model());

        $this->table = $this->model->getTable();
    }

    public function all()
    {
        try {
            $query = 'SELECT * FROM ' . $this->table . ' LIMIT 1000';

            $stmt = $this->model->db->prepare($query);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            $this->log->error($e->getMessage());
        }
    }
}

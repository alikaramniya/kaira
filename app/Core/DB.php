<?php declare(strict_types=1);

namespace App\Core;

use Monolog\Logger;
use PDO;

/**
 * @mixin PDO $pdo
 */
class DB
{
    private PDO $pdo;

    public function __construct(
        private readonly Config $config,
        private readonly Logger $log
    ) {
        try {
            $this->pdo = new PDO(
                $config->get('connection.driver') . ':host=' . $config->get('connection.host') . ';dbname=' . $config->get('connection.dbname') . ';charset=' . $config->get('connection.charset'),
                $config->get('connection.user'),
                $config->get('connection.password'),
                $config->get('connection.options')
            );
        } catch (\PDOException $e) {
            $this->log->emergency($e->getMessage());
        }
    }

    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->pdo, $name], $arguments);
    }
}

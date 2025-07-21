<?php

declare(strict_types=1);

namespace App\Contracts;

interface ModelInterface
{
   public function getTable(): string;
}

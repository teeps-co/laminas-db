<?php

declare(strict_types=1);

namespace Laminas\Db\RowGateway\Exception;

use Laminas\Db\Exception;

class InvalidArgumentException extends Exception\InvalidArgumentException implements ExceptionInterface
{
}

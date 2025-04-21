<?php

namespace Connecta\InfrastructureDatabase;

use Connecta\InfrastructureDatabase\Contracts\PgsqlDbContract;
use Illuminate\Support\Facades\DB as LaravelDb;

class PgsqlDb implements PgsqlDbContract
{
    protected string $connection = 'pgsql';

    public function __construct()
    {
        LaravelDb::enableQueryLog();
    }

    public function beginTransaction(): void
    {
        LaravelDb::beginTransaction();
    }

    public function commit(): void
    {
        LaravelDb::commit();
    }

    public function rollback(): void
    {
        LaravelDb::rollBack();
    }

    public function command(string $query, array $bindings = [], bool $master = true)
    {
        $connection = $this->connection . '::' . ($master ? 'write' : 'read');
        return LaravelDb::connection($connection)->select($query, $bindings);
    }
}

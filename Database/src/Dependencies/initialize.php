<?php

return [
    \SharedKernel\Core\Contracts\Infrastructure\Database\DbContract::class => \Connecta\InfrastructureDatabase\PgsqlDb::class,
    \Connecta\InfrastructureDatabase\Contracts\PgsqlDbContract::class => \Connecta\InfrastructureDatabase\PgsqlDb::class,
    \Connecta\InfrastructureDatabase\Contracts\SelectServiceContract::class => \SharedKernel\Database\Services\Select\Service::class,
];
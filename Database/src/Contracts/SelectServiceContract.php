<?php

namespace Connecta\InfrastructureDatabase\Contracts;

use SharedKernel\Core\Structures\BaseMapper;
use SharedKernel\Core\Structures\PaginatedList;
use SharedKernel\Database\Services\Select\Request;

interface SelectServiceContract
{
    public function select(Request $request, BaseMapper $mapper): PaginatedList;
}
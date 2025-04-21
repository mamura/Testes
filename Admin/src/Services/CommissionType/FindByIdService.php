<?php

namespace Connecta\ApplicationAdmin\Services\CommissionType;

use Connecta\ApplicationAdmin\Contracts\CommissionType\FindByIdServiceContract as ApplicationFindByIdServiceContract;
use Connecta\DomainCommissionType\CommissionType;
use Connecta\DomainCommissionType\Contracts\FindByIdServiceContract;

class FindByIdService implements ApplicationFindByIdServiceContract
{

    public function __construct(
        private FindByIdServiceContract $findService
    )
    {
    }

    public function find(int $id): CommissionType
    {
        return $this->findService->find($id);
    }
}
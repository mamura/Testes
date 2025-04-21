<?php

namespace Connecta\ApplicationAdmin\Services\CommissionType;

use Connecta\ApplicationAdmin\Contracts\CommissionType\FindByCodeServiceContract as ApplicationFindByCodeServiceContract;
use Connecta\DomainCommissionType\CommissionType;
use Connecta\DomainCommissionType\Contracts\FindByCodeServiceContract;

class FindByCodeService implements ApplicationFindByCodeServiceContract
{

    public function __construct(
        private FindByCodeServiceContract $findService
    )
    {
    }

    public function find(int $id): CommissionType
    {
        return $this->findService->find($id);
    }
}
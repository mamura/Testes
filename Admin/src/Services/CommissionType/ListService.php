<?php

namespace Connecta\ApplicationAdmin\Services\CommissionType;

use Connecta\ApplicationAdmin\Contracts\CommissionType\ListServiceContract as ApplicationListServiceContract;
use Connecta\DomainCommissionType\Contracts\ListServiceContract;

class ListService implements ApplicationListServiceContract
{

    public function __construct(
        private ListServiceContract $findService
    )
    {
    }

    public function all(int $accountId): array
    {
        return $this->findService->all($accountId);
    }
}
<?php

namespace Connecta\ApplicationAdmin\Services\Origin;

use Connecta\ApplicationAdmin\Contracts\Origin\FindByCodeServiceContract as ApplicationFindByCodeServiceContract;
use Connecta\DomainOrigin\Origin;
use Connecta\DomainOrigin\Contracts\FindByCodeServiceContract;

class FindByCodeService implements ApplicationFindByCodeServiceContract
{
    public function __construct(
        private FindByCodeServiceContract $findService
    )
    {
    }

    public function find(int $accountId, string $code): Origin
    {
        return $this->findService->find($accountId, $code);
    }
}
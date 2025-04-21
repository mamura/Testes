<?php

namespace Connecta\ApplicationAdmin\Services\Origin;

use Connecta\ApplicationAdmin\Contracts\Origin\FindByIdServiceContract as ApplicationFindByIdServiceContract;
use Connecta\DomainOrigin\Origin;
use Connecta\DomainOrigin\Contracts\FindByIdServiceContract;

class FindByIdService implements ApplicationFindByIdServiceContract
{

    public function __construct(
        private FindByIdServiceContract $findService
    )
    {
    }

    public function find(int $id): Origin
    {
        return $this->findService->find($id);
    }
}
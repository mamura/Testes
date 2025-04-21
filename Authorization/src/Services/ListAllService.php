<?php

namespace Connecta\ApplicationAuthorization\Services;

use Connecta\ApplicationAuthorization\Contracts\ListAllServiceContract;
use Connecta\DomainAuthorization\Contracts\ListAllServiceContract as DomainList;
use Connecta\DomainAuthorization\Services\List\Request;

class ListAllService implements ListAllServiceContract
{
    public function __construct(
        private DomainList $service
    )
    {
    }

    public function list(int $userId): array
    {
        $request = new Request();
        $request->setUserId($userId);

        return $this->service->list($request);
    }
}
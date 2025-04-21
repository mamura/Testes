<?php

namespace Connecta\ApplicationAuthorization\Services\User;

use Connecta\ApplicationAuthorization\Contracts\User\FindByIdServiceContract as ApplicationFindByIdServiceContract;
use Connecta\DomainUser\Contracts\FindByIdServiceContract;
use Connecta\DomainUser\User;

class FindByIdService implements ApplicationFindByIdServiceContract
{

    public function __construct(
        private FindByIdServiceContract $findService
    )
    {
    }

    public function find(int $id): User
    {
        return $this->findService->find($id);
    }
}
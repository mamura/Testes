<?php

namespace Connecta\ApplicationAuthorization\Contracts\User;

use Connecta\DomainUser\User;

interface FindByIdServiceContract
{
    public function find(int $id): User;
}
<?php

namespace Connecta\ApplicationAdmin\Contracts\Origin;


use Connecta\DomainOrigin\Origin;

interface FindByIdServiceContract
{
    public function find(int $id): Origin;
}
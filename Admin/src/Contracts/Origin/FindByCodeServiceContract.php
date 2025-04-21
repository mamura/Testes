<?php

namespace Connecta\ApplicationAdmin\Contracts\Origin;


use Connecta\DomainOrigin\Origin;

interface FindByCodeServiceContract
{
    public function find(int $accountId, string $code): Origin;
}
<?php

namespace Connecta\ApplicationAdmin\Contracts\CommissionType;


use Connecta\DomainCommissionType\CommissionType;

interface ListServiceContract
{
    public function all(int $accountId): array;
}
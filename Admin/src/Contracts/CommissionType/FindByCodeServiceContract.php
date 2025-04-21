<?php

namespace Connecta\ApplicationAdmin\Contracts\CommissionType;


use Connecta\DomainCommissionType\CommissionType;

interface FindByCodeServiceContract
{
    public function find(int $id): CommissionType;
}
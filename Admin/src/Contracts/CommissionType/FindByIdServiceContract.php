<?php

namespace Connecta\ApplicationAdmin\Contracts\CommissionType;


use Connecta\DomainCommissionType\CommissionType;

interface FindByIdServiceContract
{
    public function find(int $id): CommissionType;
}
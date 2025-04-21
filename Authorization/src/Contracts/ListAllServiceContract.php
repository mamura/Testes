<?php

namespace Connecta\ApplicationAuthorization\Contracts;

interface ListAllServiceContract
{
    public function list(int $userId): array;
}
<?php

namespace Connecta\InfrastructureDatabase\Services\Select;

class Request
{
    private array $fields;
    private string $from;
    private array $conditions = [];
    private array $sort = [];
    private array $group = [];

    private int $limit = 100;
    private int $offset = 0;

    public function getFields(): array
    {
        return $this->fields;
    }

    public function setFields(array $fields): void
    {
        $this->fields = $fields;
    }

    public function getFrom(): string
    {
        return $this->from;
    }

    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    public function getConditions(): array
    {
        return $this->conditions;
    }

    public function setConditions(array $conditions): void
    {
        $this->conditions = $conditions;
    }

    public function getSort(): array
    {
        return $this->sort;
    }

    public function setSort(array $sort): void
    {
        $this->sort = $sort;
    }

    public function getGroup(): array
    {
        return $this->group;
    }

    public function setGroup(array $group): void
    {
        $this->group = $group;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }
}
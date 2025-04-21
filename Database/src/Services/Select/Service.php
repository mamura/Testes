<?php

namespace Connecta\InfrastructureDatabase\Services\Select;

use Connecta\InfrastructureDatabase\Contracts\SelectServiceContract;
use SharedKernel\Core\Contracts\Infrastructure\Database\DbContract;
use SharedKernel\Core\Structures\BaseMapper;
use SharedKernel\Core\Structures\PaginatedList;

class Service implements SelectServiceContract
{
    public function __construct(
        private DbContract $db
    )
    {
    }

    public function select(Request $request, BaseMapper $mapper): PaginatedList
    {
        $command = $this->buildCommand($request);
        $list = $this->db->command($command);

        $response = new PaginatedList();
        if ($request->getLimit() > 0) {
            $response->setLimit($request->getLimit());
        }
        $response->setOffset($request->getOffset());
        if (!$list) {
            return $response;
        }

        $totalRows = $list[0]->total_rows;
        $response->setRows($mapper->fromList($list));
        $response->setTotalRows($totalRows);

        return $response;
    }

    private function buildCommand(Request $request)
    {
        $fields = $request->getFields();
        $fields[] = 'COUNT(*) OVER() as total_rows ';

        $command = 'SELECT ' .
            implode(', ', $fields) .
            ' FROM ' . $request->getFrom();

        if ($request->getConditions()) {
            $command .= ' WHERE ' . implode(' AND ', $request->getConditions());
        }

        if ($request->getGroup()) {
            $command .= ' GROUP BY ' . implode(', ', $request->getGroup());
        }

        if ($request->getSort()) {
            $command .= ' ORDER BY ' . implode(', ', $request->getSort());
        }

        if ($request->getLimit()) {
            $command .= ' LIMIT ' . $request->getLimit();
        }

        if ($request->getOffset() >= 0) {
            $command .= ' OFFSET ' . $request->getOffset();
        }

        return $command;
    }
}

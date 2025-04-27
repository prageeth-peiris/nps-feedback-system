<?php

namespace App\DTO;

// here we defined a simple Data Transfer Object to handle pagination of data retrieval
class DataTableDTO extends BaseDataTransferObject
{
    public function __construct(
        public readonly string $sortingColumn = 'id',
        public readonly string $sortingDirection = 'asc',

        //        we can pass where clauses here like this. ex :
        //         [
        //
        //             ["type","=","Passive"],
        //             ["feedback_score",">",5]
        //
        //
        //             ]
        private array $filters = [],

        public readonly int $offset = 0,
        public readonly int $limit = 10,
    ) {}

    public function getFilters(): array
    {
        return $this->filters;
    }

    public function setFilters(array $filters): void
    {
        $this->filters = $filters;
    }
}

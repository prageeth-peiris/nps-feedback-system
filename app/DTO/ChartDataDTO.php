<?php

namespace App\DTO;

class ChartDataDTO
{


    public function __construct(
        public array $labels,
        public array $dataSets,
        public string $labelName
    )
    {
    }
}

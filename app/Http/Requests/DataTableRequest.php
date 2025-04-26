<?php

namespace App\Http\Requests;


use App\DTO\DataTableDTO;
use Illuminate\Foundation\Http\FormRequest;

class DataTableRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function getValidatedData(): DataTableDTO {

        //here we define a default data table because if the query parameter is not present in the request
        // then we tell to get the default value of DTO.
        $defaultDataTableDTO = new DataTableDTO();

    return new DataTableDTO(
        sortingColumn:   $this->get('sortingColumn') ?? $defaultDataTableDTO->sortingColumn,
        sortingDirection: $this->get('sortingDirection') ?? $defaultDataTableDTO->sortingDirection,
        offset: $this->get('offset') ?? $defaultDataTableDTO->offset,
        limit: $this->get('limit') ?? $defaultDataTableDTO->limit,
        filters: $this->get('filters') ?? $defaultDataTableDTO->filters,

    );

    }


}

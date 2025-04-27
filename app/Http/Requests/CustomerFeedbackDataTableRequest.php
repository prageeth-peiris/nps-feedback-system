<?php

namespace App\Http\Requests;

use App\DTO\DataTableDTO;
use Illuminate\Foundation\Http\FormRequest;

class CustomerFeedbackDataTableRequest extends DataTableRequest
{
    public function getValidatedData(): DataTableDTO
    {
        $standard_data_table_dto =  parent::getValidatedData();


        // here only if response_group parameter exists then we convert it to DataTable DTO filters array
        //because this is a special case and it is easy to handle form submission filters this way
        if($this->get('response_group')){

            $standard_data_table_dto->setFilters(

                [...$standard_data_table_dto->getFilters(),[

                    'response_group','=', $this->get('response_group')
                ]]

            );

        }

        return $standard_data_table_dto;

    }


}

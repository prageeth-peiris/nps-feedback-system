<?php

namespace App\Services\DataTable;

use App\Repositories\BaseRepositoryPropertiesContract;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\StreamedResponse;

interface DataExporterContract
{

    // there can be more data exporter formats but each has a write method and
    // each uses this base contract to get  related Model , and query builder object
    public function write(BaseRepositoryPropertiesContract $baseRepositoryPropertiesContract) : StreamedResponse;

}

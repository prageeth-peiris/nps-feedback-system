<?php

namespace App\Services\DataTable;

use App\Repositories\BaseRepositoryPropertiesContract;

use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CSVExporter implements DataExporterContract
{
    public function write(BaseRepositoryPropertiesContract $baseRepositoryPropertiesContract): StreamedResponse
    {


        $response = new StreamedResponse(function () use ($baseRepositoryPropertiesContract) {
            // Open output stream
            $handle = fopen('php://output', 'w');

            // Get all table data
            // but order by id so no duplicate records in the export
            DB::table($baseRepositoryPropertiesContract->getModel()->getTable())->chunkById(100, function ($chunks) use ($handle) {

                foreach ($chunks as $chunk) {



                    // Convert object to array, write to CSV
                    fputcsv($handle, (array) $chunk);
                }
            });

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="export.csv"');

        return $response;


    }


}

<?php

namespace App\Exports;

use App\Models\SubAgent;
use Maatwebsite\Excel\Concerns\FromCollection;

class SubAgentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SubAgent::all();
    }
}

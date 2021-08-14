<?php

namespace App\Exports;

use App\Models\Agent;
use Maatwebsite\Excel\Concerns\FromCollection;

class AgentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Agent::all();
    }
}

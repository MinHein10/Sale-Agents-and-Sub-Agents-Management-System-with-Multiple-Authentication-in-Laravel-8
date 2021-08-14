<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\AgentExport;
use App\Imports\AgentImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelAgentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
    * @return \Illuminate\Support\Collection
    */

    public function importExportView()
    {
       return view('import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new AgentExport, 'agents.xlsx');
    }

        /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new AgentImport,request()->file('file'));
        return back();
    }
}

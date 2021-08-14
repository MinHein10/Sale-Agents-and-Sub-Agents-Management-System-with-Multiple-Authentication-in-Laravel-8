<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\SubAgentExport;
use App\Imports\SubAgentImport;
use Maatwebsite\Excel\Facades\Excel;


class ExcelSubAgentController extends Controller
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
       return view('subagentimport');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new SubAgentExport, 'subagents.xlsx');
    }

        /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new SubAgentImport,request()->file('file'));
        return back();
    }
}

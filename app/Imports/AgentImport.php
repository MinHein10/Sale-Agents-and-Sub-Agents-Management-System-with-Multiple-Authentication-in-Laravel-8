<?php

namespace App\Imports;

use App\Models\Agent;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;


class AgentImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Agent([
            'name'     => $row['name'],
            'region'   => $row['region'],
            'township' => $row['township'],
            'phno'      => $row['phno'],
            'address'   => $row['address'],
            'email'    => $row['email'],
            'password' => Hash::make($row['password']),
        ]);
    }
}

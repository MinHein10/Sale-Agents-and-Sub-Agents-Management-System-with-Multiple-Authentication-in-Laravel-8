<?php

namespace App\Imports;

use App\Models\SubAgent;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;



class SubAgentImport implements ToModel, WithHeadingRow
{
      /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SubAgent([
            'name'     => $row['name'],
            'agent_id' => $row['agent_id'],
            'region'   => $row['region'],
            'township' => $row['township'],
            'phno'      => $row['phno'],
            'address'   => $row['address'],
            'email'    => $row['email'],
            'password' => Hash::make($row['password']),
        ]);
    }
}

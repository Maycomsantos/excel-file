<?php

namespace App\Imports;

use App\Models\Finance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class FinanceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Finance([
            'mes'           =>  $row[0],
            'initial'       =>  $row[1],
            'yield'         =>  $row[2],
            'admin'         =>  $row[3],
            'inflation'     =>  $row[4],
            'contribution'  =>  $row[5],
            'final_value'   =>  $row[6],

        ]);
    }

    // public function sheets(): array
    // {
    //     return [
    //         new FinanceImport()
    //     ];
    // }
}

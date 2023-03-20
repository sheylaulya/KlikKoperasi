<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name' => $row[1],
            'image' => $row[2],
            'author' => $row[3],
            'publish' => $row[4],
            'publisher' => $row[5],
            'detail' => $row[6],
            'page' => $row[7],
            'genre' => $row[8],
            'price' => $row[9],
            'file' => $row[10],
        ]);
    }
}

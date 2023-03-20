<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;


class EmployeeExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'name',
            'image Name',
            'Author',
            'Publish',
            'Publisher',
            'Detail',
            'page',
            'genre',
            'price',
            'file',
            'created_at',
            'updated_at',
        ];
    }

    public function drawings()
    {
        $data = Product::all();
        $drawings = [];
        foreach($data as $key=>$product)
        {
            $drawing = new Drawing();
            $drawing->setPath(public_path($product->image));
            $drawing->setHeight(50);
            $drawing->setWidth(120);
            $drawing->setCoordinates('P'.($key+1));
            $drawings [] = ($drawing);
        }
        return $drawings;
    }

}

<?php

namespace App\Exports;

use App\Models\borrow;
use Maatwebsite\Excel\Concerns\FromCollection;

class borrowExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return borrow::all();
    }
}

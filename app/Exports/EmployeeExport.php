<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection, WithHeadings
{

    public function headings(): array
    {
        return [
            'Id',
            'Nmae',
            'Email',
            'Phone',
            'Salary',
            'Department',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employee::select('id', 'name', 'email', 'phone', 'salary', 'department')->get();
    }
}

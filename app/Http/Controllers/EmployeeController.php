<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeeDataTable;
use App\Models\Employee;
use PDF;
use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index', ['employees' => Employee::all()]);
    }

    public function export()
    {
        return Excel::download(new EmployeeExport, 'employees.xlsx');
    }

    public function exportCSV()
    {
        return Excel::download(new EmployeeExport, 'employees.csv');
    }

    public function importCSV(Request $request)
    {
        Excel::import(new EmployeeImport, $request->file);
        return back();
    }

    public function exportPDF()
    {
        return PDF::loadView('employees.index', ['employees' => Employee::all()])->download('employees.pdf');
    }

    public function indexDataTable(EmployeeDataTable $dataTable)
    {
        return $dataTable->render('employees.data-table');
    }
}

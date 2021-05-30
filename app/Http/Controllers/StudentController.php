<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index', ['students' => Student::latest()->paginate(10)]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $fileName);

        $student = Student::create([
            'name' => $name,
            'image' => $fileName,
        ]);

        return back()->with('status', "El estudiante $student->name se ha registrado con exito");
    }

    public function edit($id)
    {
        return view('students.edit', ['student' => Student::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $name = $request->name;
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $fileName);

        $student = Student::findOrFail($id);
        unlink(public_path('images/' . $student->image));
        $student->update([
            'name' => $name,
            'image' => $fileName,
        ]);

        return back()->with('status', "El estudiante $student->name se ha actualizado con exito");
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        unlink(public_path('images/' . $student->image));
        $student->delete();
        return back()->with('status', "El estudiante $student->name se ha eliminado con exito");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::with('students')->get();
        return view('admin.classroom.index', [
            'title' => 'Classroom Page',
            'classrooms' => $classrooms,
        ]);
    }

    public function create()
    {
        return view('admin.classroom.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'major' => 'required|string|max:50',
        ]);
        Classroom::create($validated);

        return redirect()->route('admin.classrooms.index')->with('success', 'Data kelas berhasil ditambahkan.');
    }

}

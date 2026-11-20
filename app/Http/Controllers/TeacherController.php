<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teacher.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teacher.create', ['subjects' => Subject::all()]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'niy' => 'required|integer|max_digits:5|unique:teachers,niy',
            'subjects_id' => 'required|exists:subjects,id',
            'start_date' => 'required|date',
        ], [
            'niy.max_digits' => 'NIY tidak boleh lebih dari 5 angka.',
            'niy.unique' => 'NIY sudah digunakan oleh guru lain.',
        ]);

        Teacher::create($validated);

        return redirect()->route('admin.teachers.index')->with('success', 'Data guru berhasil ditambahkan.');
    }
}

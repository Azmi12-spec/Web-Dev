<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('teachers')->get();
        return view('admin.subject.index', compact('subjects'));
    }

    public function create()
    {
        return view('admin.subject.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name']
            );
        Subject::create($validated);



        return redirect()->route('admin.subjects.index')->with('success', 'Data mata pelajaran berhasil ditambahkan.');
    }

}

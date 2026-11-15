<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        return view('admin.about', [
            'title' => 'About Page',
            'nama' => 'Muhammad Shofa Azmi',
            'kelas' => 'XII RPL 3']);

    }
}

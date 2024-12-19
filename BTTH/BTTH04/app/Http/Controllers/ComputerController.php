<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Computer;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        return view('computers.index', compact('computers'));
    }
}

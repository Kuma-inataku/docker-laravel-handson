<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        $samples = Sample::all();
        return view('index', compact('samples'));
    }

    // // todo
    // public function show()
    // {
    //     return view('show');
    // }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
        ]);

        $sample = Sample::create([
            'title' => $validated["title"],
        ]);

        return redirect()->route('index')->with('success', 'Stored title:'.$sample->title);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Gutenberg;
use Illuminate\Http\Request;

class GutenbergController extends Controller
{
    public function index()
    {
        $gutenbergs = Gutenberg::all()->sortBy('created_at');

        return view('gutenbergs.index', compact('gutenbergs'));
    }

    public function create(Gutenberg $gutenberg)
    {
        return view('gutenbergs.create', compact('gutenberg'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'inhoud' => 'required',

        ]);

        Gutenberg::create([
            'inhoud' => $request->inhoud,

        ]);

        return redirect()->route('gutenbergs.index')->with('success', 'Gutenberg created successfully.');
    }


    public function edit(Gutenberg $gutenberg)
    {
        $gutenbergs = Gutenberg::all();

        return view('gutenbergs.edit', compact('gutenberg'));
    }

    public function update(Request $request, Gutenberg $gutenberg)
    {
        $request->validate([
            'inhoud' => 'required',

        ]);

        $gutenberg->update([
            'inhoud' => $request->inhoud,

        ]);

        return redirect()->route('gutenbergs.index')->with('success', 'Gutenberg edited successfully.');
    }

}

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

    public function show(Gutenberg $gutenberg)
    {
        return view('gutenbergs.show', compact('gutenberg'));

    }

    public function create(Gutenberg $gutenberg)
    {
        return view('gutenbergs.create', compact('gutenberg'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'titel' => 'required',
            'inhoud' => 'required',
            'slug' => 'required',
        ]);

//        $clean_inhoud = strip_tags($request->inhoud);

        Gutenberg::create([
            'titel' => $request->titel,
//            'inhoud' => $clean_inhoud,
            'inhoud' => $request->inhoud,
            'slug' => $request->slug,
        ]);

        return redirect()->route('gutenbergs.index')->with('success', 'Gutenberg created successfully.');
    }


    public function edit(Gutenberg $gutenberg)
    {
        return view('gutenbergs.edit', compact('gutenberg'));
    }

    public function update(Request $request, Gutenberg $gutenberg)
    {
        $request->validate([
            'titel' => 'required',
            'inhoud' => 'required',
            'slug' => 'required',
        ]);

        $clean_inhoud = strip_tags($request->inhoud);

        $gutenberg->update([
            'titel' => $request->titel,
            'inhoud' => $clean_inhoud,
//            'inhoud' => $request->inhoud,
            'slug' => $request->slug,
        ]);

        return redirect()->route('gutenbergs.index')->with('success', 'Gutenberg edited successfully.');
    }

    public function destroy(Gutenberg $gutenberg)
    {
        try {
            $gutenberg->delete();
            return redirect()->route('gutenbergs.index')->with('warning', 'Gutenberg delete successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('alert', 'An error occurred while deleting the gutenberg.');
        }
    }

}

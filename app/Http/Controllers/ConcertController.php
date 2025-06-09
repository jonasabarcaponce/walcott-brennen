<?php

namespace App\Http\Controllers;

use App\Models\Concerts;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    /**
     * Display a listing of published concerts.
     */
    public function index()
    {
        $concerts = Concerts::where('is_published', true)
            ->orderBy('date')
            ->orderBy('start_time')
            ->get();

        return view('concerts.index', compact('concerts'));
    }

    public function show(Concerts $concert)
    {
        return view('concerts.show', compact('concert'));
    }

    public function create()
    {
        return view('concerts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add your validation rules here
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'start_time' => 'required',
            // Add other fields as needed
        ]);

        $concert = Concerts::create($validated);

        return redirect()->route('concerts.show', $concert);
    }

    public function edit(Concerts $concert)
    {
        return view('concerts.edit', compact('concert'));
    }

    public function update(Request $request, Concerts $concert)
    {
        $validated = $request->validate([
            // Add your validation rules here
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'start_time' => 'required',
            // Add other fields as needed
        ]);

        $concert->update($validated);

        return redirect()->route('concerts.show', $concert);
    }

    public function destroy(Concerts $concert)
    {
        $concert->delete();

        return redirect()->route('concerts.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Concerts;

class ConcertsController extends Controller
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

        return view('welcome', compact('concerts'));
    }
}

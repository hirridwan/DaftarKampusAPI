<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UniversityController extends Controller
{
    public function index()
    {
        $response = Http::get('http://universities.hipolabs.com/search?country=Indonesia');
        $universities = $response->json();
        $sortedUniversities = collect($universities)->sortBy('name')->values()->all();

        // dd($universities);

        return view('index',compact('sortedUniversities'));
    }
}

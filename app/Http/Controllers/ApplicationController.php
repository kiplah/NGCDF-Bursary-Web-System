<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function create()
    {
        return view('application.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
    'full_name' => 'required|string',
    'gender' => 'required',
    'phone' => 'nullable|string',
    'institution_name' => 'required|string',
    'institution_code' => 'nullable|string',
    'mode_of_study' => 'nullable|string',
    'family_status' => 'nullable|string',
    'why_bursary' => 'nullable|string',
    'disability' => 'required|boolean',
    'disability_description' => 'nullable|string',
    'amount_requested' => 'nullable|integer',
]);

        Application::create($validated);

        return redirect()->route('application.create')->with('success', 'Application submitted successfully!');
    }
}

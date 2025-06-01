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
            // 👇 FILE VALIDATION RULES
            'id_copy' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'transcript' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'admission_letter' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // 👇 HANDLE FILE UPLOADS
        if ($request->hasFile('id_copy')) {
            $validated['id_copy_path'] = $request->file('id_copy')->store('uploads', 'public');
        }

        if ($request->hasFile('transcript')) {
            $validated['transcript_path'] = $request->file('transcript')->store('uploads', 'public');
        }

        if ($request->hasFile('admission_letter')) {
            $validated['admission_letter_path'] = $request->file('admission_letter')->store('uploads', 'public');
        }

        // 👇 Save to database
        Application::create($validated);

        return redirect()->route('application.create')->with('success', 'Application submitted successfully!');
    }
    public function show($id)
    {
        $application = Application::findOrFail($id);
        return view('application.show', compact('application'));
    }

    public function index()
    {
        //$applications = Application::all();
        //return view('application.index', compact('applications'));
        $applications = \App\Models\Application::latest()->get();
        return view('admin.index', compact('applications'));
    }
}

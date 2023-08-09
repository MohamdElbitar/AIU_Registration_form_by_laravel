<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class FormController extends Controller
{


    // public function showForm()
    // {
    //     return view('form');
    // }

    // public function processForm(Request $request)
    // {

    //     // Validation rules
    //     $rules = [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'national_id' => 'required|string|max:14',
    //         'phone' => 'required|string|max:11',
    //         'cv' => 'required|mimes:pdf,doc,docx|max:2048', // adjust file size if needed
    //     ];

    //     // Validate form data
    //     $request->validate($rules);

    //     // Process the uploaded CV file
    //     if ($request->hasFile('cv')) {
    //         $cvPath = $request->file('cv')->store('cvs', 'public');
    //     }
    //     UserData::create([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'national_id' => $request->input('national_id'),
    //         'phone' => $request->input('phone'),
    //         'cv' => $cvPath, // Store the path to the file
    //     ]);

    //     // dd( $request);

    //     // You can save the form data to a database if needed
    //     // For now, just return the success view
    //     return view('success');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {

      $validator=  $request->validate([
            'full_name_arabic' => 'required',
            'full_name_english' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|date',
            'birth_country' => 'required',
            'birth_city' => 'required',
            'mobile_number' => 'required',
            'email' => 'required|email',
            'national_id_number' => 'required',
            'national_id_passport_copy' => 'required|file|mimes:pdf,jpg,png',
            'residential_region_city' => 'required',
            'residential_address' => 'required',
            'guardian_name_arabic' => 'required',
            'guardian_national_id' => 'required',
            'guardian_mobile_number' => 'required',
            'guardian_email' => 'required|email',
            'certificate_issue_country' => 'required',
            'certificate_issue_city_region' => 'required',
            'school_name' => 'required',
            'seating_number' => 'required',
            'school_graduation_year' => 'required',
            'certificate_type' => 'required',
            'total_score' => 'required',
            'percentage' => 'required',
        ]);
        // dd($request);
        if ($validator->fails()) {
            return redirect()->route('student-data.create')
                ->withErrors($validator)
                ->withInput();
        }

        UserData::create($request->all());

        return redirect()->route('home')->with('success', 'Student data submitted successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

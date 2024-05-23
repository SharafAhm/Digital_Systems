<?php

namespace App\Http\Controllers;
use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{


public function index()
{
    $services = Service::all();
    return view('services.index', compact('services'));

    
}
public function store(Request $request)
{
    // Validate the input data
    $validated = $request->validate([
        'description' => 'required|string',
        'other_description' => 'required|string',
        'date' => 'required|date',
    ]);

    // Process the data (e.g., save to database)

    // Redirect to a success page or back to the form with a success message
    return back()->with('success', 'Form submitted successfully!');
}

}


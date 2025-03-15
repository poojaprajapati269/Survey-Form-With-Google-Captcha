<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{

    public function index()
    {
        $surveys = Survey::latest()->get();  // Fetch latest surveys
        return view('survey.index', compact('surveys'));
    }

    public function create()
    {
        return view('survey.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'service_name' => 'required',
        'rating' => 'required|integer|min:1|max:5',
        'satisfaction' => 'required',
        'reason' => 'required',
        'comment' => 'nullable|string',
        'g-recaptcha-response' => 'required|captcha'
    ], [
        'g-recaptcha-response.required' => 'Please complete the CAPTCHA verification.',
        'g-recaptcha-response.captcha' => 'CAPTCHA verification failed, please try again.'
    ]);

    try {
        Survey::create($request->all());
        return redirect()->back()->with('success', 'Survey submitted successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Something went wrong. Please try again.');
    }
}


}


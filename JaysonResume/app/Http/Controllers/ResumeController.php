<?php

namespace App\Http\Controllers;
use App\Models\JaysonResume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resume = JaysonResume::with(['experiences', 'education', 'skills', 'certifications', 'languages', 'achievement'])->first();
        return view('jaysonresume', compact('resume'));
    }
}

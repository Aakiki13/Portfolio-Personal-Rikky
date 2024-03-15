<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
use Carbon\Carbon;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::all();

        return view('resume.index', compact('resumes'));
    }

    public function create()
    {
        return view('resume.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            // Validasi data sesuai dengan field yang ada di model Resume
        ]);

        // Mengubah format tanggal menggunakan Carbon jika diperlukan
        $data['experience_start_date'] = Carbon::parse($data['experience_start_date']);
        $data['experience_end_date'] = Carbon::parse($data['experience_end_date']);
        $data['education_start_date'] = Carbon::parse($data['education_start_date']);
        $data['education_end_date'] = Carbon::parse($data['education_end_date']);

        Resume::create($data);

        return redirect()->route('resume.index')->with('success', 'Resume created successfully.');
    }

    public function show(Resume $resume)
    {
        return view('resume.show', compact('resume'));
    }

    public function edit(Resume $resume)
    {
        return view('resume.edit', compact('resume'));
    }

    public function update(Request $request, Resume $resume)
    {
        $data = $request->validate([
            // Validasi data sesuai dengan field yang ada di model Resume
        ]);

        // Mengubah format tanggal menggunakan Carbon jika diperlukan
        $data['experience_start_date'] = Carbon::parse($data['experience_start_date']);
        $data['experience_end_date'] = Carbon::parse($data['experience_end_date']);
        $data['education_start_date'] = Carbon::parse($data['education_start_date']);
        $data['education_end_date'] = Carbon::parse($data['education_end_date']);

        $resume->update($data);

        return redirect()->route('resume.index')->with('success', 'Resume updated successfully.');
    }

    public function destroy(Resume $resume)
    {
        $resume->delete();

        return redirect()->route('resume.index')->with('success', 'Resume deleted successfully.');
    }
}

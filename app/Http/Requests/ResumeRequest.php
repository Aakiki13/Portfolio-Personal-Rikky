<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class ResumeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'experience_title' => 'required|string|max:255',
            'experience_description' => 'required|string',
            'experience_start_date' => 'required|date',
            'experience_end_date' => 'nullable|date|after_or_equal:experience_start_date',
            'education_title' => 'required|string|max:255',
            'education_description' => 'required|string',
            'education_start_date' => 'required|date',
            'education_end_date' => 'nullable|date|after_or_equal:education_start_date',
            'professional_skills' => 'nullable|string',
            'languages' => 'nullable|string',
            // Tambahkan validasi lainnya sesuai dengan kebutuhan Anda
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'experience_start_date' => Carbon::parse($this->experience_start_date),
            'experience_end_date' => Carbon::parse($this->experience_end_date),
            'education_start_date' => Carbon::parse($this->education_start_date),
            'education_end_date' => Carbon::parse($this->education_end_date),
        ]);
    }
}


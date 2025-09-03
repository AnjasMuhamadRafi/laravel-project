<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => 'required|string|max:255|min:2',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20|min:10',
            'position' => 'nullable|string|max:255',
            'experience' => 'nullable|string|in:0-1,1-3,3-5,5+',
            'cover_letter' => 'required|string|min:50|max:2000',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB max
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'Full name is required.',
            'full_name.min' => 'Full name must be at least 2 characters.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'phone.required' => 'Phone number is required.',
            'phone.min' => 'Phone number must be at least 10 digits.',
            'cover_letter.required' => 'Cover letter is required.',
            'cover_letter.min' => 'Cover letter must be at least 50 characters.',
            'cover_letter.max' => 'Cover letter cannot exceed 2000 characters.',
            'resume.required' => 'Resume/CV is required.',
            'resume.mimes' => 'Resume must be a PDF, DOC, or DOCX file.',
            'resume.max' => 'Resume file size cannot exceed 5MB.',
        ];
    }

    protected function prepareForValidation()
    {
        // Clean and format phone number
        if ($this->phone) {
            $phone = preg_replace('/[^0-9+]/', '', $this->phone);
            $this->merge(['phone' => $phone]);
        }

        // Clean full name
        if ($this->full_name) {
            $this->merge(['full_name' => trim($this->full_name)]);
        }
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            // Additional custom validation
            if ($this->hasFile('resume')) {
                $file = $this->file('resume');

                // Check if file is corrupted
                if (!$file->isValid()) {
                    $validator->errors()->add('resume', 'The uploaded file is corrupted. Please try again.');
                }

                // Additional file type checking using file content
                $allowedMimes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
                if (!in_array($file->getMimeType(), $allowedMimes)) {
                    $validator->errors()->add('resume', 'Invalid file type detected. Only PDF, DOC, and DOCX files are allowed.');
                }
            }
        });
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class UpdateMetaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->role === 'admin' || auth()->user()->role === 'client';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'subtitle' => ['required', 'max:255'],
            'greeting_headline' => ['required', 'max:255'],
            'greating_description' => ['required', 'max:2000'],
            'email_address' => ['required', 'max:255'],
            'github_link' => ['required', 'max:255'],
            'cv' => ['nullable', 'mimes:pdf', 'max:512'],
            'profile_photo' => ['nullable', 'mimes:png,jpg,jpeg', 'max:1024'],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Project;

class UpdateProjectRequest extends FormRequest
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
            'title' => ['required', 'max:255'],
            'client' => ['required', 'max:255'],
            'content' => ['required', 'max:2000'],
            'language' => ['required', Rule::in(Project::LANGUAGES)],
            'cover_image' => ['nullable', 'mimes:png,jpg,jpeg', 'max:1024'],
            'links' => ['nullable', 'max:2000'],
        ];
    }
}

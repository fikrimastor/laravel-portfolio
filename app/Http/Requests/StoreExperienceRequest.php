<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExperienceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'entity_name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'entity_website_url' => ['nullable', 'url'],
            //            'entity_logo_url' => ['nullable', 'url'],
            //            'start_at' => ['required', 'date'],
            //            'end_at' => ['required', 'date'],
            //            'role' => ['required', 'string', 'max:255'],
            //            'responsibility' => ['nullable', 'string'],
            'is_active' => ['required', 'boolean'],
        ];
    }
}

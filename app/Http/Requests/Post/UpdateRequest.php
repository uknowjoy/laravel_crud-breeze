<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Set authorization to true to allow any user to make this request.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Define validation rules for the request.
        return [
            'title' => 'required|string|min:3|max:250',
            'content' => 'required|string|min:3|max:6000',
            'featured_image' => 'nullable|image|max:1024|mimes:jpg,jpeg,png',
        ];
    }
}

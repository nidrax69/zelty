<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'sometimes|required|string|max:128',
            'content' => 'sometimes|required|string',
            'status' => 'sometimes|required|in:draft,published',
            'published_at' => 'sometimes|nullable|date_format:Y-m-d H:i:s|after:now',
        ];
    }
}
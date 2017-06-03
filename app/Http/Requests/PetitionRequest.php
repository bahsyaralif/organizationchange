<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetitionRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:255',
            'body' => 'required|between:20,255'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'judul tidak boleh dikosongkan',
            'title.between' => 'judul harus minimal 20 dan maksimal 255 karakter',
            'body.required' => 'deskripsi tidak boleh dikosongkan',
            'body.between' => 'deskripsi minimal 20 dan maksimal 255 karakter'
        ];
    }
}

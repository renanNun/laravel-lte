<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
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
            'profile_path' => 'required|image|mimes:jpeg,png,bmp,svg,webp|max:5120',
        ];
    }

    public function attributes(){
        return[
            'profile_path' => 'imagem',
        ];
    }
}

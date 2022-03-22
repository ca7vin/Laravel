<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessRequest extends FormRequest
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
            'titreTop' => 'required|max:120',
            'titreMid' => 'required|max:120',
            'titreBottom' => 'required|max:120',
            'image' => 'required',
            'texte' => 'required',
            'lien' => 'required',
        ];
    }
}
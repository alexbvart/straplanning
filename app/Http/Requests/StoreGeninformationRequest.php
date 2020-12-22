<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGeninformationRequest extends FormRequest
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
            'mission' => 'required|min:8',
            'vision' => 'required|min:8',
            'valueProposition' => 'required|min:8',
            'differentiatingFactor' => 'required|min:8',
            'project_id' => 'required'
        ];
    }
}

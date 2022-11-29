<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
    public function messages()
    {
        return [
            'name.required' => 'O campo Nome é obrigatório',
            'quality.required' => 'O campo Qualidade é obrigatório',
        ];
    }

    public function rules()
    {
        switch (strtolower($this->route()->getActionMethod())):
            case 'create_brand':
                return [
                    'name' => 'required|string',
                    'quality' => 'required|string',
                ];
                break;
            case 'update_brand':
                return [
                    'name' => 'required|string',
                    'quality' => 'required|string',
                ];
                break;
            default:
                return [];
                break;
        endswitch;
    }
}

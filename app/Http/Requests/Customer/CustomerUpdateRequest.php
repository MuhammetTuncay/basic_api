<?php

namespace App\Http\Requests\Customer;

use App\Models\Customer;
use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
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
            'name' => [
                'required',
            ],
            'since' => [
                'required',
                'date',
            ],
            'revenue' => [
                'required',
                'integer',
            ],
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributes()
    {
        return Customer::$labels;
    }
}

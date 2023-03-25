<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "date_start" => ["date_format:Y-m-d", "required"],
            "date_end" => ["date_format:Y-m-d", "required"],
            "status" => ["required", "string", "in:open,closed"],
            "location_name" => ["required", "string", "max:100"],
            "location_description" => ["required", "string", "max:750"],
        ];
    }
}
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'nullable|boolean',
            'percentage' => 'required|integer|min:0|max:100',
            'start_task' => 'nullable|date',
            'end_task' => 'nullable|date|after_or_equal:startTask',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => __('validation.required'),
            'title.string' => __('validation.string'),
            'title.max' => __('validation.max'),
            'completed.required' => __('validation.required'),
            'completed.boolean' => __('validation.boolean'),
            'percentage.required' =>  __('validation.required'),
            'percentage.integer' => 'The percentage must be an integer.',
            'percentage.min' =>  __('validation.min_percentage'),
            'percentage.max' => __('validation.max_percentage'),
            'start_task.date' => __('validation.startTask'),
            'end_task.date' => __('validation.endTask'),
            'endTask.after_or_equal' => __('validation.after_or_equal'),

        ];
    }
}

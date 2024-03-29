<?php

namespace App\Http\Requests\Lectures;

use Illuminate\Foundation\Http\FormRequest;

class CreateLectureRequest extends FormRequest
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
            'name' => 'required|unique:lectures',
            'lecture_date' => 'required',
            'meeting_name' => 'required|unique:lectures',
            'meeting_password' => 'required',
        ];
    }
}

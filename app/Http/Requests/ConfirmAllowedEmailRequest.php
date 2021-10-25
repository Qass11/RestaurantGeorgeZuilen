<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmAllowedEmailRequest extends FormRequest
{
    public string $email;

    public function __construct($email) {
        $this->email = $email;
    }

    public function passes($attribute, $value) {
        $allowed = [
            '@student.mboutrecht.nl',
        ];

        return array_map(fn($mail) => str_contains($this->email, $mail) ? true : false, $allowed);
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}

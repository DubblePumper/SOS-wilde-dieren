<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'subject' => ['required', 'string', 'max:160'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
            'website' => ['prohibited'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vul je naam in.',
            'email.required' => 'Vul je e-mailadres in.',
            'email.email' => 'Vul een geldig e-mailadres in.',
            'subject.required' => 'Kies of vul een onderwerp in.',
            'message.required' => 'Schrijf je bericht.',
            'message.min' => 'Schrijf een bericht van minstens :min tekens.',
            'website.prohibited' => 'Het formulier kon niet worden verzonden.',
        ];
    }
}

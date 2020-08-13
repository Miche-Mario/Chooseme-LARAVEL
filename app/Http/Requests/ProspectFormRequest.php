<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProspectFormRequest extends FormRequest
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
            'nom'=>'required|min:3',
            'prenom'=>'required|min:3',
            'email'=>'required|email|unique:prospects'
        ];
    }

    public function messages()
    {
        return [
            'nom.required'=>'Veuillez entrer votre nom.',
            'prenom.required'=>'Veuillez entrer votre prenom.',
            'email.required'=>'Veuillez entrer votre adresse email.',
            'min'=>'Veuillez entrer votre nom et prénom.',
            'unique'=>'Cet email est déja utilisé.',
            'email'=>'Veuillez saisir un email valide.',
        ];
    }
}

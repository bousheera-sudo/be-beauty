<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddArticleRequest extends FormRequest
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
            'titre' => 'required|min:5',
            'contenu' => 'required|min:10',
            'categorie' => 'required',
            'image' => 'required|image|max:2048',
            'prix' => 'required|numeric|min:0'
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Le titre est obligatoire.',
            'titre.min' => 'Le titre doit faire au moins 5 caractères.',
            'contenu.required' => 'La description est obligatoire.',
            'contenu.min' => 'La description est trop courte.',
            'categorie.required' => 'Veuillez choisir une catégorie.',
            'image.required' => 'Une image est requise.',
            'image.image' => 'Le fichier doit être une image.',
            'image.max' => 'L\'image ne doit pas dépasser 2Mo.',
            'prix.required' => 'Le prix est obligatoire.',
            'prix.numeric' => 'Le prix doit être un nombre.',
            'prix.min' => 'Le prix ne peut pas être négatif.'
        ];
    }
}

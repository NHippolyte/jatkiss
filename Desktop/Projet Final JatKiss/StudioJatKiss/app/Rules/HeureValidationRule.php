<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class HeureValidationRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        
    }

    public function passes($attribute, $value)
    {
        // Ajoutez ici la logique de validation pour l'heure au format "HH:MM"
        return preg_match('/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/', $value);
    }

    public function message()
    {
        return 'Le champ :attribute doit être au format HH:MM.';
    }
}

<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PhoneNumber implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!(substr($value, 0, 1) == '+' && strlen($value) == 14)) {
            $fail('Telifon raqam + bilan boshlanib 13 ta raqamdan iborat bo\'lishi kk');
        }
    }
}

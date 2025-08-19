<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use function Illuminate\Tests\Integration\Routing\fail;

class CheckProfile implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^@[a-zA-Z0-9]+$/', $value)) {
            $fail("Atencao! P $value");
        }
    }
}

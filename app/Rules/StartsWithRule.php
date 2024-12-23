<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\ValidatorAwareRule;
use Illuminate\Translation\PotentiallyTranslatedString;
use Illuminate\Validation\Validator;
use Override;

class StartsWithRule implements ValidationRule, ValidatorAwareRule
{
    protected Validator $validator;

    #[Override]
    public function setValidator(Validator $validator): static
    {
        $this->validator = $validator;

        return $this;
    }

    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=):PotentiallyTranslatedString  $fail
     */
    #[Override]
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // validation logic
    }
}

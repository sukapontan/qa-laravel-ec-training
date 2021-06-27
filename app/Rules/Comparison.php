<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Comparison implements Rule
{
    private $purchase_price;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($purchase_price)
    {
        $this->purchase_price = $purchase_price;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->purchase_price < $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '販売単価は仕入れ単価より上にしてください';
    }
}

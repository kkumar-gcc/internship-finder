<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CountryEnum extends Enum
{
    const Nigeria = "Nigeria";
    const Canada =   "Canada";
    const Germany = "Germany";
}

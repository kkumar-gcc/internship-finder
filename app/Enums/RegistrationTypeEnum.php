<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class RegistrationTypeEnum extends Enum
{
    const Organisation = "Organisation";
    const Intern = "Intern";
}

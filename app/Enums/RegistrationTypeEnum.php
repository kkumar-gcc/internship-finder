<?php

namespace App\Enums;

use Illuminate\Validation\Rules\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */

final class RegistrationTypeEnum extends Enum{
const Intern = 'Intern';
const Organisation = "Organisation";
}

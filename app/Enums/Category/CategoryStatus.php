<?php

namespace App\Enums\Category;

use App\Support\Enum;

enum CategoryStatus: int
{
    use Enum;

    case Draft = 1;
    case Published = 2;
}

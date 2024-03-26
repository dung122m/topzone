<?php

namespace App\Enums\Post;

use App\Support\Enum;

enum PostFeature: int
{
    use Enum;

    case No = 0;
    case Yes = 1;
    
}

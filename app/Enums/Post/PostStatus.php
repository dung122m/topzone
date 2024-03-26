<?php

namespace App\Enums\Post;

use App\Support\Enum;

enum PostStatus: int
{
    use Enum;

    case Hide = 0;
    case Show = 1;
    
}

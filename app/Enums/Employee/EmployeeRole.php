<?php

namespace App\Enums\Employee;

use App\Support\Enum;

enum EmployeeRole: int
{
    use Enum;

    case Employee = 1;
    case Manager = 2;
}

<?php

namespace App\Admin\Http\Requests\Employee;

use App\Admin\Http\Requests\BaseRequest;
use App\Enums\Employee\EmployeeRole;
use Illuminate\Validation\Rules\Enum;
use App\Enums\Employee\{EmployeeGender};

class EmployeeRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function methodPost()
    {
        return [
            'username' => [
                'required', 
                'string', 'min:6', 'max:50',
                'unique:App\Models\User,username', 
                'regex:/^[A-Za-z0-9_-]+$/',
                function ($attribute, $value, $fail) {
                    if (in_array(strtolower($value), ['admin', 'user', 'password'])) {
                        $fail('The '.$attribute.' cannot be a common keyword.');
                    }
                },
            ],
            'fullname' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:App\Models\Employee,email'],
            'roles' => ['required', new Enum(EmployeeRole::class)],
            
            'gender' => ['required', new Enum(EmployeeGender::class)],
            'password' => ['required', 'string', 'confirmed'],
            
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => ['required', 'exists:App\Models\Employee,id'],
            'username' => [
                'required', 
                'string', 'min:6', 'max:50',
                'unique:App\Models\Employee,username,'.$this->id, 
                'regex:/^[A-Za-z0-9_-]+$/',
                function ($attribute, $value, $fail) {
                    if (in_array(strtolower($value), ['admin', 'user', 'password'])) {
                        $fail('The '.$attribute.' cannot be a common keyword.');
                    }
                },
            ],
            'fullname' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:App\Models\Employee,email,'.$this->id],
            
            'gender' => ['required', new Enum(EmployeeGender::class)],
            'password' => ['nullable', 'string', 'confirmed'],
            
        ];
    }
}

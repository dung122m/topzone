<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Enums\Employee\{EmployeeRole, EmployeeGender};
class Employee extends Model
{
     use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
       
        'username',
        'fullname',
        'email',
        'date',
        'gender',
      
        'password',
        'roles',
    
    ];
        protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        
        'roles' => EmployeeRole::class,
        'gender' => EmployeeGender::class,
        
    ];
}

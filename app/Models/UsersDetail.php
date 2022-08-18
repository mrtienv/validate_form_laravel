<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersDetail extends Model
{
    protected $fillable = ['first_name',
    'last_name',
    'email',
    'password',
    'confirm_password',
    'gender',
    'status'
]; 
    use HasFactory;
}

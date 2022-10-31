<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'personal_number',
        'image',
        'title_preffix',
        'last_name',
        'first_name',
        'title_suffix',
        'department_id',
        'job_id',
        'email',
        'phone',
        'mobile',
        'id_card',
        'id_color',
        'coffee',
        'employment',
        'status'
    ];
}

<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Department;
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
        'middle_name',
        'married_name',
        'title_suffix',
        'department_id',
        'job_id',
        'email',
        'start_date',
        'end_date',
        'comment',
        'phone',
        'mobile',
        'id_card',
        'id_color',
        'coffee',
        'employment',
        'status'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}

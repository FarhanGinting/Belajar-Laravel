<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentExctracurricular extends Model
{
    use HasFactory;
    protected $table = 'student_extracurricular';

    protected $fillable = [
        'student_id ',
        'exctracurriculars_id ',
    ];
}

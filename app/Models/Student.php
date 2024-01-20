<?php

namespace App\Models;

use App\Models\ClassRoom;
use App\Models\Exctracurricular;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    // protected $table = 'students';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';

    // public $timestamps = false;

    protected $fillable = [
        'name',
        'gender',
        'nis',
        'class_id'
        
    ];

    
    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function extracurriculars()
    {
        return $this->belongsToMany(Exctracurricular::class, 'student_extracurricular', 'student_id', 'exctracurriculars_id');
    }

}

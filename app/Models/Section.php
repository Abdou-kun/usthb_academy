<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_s',
        'libelle',
        'specialite',
    ];

    // public function student()
    // {
    //     return $this->belongsTo(Student::class, 'code_s');
    // }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

}

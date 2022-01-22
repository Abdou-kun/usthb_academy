<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_m',
        'libelle_m',
        'coef',
        'code_ens',
    ];

    public function enseignant() {
        return $this->belongsTo(Enseignant::class);
    }

    public function etudiants() {
        return $this->belongsToMany(Student::class);
    }
}

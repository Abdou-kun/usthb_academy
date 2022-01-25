<?php

namespace App\Models;

use App\Models\Module;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'group',
        'code_s'
    ];

    protected $primaryKey = 'matricule';

    public function section()
    {
        return $this->belongsTo(Section::class, 'code_s');
    }

    public function modules() {
        return $this->belognsToMany(Module::class);
    }
}

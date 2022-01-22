<?php

namespace App\Models;

use App\Models\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignant extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_ens',
        'nom_ens',
        'prenom_ens',
        'grade',
    ];

    public function modules() {
        return $this->hasMany(Module::class);
    }
}

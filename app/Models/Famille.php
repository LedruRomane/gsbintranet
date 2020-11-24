<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    use HasFactory;

    protected $table = 'medicaments';
    public $timestamps = true;

    protected $casts = [
        'cost' => 'float'
    ];

    protected $fillable = [
        'reference',
        'libelle'
    ];

    public function medicaments()
    {
        return $this->hasMany(Medicament::class, 'idFamille', 'id');
    }
}

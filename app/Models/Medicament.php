<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    use HasFactory;

    protected $table = 'medicaments';

    protected $casts = [
        'cost' => 'float'
    ];

    protected $fillable = [
        'nomCommercial',
        'composition',
        'effets',
        'contreIndications',
        'idFamille'
    ];

    public function famille()
    {
        return $this->belongsTo(Famille::class, 'idFamille','id');
    }
}

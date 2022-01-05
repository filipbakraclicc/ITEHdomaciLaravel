<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zgrada;

class Stanar extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'brojStana',
        'zgrada_id'
    ];

    public function zgrada()
    {
        return $this->belongsTo(Zgrada::class);
    }
}

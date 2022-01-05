<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zgrada;

class Grad extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'drzava',
        'region',
        'postBroj',
        'koordinate'
    ];

    public function zgrade()
    {
        return $this->hasMany(Zgrada::class);
    }
}

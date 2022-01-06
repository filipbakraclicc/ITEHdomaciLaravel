<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grad;
use App\Models\Stanar;

class Zgrada extends Model
{
    use HasFactory;

    protected $fillable = [
        'ulica',
        'brojStanova',
        'brojSpratova',
        'predsednik',
        'email',
        'grad_id'
    ];

    public function grad()
    {
        return $this->belongsTo(Grad::class);
    }

    public function stanari()
    {
        return $this->hasMany(Stanar::class);
    }
}

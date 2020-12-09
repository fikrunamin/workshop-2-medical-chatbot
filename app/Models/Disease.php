<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $table = "diseases";
    protected $guarded = ["id"];
    use HasFactory;

    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class, 'disease_has_symptoms', 'id_disease', 'id_symptom');
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class, 'disease_has_treatments', 'id_disease', 'id_treatment');
    }
}

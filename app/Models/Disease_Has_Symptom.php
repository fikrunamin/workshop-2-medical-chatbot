<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease_Has_Symptom extends Model
{
    protected $table = "disease_has_symptoms";
    protected $guarded = ['id'];
    use HasFactory;

    public function symptoms()
    {
        return $this->belongsTo(Symptom::class, 'id_symptom');
    }
}

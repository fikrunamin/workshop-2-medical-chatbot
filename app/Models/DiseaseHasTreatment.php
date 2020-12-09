<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiseaseHasTreatment extends Model
{
    use HasFactory;

    protected $table = "disease_has_treatments";
    protected $guarded = ['id'];
    use HasFactory;

    public function treatment()
    {
        return $this->belongsTo("App\Models\Treatment", 'id_treatment');
    }
}

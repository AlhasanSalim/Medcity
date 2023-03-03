<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function expertises() {
        return $this->hasMany(Expertise::class, null, 'id');
    }

    public function medicalsEducations() {
        return $this->hasMany(MedicalEducation::class, null, 'id');
    }


    public function openingHours() {
        return $this->hasMany(OpeningHour::class, null, 'id');
    }

    public function pricesLists() {
        return $this->hasMany(PriceList::class, null, 'id');
    }

    public function service() {
        return $this->hasMany(Service::class, null, 'id');
    }

    public function skills() {
        return $this->hasMany(Skill::class, null, 'id');
    }

}

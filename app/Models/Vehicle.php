<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VehicleCharacteristic;
use App\Models\VehicleCondition;
use App\Models\VehicleDescription;
use App\Models\VehicleEquipment;

class Vehicle extends Model
{
    use HasFactory;

    // public function characteristics(){
    //     return $this->hasMany(VehicleCharacteristic::class);
    // }

    // public function condition(){
    //     return $this->hasOne(VehicleCondition::class);
    // }

    // public function description(){
    //     return $this->hasOne(VehicleDescription::class);
    // }

    // public function equipment(){
    //     return $this->belongsTo(VehicleEquipment::class);
    // }
}

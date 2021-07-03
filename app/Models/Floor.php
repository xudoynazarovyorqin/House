<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Podezd;
use App\Models\Apartment;

class Floor extends Model
{
    use HasFactory;
    protected $fillable =[
        'number',
        'podezd_id'
    ];
    public function podezd()
    {
        return $this->belongsTo(Podezd::class,'podezd_id' , 'id');
    }
    public function apartment()
    {
        return $this->hasMany(Apartment::class);
    }
}

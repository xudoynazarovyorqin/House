<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Podezd;

class Dom extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'name',
        'photo',
        'address'
    ];
     public function podezd()
    {
        return $this->hasMany(Podezd::class);
    }
}

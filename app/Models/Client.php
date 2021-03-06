<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apartment;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'apartment_id',
        'fname',
        'lname',
        'phone_number',
        'address'
    ];
    public function apartment()
    {
        return $this->belongsTo(Apartment::class); 
    }
}

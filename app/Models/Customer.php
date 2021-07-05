<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Apartment;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id', 'apartment_id'
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}

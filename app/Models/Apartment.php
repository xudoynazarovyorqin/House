<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Floor;

class Apartment extends Model
{
    use HasFactory;
    protected $fillable = [
        'number', 'name', 'cost', 'floor_id', 'room', 'status'
    ];
    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }
}

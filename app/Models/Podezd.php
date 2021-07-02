<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dom;

class Podezd extends Model
{
    use HasFactory;
    protected $fillable = [
        'number', 'dom_id'
    ];
    public function dom()
    {
        return $this->belongsTo(Dom::class);
    }
    public function floor()
    {
        return $this->hasMany(Floor::class);
    }
}

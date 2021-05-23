<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        "address",
        "bedrooms",
        "bathrooms",
        "total_area",
        "purchased",
        "value",
        "discount",
        "owner_id",
        "expired"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}


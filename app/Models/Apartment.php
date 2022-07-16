<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Apartment extends Model
{

    public function user():BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }
    

    protected $fillable = [
        'title', 
        'description', 
        'daily_price',
        'square_meters',
        'rooms_number', 
        'beds_number',
        'bathrooms_number',
        'image', 
        'visibility', 
        'address', 
        'longitude', 
        'latitude'
    ];
}

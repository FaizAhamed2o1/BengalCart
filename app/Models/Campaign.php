<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'campaign_name'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'campaign_products');
    }
}

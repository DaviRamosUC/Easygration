<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'propertie_id',
        'points',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function properties()
    {
        return $this->belongsTo(Properties::class);
    }
}

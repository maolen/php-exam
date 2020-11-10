<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;

    protected $fillable = [
        'weight' => 'required|min:1|max:300'
    ];

    function user() {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'start_time',
        'end_time',
        'days'
    ];

    protected $casts = [
        "days" => "collection"
    ];


    public function users()
    {
        return $this->hasMany(User::class, 'shift_id');
    }
}
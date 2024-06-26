<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    use HasFactory;
    protected $table = 'surgery';

    protected $fillable = [
        'name',
        'time',
        'doctor_id',
    ];

}

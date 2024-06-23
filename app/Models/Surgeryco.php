<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgeryco extends Model
{
    use HasFactory;

    protected $table = 'nurse_surgery';
    protected $fillable = [
        'nurse_id',
        'surgery_id',
    ];
}

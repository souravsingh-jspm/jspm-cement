<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KeyNoteSpeaker extends Model
{
    use HasFactory;
    protected $fillable = [
        'kns_image',
        'kns_name',
        'kns_designation'
    ];
}
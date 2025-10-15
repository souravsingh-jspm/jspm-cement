<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomePage extends Model
{
        use HasFactory;
    protected $fillable = [
        'home_page_title',
        'about_jspm_group',
        'about_jspm_university_pune',
        'about_soces'
    ];
}
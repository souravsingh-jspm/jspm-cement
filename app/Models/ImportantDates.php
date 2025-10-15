<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImportantDates extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_title',
        'id_date',
        'id_description'
    ];}
<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferanceTheme extends Model
{
    use HasFactory;
    protected $fillable = [
        'ct_id',
        'ct_title',
        'ct_short_description'
    ];}
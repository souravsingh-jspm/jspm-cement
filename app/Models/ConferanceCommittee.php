<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferanceCommittee extends Model
{
    use HasFactory;
    protected $fillable = [
        'role',
        'cc_image',
        'cc_name',
        'cc_designation'
    ];
}
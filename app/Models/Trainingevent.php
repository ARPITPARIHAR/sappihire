<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainingevent extends Model
{
    use HasFactory;

    // Add these attributes to the fillable array
    protected $fillable = [
        'title',
        'pdf_filename',
        'pdf_title',
    ];
}

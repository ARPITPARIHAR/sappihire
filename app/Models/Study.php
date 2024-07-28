<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    public function category()
    {
        return $this->belongsTo(Study::class, 'category_id');
    }
    public function categories()
    {
        return $this->belongsTo(Relive::class, 'category_id');
    }
}
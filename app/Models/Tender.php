<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    public function category()
    {
        return $this->belongsTo(Tender::class, 'category_id');
    }
    public function categories()
    {
        return $this->belongsTo(Tender::class, 'category_id');
    }
}

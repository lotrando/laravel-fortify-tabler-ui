<?php

namespace App\Models;

use App\Models\Addon;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function addon()
    {
        return $this->hasMany(Addon::class)->where('status', 'Schváleno');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory; 

    protected $fillable = ["category_id", "title", "date_event", "name_event", "description", "featured"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

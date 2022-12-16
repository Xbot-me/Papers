<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function journalsImage()
    {
        return $this->belongsTo(JournalsImage::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function reviewer()
    {
        return $this->hasMany(Reviewer::class);
    }

}

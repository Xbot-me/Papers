<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalsImage extends Model
{
    use HasFactory;
    public function journal()
    {
        return $this->hasMany(Journal::class);
    }
}

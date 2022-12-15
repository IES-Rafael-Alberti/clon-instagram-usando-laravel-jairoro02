<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function images(){
        return $this->belongsTo(Image::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}

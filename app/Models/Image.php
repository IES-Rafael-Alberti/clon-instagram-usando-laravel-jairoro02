<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    use HasFactory;

    protected $fillable = [
        'image_path',
        'description',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function likes(){
        return $this->hasMany(Acogida::class);
    }
}

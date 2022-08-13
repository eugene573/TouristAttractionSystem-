<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
    use SoftDeletes;

    protected $table = 'like';

    protected $fillable = [
        'user_id',
        'like_id',
        'like_type',
    ];

    public function posts()
    {
        return $this->morphedByMany('App\Models\Post', 'like');
    }
}
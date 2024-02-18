<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
    ];

    public function postInverseRelation()
    {   
        return $this->belongsTo(User::class , 'user_id');

    }
    public function nameInverseRelation()
    {   
        return $this->belongsTo(User::class , 'user_name');

    }
}

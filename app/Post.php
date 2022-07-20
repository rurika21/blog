<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->getpaginate($limit_count);
    }
    
    protected $fillable = [
    'title',
    'body',
];
}

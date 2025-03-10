<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'body'];

    /**
     * Relacionamento 1 para N - Um post pertence a um usuário.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
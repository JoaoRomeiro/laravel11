<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Relacionamento N para N - Um cargo pertence a vários usuários.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
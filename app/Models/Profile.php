<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'document_number', 'user_id'];

    /**
     * Relacionamento 1 para 1 - Um perfil pertence a um usuário.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
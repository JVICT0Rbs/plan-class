<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'id_user',
        'autor',
        'titulo',
        'subtitulo',
        'ediçãpo',
        'editora',
        'ano_da_publicação',
    ];

    public function relUser()
    {
        return $this->hasOne(related: 'App\Models\User', foreignKey: 'id', localKey:'id_User');
    }

}

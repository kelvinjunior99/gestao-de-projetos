<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'slug', 'data', 'descricao', 'estado', 'id_user'
    ];

    public function membro() {

        return $this->belongsTo(User::class, 'id_user');

    }
}

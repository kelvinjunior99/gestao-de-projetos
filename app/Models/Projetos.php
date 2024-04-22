<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projetos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'slug', 'data', 'descricao', 'estado', 'tipo', 'github', 'visibilidade', 'data_final',
    ];

   // public function membro() {
   //     return $this->belongsTo(User::class, 'id_user');
  //  }
}

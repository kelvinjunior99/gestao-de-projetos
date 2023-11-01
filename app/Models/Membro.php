<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'cargo'
    ];

    public function projetos() {

        return $this->hasMany(Projeto::class, 'id_membro');
    }
}

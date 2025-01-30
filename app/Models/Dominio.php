<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Dominio extends Model
{
    use HasFactory;
    protected $table = 'dominios';
    protected $fillable = ['id','nome','user_id'];

    // DEFINE RELACAO COM TABELA USUARIOS
    public function user() {
        return $this->belongsTo(User::class);
    }

    // DEFINE RELACAO COM TABELA HOSPEDAGEM
    public function hospedagem() {
        return $this->hasMany(Hospedagem::class);
    }
}

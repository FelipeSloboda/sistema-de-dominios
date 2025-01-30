<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hospedagem extends Model
{
    use HasFactory;
    protected $table = 'hospedagens';
    protected $fillable = ['id','hospedeiro','vencimento','dominio_id'];

    // DEFINE RELACAO COM TABELA HOSPEDAGEM
    public function dominios() {
        return $this->hasMany(Dominio::class);
    }
}

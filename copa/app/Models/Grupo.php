<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grupo extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'grupos';

    protected $fillable = [
        'chave',
        'deleted_at'
    ];

    public function selecao()
    {
        return $this->hasMany(Selecao::class);
    }

    public function confronto()
    {
        return $this->hasMany(Confronto::class)->where("etapa_id", 1);
    }
}

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

    public function selacao()
    {
        return $this->hasMany(Selecao::class);
    }

    
}

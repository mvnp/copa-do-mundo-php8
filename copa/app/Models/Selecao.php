<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Selecao extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'selecaos';

    protected $fillable = [
        'grupo_id',
        'selecao',
        'sigla',
        'deleted_at',
    ];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}

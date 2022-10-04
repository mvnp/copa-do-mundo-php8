<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Confronto extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'confrontos';

    protected $fillable = [
        "etapa_id",
        "grupo_id",
        "casa",
        "visitante",
        "classificado_casa",
        "classificado_visitante",
        "data_confronto",
        'deleted_at',
    ];

    public function selecaoCasa() {
        return $this->belongsTo(Selecao::class, "casa", "id");
    }

    public function selecaoVisitante() {
        return $this->belongsTo(Selecao::class, "visitante", "id");
    }

    public function classificado_casa() {
        return $this->belongsTo(Grupo::class, "classificado_casa", "id");
    }

    public function classificado_visitante() {
        return $this->belongsTo(Grupo::class, "classificado_visitante", "id");
    }

    public function gols() {
        return $this->hasOne(ConfrontoResultado::class, "confronto_id", "id");
    }
}

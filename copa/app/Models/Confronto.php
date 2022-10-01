<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confronto extends Model
{
    use HasFactory;

    public function selecaoCasa() {
        return $this->belongsTo(Selecao::class, "casa", "id");
    }

    public function selecaoVisitante() {
        return $this->belongsTo(Selecao::class, "visitante", "id");
    }
}

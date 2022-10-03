<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConfrontoPalpite extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'confronto_palpites';

    protected $fillable = [
        "user_id",
        "confronto_id",
        "casa",
        "visitante",
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

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


}

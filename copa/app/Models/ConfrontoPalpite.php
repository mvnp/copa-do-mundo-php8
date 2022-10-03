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

    ];
}

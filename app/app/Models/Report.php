<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    // No comments yet!
    protected $fillable = [
        'year',
        'month',
        'castracao_interna',
        'castracao_externa',
        'atendimento_interno',
        'atendimento_externo',
        'obitos',
        'eutanasias',
        'solicitacoes_samuvet',
        'doacoes',
        'solturas',
        'resgatados',
        'abrigados',
    ];
}

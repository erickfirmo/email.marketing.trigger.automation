<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acao extends Model
{
    public $table = 'acoes';

    public $fillable = [
        'titulo',
        'destinatarios',
        'agendamento',
        'usuario_id',
        'instituicao_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(Admin::class, 'usuario_id');
    }

    public function instituicao()
    {
        return $this->belongsTo(Instituicao::class, 'instituicao_id');
    }
}

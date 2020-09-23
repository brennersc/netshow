<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    //
    protected $table = 'cadastros';

    public $primaryKey = 'id';

    protected $keyType = 'bigInteger';

    protected $casts = [
        'id'            => 'integer',
        'nome'          => 'string',
        'email'         => 'string',
        'telefone'      => 'string',
        'file'          => 'string',
        'mensagem'      => 'text',
        'ip'            => 'ipAddress',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',        
    ];

    protected $fillable = [      
        'id',
        'nome',
        'email',
        'telefone',
        'mensagem',
        'file',
        'ip',
    ];
}

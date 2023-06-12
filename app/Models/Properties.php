<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'titulo',        
        'tipo',
        'endereco',
        'imagens',
        'proprietario',
        'garagem',
        'valor_condominio',
        'iptu',
        'metros_quadrados',
        'quantidade_banheiro',
        'aceita_pets',
    ];

    public function reward()
    {
        return $this->hasOne(Reward::class);
    }
}

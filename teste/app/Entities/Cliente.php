<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Cliente.
 *
 * @package namespace App\Entities;
 */
class Cliente extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "cliente";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome_cliente',
        'cpf_cliente'
    ];

    public function nota()
    {
        return $this->hasMany(Nota::class);
    }

}

<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Produto.
 *
 * @package namespace App\Entities;
 */
class Produto extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "produto";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome_produto',
        'valor',
        'nota_id'
    ];

    public function notaProduto()
    {
        return $this->hasOne(NotaProduto::class);
    }

}

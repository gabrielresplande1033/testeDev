<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Nota.
 *
 * @package namespace App\Entities;
 */
class Nota extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "nota";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numero_nota',
        'cliente_id',
        'valor_total_nota'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function notaProduto()
    {
        return $this->hasOne(NotaProduto::class);
    }

}

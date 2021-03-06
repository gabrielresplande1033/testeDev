<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class NotaProduto extends Model
{
    protected $table = "nota_produto";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_nota',
        'id_produto'
    ];

    public function nota()
    {
        return $this->belongsTo(Nota::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}

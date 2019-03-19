<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\NotaProduto;
use App\Validators\NotaValidator;

/**
 * Class NotaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class NotaProdutoRepositoryEloquent extends BaseRepository implements NotaProdutoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return NotaProduto::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}

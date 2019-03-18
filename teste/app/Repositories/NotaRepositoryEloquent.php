<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\NotaRepository;
use App\Entities\Nota;
use App\Validators\NotaValidator;

/**
 * Class NotaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class NotaRepositoryEloquent extends BaseRepository implements NotaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Nota::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}

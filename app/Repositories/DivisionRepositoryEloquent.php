<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\DivisionRepository;
use App\Entities\Division;
use App\Validators\DivisionValidator;

/**
 * Class DivisionRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class DivisionRepositoryEloquent extends BaseRepository implements DivisionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Division::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}

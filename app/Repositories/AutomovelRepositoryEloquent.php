<?php

namespace App\Repositories;

use App\Entities\Automovel;
use App\Presenters\AutomovelPresenter;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\AutomovelValidator;

/**
 * Class AutomovelRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AutomovelRepositoryEloquent extends BaseRepository implements AutomovelRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Automovel::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return AutomovelValidator::class;
    }

    /**
     * @return string
     */
    public function presenter()
    {
        return AutomovelPresenter::class;
    }
    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}

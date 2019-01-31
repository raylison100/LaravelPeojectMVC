<?php
/**
 * Created by IntelliJ IDEA.
 * User: rayli
 * Date: 30/01/2019
 * Time: 14:47
 */

namespace App\Services;

use App\Repositories\AutomovelRepository;

class AutomovelService
{

    protected $repository;

    public function __construct(AutomovelRepository $repository)
    {

        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
    }
    public function create(array $data, $skipPresenter = false)
    {
        return $skipPresenter ? $this->repository->skipPresenter()->create($data) : $this->repository->create($data);
    }

    public function find($id, $skip_presenter = false)
    {
        if ($skip_presenter){
            return $this->repository->skipPresenter()->find($id);
        }
        return $this->repository->find($id);
    }

    public function update(array $data, $id)
    {
        return $this->repository->update($data, $id);
    }

    public function delete($id)
    {
        $this->repository->delete($id);
    }
}

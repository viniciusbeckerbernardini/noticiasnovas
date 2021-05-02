<?php

namespace App\Repositories;

use App\Contracts\CategoryRepositoryContract;
use App\Contracts\Model;
use App\Models\Category;

/**
 * Class CategoryService
 * @package App\Repositories
 */
class CategoryRepository implements CategoryRepositoryContract{

    /**
     * @var Category
     */
    private $model;

    /**
     * CategoryService constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->model = $category;
    }


    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @inheritDoc
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * @inheritDoc
     */
    public function update($id, array $data)
    {
        return $this->model->where('id', $id)->update($data);
    }

    /**
     * @inheritDoc
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    /**
     * @return array
     */
    public function getAll(){
        return Category::all()->toArray();
    }

}

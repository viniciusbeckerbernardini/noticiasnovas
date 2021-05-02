<?php

namespace App\Services;


/**
 * Class CategoryService
 * @package App\Services
 */
class CategoryService
{
    /**
     * @var categoryRepositoryContract
     */
    private $categoryRepositoryContract;

    /**
     * categoryService constructor.
     * @param categoryRepositoryContract $categoryRepositoryContract
     */
    public function __construct(categoryRepositoryContract $categoryRepositoryContract)
    {
        $this->categoryRepositoryContract = $categoryRepositoryContract;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->categoryRepositoryContract->create($data);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function retrieve(int $id)
    {
        return $this->categoryRepositoryContract->find($id);
    }

    /**
     * @return array
     */
    public function getAll()
    {
        return $this->categoryRepositoryContract->getAll();
    }

    /**
     * @param int $id
     * @param array $data
     */
    public function update(int $id, array $data)
    {
        return $this->categoryRepositoryContract->update($id, $data);
    }

    /**
     * @param int $id
     */
    public function delete(int $id)
    {
        return $this->categoryRepositoryContract->delete($id);
    }
}

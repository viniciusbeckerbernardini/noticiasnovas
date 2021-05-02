<?php

namespace App\Services;

use App\Contracts\PostRepositoryContract;

class PostService{
    private $postRepositoryContract;

    /**
     * PostService constructor.
     * @param postRepositoryContract $postRepositoryContract
     */
    public function __construct(postRepositoryContract $postRepositoryContract)
    {
        $this->postRepositoryContract = $postRepositoryContract;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->postRepositoryContract->create($data);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function retrieve(int $id)
    {
        return $this->postRepositoryContract->find($id);
    }

    /**
     * @return array
     */
    public function getAll()
    {
        return $this->postRepositoryContract->getAll();
    }

    /**
     * @param int $id
     * @param array $data
     */
    public function update(int $id, array $data)
    {
        return $this->postRepositoryContract->update($id, $data);
    }

    /**
     * @param int $id
     */
    public function delete(int $id)
    {
        return $this->postRepositoryContract->delete($id);
    }
}

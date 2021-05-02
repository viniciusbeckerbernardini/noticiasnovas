<?php

namespace App\Repositories;

use App\Contracts\Model;
use App\Contracts\PostRepositoryContract;
use App\Models\Post;

/**
 * Class PostRepository
 * @package App\Repositories
 */
class PostRepository implements PostRepositoryContract{
    /**
     * @var Post
     */
    private $model;

    /**
     * PostRepository constructor.
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->model = $post;
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
        return Post::all()->toArray();
    }

}

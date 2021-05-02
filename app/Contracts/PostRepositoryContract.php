<?php

namespace App\Contracts;

use \App\Models\Post;

/**
 * Interface PostRepositoryContract
 * @package App\Contracts
 */
interface PostRepositoryContract extends BaseRepositoryContract{
    /**
     * PostRepositoryContract constructor.
     * @param Post $post
     */
    public function __construct(Post $post);
}

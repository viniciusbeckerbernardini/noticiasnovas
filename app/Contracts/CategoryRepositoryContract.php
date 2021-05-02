<?php

namespace App\Contracts;

use App\Models\Category;

/**
 * Interface CategoryRepositoryContract
 * @package App\Contracts
 */
interface CategoryRepositoryContract extends BaseRepositoryContract{
    /**
     * CategoryRepositoryContract constructor.
     * @param Category $category
     */
    public function __construct(Category $category);
}

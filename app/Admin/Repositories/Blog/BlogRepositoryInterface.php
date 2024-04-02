<?php

namespace App\Admin\Repositories\Blog;

interface BlogRepositoryInterface
{
    /**
     * Find a single record
     *
     * @param int $id
     * @return mixed
     * 
     */
    public function find($id);
    /**
     * Find a single record
     *
     * @param int $id
     * @return mixed
     * 
     */
    public function findOrFail($id);
    /**
     * Create a new record
     *
     * @param array $data The input data
     * @return object model instance
     * 
     */
    public function paginate(
        array $filter,
        array $relationCondition = [],
        array $relations = [],
        int $paginate = 10
    );

}

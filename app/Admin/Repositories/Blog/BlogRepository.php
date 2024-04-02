<?php

namespace App\Admin\Repositories\Blog;

use App\Admin\Repositories\EloquentRepository;
use App\Models\Admin;
use App\Models\Post;

class BlogRepository extends EloquentRepository implements BlogRepositoryInterface
{

    protected $select = [];

    public function getModel()
    {
        return Post::class;
    }

    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC')
    {
        $this->getQueryBuilder();
        $this->instance = $this->instance->orderBy($column, $sort);
        return $this->instance;
    }
    public function paginate(
        array $filter,
        array $relationCondition = [],
        array
        $relations = [],
        int $paginate = 10
    ) {
        $this->getQueryBuilder();
        $this->applyFilters($filter);
        foreach ($relationCondition as $relation => $condition) {
            $this->instance = $this->instance->whereHas($relation, $condition);
        }
        return $this->instance->published()->with($relations)->paginate($paginate);
    }
}

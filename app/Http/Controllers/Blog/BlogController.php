<?php
namespace App\Http\Controllers\Blog;

use App\Admin\Http\Controllers\Controller;
use App\Admin\Repositories\Blog\BlogRepositoryInterface;

class BlogController extends Controller
{
    public function __construct(
        BlogRepositoryInterface $repository,

    ) {
        parent::__construct();

        $this->repository = $repository;
    }
    public function getView()
    {
        return [
            'index' => 'user.blog.index',
            'detail' => 'user.blog.show',

        ];
    }
    public function getRoute()
    {
        return [];
    }
    public function index()
    {
        $posts = $this->repository->paginate([], [], []);

        return view($this->view['index'], [
            'posts' => $posts,

        ]);
    }
    public function showPost($slug)
    {
        $posts = $this->repository->findByOrFail(['slug' => $slug], [
            'posts',
            'categories'
        ]);

        return view($this->view['detail'], [
            'posts' => $posts

        ]);
    }
}

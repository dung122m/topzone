<?php

namespace App\Admin\Http\Controllers\Post;

use App\Admin\DataTables\Post\PostDataTable;
use App\Admin\Http\Controllers\Controller;
use App\Admin\Http\Requests\Admin\AdminRequest;
use App\Admin\Http\Requests\Post\PostRequest;
use App\Admin\Repositories\Admin\AdminRepositoryInterface;
use App\Admin\Repositories\Post\PostRepositoryInterface;
use App\Admin\Services\Post\PostServiceInterface;

use App\Enums\Admin\AdminRoles;
use App\Enums\Post\PostFeature;
use App\Enums\Post\PostStatus;

class PostController extends Controller
{
    public function __construct(
        PostRepositoryInterface $repository, 
        PostServiceInterface $service
    ){

        parent::__construct();

        $this->repository = $repository;
        
        $this->service = $service;
        
    }

    public function getView(){
        return [
            'index' => 'admin.post.index',
            'create' => 'admin.post.create',
            'edit' => 'admin.post.edit'
        ];
    }

    public function getRoute(){
        return [
            'index' => 'admin.post.index',
            'create' => 'admin.post.create',
            'edit' => 'admin.post.edit',
            'delete' => 'admin.post.delete'
        ];
    }
    public function index(PostDataTable $dataTable){
        return $dataTable->render($this->view['index'], ['status' => PostStatus::asSelectArray(),
    'featured' => PostFeature::asSelectArray()]);
    }

    public function create(){
        return view($this->view['create'], ['status' => PostStatus::asSelectArray(),'feature' => PostFeature::asSelectArray()]);
    }

    public function store(PostRequest $request){

        $instance = $this->service->store($request);
        

        return redirect()->route($this->route['edit'], $instance->id);

    }

    public function edit($id){
        
        $instance = $this->repository->findOrFail($id);
        return view(
            $this->view['edit'], 
            [
                'post' => $instance, 
                'status' => PostStatus::asSelectArray(),
                'feature' => PostFeature::asSelectArray()
            ], 
        );

    }

    public function update(PostRequest $request){

        $this->service->update($request);

        return back()->with('success', __('notifySuccess'));

    }

    public function delete($id){

        $this->service->delete($id);
        
        return redirect()->route($this->route['index'])->with('success', __('notifySuccess'));
        
    }
}

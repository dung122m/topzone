<?php

namespace App\Admin\Http\Controllers\Employee;

use App\Admin\Http\Controllers\Controller;
use App\Admin\Http\Requests\Employee\EmployeeRequest;
use App\Admin\Repositories\Employee\EmployeeRepositoryInterface;
use App\Admin\Services\Employee\EmployeeServiceInterface;
use App\Admin\DataTables\Employee\EmployeeDataTable;
use App\Enums\Employee\EmployeeGender;
use App\Enums\Employee\EmployeeRole;



class EmployeeController extends Controller
{
    public function __construct(
        EmployeeRepositoryInterface $repository, 
        EmployeeServiceInterface $service
    ){

        parent::__construct();

        $this->repository = $repository;
        
        $this->service = $service;
        
    }

    public function getView(){
        return [
            'index' => 'admin.employees.index',
            'create' => 'admin.employees.create',
            'edit' => 'admin.employees.edit'
        ];
    }

    public function getRoute(){
        return [
            'index' => 'admin.employee.index',
            'create' => 'admin.employee.create',
            'edit' => 'admin.employee.edit',
            'delete' => 'admin.employee.delete'
        ];
    }
    public function index(EmployeeDataTable $dataTable){
        return $dataTable->render($this->view['index'], [
           
            'gender' => EmployeeGender::asSelectArray(),
            'roles' => EmployeeRole::asSelectArray()
        ]);
    }

    public function create(){
        return view($this->view['create'], [
           
            'gender' => EmployeeGender::asSelectArray(),
            'roles' =>EmployeeRole::asSelectArray()
            
        ]);
    }

    public function store(EmployeeRequest $request){

        $instance = $this->service->store($request);

        return redirect()->route($this->route['edit'], $instance->id);

    }

    public function edit($id){
        
        $instance = $this->repository->findOrFail($id);
        return view(
            $this->view['edit'], 
            [
                'employee' => $instance, 
                
                'gender' => EmployeeGender::asSelectArray(),
                'roles' => EmployeeRole::asSelectArray(),

            ], 
        );

    }

    public function update(EmployeeRequest $request){

        $this->service->update($request);

        return back()->with('success', __('notifySuccess'));

    }

    public function delete($id){

        $this->service->delete($id);
        
        return redirect()->route($this->route['index'])->with('success', __('notifySuccess'));
        
    }
}

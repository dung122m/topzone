<?php

namespace App\Admin\DataTables\Category;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Category\CategoryRepositoryInterface;
use App\Admin\Traits\GetConfig;

class CategoryDataTable extends BaseDataTable
{

    use GetConfig;
    /**
     * Available button actions. When calling an action, the value will be used
     * as the function name (so it should be available)
     * If you want to add or disable an action, overload and modify this property.
     *
     * @var array
     */
    // protected array $actions = ['pageLength', 'excel', 'reset', 'reload'];
    protected array $actions = ['reset', 'reload'];

    public function __construct(
        CategoryRepositoryInterface $repository
    ) {
        parent::__construct();

        $this->repository = $repository;
    }

    public function getView()
    {
        return [
            'action' => 'admin.categories.datatable.action',
            'editlink' => 'admin.categories.datatable.editlink',
        ];
    }
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $this->instanceDataTable = datatables()->eloquent($query)->addIndexColumn();
        // $this->filterColumnCreatedAt();
        // $this->filterColumnStatus();
        // $this->filterColumnVip();

        $this->editColumnPostedAt();
        $this->editColumnStatus();
        $this->editColumnCreatedAt();
        $this->addColumnAction();
        $this->rawColumnsNew();
        return $this->instanceDataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(\App\Models\Category $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        $this->instanceHtml = $this->builder()
            ->setTableId('categoryTable')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(0)
            ->selectStyleSingle();

        $this->htmlParameters();

        return $this->instanceHtml;
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function setCustomColumns()
    {
        $this->customColumns = $this->traitGetConfigDatatableColumns('category');
    }
    // protected function editColumnTitle(){
    //      $this->instanceDataTable = $this->instanceDataTable->editColumn('title', $this->view['editlink']);
    // }

    protected function filename(): string
    {
        return 'Category_' . date('YmdHis');
    }


    // protected function filterColumnGender(){
    //     $this->instanceDataTable = $this->instanceDataTable
    //     ->filterColumn('gender', function($query, $keyword) {
    //         $query->where('gender', $keyword);
    //     });
    // }
    // protected function filterColumnVip(){
    //     $this->instanceDataTable = $this->instanceDataTable
    //     ->filterColumn('vip', function($query, $keyword) {
    //         $query->where('vip', $keyword);
    //     });
    // }
    // protected function filterColumnCreatedAt(){
    //     $this->instanceDataTable = $this->instanceDataTable->filterColumn('created_at', function($query, $keyword) {

    //         $query->whereDate('created_at', date('Y-m-d', strtotime($keyword)));

    //     });
    // }
    // protected function editColumnId(){
    //     $this->instanceDataTable = $this->instanceDataTable->editColumn('id', $this->view['editlink']);
    // }
    // protected function editColumnTitle(){
    //     $this->instanceDataTable = $this->instanceDataTable->editColumn('title', $this->view['editlink']);
    // }

    protected function editColumnStatus()
    {
        $this->instanceDataTable = $this->instanceDataTable->editColumn('status', function ($post) {
            return $post->status->description();
        });
    }
    // protected function editColumnSlug(){
    //     $this->instanceDataTable = $this->instanceDataTable->editColumn('slug', $this->view['editlink']);
    // }
    public function editColumnPostedAt()
    {
        $this->instanceDataTable = $this->instanceDataTable->editColumn('posted_at', '{{ date("d-m-Y", strtotime($created_at)) }}');
    }
    protected function editColumnCreatedAt()
    {
        $this->instanceDataTable = $this->instanceDataTable->editColumn('created_at', '{{ date("d-m-Y", strtotime($created_at)) }}');
    }
    protected function addColumnAction()
    {
        $this->instanceDataTable = $this->instanceDataTable->addColumn('action', $this->view['action']);
    }
    protected function rawColumnsNew()
    {
        $this->instanceDataTable = $this->instanceDataTable->rawColumns(['fullname', 'action']);
    }
    protected function htmlParameters()
    {

        $this->parameters['buttons'] = $this->actions;

        $this->parameters['initComplete'] = "function () {

            moveSearchColumnsDatatable('#postTable');

            searchColumsDataTable(this);
        }";

        $this->instanceHtml = $this->instanceHtml
            ->parameters($this->parameters);
    }
}

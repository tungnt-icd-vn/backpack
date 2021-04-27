<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Product_historyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class Product_historyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class Product_historyCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Product_history::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product_history');
        CRUD::setEntityNameStrings('product_history', 'Nhật ký sinh trưởng');
        CRUD::enableExportButtons();
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // columns
        $this->crud->addColumn([
            'name' => 'categories_products_id',
            'entity' => 'categories_products',
            'attribute' => 'tittle',
            'type' => 'relationship',
            'label' => 'Cây trồng',
        ]);
        $this->crud->addColumn([
            'name' => 'works_id',
            'entity' => 'works',
            'attribute' => 'title',
            'type' => 'relationship',
            'label' => 'Công việc',
        ]);
        $this->crud->addColumn([
            'label' => 'Người phụ trách',
            'name' => 'user',
        ]);
        $this->crud->addColumn([
            'name' => 'medicines_id',
            'entity' => 'medicines',
            'attribute' => 'title',
            'type' => 'relationship',
            'label' => 'Thuốc',
        ]);
        $this->crud->addColumn([
            'name' => 'fertilizers_id',
            'entity' => 'fertilizers',
            'attribute' => 'title',
            'type' => 'relationship',
            'label' => 'Thuốc',
        ]);
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Hình ảnh',
            'type'            => 'image',

        ]);
        $this->crud->addColumn([
            'name' => 'process_status',
            'label' => 'Trạng thái Chăm Sóc',
            'type'            => 'select_from_array',
            'options' => ['processing' => 'Đang chăm sóc', 'done' => 'Hoàn thành', 'cancel' => 'Dừng'],
        ]);
        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Trạng thái',
            'type'            => 'select_from_array',
            'options' => ['PUBLISHED' => 'Công khai', 'DRAFT' => 'Bản nháp', 'INTERNAL' => 'Nội Bộ'],
        ]);
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(Product_historyRequest::class);
        $this->crud->addField([
            'label' => 'Cây trồng được chăm sóc',
            'type' => 'relationship',
            'name' => 'categories_products_id',
            'entity' => 'categories_products',
            'attribute' => 'tittle',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        $this->crud->addField([
            'label' => 'Công việc thực hiện',
            'type' => 'relationship',
            'name' => 'works_id',
            'entity' => 'works',
            'attribute' => 'title',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        $this->crud->addField([
            'label' => 'Người thực hiện',
            'type' => 'relationship',
            'name' => 'user', // the method that defines the relationship in your Model
            'entity' => 'user', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
            'hint' => 'có thể chọn nhiều người cùng thực hiện',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        $this->crud->addField([
            'label' => 'Có sử dụng thuốc',
            'type' => 'relationship',
            'name' => 'medicines_id',
            'entity' => 'medicines',
            'attribute' => 'title',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        $this->crud->addField([
            'label' => 'Có sử dụng Phân',
            'type' => 'relationship',
            'name' => 'fertilizers_id',
            'entity' => 'fertilizers',
            'attribute' => 'title',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);

        CRUD::addField([
            'label' => "Ảnh nhật ký",
            'name' => "image",
            'type' => 'image',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        CRUD::addField([   // Wysiwyg
            'name'  => 'content',
            'label' => 'Ghi chú',
            'type'  => 'summernote',
        ]);
        CRUD::addField([   // Wysiwyg
            'name'  => 'user_create',
            'type'  => 'hidden', 
        ]);
        CRUD::addField([   // Wysiwyg
            'name'  => 'date_process',
            'label' => 'Thời gian thực hiện',
            'type'  => 'datetime',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ],
            'hint' => 'không chọn ngày hệ thống tự lấy ngày hiện tại',
        ]);
        CRUD::addField([
            'name'            => 'process_status',
            'label'           => "Trạng thái Chăm Sóc",
            'type'            => 'select_from_array',
            'options' => ['processing' => 'Đang chăm sóc', 'done' => 'Hoàn thành', 'cancel' => 'Dừng'],
            'allows_null'     => false,
            'allows_multiple' => false,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4 col-6',
            ],
        ]);
        CRUD::addField([
            'name'            => 'status',
            'label'           => "Trạng thái",
            'type'            => 'select_from_array',
            'options' => ['PUBLISHED' => 'Công khai', 'DRAFT' => 'Bản nháp', 'INTERNAL' => 'Nội Bộ'],
            'allows_null'     => false,
            'allows_multiple' => false,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4 col-6',
            ],
        ]);
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}

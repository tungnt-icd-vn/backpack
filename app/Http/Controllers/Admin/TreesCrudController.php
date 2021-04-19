<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TreesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TreesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TreesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    //use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
   // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
   use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Trees::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/trees');
        CRUD::setEntityNameStrings('trees', 'Quản lý giống cây');
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
       // CRUD::setFromDb(); // columns
       $this->crud->addColumn([
        'name' => 'title',
        'label' => 'Tên Giống Cây',
        'type'            => 'text',
    ]);
    $this->crud->addColumn([
        'label' => 'Tên Nhà cung cấp',
        'type' => 'relationship',
        'name' => 'supplier_code',
        'entity' => 'suppliers',
        'attribute' => 'title',
    ]);
    $this->crud->addColumn([
        'name' => 'image',
        'label' => 'Hình ảnh',
        'type'            => 'image',

    ]);
    $this->crud->addColumn([
        'name' => 'status',
        'label' => 'Trạng thái',
        'type'            => 'select_from_array',
        'options' => ['PUBLISHED' => 'Công khai', 'DRAFT' => 'Bản nháp', 'INTERNAL' => 'Nội Bộ'],
    ]);
    $this->crud->addColumn([
        'name' => 'date_harvest',
        'label' => 'Số tháng có thể thu hoạch',
        'type'  => 'number',
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
        CRUD::setValidation(TreesRequest::class);

        //CRUD::setFromDb(); // fields
        $this->crud->addField([
            'label' => 'Tên Cây trồng',
            'type' => 'text',
            'name' => 'title',
        ]);
        $this->crud->addField([
            'label' => 'Nhà cung cấp',
            'type' => 'relationship',
            'name' => 'supplier_code',
            'entity' => 'suppliers',
            'attribute' => 'title',
        ]);
        CRUD::addField([   // Wysiwyg
            'name'  => 'content',
            'label' => 'Mô Tả Cây trồng',
            'type'  => 'wysiwyg',
        ]);
        $this->crud->addField([
            'name' => 'image',
            'label' => 'Ảnh cây trồng',
            'type' => 'browse',
        ]);
        $this->crud->addField([
            'name' => 'date_harvest',
            'label' => 'Thời hạn thu hoạch (Ngày)',
            'type' => 'number',

        ]);
        CRUD::addField([
            'name'            => 'status',
            'label'           => "Trạng thái của farm",
            'type'            => 'select_from_array',
            'options' => ['PUBLISHED' => 'Công khai', 'DRAFT' => 'Bản nháp', 'INTERNAL' => 'Nội Bộ'],
            'allows_null'     => false,
            'allows_multiple' => false,
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

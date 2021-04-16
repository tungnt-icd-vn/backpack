<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SuppliersRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SuppliersCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SuppliersCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Suppliers::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/suppliers');
        CRUD::setEntityNameStrings('suppliers', 'Quản lý Cung cấp');
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
        CRUD::addColumn([
            'label' => 'Tên nhà cung cấp',
            'name' => 'title',
        ]);
        CRUD::addColumn([
            'label' => 'Email',
            'name' => 'email',
            'type'  => 'email'
        ]);
        CRUD::addColumn([
            'label' => 'Số điện thoại',
            'name' => 'phone',
        ]);
        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Trạng thái',
            'type'            => 'select_from_array',
            'options' => ['PUBLISHED' => 'Công khai', 'DRAFT' => 'Bản nháp'],

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
        CRUD::setValidation(SuppliersRequest::class);
        CRUD::addField([
            'label' => 'Tên nhà cung cấp',
            'name' => 'title',
        ]);
        CRUD::addField([
            'label' => 'Địa chỉ',
            'name' => 'local',
        ]);
        CRUD::addField([
            'label' => 'Email',
            'name' => 'email',
            'type'  => 'email'
        ]);
        CRUD::addField([
            'label' => 'Số điện thoại',
            'name' => 'phone',
            'type' => 'number',
        ]);
        CRUD::addField([   // Wysiwyg
            'name'  => 'note',
            'label' => 'ghi chú',
        ]);
       // CRUD::setFromDb(); // fields
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WorksRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class WorksCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WorksCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Works::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/works');
        CRUD::setEntityNameStrings('works', 'Quản lý công việc');
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
            'name' => 'title',
            'label' => 'Tên công việc',
            'type'            => 'text',
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
            'name' => 'date',
            'label' => 'Ngày tạo',
            'type'            => 'text',
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
        CRUD::setValidation(WorksRequest::class);

        $this->crud->addField([
            'label' => 'Tên Công việc',
            'name' => 'title',
        ]);
        CRUD::addField([   // Wysiwyg
            'name'  => 'content',
            'label' => 'Mô Tả công việc',
            'type'  => 'wysiwyg',
        ]);
        $this->crud->addField([
            'name' => 'date',
            'label' => 'Date',
            'type' => 'date',
            'default' => date('Y-m-d'),
        ]);
        $this->crud->addField([
            'label' => "Ảnh công viêc",
            'name' => "image",
            'type' => 'image',
        ]);
        CRUD::addField([
            'name'            => 'status',
            'label'           => "Trạng thái",
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

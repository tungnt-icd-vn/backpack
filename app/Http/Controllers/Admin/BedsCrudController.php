<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BedsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BedsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BedsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Beds::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/beds');
        CRUD::setEntityNameStrings('beds', 'beds');
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
            'label' => 'Tên Luống',
            'type'            => 'text',
        ]);
        $this->crud->addColumn([
            'label' => 'Tên Nông trại',
            'type' => 'relationship',
            'name' => 'farms_code',
            'entity' => 'farms',
            'attribute' => 'title',
        ]);
        $this->crud->addColumn([
            'label' => 'Thuộc khu ',
            'type' => 'relationship',
            'name' => 'zones_code',
            'entity' => 'zones',
            'attribute' => 'title',
        ]);
        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Trạng thái',
            'type'            => 'select_from_array',
            'options'         => ['PUBLISHED' => 'Công khai', 'DRAFT' => 'Bản nháp'],

        ]);
        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Ngày tạo',
            'type'            => 'date',
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
        CRUD::setValidation(BedsRequest::class);

        //CRUD::setFromDb(); // fields
        $this->crud->addField([
            'label' => 'Tên Nông trại',
            'type' => 'relationship',
            'name' => 'farms_code',
            'entity' => 'farms',
            'attribute' => 'title',
        ]);
        $this->crud->addField([
            'label' => 'Thuộc khu ',
            'type' => 'relationship',
            'name' => 'zones_code',
            'entity' => 'zones',
            'attribute' => 'title',
        ]);
        $this->crud->addField([
            'label' => 'Tên luống',
            'name' => 'title',
        ]);
        $this->crud->addField([
            'name' => 'status',
            'label' => 'Trạng thái',
            'type' => 'enum',
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FarmsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FarmsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FarmsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Farms::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/farms');
        CRUD::setEntityNameStrings('farms', 'farms');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('farms_code');
        CRUD::column('title');
        CRUD::column('status');
        //CRUD::setFromDb(); // columns

        $this->crud->addFilter([
            'type'  => 'text',
            'name'  => 'farms_code',
            'label' => 'farm code'
        ], 
        false, 
        function($value) { // if the filter is active
             $this->crud->addClause('where', 'farms_code', 'LIKE', "%$value%");
        });

        $this->crud->addFilter([
            'type'  => 'text',
            'name'  => 'title',
            'label' => 'Farm title'
        ], 
        false, 
        function($value) { // if the filter is active
             $this->crud->addClause('where', 'title', 'LIKE', "%$value%");
        });
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
        $this->crud->setOperationSetting('contentClass', 'col-md-12 bold-labels');
        CRUD::setValidation(FarmsRequest::class);
        CRUD::field('farms_code')->type('text');
        CRUD::field('title')->type('text');
        $this->crud->addField([
            'name'  => 'status',
            'label' => 'Status',
            'type'  => 'enum'
        ]);
        CRUD::field('status')->type('text');
        //CRUD::setFromDb(); // fields

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

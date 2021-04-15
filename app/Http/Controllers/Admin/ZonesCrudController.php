<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ZonesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ZonesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ZonesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Zones::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/zones');
        CRUD::setEntityNameStrings('zones', 'zones');
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
            'label' => 'Tên khu',
            'type'            => 'text',
        ]);
        $this->crud->addColumn([
            'label' => 'Thuộc trang trại',
            'type' => 'relationship',
            'name' => 'farms_code',
            'entity' => 'farms',
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
        $this->crud->addColumn([
            'name' => 'updated_at',
            'label' => 'Ngày Cập nhật',
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
        CRUD::setValidation(ZonesRequest::class);

        //CRUD::setFromDb(); // fields
        $this->crud->addField([
            'name' => 'title',
            'label' => 'Tên Khu',
            'type' => 'text',
            'placeholder' => 'Nhập tên khu',
        ]);
        $this->crud->addField([
            'label' => 'Tên Nông trại',
            'type' => 'relationship',
            'name' => 'farms_code',
            'entity' => 'farms',
            'attribute' => 'title',
            // 'ajax' => true,
        ]);
        CRUD::addField([
            'name'            => 'status',
            'label'           => "Trạng thái của farm",
            'type'            => 'select_from_array',
            'options'         => ['PUBLISHED' => 'Công khai', 'DRAFT' => 'Bản nháp'],
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

    public function fetchFarms()
    {
        return $this->fetch(\App\Models\Farms::class);
    }

}

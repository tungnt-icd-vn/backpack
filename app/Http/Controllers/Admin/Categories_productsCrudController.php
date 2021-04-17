<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Categories_productsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class Categories_productsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class Categories_productsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Categories_products::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/categories_products');
        CRUD::setEntityNameStrings('categories_products', 'Quản lý cây trồng');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // columns

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
        CRUD::setValidation(Categories_productsRequest::class);
        //CRUD::setFromDb(); // fields
        $this->crud->addField([
            'label' => 'Tên Sản Phẩm Cây trồng',
            'type' => 'text',
            'name' => 'tittle',
        ]);
        $this->crud->addField([
            'label' => 'Mã Cây trồng',
            'type' => 'text',
            'name' => 'categories_products_code',
            'attributes' => [
                'readonly'    => 'readonly',
            ],
        ]);
        $this->crud->addField([
            'label' => 'giống gieo trồng',
            'type' => 'relationship',
            'name' => 'trees_code',
            'entity' => 'trees',
            'attribute' => 'title',
        ]);
        $this->crud->addField([
            'label' => 'Thuộc nông trại',
            'type' => 'relationship',
            'name' => 'farms_code',
            'entity' => 'farms',
            'attribute' => 'title',
        ]);
        $this->crud->addField([
            'label' => 'Thuộc Khu',
            'type' => 'relationship',
            'name' => 'zones_code',
            'entity' => 'zones',
            'attribute' => 'title',
        ]);
        $this->crud->addField([
            'label' => 'Thuộc Luống',
            'type' => 'relationship',
            'name' => 'beds_code',
            'entity' => 'beds',
            'attribute' => 'title',
        ]);
        $this->crud->addField([
            'name' => 'date_start',
            'label' => 'Ngày gieo hạt',
            'type' => 'date',
            'default' => date('Y-m-d'),
        ]);
        $this->crud->addField([
            'name' => 'date_end',
            'label' => 'Ngày thu hoạch',
            'type' => 'date',
            'default' => date('Y-m-d'),
        ]);
        CRUD::addField([
            'name'            => 'status',
            'label'           => "Trạng thái",
            'type'            => 'select_from_array',
            'options' => ['plan' => 'Kế hoạch', 'planting' => 'Đang chăm sóc', 'harvested' => 'Thu Hoạch', 'cancel' => 'Tạm dừng'],
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
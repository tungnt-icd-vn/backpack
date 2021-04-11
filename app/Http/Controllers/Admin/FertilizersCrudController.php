<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FertilizersRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FertilizersCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FertilizersCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Fertilizers::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/fertilizers');
        CRUD::setEntityNameStrings('fertilizers', 'fertilizers');
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
        'label' => 'Tên Thuốc',
        'type'            => 'text',
    ]);
    $this->crud->addColumn([
        'label' => 'Nhà cung cấp',
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
        'options'         => ['PUBLISHED' => 'Công khai', 'DRAFT' => 'Bản nháp'],

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
        CRUD::setValidation(FertilizersRequest::class);

        //CRUD::setFromDb(); // fields
        $this->crud->addField([
            'label' => 'Tên phân Bón',
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
            'label' => 'Mô Tả thuốc (công dụng, dược học...)',
            'type'  => 'wysiwyg',
        ]);

        $this->crud->addField([
            'name' => 'image',
            'label' => 'Image',
            'type' => 'browse',
        ]);

        $this->crud->addField([
            'name' => 'date_fertilizers',
            'label' => 'hạn dùng',
            'type' => 'date',
            'default' => date('Y-m-d'),
        ]);
        $this->crud->addField([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'enum',
            'options' => ['PUBLISHED' => 'Công khai', 'DRAFT' => 'Bản nháp', 'INTERNAL' => 'Nội Bộ'],
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

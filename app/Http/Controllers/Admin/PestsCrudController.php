<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PestsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PestsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PestsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Pests::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/pests');
        CRUD::setEntityNameStrings('pests', 'Quản lý sâu bệnh');
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
        //CRUD::setFromDb(); // columns
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Tên sâu bệnh',
            'type'            => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Hình ảnh',
            'type'            => 'image',

        ]);
        $this->crud->addColumn([
            'name' => 'dangerous',
            'label' => 'Mức độ gây hại',
            'type'            => 'select_from_array',
            'options' => ['high' => 'Nghiêm trọng', 'medium' => 'Trung bình', 'low' => 'ít nghiêm trọng'],

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
        CRUD::setValidation(PestsRequest::class);

        //CRUD::setFromDb(); // fields
        $this->crud->addField([
            'label' => 'Tên Sâu Bệnh',
            'name' => 'title',
            'type'  => 'text',
        ]);
        CRUD::addField([   // Wysiwyg
            'name'  => 'content',
            'label' => 'Mô Tả Sâu Bệnh',
            'type'  => 'wysiwyg',
        ]);
        $this->crud->addField([
            'label' => "Ảnh công viêc",
            'name' => "image",
            'type' => 'image',
        ]);
        CRUD::addField([
            'name'            => 'dangerous',
            'label'           => "Mức độ gây hại",
            'type'            => 'select_from_array',
            'options' => ['high' => 'Nghiêm trọng', 'medium' => 'Trung bình', 'low' => 'ít nghiêm trọng'],
            'allows_null'     => false,
            'allows_multiple' => false,
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

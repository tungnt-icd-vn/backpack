<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Categories_products extends Model
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'categories_products';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function sluggable(): array
    {
        return [
            'categories_products_code' => [
                'source' => 'slug_or_title',
            ],
        ];
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function trees()
    {
        return $this->belongsTo('\App\Models\Trees', 'trees_code');
    }

    public function farms()
    {
        return $this->belongsTo('\App\Models\Farms', 'farms_code');
    }

    public function zones()
    {
        return $this->belongsTo('\App\Models\Zones', 'zones_code');
    }

    public function beds()
    {
        return $this->belongsTo('\App\Models\Beds', 'beds_code');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */
    public function getSlugOrTitleAttribute()
    {
        $makecode = $this->tittle . '_Code_'. $this->date_start;
        if ($this->categories_products_code != '') {
            return $this->categories_products_code;
        }
        return $makecode;
        //make code
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}

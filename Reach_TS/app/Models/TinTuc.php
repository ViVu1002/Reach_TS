<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Arr;

class TinTuc extends Model
{
    protected $table = 'tintucs';

    protected $guarded = [''];

    protected $status = [
    	1 => [
    		'name' => 'Public',
    		'class' => 'label-warning'
    	],

    	0 => [
    		'name' => 'Private',
    		'class' => 'label-success'
    	]
    ];

    public function getStatus()
    {
    	return Arr::get($this->status, $this->tt_active, '[N\A]');
    }

     public function category()
    {
        return $this->belongsTo(Category::class,'tt_category_id');
    }
}

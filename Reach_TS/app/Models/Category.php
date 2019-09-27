<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Arr;

class Category extends Model
{
    protected $table ='categories';
    protected $guarded = [''];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;

    protected $status = [
    	1 => [
    		'name' => 'Public',
    		'class' => 'label-danger'
    	],

    	0 => [
    		'name' => 'Private',
    		'class' => 'label-success'
    	]
    ];

    public function getStatus()
    {
    	return  Arr::get($this->status, $this->c_active, '[N\A]');
    }
}

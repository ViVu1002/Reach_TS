<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Arr;

class LoaiTin extends Model
{
    protected $table = 'loaitins';

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
    const HOT_ON = 1 ;
    const HOT_OFF = 0 ;

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

    protected $hot = [
    	1 => [
    		'name' => 'Nổi bật',
    		'class' => 'label-danger'
    	],

    	0 => [
    		'name' => 'Không',
    		'class' => 'label-info'
    	]
    ];

    public function getStatus()
    {
    	return Arr::get($this->status, $this->lt_active, '[N\A]');
    }

    public function getHot()
    {
    	return Arr::get($this->hot, $this->lt_hot, '[N\A]');
    }

    public function category()
    {
    	return $this->belongsTo(Category::class,'lt_category_id');
    }
}

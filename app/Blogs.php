<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;
}

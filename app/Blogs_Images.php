<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs_Images extends Model
{
    protected $table = 'blogs_images'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	//
    protected $table = 'categories'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'categorie_id';

	
	public function getListCategories(){
		$getListCategories = Categories::select()->get();
		return $getListCategories;
	}
	public function deleteCategorie($categorie_id){
		$categorie = Categories::where('categorie_id',$categorie_id);
		$categorie->delete();
		$childrenCategorie = $this->getChildren($categorie_id);
		$childrenCategorie->delete();
	}
	public function getChildren($categorie_id){
		$childrenCategorie = Categories::where('paren_id',$categorie_id);
		return $childrenCategorie;
	}
}
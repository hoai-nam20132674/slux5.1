<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	//
    protected $table = 'categories'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'categorie_id';
	public $timestamps = true;

	
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
	public function addCategorie($request){
		$cate = new Categories;
		$cate ->paren_id =$request->paren_id;
		$cate ->name= $request->name;
		$cate ->title = $request->title;
		$cate ->content = $request->content;
		$cate ->seo_keyword = $request->seo_keyword;
		$cate ->seo_description = $request->seo_description;
		$cate ->url =$request ->url;
		$cate ->display = $request->display;
		$cate ->type = $request->type;
		$cate ->save();
	}
	public function editCategorie($request, $categorie_id){
		$cate = Categories::where('categorie_id',$categorie_id)->get()->first();
		$cate ->paren_id =$request->paren_id;
		$cate ->name= $request->name;
		$cate ->title = $request->title;
		$cate ->content = $request->content;
		$cate ->seo_keyword = $request->seo_keyword;
		$cate ->seo_description = $request->seo_description;
		$cate ->url =$request ->url;
		$cate ->display = $request->display;
		$cate ->type = $request->type;
		$cate ->save();
	}
	public function convertCategorie($categorie_id){
		$cate = Categories::where('categorie_id',$categorie_id)->get()->first();
		$cate ->name='null';
		$cate ->url ='null';
		$cate ->save();
	}
}
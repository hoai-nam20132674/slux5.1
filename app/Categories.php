<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	//
    protected $table = 'categories'; //Ten bang
	protected $guarded = []; //Cac tham so
	protected $primaryKey = 'categorie_id';
	public $timestamps = true;

	
	public function getListCategories(){
		$getListCategories = Categories::select()->get();
		return $getListCategories;
	}
	public function deleteCategorie($id){
		$categorie = Categories::where('id',$id);
		$categorie->delete();
		$childrenCategorie = $this->getChildren($id);
		$childrenCategorie->delete();
	}
	public function getChildren($id){
		$childrenCategorie = Categories::where('paren_id',$id);
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
	public function editCategorie($request, $id){
		$cate = Categories::where('id',$id)->get()->first();
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
	
}
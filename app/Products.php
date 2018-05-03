<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products_Images;
class Products extends Model
{
    protected $table = 'products'; //Ten bang
	protected $guarded = []; //Cac tham so
	public $primaryKey = 'id';
	public $timestamps = true;

	public function addProduct($request){
		$product =new Products;
		$file_name = $request->file('image')->getClientOriginalName();
		$product->url = $request->url;
		$product->name =$request->name;
		$product->price=$request->price;
		$product->title=$request->title;
		$product->seo_keyword=$request->seo_keyword;
		$product->seo_description=$request->seo_description;
		$product->sale=$request->sale;
		$product->tskt=$request->tskt;
		$product->description=$request->description;
		$product->categorie_id =$request->categorie_id;
		$product->display=$request->display;
		$product->image=$file_name;
		$product->view=0;
		$product->save();
		for($i=1;$i<4;$i++){
			if($request->hasFile('image.$i')){
				$file_name.$i = $request->file('image.$i')->getClientOriginalName();
				$request->file('image.$i')->move('uploads/images/products/',$file_name.$i);
				$image= new Images;
				$image->name =$file_name.$i;
				$image->url =$file_name.$i;
				$image->alt =$file_name.$i;
				$image->save();
				$product_image =new Products_Images;
				$product_image->image_id = $image->id;
				$product_image->product_id =$product->id;
				$product_image->save();
			}
		}

	}
}

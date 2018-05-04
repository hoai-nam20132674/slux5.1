<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products_Images;
use App\Images;
use Input;
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
		$product->description=$request->content;
		$product->categorie_id =$request->categorie_id;
		$product->display=$request->display;
		$product->image=$file_name;
		$product->view=0;
		$product->save();
		$image= new Images;
		$image->name =$file_name;
		$image->url =$file_name;
		$image->alt =$file_name;
		$image->save();
		$product_image =new Products_Images;
		$product_image->image_id = $image->id;
		$product_image->product_id =$product->id;
		$product_image->save();
		
		if(Input::hasFile('fimage')){
			foreach(Input::file('fimage') as $file){
				if(isset($file)){
					$file_name = $file->getClientOriginalName();
					$file->move('uploads/images/products/',$file_name);
					$image= new Images;
					$image->name =$file_name;
					$image->url =$file_name;
					$image->alt =$file_name;
					$image->save();
					$product_image =new Products_Images;
					$product_image->image_id = $image->id;
					$product_image->product_id =$product->id;
					$product_image->save();
				}
			}
		}
	}
	public function deleteProduct($id){
		$count = Products_Images::where('product_id',$id)->count();
		if($count != 0){
			for($i=0;$i<$count;$i++){
				$product_image= Products_Images::where('product_id',$id)->get()->first();
				$product_image->product_id =1;
				$product_image->save();
			}
		}
		$product = Products::where('id',$id);
		$product->delete();
	}
}

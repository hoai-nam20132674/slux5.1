<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;
use App\Categories;

class viewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewController($url)
    {
        $categorie = Categories::where('url',$url)->get()->first();
        if($categorie->type ==0){
            return View('frontEndUser.page-content.newsCategorie');
        }
        else{

            return View('frontEndUser.page-content.listProductCategorie',[]);
        }
    }
    // public function getProductCategorie(){
    //     $array = array();
    //     $count = Categories::where('id',$id)->count();
    //     $categorieChildren = Categories::where('id',$id)->get()
    //     foreach($childrenCategorie as $childrenCate){
            
    //     }
        
    // }
    public function test(){
        $cate =new Categories;
        $idCateChildren = $cate->getIdChildren(3);
        $count = count($idCateChildren);
        for($i=0;$i<$count;$i++){
            $idCateChildren1 = $cate->getIdChildren($idCateChildren[$i]);
        }
        dd($idCateChildren1);
        // $cate = Categories::where('parent_id',2)->count();
        // if($cate>0){
        //     echo "true";
        // }
        // else{
        //     echo "false";
        // }
        // $array = array();
        // $array[0]=0;
        // $array[1]=1;
        // dd($array);
    }
    
}

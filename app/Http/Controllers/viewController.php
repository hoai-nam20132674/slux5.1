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
    public function viewContentPageCategorie($url)
    {
        $categorie = Categories::where('url',$url)->get()->first();
        if($categorie->type ==0){
            return View('frontEndUser.page-content.newsCategorie');
        }
        else{
            $id =$categorie->id;
            $products= $this->getProductCategorie($id);
            return View('frontEndUser.page-content.listProductCategorie',['products'=>$products]);
        }
    }

    public function getIdCategorieChildren($id){
        $cate =new Categories;
        $array =array();
        $i=0;
        $k=0;
        $n=0;
        $idCateChildrens = $cate->getIdChildren($id);
        $count=0;
        if(count($idCateChildrens)>0){
            $count = count($idCateChildrens);
            for($i;$i<$count;$i++){
                $array[$i]=$idCateChildrens[$i];
            }
            foreach($idCateChildrens as $idCateChildren){
                $cate = new Categories;
                $idCateChildrens1= $cate->getIdChildren($idCateChildren);
                if(count($idCateChildrens1)>0){
                    $count1 = count($idCateChildrens1);
                    $j=0;
                    $count=$count1+$count;
                    for($i;$i<$count;$i++){
                        $array[$i]=$idCateChildrens1[$j];
                        $j++;
                    }
                    foreach($idCateChildrens1 as $idCateChildren1){
                        $cate = new Categories;
                        $idCateChildrens2= $cate->getIdChildren($idCateChildren1);
                        if(count($idCateChildrens2)>0){
                            $count2 = count($idCateChildrens2);
                            $j=0;
                            $count=$count2+$count;
                            for($i;$i<$count;$i++){
                                $array[$i]=$idCateChildrens2[$j];
                                $j++;
                            }
                            foreach($idCateChildrens2 as $idCateChildren2){
                                $cate = new Categories;
                                $idCateChildrens3= $cate->getIdChildren($idCateChildren2);
                                if(count($idCateChildrens3)>0){
                                    $count3 = count($idCateChildrens3);
                                    $j=0;
                                    $count=$count3+$count;
                                    for($i;$i<$count;$i++){
                                        $array[$i]=$idCateChildrens3[$j];
                                        $j++;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $array[$count]=$id;
        return $array;
    }
    public function getProductCategorie($id){
        $categories = $this->getIdCategorieChildren($id);
        $products = Products::whereIn('categorie_id',$categories)->get();
        // dd($products);
        return $products;
    }
    
}

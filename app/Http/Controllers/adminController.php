<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Categories;

class adminController extends Controller
{
    
    public function index(){
        return View('frontEndAdmin.page-content.index');
    }
    public function getListCategories(){
        $Categories =new Categories;
        $getListCategories = $Categories->getListCategories();
    	return View('frontEndAdmin.page-content.listCategories',['getListCategories'=>$getListCategories]);
    }
    public function deleteCategorie($categorie_id){
        $Categories =new Categories;
        $Categories->deleteCategorie($categorie_id);
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Xóa danh mục thành công']);
    }
    public function addCategorie(){
        return View('frontEndAdmin.page-content.addCategorie');
    }
    // public function postAddCategorie(addCategorieRequest $request){

        
    // }

    public function listTinTuc(){
        return View('frontEndAdmin.page-content.listTinTuc');
    }
}

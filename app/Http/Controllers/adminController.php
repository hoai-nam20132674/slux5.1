<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Categories;
use App\Http\Requests\addCategorieRequest;
use App\Http\Requests\editCategorieRequest;

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
    public function postAddCategorie(addCategorieRequest $request){
        $cate =new Categories;
        $cate->addCategorie($request);
        return redirect('admin/getListCategories')->with(['flash_level'=>'success','flash_message'=>'Thêm danh mục thành công']);
    }
    
    public function editCategorie($categorie_id){
        $categorie = Categories::where('categorie_id',$categorie_id)->get();
        return View('frontEndAdmin.page-content.editCategorie',['categorie'=>$categorie]);
    }
    public function postEditCategorie(editCategorieRequest $request, $categorie_id){
        
        $cate =new Categories;
        $cate->editCategorie($requests,$categorie_id);
        return redirect('admin/getListCategories')->with(['flash_level'=>'success','flash_message'=>'Sửa danh mục thành công']);
        
    }

    public function listTinTuc(){
        return View('frontEndAdmin.page-content.listTinTuc');
    }
}

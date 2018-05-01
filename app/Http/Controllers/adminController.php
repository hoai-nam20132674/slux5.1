<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Categories;
use App\Http\Requests\addCategorieRequest;
use App\Http\Requests\editCategorieRequest;
use Illuminate\Support\Facades\DB;

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
    public function deleteCategorie($id){
        $Categories =new Categories;
        $Categories->deleteCategorie($id);
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Xóa danh mục thành công']);
    }
    public function addCategorie(){
        $cate = new Categories;
        $categories =$cate->getListCategories();
        return View('frontEndAdmin.page-content.addCategorie',['categories'=>$categories]);
    }
    public function postAddCategorie(addCategorieRequest $request){
        $cate =new Categories;
        $cate->addCategorie($request);
        return redirect('admin/getListCategories')->with(['flash_level'=>'success','flash_message'=>'Thêm danh mục thành công']);
    }
    
    public function editCategorie($id, $paren_id){
        $categorie = Categories::where('id',$id)->get();
        $categories = Categories::select()->get();
        $parent = Categories::where('id',$paren_id)->get();
        return View('frontEndAdmin.page-content.editCategorie',['categorie'=>$categorie,'categories'=>$categories,'parent'=>$parent]);
    }
    public function postEditCategorie(editCategorieRequest $request, $id){
        
        $cate =new Categories;
        $cate->editCategorie($request,$id);
        return redirect('admin/getListCategories')->with(['flash_level'=>'success','flash_message'=>'Sửa danh mục thành công']);
        
    }

    public function listTinTuc(){
        return View('frontEndAdmin.page-content.listTinTuc');
    }
}

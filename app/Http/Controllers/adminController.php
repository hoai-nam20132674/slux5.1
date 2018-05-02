<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Categories;
use App\Blogs;
use App\Http\Requests\addCategorieRequest;
use App\Http\Requests\editCategorieRequest;
use App\Http\Requests\editBlogRequest;
use App\Http\Requests\addBlogRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
    public function deleteCategorie($id,$parent_id){
        $Categories =new Categories;
        $Categories->deleteCategorie($id,$parent_id);
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
    
    public function editCategorie($id, $parent_id){
        $categorie = Categories::where('id',$id)->get();
        $categories = Categories::select()->get();
        $parent = Categories::where('id',$parent_id)->get();
        return View('frontEndAdmin.page-content.editCategorie',['categorie'=>$categorie,'categories'=>$categories,'parent'=>$parent]);
    }
    public function postEditCategorie(editCategorieRequest $request, $id){
        
        $cate =new Categories;
        $cate->editCategorie($request,$id);
        return redirect('admin/getListCategories')->with(['flash_level'=>'success','flash_message'=>'Sửa danh mục thành công']);
        
    }

    public function getListBlogs(){
        $blogs = Blogs::select()->get();
        return View('frontEndAdmin.page-content.listBlogs',['blogs'=>$blogs]);
    }
    public function addBlog(){
        $categories = Categories::select()->get();
        return View('frontEndAdmin.page-content.addBlog',['categories'=>$categories]);
    }
    public function postAddBlog(addBlogRequest $request){
        if($request->categorie_id ==0){
            return redirect('admin/getListBlogs')->with(['flash_level'=>'danger','flash_message'=>'Thêm tin tức không thành công']);
        }
        $blog =new Blogs;
        $blog->addBlog($request);
        return redirect('admin/getListBlogs')->with(['flash_level'=>'success','flash_message'=>'Thêm tin tức thành công']);
    }
    public function deleteBlog($id){
        $blog =new Blogs;
        $blog->deleteBlog($id);
        return redirect('admin/getListBlogs')->with(['flash_level'=>'success','flash_message'=>'Xóa tin tức thành công']);
    }
    public function editBlog($id, $categorie_id){
        $blog = Blogs::where('id',$id)->get();
        $categorie = Categories::where('id',$categorie_id)->get();
        $categories = Categories::select()->get();
        return View('frontEndAdmin.page-content.editBlog',['categorie'=>$categorie,'categories'=>$categories,'blog'=>$blog]);
    }

    public function postEditBlog(editBlogRequest $request, $id){
        $blog =new Blogs;
        $blog->editBlog($request,$id);
        return redirect('admin/getListBlogs')->with(['flash_level'=>'success','flash_message'=>'Sửa tin tức không thành công']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CategoriesController extends Controller
{
    public function categories(Request $request){
        $search_value = $request->get('search');
        $id = $request->get('category_id');

        $obj_categories = new Categories();
        $obj_companies = new Companies();

        $categories = $obj_categories::pluck('category_name','category_id');
        $companies = $obj_companies->search($search_value,$id);
        
        return view('categories',['categories' => $categories,'search'=>$companies]);
    }

    public function categoriescompanies(){
        $obj = new Categories();
        $categories = $obj->paginate(15);
        return view('categoriescompanies',['categories' => $categories]);
    }
}
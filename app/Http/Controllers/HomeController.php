<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $journals = DB::table('journals')
                        ->join('journals_images','journals.id','=','journals_images.journal_id')
                        ->select('journals.created_at as jcreated_at',
                        'journals.title as jtitle','journals_images.image as image',
                        'journals.id as id','journals.abstract as abstract',
                        'journals.keywards as keywards',
                        'journals.a1fname as a1fname',
                        'journals.a1lname as a1lname')
                        ->orderBy('journals.created_at','desc')
                        ->paginate(3);
                        //dd($journals[0]);
        return view('welcome')->with('journals',$journals)->with('category',$category);
    }
    public function category()
    {
        $category = Category::all();
        return view('category')->with('category',$category);
    }
    public function aboutus()
    {
        $category = Category::all();
        return view('aboutus')->with('category',$category);
    }
    public function instruction()
    {
        $category = Category::all();
        return view('instructions')->with('category',$category);
    }
    public function allpapers()
    {
        $category = Category::all();
        $journals = DB::table('journals')
                        ->join('journals_images','journals.id','=','journals_images.journal_id')
                        ->select('journals.created_at as jcreated_at',
                        'journals.title as jtitle','journals_images.image as image',
                        'journals.id as id','journals.abstract as abstract',
                        'journals.keywards as keywards',
                        'journals.a1fname as a1fname',
                        'journals.a1lname as a1lname')
                        ->orderBy('journals.created_at','desc')
                        ->paginate(3);
        return view('allpapers')->with('journals',$journals)->with('category',$category);
    }
}

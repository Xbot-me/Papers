<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Journal;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.category')->with('category',$categories);
        //return view('category.category.blade.php');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = '';
        return view('category.categoryCreate')->with('category',$category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string'
        ]);
         $category = new Category;
         $category->title = $request->title;
         $category->save();
         return redirect('admin/categories')->with('success', 'Category has been Created');
         //dd($request->title);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $journals = Journal::with('category')->get();
        //$cat2 = $cat->find($category);
        //$journals = Journal::find();
        return view();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $id)
    {
        $cat = Category::all();
        $cat2 = $cat->find($id);

        return view('category.categoryCreate')->with('category',$cat2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $id)
    {
        $this->validate($request,[
            'title' => 'required|string'
        ]);
        $category = Category::all();
        $cat2 = $category->find($id);

        $cat2->title = $request->title;
        $cat2->save();
        return redirect('admin/categories')->with('Success','Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $id)
    {   $category = Category::all();
        $cat2 = $category->find($id);

        $cat2->delete();
        return redirect('admin/categories')->with('Success','Category Deleted');
    }
}

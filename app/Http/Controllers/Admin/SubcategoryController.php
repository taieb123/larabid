<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Subcategory;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $subcategory =  DB::table('subcategory')
         ->join('category', 'category.id', '=', 'subcategory.id_category')
         ->select('subcategory.*', 'category.title as category_title','category.id as category_id')
         ->get();
        return view('Admin.templates.subcategory.index',compact(['categories','subcategory']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.templates.subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
       ],[
           'title.required' => 's\'il vous plait saisie titre',
           'title.min' => 's\'il vous plait saisie titre de 3 caractere au moins',
       ]);

        Subcategory::create($request->all());
        return redirect()->route('subcategory.index')->with('success','Sub-category a éte bien creé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $subcategory->update($request->all());

        return redirect()->route('subcategory.index')->with('success','Subcategory a éte bien modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function findSubcategroyByCategory(Request $request){
        $states = DB::table('subcategory')
        ->select('id', 'title')
                ->where('id_category','=',$request->id_category)
                ->pluck('id','title');
        return response()->json($states);
    }
}

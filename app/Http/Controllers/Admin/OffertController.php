<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Offert;
use Illuminate\Http\Request;

class OffertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offert  $offert
     * @return \Illuminate\Http\Response
     */
    public function show(Offert $offert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offert  $offert
     * @return \Illuminate\Http\Response
     */
    public function edit(Offert $offert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offert  $offert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offert $offert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offert  $offert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offert $offert)
    {
        //
    }

    function upload(Request $request){
     $image = $request->file('file');
     $imageName = time() . '.' . $image->extension();
     $image->move(public_path('images'), $imageName);
     return response()->json(['success' => $imageName]);
    }

    function fetch(){
     $images = \File::allFiles(public_path('images'));
     $output = '<div class="row">';
     foreach($images as $image)
     {
      $output .= '
      <div class="col-md-2" style="margin-bottom:16px;" align="center">
                <img src="'.asset('images/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
            </div>
      ';
     }
     $output .= '</div>';
     echo $output;
    }

    function delete(Request $request){
     if($request->get('name')){
      \File::delete(public_path('images/' . $request->get('name')));
     }
    }
}

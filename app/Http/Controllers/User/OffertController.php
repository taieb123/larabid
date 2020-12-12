<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Offert;
use App\Category;
use App\Sysfile;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OffertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('User.templates.auction.index',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $label = $request->get('label');
        $value = $request->get('value');
        $data_array = [];
        for ($i = 0; $i < count($label); $i++) {
            $data_array[] = [
                $label[$i][0] => $value[$i][0]
             ];
        }
        $Offert = new Offert([
            'description' => $request->get('description'),
            'title' => $request->get('title'),
            'prix_deb' => $request->get('prix_deb'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
            'details' => json_encode($data_array),
            'nbr_enchere' => 0,
        ]);
        $Offert->save();
        return view('User.templates.auction.uploadfile')->with('offert_id', $Offert->id);
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

    /*
  File upload
  */
  public function fileupload(Request $request){

        if($request->hasFile('file')) {

        // Upload path
        $destinationPath = 'files/';

        // Create directory if not exists
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        // Get file extension
        $extension = $request->file('file')->getClientOriginalExtension();

        // Valid extensions
        $validextensions = array("jpeg","jpg","png","pdf");

        // Check extension
        if(in_array(strtolower($extension), $validextensions)){

            // Rename file
            $fileName = $request->file('file')->getClientOriginalName().time() .'.' . $extension;

            $sysfile = new Sysfile([
                'path' => $destinationPath.$fileName,
                'extension' => $extension,
                'tablename' => $request->get('table_name'),
                'field' => $request->get('field_name'),
                'id_field' => $request->get('id_offert'),
            ]);
            $sysfile->save();

            var_dump($sysfile->id);

            $offert = Offert::find($request->get('id_offert'));
            $offert->image += 1;
            $offert->save();
            // Uploading file to given path
            $request->file('file')->move($destinationPath, $fileName);

        }

        }
    }
}

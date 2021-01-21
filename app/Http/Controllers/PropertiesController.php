<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Images;
use App\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // $properties=Properties::with('images')->orderBy('price','desc')->get();
        // return response()->json($properties);
        return view('admin.index');
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProperties()
    { 
        $properties=Properties::with('images')->orderBy('price','desc')->get();
        return response()->json($properties);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function propertyWithId($id)
    {
        
        $property=Properties::with('images')->where('id',$id)->get();
        return response()->json($property);
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
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequest $request)
    {
        // dd($request['images']);
        $validate=$request->validated();
          
          if($validate['available']){
              $validate['available']='1';
          }else{
            $validate['available']='0';
          }
          
          $filename = Storage::disk('public')->put('images',$request['image']);
          $validate['image']='storage/'.$filename;
        $property=Properties::create($validate);
        $this->uploadPhotos($request,$property->id);
        return response()->json(['error'=>false,'data'=>$request]);
    }


    private function uploadPhotos(PropertyRequest $request,$id)
    {
        
        foreach ($request['images'] as $image) {
            $filename = Storage::disk('public')->put('images',$image);
            Images::create([
                'properties_id' => $id,
                'filename' =>'storage/'.$filename
            ]);
            }
            
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyRequest $request,$id)
    {
        $property=Properties::find($id);
        $validate=$request->validated();
        
            

        if($request->file('image')!=null){
            Storage::delete($property->image);
            
            $filename = Storage::disk('public')->put('images',$request['image']);
            $validate['image']='storage/'.$filename;
        }else{
            $validate['image']=$property->image;
        }
        if($request->file('images')!=null&&sizeof($request['images'])>0){
           
                    $this->uploadPhotos($request,$id);            
                
        }
        $property->update($validate);
        return response()->json(['error'=>false]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Properties $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        // dd(public_path().'/storage/images/5rWbacnJSvsM2FR6VwpfaxW5qRawmwboOYTwTNig.jpeg');
        // File::delete(public_path().'/storage/images/5rWbacnJSvsM2FR6VwpfaxW5qRawmwboOYTwTNig.jpeg');
        // Storage::delete('/images/Tk6HHzTFhyKD4k5CY6bSJLKXHxwaOOyU7OlEktIL.jpeg');
        $property=Properties::find($id);
           
           $this->deleteUploadedPhoto($id);
        // Storage::delete($property->image);
        File::delete(public_path().'/'.$property->image);
        // Properties::find($id)->delete();
        $property->delete();
        return response()->json(['error'=>false]);
    }

    private function deleteUploadedPhoto($id)
    {
        
        $imageDeleted=Images::where('properties_id',$id)->get();
        for ($i=0; $i <sizeof($imageDeleted) ; $i++) { 
           Images::find($imageDeleted[$i]->id)->delete();
            // Storage::delete($imageDeleted[$i]->filename);
            File::delete(public_path().'/'.$imageDeleted[$i]->filename);
        }
        
    }

        /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteImage($id)
    {
           $image=Images::find($id);
           
        //    Storage::delete($image->filename);
           File::delete(public_path().'/'.$image->filename);
         
           Images::find($id)->delete();
        return response()->json(['error'=>false]);     //
    }

            /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserProperties()
    {
        
        //  dd($property->getHouseType(0));
        $properties=Properties::with('images')->orderBy('price','desc')->limit(1)->get();
        foreach ($properties as $property) {
            $property=new Properties();
            $property->setHouseType($property->getHouseType($property->type));
        }
       
        return response()->json($properties);
    }

                /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function showProperty($id)
    {
       
        $properties=Properties::with('images')->orderBy('price','desc')->get();
        return response()->json($properties);
    }
}

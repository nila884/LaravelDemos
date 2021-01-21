<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {   
      
        
        $rules= [
            'area'=>'required',
            'rooms'=>'required|min:1',
            'bedrooms'=>'required|min:1',
            'bathrooms'=>'required|min:1',
            'price'=>'required|min:2',
            'category'=>'required',
            'type'=>'required|min:0|max:2',
            'address'=>'required|min:5|max:255',
            'city'=>'required|min:2|max:20',
            'description'=>'required|min:10|max:1000',
            'available'=>'required',
           
        ];

        if($this->file("image")!=null){
            $rules['image']='image|mimes:jpeg,bmp,png|max:2000';
        }
        
        if(is_array($this->file("images"))){
      if(sizeof($this->file("images"))>0){
        $images = count($this->file("images"));
        foreach(range(0, $images) as $index) {
            $rules['images.' . $index] = 'image|mimes:jpeg,bmp,png|max:2000';
        }
    }
    } 


       
        return $rules;
    }
}

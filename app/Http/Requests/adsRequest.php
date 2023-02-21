<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adsRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
   
        public function rules()
        {
            return [
                'title'=>'required|max:20',
                'Description'=>'required|max:300',
                'price'=>'required|numeric',
                'photo'=>'required|mimes:jpeg,jpg,png',
                'photo1'=>'mimes:jpeg,jpg,png',
                'photo2'=>'mimes:jpeg,jpg,png',

                
            ];
        }
    
      
    
}

<?php
namespace App\Traits;


Trait OfferTrait{


     function saveimage($photo,$folder){
        $file_extention = $photo ->getClientOriginalExtension();
        $file_name = time().'.'.$file_extention;
         $path =$folder;

        $photo ->move(public_path($path.'/'),$file_name) ;  
         return $file_name;
    }

    function saveimage1($photo,$folder){
     $file_extention = $photo ->getClientOriginalExtension();
     $file_name = time().'1.'.$file_extention;
     $path =$folder;
     $photo ->move($path,$file_name) ;  
      return $file_name;
 }
 function saveimage2($photo,$folder){
     $file_extention = $photo ->getClientOriginalExtension();
     $file_name = time().'2.'.$file_extention;
     $path =$folder;
     $photo ->move($path,$file_name) ;  
      return $file_name;
 }
}
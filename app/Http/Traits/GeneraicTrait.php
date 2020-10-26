<?php

namespace App\Traits;

use Exception;
use Auth;
use DB;
use Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

Trait GeneraicTrait
{
    function SaveImages($fileName,$file,$destination,$width = 223,$height = 190) {
        $time = time();
        $extension  = $file->getClientOriginalExtension();
        $realPath   = $file->getRealPath();
        $fileName   = $fileName.$time;
        $path   = $destination . $fileName;
        Storage::put($path, file_get_contents($realPath), 'public');
        return $fileName;
    }

    function base64_to_jpeg($base64_string, $image_extension) {
     $image = $base64_string; // image base64 encoded
     preg_match("/data:image\/(.*?);/",$image,$image_extension); // extract the image extension
     $image = preg_replace('/data:image\/(.*?);base64,/','',$image); // remove the type part
     $image = str_replace(' ', '+', $image);
     $imageName = 'image_' . time() . '.' . $image_extension[1]; //generating unique file name;
     $getImage = Storage::disk('public')->put($imageName,base64_decode($image));
     return $imageName;
}
}

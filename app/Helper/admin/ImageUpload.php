<?php


namespace App\Helper\admin;


use Intervention\Image\Facades\Image;

class ImageUpload
{
    /*Image Upload*/
    public static function updateImage($oldImage,$path,$newImage)
    {
        if (!empty($oldImage)){
            @unlink(public_path() . '/' . $oldImage);
        }
        $file_name = '';
        if(!empty($newImage)) {
            $file_name =rand(11111, 99999).time() . '.' . $newImage->getClientOriginalExtension();
            $destinationPath = public_path($path);
            $newImage->move($destinationPath, $file_name);
        }
        return $file_name;
    }
    /*Image Save*/
    public static function saveImage($path,$newImage)
    {
        $file_name = '';
        if(!empty($newImage)) {
            $file_name =rand(11111, 99999).time() . '.' . $newImage->getClientOriginalExtension();
            $destinationPath = public_path($path);
            $newImage->move($destinationPath, $file_name);
        }
        return $file_name;
    }
    /*My image upload Add code*/
    public static function addImage($height,$width,$path,$newImage)
    {
        $input =rand(11111, 99999).time().'.'.$newImage->getClientOriginalExtension();
        $destinationPath = public_path($path);
        $img = Image::make($newImage->getRealPath());
        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input);
        return $input;
    }
    /*My image upload Update code*/
    public static function myUpdateImage($oldImage,$height,$width,$path,$newImage)
    {
        if (!empty($oldImage)){
            @unlink(public_path() . $path .'/' . $oldImage);
        }
        $input =rand(11111, 99999).time().'.'.$newImage->getClientOriginalExtension();
        $destinationPath = public_path($path.'/');
        $img = Image::make($newImage->getRealPath());
        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input);
        return $input;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Zuhratul Mardhiyah
 * Date: 15/03/2017
 * Time: 17:14
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class ImageController extends Controller {
    public function getUploadImage()
    {
        return view('image/image');
    }
    public function postUploadImage(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $photo = $request->file('image');
        $img   = Image::make($_FILES['image']['tmp_name']);

        $imagename = time().'.jpg';
        $dir = public_path('images');


        $destinationPath =$dir.'/'.Auth::User()->NISN;

        if(!File::exists($destinationPath)){
           File::makeDirectory($destinationPath);

        }
        $imgPath=$destinationPath.'/'.$imagename;
        $img->save($imgPath);
        return back()->with('image',$imagename)
                     ->with('subdir',Auth::User()->NISN);
    }

    public function CreateDirectory(){

        if(File::makeDirectory('http://localhost/resources/xxxa')){
            return 'dir exis';
        }else{
            return 'failed';
        }

    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Album;
use App\Photo;
use Exception;

class PhotoController extends Controller
{
    public function showPhotoUploadForm(){
    	return view('admin.photo_upload',['album'=>Album::get()]);
    }

    public function createAlbum(Request $request){
    	app('App\Http\Controllers\FormValidator')->myValidator($request);
        try{
            Album::create([
            'name'=>strtolower($request->name),
            'album_alias'=>Str::slug($request->name,'-')
        ]);
        return redirect()->back()->with(['message' => 'Album Created Successfully', 'alert' => 'alert-success']);
        }catch(\Exception $exception){
        return redirect()->back()->with(['message' => 'Sorry! The Album Already Exists', 'alert' => 'alert-danger']);
        } 	
    }

    public function uploadPhoto(Request $request){
    	app('App\Http\Controllers\FormValidator')->myValidator($request);
    	Photo::create([
    		'album_id'=>Album::where('name',$request->album)->value('id'),
    		'photo'=>$request->photo,
    	]);
    	return redirect()->back()->with(['msg'=>'Photo Uploaded Successfully','alert'=>'alert-success']);
    }

    public function albumPhotos(Album $album_alias){
    	return view('training.view_album',['album_alias'=>$album_alias->photo]);
    }

    public function list_Photo(){
        return view('admin.photo_list',['photo'=>Photo::get()]);
    }

    public function delete_photo(Photo $photo){
        $photo->delete();
        return redirect()->back()->with(['msg'=>'Photo Deleted','alert'=>'alert-success']);
    }
}

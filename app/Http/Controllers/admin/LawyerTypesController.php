<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\TypeOfAttorney;
use Illuminate\Http\Request;
use Auth;


class LawyerTypesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
      $types = TypeOfAttorney::all();
      return view('admin.typeOfLawyerAdd')->with('types',$types);
    }

    public function show(){
      $types = TypeOfAttorney::all(); 
      return view('admin.typeOfLawyerList')->with('types',$types);
    }

    
    public function store(){
      $type = new TypeOfAttorney();
      $type->type = request('type');
      $type->desciption = request('description');
      $type->add_by = Auth::user()->name;
      $type->save();

      $types = TypeOfAttorney::all();
      return view('admin.typeOfLawyerList')->with('types',$types);
    }

    public function destroy($id){
      TypeOfAttorney::find($id)->delete(); 
      return redirect()->route('type.show');
    }
}

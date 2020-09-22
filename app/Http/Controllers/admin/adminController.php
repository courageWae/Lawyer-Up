<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\TypeOfLawyer;
use App\Message;
use App\User;
//use App\Lawyer;
use App\Package;
use Auth;
use DB;


class adminController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

     public function findAdmin(){
      $admin = User::all();
      foreach($admin as $admin){
        if($admin->email == Auth::user()->email){
          return $admin;
          break;
        }
      }
    }

    public function dashboard(){
        $msg = Message::where('destination','admin')->get();
        $msgLawyer = Message::where('destination','not like',"%admin%")->get();
        $user = User::all();
        $package = Package::latest()->get();
       return view('admin.dashboard')->with('msg',$msg)->with('user',$user)->with('package',$package)->with('msgLawyer',$msgLawyer);	
    }

    public function profile(){ 
        $admin = self::findAdmin();  
        $str = explode(" ",$admin->name);
        return view('admin.profile')->with('str',$str)->with('admin',$admin);
    }    
    public function update(){
       $user = Auth::user();
        $this->validate(request(),[
         'name'=>'required',
         'email' => 'required | email',
         'phone'=> 'required',
        ]); 

        DB::table('users')->where('id', Auth::user()->id)->update(
          ['name' => request('name'),'email'=> request('email'),'phone'=>request('phone'),'password' =>Hash::make(request('password'))]);

          return redirect('/admin_profile');
    }       

    public function adminAdd(){
        return view('admin.adminAdd');
    }

    public function adminStore(Request $request){
        $this->validate(request(),[
             'name'=>'required',
             'email'=>'required | email',
             'phone'=>'required',
             'password'=>'required | confirmed',
        ]);
        $admin = new User;
        $admin->name = request('name');
        $admin->email = request('email');
        $admin->phone = request('phone');
        $admin->role_id = request('role_id');
        $admin->password = password_hash(request('password'), PASSWORD_DEFAULT) ;

        if($request->hasFile('photo')){
           $file = $request->file('photo');
           $extension = $file->getClientOriginalExtension(); //getting image exension
           $filename = time().'.'.$extension;
           $file->move('uploads/pictures/user/',$filename);
           $admin->photo =$filename;
        }else{
           return $request;
           $admin->photo = ' ';
       }

        $admin->save();

        return redirect('/admin_list');
    }

    public function adminDelete($id){
      $user = User::find($id);
      $user->delete();
      return redirect('/admin_list');
    }

    public function insurerAdd(){
        return view('admin.insurerAdd');
    }


    public function insurerStore(Request $request){
        $this->validate(request(),[
             'name'=>'required',
             'email'=>'required | email',
             'phone'=>'required',
             'password'=>'required | confirmed',
        ]);
        $insurer = new User;
        $insurer->name = request('name');
        $insurer->email = request('email');
        $insurer->phone = request('phone');
        $insurer->role_id = request('role_id');
        $insurer->password = password_hash(request('password'), PASSWORD_DEFAULT);

        if($request->hasFile('photo')){
           $file = $request->file('photo');
           $extension = $file->getClientOriginalExtension(); //getting image exension
           $filename = time().'.'.$extension;
           $file->move('uploads/pictures/user/',$filename);
           $insurer->photo =$filename;
        }else{
           return $request;
           $insurer->photo = ' ';
       }
        $insurer->save();
        return redirect('/insurer_list');
    }



    public function insurerDelete($id){
       $user = User::find($id);
       $user->delete();
       return redirect('/insurer_list');
    }

    public function lawyerAdd(){
        $types = TypeOfLawyer::all();
        return view('admin.lawyerAdd')->with('types',$types);
    }

    public function typeOfLawyerAdd(){
      $types = TypeOfLawyer::all(); 
      return view('admin.typeOfLawyerAdd')->with('types',$types);
    }


    public function storeTypeOfLawyer(){
      $type = new TypeOfLawyer();
      $type->type_of_lawyer = request('name');
      $type->by = Auth::user()->name;
      $type->save();
      $types = TypeOfLawyer::all();
      return view('admin.typeOfLawyerAdd')->with('types',$types);
    }

    public function lawyerStore(Request $request){
        $this->validate(request(),[
             'name'=>'required',
             'email'=>'required | email',
             'phone'=>'required',
             'address'=>'required',
             'password'=>'required | confirmed',
        ]);

        $lawyer = new User;
        $lawyer->name = request('name');
        $lawyer->email = request('email');
        $lawyer->phone = request('phone');
        $lawyer->role_id = request('role_id');
        $lawyer->address = request('address');
        $lawyer->house_address = request('house_address');
        $lawyer->type_of_lawyer = request('type_of_lawyer');
        $lawyer->personal_statement = request('personal_statement');
        $lawyer->education = request('education');
        $lawyer->experience = request('experience');
        $lawyer->password = password_hash(request('password'), PASSWORD_DEFAULT);

        if($request->hasFile('photo')){
           $file = $request->file('photo');
           $extension = $file->getClientOriginalExtension(); //getting image exension
           $filename = time().'.'.$extension;
           $file->move('uploads/pictures/user/',$filename);
           $lawyer->photo =$filename;
        }else{
           return $request;
           $lawyer->photo = '';
       }

       
        $lawyer->save();
        return redirect('/lawyer/list');
    }


    public function lawyerDelete($id){
       $user = User::find($id);
       $user->delete();
       return redirect('/lawyer_list');
    }

    public function adminList(){
        $admin = User::where('role_id','1')->latest()->get();
        return view('admin.adminList')->with('admin',$admin);
    }

    public function insurerList(){
        $insurer = User::where('role_id','2')->latest()->get();
        return view('admin.insurerList')->with('insurer',$insurer);
    }

    public function lawyerList(){
        $lawyer = User::where('role_id','3')->latest()->get();
        return view('admin.lawyerList')->with('lawyer',$lawyer);
    }

    public function userList(){
        $user = User::where('role_id','4')->latest()->get();
        return view('admin.userList')->with('user',$user);
    }


    public function userDelete($id){
      $client = User::find($id);
      $client->delete();
      return redirect('/user_list');
    }

    public function typeOfLawyerDelete($id){
      $types = TypeOfLawyer::find($id);
      $types->delete();
      return redirect()->back();

    }

}

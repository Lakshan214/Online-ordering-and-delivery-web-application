<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function View(){
        $user = User::latest()->paginate(5);
        return view('admin.user.view',compact('user'));
    }

    public function UserStore(Request $request){
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            // Handle the case when the email already exists
            Alert::class::success('email already exists' ,'changed the email');
            return redirect()->back();
        }
       
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->userType=$request->userType;
        $user->password=password_hash($request->password, PASSWORD_DEFAULT);
        $user->save();
    return redirect()->back();

   } 

    public function Delete($id){
        User::findOrFail($id)->delete();
        return redirect()->back();
    

    }
}

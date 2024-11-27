<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Notification;
use App\Models\User;
use App\Models\Schedule;
use Illuminate\Routing\Controller;

class TrainerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }




     public function TrainerProfile(){
        $user = Auth::user();
        if ($user->role === 'trainer') {

        $id=auth::user()->id;
        $memberData=User::find($id);
        return view('Trainer/trainer',['user' => $user],compact('memberData'));
        } else {

            return redirect()->back()->with('error', 'You are not authorized to access this page.');
        }
    }
public function TrainerEditProfile(){
    $id=auth::user()->id;
    $editData=User::find($id);
    return view('Trainer/trainerpreferences',compact('editData'));
}
public function TrainerStoreProfile(Request $request){
    $id=auth::user()->id;
    $data=User::find($id);
    $data->name=$request->name;
    $data->username=$request->username;
    $data->email=$request->email;



    if($request->file('profile_picture')){
        $file=$request->file('profile_picture');

        $filename=date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/member_image'),$filename);
        $data['profile_picture']=$filename;
    }
    if ($request->filled('password')) {
        $newPassword = $request->password;
        $data->password = Hash::make($newPassword);

            Notification::create([
            'user_id' => $id,
            'type' => 'password_change',
            'message' => 'Your password has been updated successfully.'
        ]);

    }
    $data->save();
     Notification::create([
        'user_id' => $id,
        'type' => 'profile_update',
        'message' => 'Your profile has been updated successfully.'
    ]);
    return redirect()->route('trainer.view')->with('success', 'Profile updated successfully.');
 }


}

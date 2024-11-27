<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Notification;
use Illuminate\Routing\Controller;

class UserController extends Controller
{

    public function showMemberProfile()
{
    if(Auth::id())
    {
    $memberRequirement = auth()->user()->memberRequirement;
                 $startWeight = auth()->user()->startWeight;
    $currentWeight = auth()->user()->currentWeight;
    $targetWeight = auth()->user()->targetWeight;

    // Determine which view to return based on memberRequirement
    switch ($memberRequirement) {
        case 'Fat Burning':
            return view('member/fatburn-member');
            break;
        case 'Body Building':
            return view('member/member');
            break;
        case 'Regular Exercise':
            return view('member/regular-member');
            break;
        default:
            // Handle default case
            break;
        }

    }
    else{
        return redirect('login');
    }
}

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function MemberProfile(){

        if(Auth::id())
    {
        $id=auth::user()->id;
        $memberData=User::find($id);
           $memberRequirement = auth()->user()->memberRequirement;
           $height=auth()->user()->height;
              $startWeight = auth()->user()->startWeight;
    $currentWeight = auth()->user()->currentWeight;
    $targetWeight = auth()->user()->targetWeight;

    // Determine which view to return based on memberRequirement
    switch ($memberRequirement) {
        case 'Fat Burning':
            return view('member/fatburn-member');
            break;
        case 'Body Building':
            return view('member/member');
            break;
        case 'Regular Exercise':
            return view('member/regular-member');
            break;
        default:
            // Handle default case
            break;
        }
    }
        else{
        return redirect('login');
    }
    }



public function MemberEditProfile(){
       if(Auth::id())
    {
    $id=auth::user()->id;
    $editData=User::find($id);
    return view('member/memberpreferences',compact('editData'));
}
else{
    return redirect('login');
}
}

public function MemberStoreProfile(Request $request){
    $id=auth::user()->id;
    $data=User::find($id);
    $data->name=$request->name;
   // $data->username=$request->username;
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
    return redirect()->route('member.view')->with('success', 'Profile updated successfully.');
 }
public function schedule()
{
    // Fetch schedules for the authenticated user (assuming the member is logged in)
    $schedules = Auth::user()->schedules; // Assuming the Schedule model has a relationship defined with the User model

    // Pass the schedules to the view
    return view('member.schedule', ['schedules' => $schedules]);
}


public function showPaysheets()
{
    // Retrieve paysheet URLs from the database for the authenticated user
    $paysheets = Auth::user()->paySheets;

    // Pass the retrieved data to the view

    return view('member.paysheets', ['paysheets' => $paysheets]);
}
public function showMemberWeight()
{
    $id = Auth::user()->id;
    $member = User::findOrFail($id); // Assuming User model represents the members
    $startWeight = $member->startWeight;
    $currentWeight = $member->currentWeight;
    $targetWeight = $member->targetWeight;

    return view('member/weight', compact('startWeight', 'currentWeight', 'targetWeight'));
}

public function updateWeight(Request $request)
{
    $id = Auth::user()->id;
    $member = User::findOrFail($id); // Assuming User model represents the members
    $member->currentWeight = $request->currentWeight;
    $member->save();

    return redirect()->back()->with('success', 'Weight updated successfully.');
}




}

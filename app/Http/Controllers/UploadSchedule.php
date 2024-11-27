<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Notification;
use App\Models\User;
use App\Models\Schedule;

class UploadSchedule extends Controller
{
    public function upload(){
        $members = User::where('role', 'gym_member')->get();
    return view('Trainer/upload', ['members' => $members]);

    }
    public function store(Request $request){
        $userId = auth()->id(); // Get the authenticated user's ID
         $members = User::where('role', 'gym_member')->get();
        $user = User::find($userId);

    $request->validate([
        'member' => 'required|exists:users,id',
        'schedule' => 'required|string',
        'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx'
    ]);

    // Get the selected gym member's ID from the form
    $userId = $request->input('member');

    // Create a new schedule instance
    $schedule = new Schedule();

    // Assign the user ID to the schedule
    $schedule->user_id = $userId;

    // Set the schedule details
    $schedule->details = $request->input('schedule');

    // Handle file upload
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('upload/schedule'), $filename);
        $schedule->file_url = $filename;

        // Update the trainer's file column in the users table
        $trainer = Auth::user(); // Get the authenticated trainer
        $trainer->file = $filename; // Assuming 'file' is the column in the 'users' table
        $trainer->save();

        // Update the gym member's file column in the users table
        $member = User::find($userId);
        $member->file = $filename; // Assuming 'file' is the column in the 'users' table
        $member->save();
    }

    // Save the schedule
    $schedule->save();

    return redirect()->route('upload.view')->with('success', 'Schedule uploaded successfully.');
}

}

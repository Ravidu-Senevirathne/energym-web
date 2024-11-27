<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;


class NotificationController extends Controller
{

   public function fetchNotifications($user_id)
    {
        $notifications = Notification::where('user_id', $user_id)->get();

        return response()->json(['notifications' => $notifications]);
    }
}


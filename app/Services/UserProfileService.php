<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserProfileService
{
    /**
     * Update the profile picture for a user.
     *
     * @param User $user
     * @param Request $request
     * @return string The path of the uploaded profile picture.
     */
    public function updateProfilePicture(User $user, Request $request): string
    {
        // Validate the uploaded file
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Store the file and get the path
        $path = $request->file('profile_picture')->store('profile_pictures', 'public');

        // Update the user's profile picture path
        $user->profile_picture = $path;
        $user->save();

        return $path;
    }
}

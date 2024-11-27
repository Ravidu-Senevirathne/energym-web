
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\UploadSchedule;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckUserAuthentication;
use App\Http\Middleware\AuthenticateUser;
use App\Http\Controllers\Auth\AuthenticatedSessionController;



Route::get('/', function () {
    return view('index');
});

Route::get('/page', function () {
    return view('index');
});

Route::get('/reg', function () {
    return view('register');
});

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');

Route::get('/login', function () {
    return view('login');
});

Route::get('/membernotifications', function () {
    return view('member/membernotifications');
});
Route::get('/fatburnmembernotifications', function () {
    return view('member/fatburn-notification');
});
Route::get('/regularmembernotifications', function () {
    return view('member/regular-notification');
});
Route::get('/trainernotifications', function () {
    return view('Trainer/trainernotifications');
});
Route::get('/trainerpaysheet', function () {
    return view('Trainer/paysheet');
});


// Route to display the registration form
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');

// Route to handle the form submission
Route::post('/register', [RegistrationController::class, 'register'])->name('register.post');

// Route for successful registration (optional)
Route::get('/registration/success', function () {
    return 'Registration successful!';
})->name('registration.success');


Route::post('/login', [LoginController::class, 'login'])->name('login');




// API route to fetch user info
Route::get('/api/user-info', function () {
    return Auth::user();
})->middleware('auth');


Route::middleware(['auth', 'user'])->group(function () {
    // Routes that only authenticated users can access
    Route::get('/member', [UserController::class, 'MemberProfile'])->name('member.view');
    Route::get('/regularmember', [UserController::class, 'MemberProfile'])->name('regular.member.view');
    Route::get('/fatburnmember', [UserController::class, 'MemberProfile'])->name('fatburn.member.view');
    Route::get('user/memberprofile',[UserController::class,'MemberEditProfile'])->name('memberedit.profile');
    Route::post('store/memberprofile',[UserController::class,'MemberStoreProfile'])->name('memberstore.profile');
})->middleware('auth');


Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/trainer', [TrainerController::class, 'TrainerProfile'])->name('trainer.view')->middleware('auth');
    Route::get('user/Trainerprofile',[TrainerController::class,'TrainerEditProfile'])->name('traineredit.profile');
    Route::post('store/trainerprofile',[TrainerController::class,'TrainerStoreProfile'])->name('trainerstore.profile');
});

Route::get('/notifications/fetch/{user_id}', [NotificationController::class, 'fetchNotifications'])
    ->name('notifications.fetch');


Route::controller(UploadSchedule::class)->group(function(){
    Route::get('trainer/uploadSchedule','upload')->name('upload.view');
    Route::post('trainer/uploadSchedule','store')->name('upload.store');

});

Route::get('member/schedule', [UserController::class, 'schedule'])->name('member.schedule');

Route::get('member/profile', [UserController::class, 'classshowMemberProfile'])->name('member.profile');


Route::get('member/paysheets', [UserController::class, 'showPaysheets'])->name('member.paysheets');

Route::get('/member/weight', [UserController::class, 'showMemberWeight'])->name('member.weight');
Route::post('/member/weight/update', [UserController::class, 'updateWeight'])->name('updateWeight');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

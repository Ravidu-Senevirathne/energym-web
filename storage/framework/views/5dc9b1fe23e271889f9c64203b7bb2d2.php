
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Trainer Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/trainer.css')); ?>">
    <?php
    use Illuminate\Support\Facades\Auth;

    $id = Auth::user()->id;
    $editData = App\Models\User::find($id);
    ?>
</head>
<body>


    <header>
        <div class="container">
            <div class="logo">
                <a href="">Energym <span>Gymnasium</span></a>
            </div>

            <div class="user-dropdown">
                <div class="user-name" id="userName">
                    <img id="userDropdownImage" src="<?php echo e((!empty($editData->profile_picture))? url('upload/member_image/'.$editData->profile_picture):url('public\upload\member_image\User.png')); ?>" alt="" style="width: 55px; height: 55px; margin-right: 8px;">
                    Hello, <?php echo e($editData->username); ?>

                    <span class="arrow">▼</span> <!-- Down arrow here -->
                </div>
                <div class="dropdown-menu" id="dropdownMenu">
                    <a href="<?php echo e(route('traineredit.profile')); ?>">Preferences</a>
                    <a href="<?php echo e(url('/trainernotifications')); ?>" style="display: flex; align-items: center;">Notifications</a>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                      <?php echo csrf_field(); ?>
                      <a href="<?php echo e(url('/login')); ?>"><button type="submit" style="background:none; border: none; color: white; margin-bottom: 5%; height: 5px; align-content: center;align:center;margin-bottom: 20px;margin-right: 25px">
                    Log Out
                      </button></a>
                    </form>

                </div>
            </div>

            <a href="javascript:void(0)" class="ham-burger">
                <span></span>
                <span></span>
            </a>
        </div> <!-- Missing closing tag for .container -->
        <div class="nav">

            <ul>
               <li> <a href="<?php echo e(route('trainer.view')); ?>">
                    <img src="<?php echo e(asset('assets/images/GymDashboard.png')); ?>" alt="Dashboard icon" style="width: 24px; height: 24px; margin-right: 8px;">
                    Dashboard
                </a></li>
                <li>
                    <a href="<?php echo e(url('/trainerpaysheet')); ?>">
                        <svg width="24px" height="24px" viewBox="0 0 42 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 0L0 18.8679L0.333417 19.3617C1.25945 20.7376 3.0277 20.9749 4.22064 19.8836L21 4.5283L37.7794 19.8836C38.9723 20.9749 40.7406 20.7376 41.6666 19.3617L42 18.8679L35.9032 13.3903L35.9032 3.77358L29.8064 3.77358L29.8064 7.91274L21 0L21 0ZM21 7.54717L4.74194 21.8868L4.74194 40L37.2581 40L37.2581 24.1509L21 7.54717L21 7.54717ZM16.9355 23.3962L25.0645 23.3962L25.0645 36.9811L16.9355 36.9811L16.9355 23.3962L16.9355 23.3962Z" fill="#FFFFFF" fill-rule="evenodd" stroke="none" />
                        </svg>
                        PaySheets
                    </a>
                </li>

                <li><a href="<?php echo e(route('upload.view')); ?>">
                   <img src="<?php echo e(asset('assets/images/Uploadtrainer.png')); ?>" style="width: 24px; height: 24px; margin-right: 8px;">
                    Upload</a></li>


            </ul>
        </div>
    </div>
    </header>
         <section class="dashboard" id="dashboard">
    <div class="cc">
        <div class="dashboard-header">
            <h1>Gym Trainer Dashboard</h1>
        </div>

        <!-- User Information Section -->
        <div class="user-info">
            <div class="profile-picture">
                <img src="<?php echo e((!empty($editData->profile_picture))? url('upload/member_image/'.$editData->profile_picture):url('public\upload\member_image\User.png')); ?>" alt="Profile Picture">
            </div>

            <div class="profile-details">
                <h2 id="profileName">John Doe</h2>
                <p id="profileEmail">john.doe@example.com</p>
                <p id="height">height: </p>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="trainer">
      <a href="<?php echo e(route('traineredit.profile')); ?>"><button class="pref">Preferences</button></a>
      <a href="<?php echo e(route('upload.view')); ?>"><button class="schedule">Schedule Upload</button></a>
      <a href="<?php echo e(url('/trainerpaysheet')); ?>"><button class="paysheet">View Paysheets</button></a>
      <a href="<?php echo e(url('/trainernotifications')); ?>"><button class="notification">Notifications</button></a>
    </div>
</section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>

    $(document).ready(function() {
    // Handle hamburger menu click
    $('.ham-burger').on('click', function() {
        $('.nav').toggleClass('open');
        $('.ham-burger').toggleClass('active');

        // Toggle visibility of user dropdown
        $('.user-dropdown').toggle(!$('.nav').hasClass('open'));
    });

    // Handle user dropdown click
    $('#userName').on('click', function() {
        $('#dropdownMenu').toggle();
    });

    // Hide dropdown and nav menu when clicking outside
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.user-dropdown, .ham-burger').length) {
            $('#dropdownMenu').hide();
            $('.nav').removeClass('open');
            $('.ham-burger').removeClass('active');
            $('.user-dropdown').show();
        }
    });

    // Fetch and update user info
    fetchAndUpdateUserInfo();
});

function fetchAndUpdateUserInfo() {
    $.ajax({
        url: '/api/user-info',
        method: 'GET',
        success: function(response) {
            const profilePictureUrl = `${response.profile_picture}?v=${Date.now()}`;
            $('#profileName').text(response.name);
            $('#profileEmail').text(response.email);
            $('#height').text('height: ' + response.height+'cm');
        },
        error: function() {
            console.error('Failed to retrieve user info.');
        }
    });
}//End Function

function fetchAndUpdateUserInfo() {
    $.ajax({
        url: '/api/user-info',
        method: 'GET',
        success: function(response) {
            const profilePictureUrl = `${response.profile_picture}?v=${Date.now()}`;
            $('#profileName').text(response.name);
            $('#profileEmail').text(response.email);
            $('#profileMembership').text(`Membership: ${response.membership}`);
           $('#height').text('height: ' + response.height+'cm');
        },
        error: function() {
            console.error('Failed to retrieve user info.');
        }
    });
}//End function
$(document).ready(function() {
    $("#chatIcon").click(function() {
        $(this).hide();
        $("#chatBox").show();
    });

    $("#closeButton").click(function() {
        $("#chatIcon").show();
        $("#chatBox").hide();
    });
});
$(document).ready(function() {
    $('#chatInput').on('input', function() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight) + 'px';
    });
});

$(document).ready(function() {
    $('.pref, .schedule, .paysheet').hover(
        function() {
            $(this).animate({
                'padding': '12px 22px',
            }, 'fast');
        },
        function() {
            $(this).animate({
                'padding': '10px 20px',
            }, 'fast');
        }
    );
});
</script>
</body>
</html>
<?php /**PATH C:\Users\user\Downloads\laragym-master\final\energym-gymnasium\resources\views/Trainer/trainer.blade.php ENDPATH**/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Member Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/member.css')); ?>">
      <?php
    use Illuminate\Support\Facades\Auth;

    $id = Auth::user()->id;
    $editData = App\Models\User::find($id);
    $startWeight=Auth::user()->startWeight;
    $currentWeight=Auth::user()->currentWeight;
    $targetWeight=Auth::user()->targetWeight;
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
                    <a href="<?php echo e(route('memberedit.profile')); ?>">Preferences</a>
                        <a href="<?php echo e(route('member.weight')); ?>">Weight</a>
                    <a href="<?php echo e(url('/regularmembernotifications')); ?>" style="display: flex; align-items: center;">Notifications</a>
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
            <div class="nav">


              <ul>
                   <li> <a href="<?php echo e(route('member.view')); ?>">
                        <img src="<?php echo e(asset('assets/images/GymDashboard.png')); ?>" alt="Dashboard icon" style="width: 24px; height: 24px; margin-right: 8px;">
                        Dashboard
                    </a></li>


                    <li><a href="<?php echo e(route('member.schedule')); ?>">
                       <img src="<?php echo e(asset('assets/images/Schedule.png')); ?>" style="width: 24px; height: 24px; margin-right: 8px;">
                        Schedules</a></li>

                </ul>
            </div>
        </div>
   </header>

   <section class="dashboard" id="dashboard">
    <div class="cc">
        <div class="dashboard-header">
            <h1>Gym Member Dashboard</h1>
        </div>

        <!-- User Information Section -->
        <div class="user-info">
            <div class="profile-picture">
                <img src="<?php echo e((!empty($editData->profile_picture))? url('upload/member_image/'.$editData->profile_picture):url('public\upload\member_image\User.png')); ?>" alt="Profile Picture">
            </div>

            <div class="profile-details">
                <h2 id="profileName">John Doe</h2>
                <p id="profileEmail">john.doe@example.com</p>
                <p id="type">Membership Type: Unknown</p>
                <p id="height">height: </p>
            </div>
        </div>
    </div>


    <div class="chat" id="chat">
        <div class="chatIcon" id="chatIcon">
            <img src="<?php echo e(asset('assets/images/Chat Bubble.png')); ?>" alt="Chat Icon">
        </div>
        <div class="chatBox" id="chatBox">
            <div class="closeButton" id="closeButton">X</div>
            <div class="chatContent">
                     <form method="POST" action="<?php echo e(route('send.email')); ?>">
                    <?php echo csrf_field(); ?>

                    <input type="text" name="name" id="name" required placeholder="Name">
                    <input type="email" name="email" id="email" required placeholder="Email">
                    <input type="tel" name="mobile" id="mobile" required placeholder="Mobile No.">
                    <textarea name="message" id="message" required placeholder="Message"></textarea>
                 <button type="submit">   <img src="<?php echo e(asset('assets/images/Email Send.png')); ?>" style="width: 20px; height: 20px; margin-right: 3px; margin-bottom: 10px" alt="" srcset="">Send Message</button>

                </div>
            </div>
        </div>
    </div>
   </section>

   <section>
    <div class="bodybuilder">
        <div class="left-section">
            <h3>Start Weight: <?php echo e($startWeight); ?>KG</h3>
            <br>
        </div>
        <div class="center-section">
            <h1 class="moti">
                <?php
                $difference = $targetWeight - $currentWeight;
                ?>
               YOU ARE HEALTHY <br>
                <span style="color: #c11325">KEEP GOIN!</span>
            </h1>

        </div>

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

    // Create workout chart




});

function fetchAndUpdateUserInfo() {
    $.ajax({
        url: '/api/user-info',
        method: 'GET',
        success: function(response) {
            const profilePictureUrl = `${response.profile_picture}?v=${Date.now()}`;
            $('#profileName').text(response.name);
            $('#profileEmail').text(response.email);
            $('#type').text('Membership Type: ' + response.memberRequirement); // Use response.memberRequirement
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
            $('#type').text('Membership Type: ' + response.memberRequirement); // Use response.memberRequirement
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
</script>
</body>
</html>


<?php /**PATH C:\Users\user\Downloads\laragym-master\final\energym-gymnasium\resources\views/member/regular-member.blade.php ENDPATH**/ ?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        width: 60%;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input,
    select {
        display: block;
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #4caf50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: block;
        width: 100%;
    }

    button:hover {
        background-color: #45a049;
    }
</style>
</head>

<body>
    <div class="container">
        <h1>Preferences</h1>

        <form method="POST" action="{{ route('memberstore.profile') }}" enctype="multipart/form-data">
            @csrf
            <!-- Field for changing name -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $editData->name }}" required>
            </div>

            <!-- Field for changing Email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="{{ $editData->email }}" required>
            </div>

            <!-- Fields for changing password -->
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least 8 characters, including at least one number, one lowercase, and one uppercase letter" >
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm New Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" >
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <!--Fields for changing profile picture-->
                <input type="file" name="profile_picture" id="image" >
                <img style="width: 120px; " class="rounded avatar-lg" src="{{ (!empty($editData->profile_picture))? url('upload/member_image/'.$editData->profile_picture):url('public/upload/member_image/User.png') }}" alt="" srcset="" id="showImage">

            <!-- Submit button -->
            <input type="submit" class="btn btn-danger" value="Update Profile">
        </form>


        <!-- Link to return to the dashboard -->
        <a href="{{ route('fatburn.member.view') }}">Back to Dashboard</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
      $('#image').change(function(e) {
         var reader = new FileReader();
            reader.onload = function(e) {
                   $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        $(document).ready(function() {
            $("form").submit(function(event) {
                var password = $("#password").val();
                var confirmPassword = $("#confirmPassword").val();

                if (password !== confirmPassword) {
                    alert("Passwords do not match.");
                    event.preventDefault();
                }
            });
        });

</script>
</body>
</html>

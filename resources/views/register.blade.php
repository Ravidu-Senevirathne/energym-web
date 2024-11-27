<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Energym Registration</title>
    <link rel="stylesheet" href="{{ asset('assets/css/reg.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/gymlogo.jpeg') }}">
</head>
<body>
    <img src="{{ asset('assets/images/background.jpeg') }}" alt="background" class="background">

    <div class="container">
        <form action="{{ route('register.post') }}" method="post" class="reg">
            @csrf
            <h1>Have you an account already? <a href="{{ url('/login') }}" class="logintext">Log in</a></h1>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required placeholder="Enter Name">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required placeholder="Enter Email">

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required placeholder="Enter Username">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required placeholder="Enter Password">

            <label for="role">Select Role:</label>
            <select name="role" id="role" required>
                <option value="gym_member">Gym Member</option>
                <option value="trainer">Trainer</option>
            </select><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob" placeholder="DO MM YYYY" required><br>



            <input type="checkbox" name="accept_terms" id="accept_terms" required>
            <label for="accept_terms">I have read and accept the conditions posted on the website <a href="{{ url('/page') }}">Energym Gymnasium</a></label>

            <p>By submitting this form, you confirm the relevance of all provided personal data and agree to their processing in order to use all the functions of the User Account.</p>

            <button type="submit" name="submit" value="submit" class="transparent-button">Submit</button>
        </form>
    </div>
</body>
</html>

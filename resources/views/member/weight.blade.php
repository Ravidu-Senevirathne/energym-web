<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Weight</title>
    <style>
        body {
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Ensure container is centered vertically */
        }

        .container {
            background-color: #1a1a1a; /* Background color of the container */
            color: white;
            padding: 20px;
            border: 2px solid #c11325; /* Border color */
            border-radius: 10px; /* Rounded corners */
            max-width: 400px; /* Max width of the container */
            width: 100%; /* Take full width of the parent */
        }

        .container h1 {
            text-align: center;
        }

        .container form {
            margin-top: 20px;
        }

        .container form label {
            display: block;
            margin-bottom: 5px;
        }

        .container form input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; 
        }

        .container form button {
            background-color: #c11325;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: 100%;
            margin-top: 10px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #c11325;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Member Weight</h1>
        <div>
            <h3>Start Weight: {{ $startWeight }}</h3>
            <h3>Current Weight: {{$currentWeight}}</h3>
            <h3>Target Weight: {{ $targetWeight }}</h3>
        </div>
        <div>
            <h3>Update Current Weight</h3>
            <form method="POST" action="{{ route('updateWeight') }}">
                @csrf
                <label for="currentWeight">Current Weight:</label>
                <input type="number" id="currentWeight" name="currentWeight" value="{{ $currentWeight }}" required>
                <button type="submit">Update Weight</button>
            </form>
        </div>
        <a href="{{ route('member.view') }}" style="color: white"><h3>Go Back To Dashboard</h3></a>
    </div>

</body>
</html>

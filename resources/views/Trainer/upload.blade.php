<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Schedule Upload</title>
    <link rel="stylesheet" href="{{ asset('assets/css/upload.css') }}">

</head>
<body>
<div class="container">
    <h1>Upload Gym Schedule</h1>

    <form action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="member">Select Gym Member:</label>
     <select id="member" name="member">
    <option value="">Select a member...</option>
        @foreach($members as $member)
        @if($member->role === 'gym_member')
            <option value="{{ $member->id }}">{{ $member->name }}</option>
        @endif
    @endforeach

</select>

        <label for="schedule">Schedule Details:</label>
        <textarea id="schedule" name="schedule" placeholder="Enter schedule details..." required></textarea>

         <label for="file">Upload File:</label>
        <input type="file" id="file" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx" required>

        <button type="submit">Upload Schedule</button>
    </form>

    <a href="{{ route('trainer.view') }}">Back To Dashboard</a>
</div>



</body>
</html>

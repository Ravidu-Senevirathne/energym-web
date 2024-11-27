<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Member Schedule</title>
    <link rel="stylesheet" href="{{ asset('assets/css/schedule.css') }}">
</head>
<body>

    @php
        use Illuminate\Support\Facades\Auth;
        $id = Auth::user()->id;
        $editData = App\Models\User::find($id);
    @endphp

    <div class="container">

        <h2 class="heading">Uploaded Schedules</h2>





@foreach($schedules as $schedule)
    <div class="schedule-card">
        <h3 class="schedule-title">{{ $schedule->details }}</h3>
        <a href="{{ asset('upload/schedule/' . $schedule->file_url) }}" class="btn" download>Download Schedule</a>
    </div>
@endforeach

<a href="{{ route('member.view') }}" style="color: white; text-decoration: none">Go Back To Dashboard</a>

    <script>
          $(document).ready(function() {
        // Function to fetch schedules from the backend
        function fetchSchedules() {
            $.ajax({
                url: "{{ route('member.schedule') }}", // Endpoint to fetch schedules
                method: "GET",
                success: function(response) {
                    if (Array.isArray(response)) {
                        displaySchedules(response); // Pass the fetched schedules to the display function
                    } else {
                        console.error("Invalid response format:", response);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching schedules:", error);
                }
            });
        }

    </script>
</body>
</html>

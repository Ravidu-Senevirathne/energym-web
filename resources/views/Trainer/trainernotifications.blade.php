<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat & Updates Notification Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/notifications.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: black; position: fixed; top: 0; width: 100%;">
        <a href="{{ route('trainer.view')}}"><img style="width: 40px" src="{{ asset('assets/images/Left.png') }}" alt="" srcset=""></a>
        <div class="container">

            <div class="logo">
                <a href="">Energym <span>Gymnasium</span></a>
            </div>
            <div class="mx-auto" m-lg-2 >
                <a class="navbar-brand" href="{{ url('/trainernotifications') }}">Chat & Updates</a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Chat & Updates
                </div>
                <div class="card-body" id="notificationsContainer">
                    <!-- Notifications will be displayed here -->
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
  $(document).ready(function() {
            fetchNotifications();
            setInterval(fetchNotifications, 5000);
        });

        function fetchNotifications() {
            $.ajax({
                url: '{{ route("notifications.fetch", ["user_id" => Auth::id()]) }}',
                type: 'GET',
                success: function(response) {
                    var notificationsHTML = '';
                    response.notifications.forEach(function(notification) {
                        notificationsHTML += '<div class="alert alert-info" role="alert">';
                        notificationsHTML += notification.message;
                        notificationsHTML += '</div>';
                    });
                    $('#notificationsContainer').html(notificationsHTML);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
    </script>
</body>
</html>

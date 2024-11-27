<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Paysheets</title>
    <link rel="stylesheet" href="{{ asset('assets/css/paysheets.css') }}"> <!-- Add your CSS file -->
</head>
<body>

    <div class="container">

        <h2 class="heading">Trainer's Uploaded Paysheets</h2>

        @php
            use Illuminate\Support\Facades\Auth;
            $id = Auth::user()->id;
            $editData = App\Models\User::find($id);
            $paysheets = $editData->paySheets;
            $paysheetArray = explode(',', $paysheets); // Convert the string of paysheets to an array
        @endphp

        @foreach ($paysheetArray as $paysheet)
            <div class="paysheet-card">
                <h3 class="paysheet-title">{{ $paysheet }}</h3>
                <a href="{{ asset('upload/paysheets/' . $paysheet) }}" class="btn" download>Download Paysheet</a>
            </div>
        @endforeach

        <a href="{{ route('trainer.view') }}">Go Back To Dashboard</a>

    </div>

</body>
</html>

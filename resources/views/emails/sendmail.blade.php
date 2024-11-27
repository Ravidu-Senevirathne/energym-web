
@component('mail::message')
<img src="{{asset('assets/images/gymlogo.jpeg')}}" alt="" style="width: 50px">

<h1><b> Gymnasium FeedBacks</b></h1>
<img src="{{asset('assets/images/gymlogo.jpeg')}}" alt="" style="width: 50px">
<p>Name: {{ $formData['name'] }}</p><br>
<p>Email: {{ $formData['email'] }}</p><br>
<p>Mobile: {{ $formData['mobile'] }}</p><br>
<p>Message: {{ $formData['message'] }}</p><br>

@if(isset($formData['subject']))
    <p>Subject: {{ $formData['subject'] }}</p>
@endif

Thanks,<br>
<p>Energym Gymnasium</p>
@endcomponent



<html>
<head></head>
<body style="background: black; color: white">
{!! csrf_field() !!}

<h1>{{$title}}</h1>
<p>{{$content}}</p>
<a class="row" href = 'http://localhost/tutor_project/verifyuser/{{$verification_code}}'>Click here</a>
<br>
</body>
</html>
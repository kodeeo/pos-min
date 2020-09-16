<html lang="en">
<body>
<div>
    <p>Dear {{$user->name}},</p>
    <p>Your account has been created. Please click the following link to active your account.</p>
    <a href="{{route('verify',$user->email_verification_token)}}" class="btn btn-primary">Click Here</a>
    <br>
    <p>Thanks!</p>
</div>
</body>
</html>
